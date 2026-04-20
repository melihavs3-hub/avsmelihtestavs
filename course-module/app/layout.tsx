import './globals.css'
import type { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Course Module',
  description: 'Course Module built with Next.js and Prisma',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body>{children}</body>
    </html>
  )
}
