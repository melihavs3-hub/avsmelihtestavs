'use client';

import { useState } from 'react';
import type { Course, Lesson } from '@prisma/client';

type CourseWithLessons = Course & {
  lessons: Lesson[];
};

interface CoursePlayerProps {
  course: CourseWithLessons;
  initialCompletedLessons: string[];
  userId: string;
}

export default function CoursePlayer({ course, initialCompletedLessons, userId }: CoursePlayerProps) {
  const [completedLessons, setCompletedLessons] = useState<Set<string>>(new Set(initialCompletedLessons));
  const [activeLessonId, setActiveLessonId] = useState<string>(
    course.lessons.length > 0 ? course.lessons[0].id : ''
  );

  const activeLesson = course.lessons.find((l) => l.id === activeLessonId);

  const handleLessonEnded = async (lessonId: string) => {
    // If already completed, skip
    if (completedLessons.has(lessonId)) return;

    try {
      const response = await fetch(`/api/lessons/${lessonId}/complete`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ userId }),
      });

      if (response.ok) {
        setCompletedLessons((prev) => {
          const newSet = new Set(prev);
          newSet.add(lessonId);
          return newSet;
        });
      } else {
        console.error('Failed to mark lesson as completed');
      }
    } catch (error) {
      console.error('Error in request:', error);
    }
  };

  return (
    <div className="flex flex-col md:flex-row gap-6">
      {/* Video Player Section */}
      <div className="md:w-2/3 bg-black rounded-lg overflow-hidden aspect-video relative">
        {activeLesson ? (
          <video
            key={activeLesson.id}
            src={activeLesson.videoUrl}
            controls
            className="w-full h-full"
            onEnded={() => handleLessonEnded(activeLesson.id)}
            controlsList="nodownload"
          />
        ) : (
          <div className="flex items-center justify-center w-full h-full text-white">
            No lessons available for this course.
          </div>
        )}
      </div>

      {/* Lesson List Sidebar */}
      <div className="md:w-1/3 bg-white border rounded-lg shadow-sm">
        <h2 className="text-xl font-bold p-4 border-b">Lessons</h2>
        <ul className="divide-y max-h-[500px] overflow-y-auto">
          {course.lessons.map((lesson) => {
            const isCompleted = completedLessons.has(lesson.id);
            const isActive = activeLessonId === lesson.id;

            return (
              <li key={lesson.id}>
                <button
                  onClick={() => setActiveLessonId(lesson.id)}
                  className={`w-full text-left p-4 hover:bg-gray-50 flex items-center justify-between transition-colors
                    ${isActive ? 'bg-blue-50 border-l-4 border-blue-500' : ''}
                  `}
                >
                  <div className="flex items-center gap-3">
                    <span className={`w-6 h-6 rounded-full flex items-center justify-center text-xs
                      ${isCompleted ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-600'}
                    `}>
                      {isCompleted ? '✓' : lesson.order}
                    </span>
                    <span className={`font-medium ${isActive ? 'text-blue-700' : 'text-gray-800'}`}>
                      {lesson.title}
                    </span>
                  </div>
                </button>
              </li>
            );
          })}
        </ul>
      </div>
    </div>
  );
}
