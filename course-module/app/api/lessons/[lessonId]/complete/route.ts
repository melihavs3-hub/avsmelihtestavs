import { NextResponse } from 'next/server';
import { prisma } from '@/lib/prisma';

export async function POST(
  request: Request,
  { params }: { params: { lessonId: string } }
) {
  try {
    const { userId } = await request.json();
    const lessonId = params.lessonId;

    if (!userId || !lessonId) {
      return NextResponse.json({ error: 'Missing userId or lessonId' }, { status: 400 });
    }

    const progress = await prisma.lessonProgress.upsert({
      where: {
        userId_lessonId: {
          userId,
          lessonId,
        },
      },
      update: {
        isCompleted: true,
      },
      create: {
        userId,
        lessonId,
        isCompleted: true,
      },
    });

    return NextResponse.json({ success: true, progress });
  } catch (error) {
    console.error('Error completing lesson:', error);
    return NextResponse.json({ error: 'Internal Server Error' }, { status: 500 });
  }
}
