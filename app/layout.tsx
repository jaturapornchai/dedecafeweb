import type { Metadata } from 'next';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import '@/styles/globals.css';

export const metadata: Metadata = {
  metadataBase: new URL('https://www.dedecafe.com'),
  title: 'ฟรี โปรแกรมร้านอาหาร, POS | DeDe POS',
  description:
    'ใช้ฟรี โปรแกรมร้านอาหารที่ทันสมัย ใช้สำหรับสั่งอาหารด้วยมือถือได้ง่าย ไม่ว่าจะเป็นการสั่งอาหารเอง, กินก่อนจ่าย, จ่ายก่อนกิน หรือบุฟเฟต์ รองรับทั้ง android, ios, windows และ ubuntu',
  keywords:
    'โปรแกรมร้านอาหาร, สั่งอาหารด้วยมือถือ, กินก่อนจ่าย, จ่ายก่อนกิน, บุฟเฟต์, android, ios, windows, ubuntu, ipad, ฟรี, POS, ระบบร้านอาหาร',
  authors: [{ name: 'Ban Chiang Soft' }],
  openGraph: {
    images: [
      {
        url: '/images/png/free.png',
        width: 1200,
        height: 630,
        alt: 'DeDe POS - ระบบร้านอาหารครบวงจร',
      },
    ],
  },
  icons: {
    icon: '/images/png/free.png',
  },
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="th">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
      </head>
      <body className="min-h-screen flex flex-col">
        <Header />
        <main className="flex-grow pt-20">
          {children}
        </main>
        <Footer />
      </body>
    </html>
  );
}
