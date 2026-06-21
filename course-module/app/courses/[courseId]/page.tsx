import { notFound } from 'next/navigation';
import { prisma } from '@/lib/prisma';
import CoursePlayer from '@/components/CoursePlayer';

interface PageProps {
  params: {
    courseId: string;
  };
}

export default async function CoursePage({ params }: PageProps) {
  const { courseId } = params;

  // Fetch course with its lessons ordered
  const course = await prisma.course.findUnique({
    where: { id: courseId },
    include: {
      lessons: {
        orderBy: { order: 'asc' },
      },
    },
  });

  if (!course) {
    notFound();
  }

  // Note: In a real app, you would get the user ID from an auth session.
  // For this demo, we'll use a mocked user ID.
  const userId = 'mock-user-id';

  // Fetch the user's progress for this course
  const progresses = await prisma.lessonProgress.findMany({
    where: {
      userId,
      lessonId: { in: course.lessons.map(l => l.id) },
    },
  });

  // Create a map or array of completed lesson IDs
  const completedLessonIds = progresses
    .filter(p => p.isCompleted)
    .map(p => p.lessonId);

  return (
    <div className="container mx-auto py-8">
      <h1 className="text-3xl font-bold mb-6">{course.title}</h1>
      <p className="text-gray-600 mb-8">{course.description}</p>

      <CoursePlayer
        course={course}
        initialCompletedLessons={completedLessonIds}
        userId={userId}
      />
    </div>
  );
}
