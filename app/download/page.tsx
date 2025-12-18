'use client';

import Image from 'next/image';
import { FaGooglePlay, FaAppStore, FaChrome, FaDownload } from 'react-icons/fa';

export default function DownloadPage() {
  const downloads = [
    {
      title: 'โปรแกรม KIOSK (Android)',
      description: 'หน้าจอสำหรับพนักงาน หรือ หน้าจอสำหรับลูกค้าสั่งอาหารเอง',
      icon: '/images/png/free.png',
      links: [
        {
          name: 'Google Play',
          url: 'https://play.google.com/store/apps/details?id=com.smlsoft.dedekiosk',
          icon: <FaGooglePlay className="text-3xl" />,
          color: 'from-green-500 to-green-600',
        },
        {
          name: 'App Store',
          url: '/wait',
          icon: <FaAppStore className="text-3xl" />,
          color: 'from-blue-500 to-blue-600',
          soon: true,
        },
      ],
    },
    {
      title: 'โปรแกรม Merchant Lite (Android)',
      description:
        'โปรแกรมสำหรับเจ้าของร้านใช้บนมือถือ ในการกำหนดค่าต่างๆ เช่น ชื่อบริษัท สินค้า หมวดสินค้า ราคา โปรโมชั่น และอื่นๆ รวมไปถึงรายงานต่างๆ',
      icon: '/images/merchant.webp',
      links: [
        {
          name: 'Google Play',
          url: 'https://play.google.com/store/apps/details?id=com.smlsoft.cocomerchantlite',
          icon: <FaGooglePlay className="text-3xl" />,
          color: 'from-green-500 to-green-600',
        },
        {
          name: 'App Store',
          url: '/wait',
          icon: <FaAppStore className="text-3xl" />,
          color: 'from-blue-500 to-blue-600',
          soon: true,
        },
      ],
    },
    {
      title: 'โปรแกรม Merchant (Browser)',
      description:
        'โปรแกรมสำหรับเจ้าของร้านเต็มรูปแบบ ในการกำหนดค่าต่างๆ เช่น ชื่อบริษัท สินค้า หมวดสินค้า ราคา โปรโมชั่น และอื่นๆ รวมไปถึงรายงานต่างๆ',
      icon: '/images/merchant.webp',
      links: [
        {
          name: 'เปิดใช้งาน Web App',
          url: 'https://dedemerchant.web.app/',
          icon: <FaChrome className="text-3xl" />,
          color: 'from-isaan-400 to-isaan-500',
        },
      ],
    },
    {
      title: 'ดาวน์โหลดโปรแกรม',
      description:
        'โปรแกรมที่ไม่มี App ใน Google Play หรือ App Store สามารถดาวน์โหลดได้จากลิงค์นี้ (Android App, Windows App)',
      icon: '/images/png/hardware.png',
      links: [
        {
          name: 'Google Drive',
          url: 'https://drive.google.com/drive/folders/1clNxnVydeqtG1ZhnT5jjgr99m1g3oLuF?usp=sharing',
          icon: <FaDownload className="text-3xl" />,
          color: 'from-earthen-500 to-earthen-600',
        },
      ],
    },
  ];

  return (
    <div className="container-thai py-16 animate-fade-in">
      <div className="text-center mb-12">
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          ดาวน์โหลด
        </h1>
        <p className="text-xl text-gray-600">
          เลือกดาวน์โหลดโปรแกรมสำหรับอุปกรณ์ของคุณ
        </p>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full mt-4"></div>
      </div>

      <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
        {downloads.map((item, index) => (
          <div
            key={index}
            className="card-pottery p-6 md:p-8 transform hover:-translate-y-2 transition-all duration-300"
          >
            <div className="flex items-start space-x-4 mb-6">
              <div className="relative w-20 h-20 flex-shrink-0 rounded-xl overflow-hidden shadow-pottery">
                <Image
                  src={item.icon}
                  alt={item.title}
                  fill
                  className="object-cover"
                />
              </div>
              <div className="flex-grow">
                <h2 className="text-2xl font-bold font-mitr text-earthen-700 mb-2">
                  {item.title}
                </h2>
                <p className="text-gray-600 leading-relaxed">{item.description}</p>
              </div>
            </div>

            <div className="flex flex-wrap gap-4">
              {item.links.map((link, linkIndex) => (
                <a
                  key={linkIndex}
                  href={link.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className={`flex-1 min-w-[180px] bg-gradient-to-r ${link.color} text-white px-6 py-4 rounded-lg font-semibold font-mitr shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center space-x-2 ${
                    link.soon ? 'opacity-50 cursor-not-allowed' : ''
                  }`}
                  {...(link.soon ? { onClick: (e) => e.preventDefault() } : {})}
                >
                  {link.icon}
                  <span>{link.name}</span>
                  {link.soon && (
                    <span className="text-xs bg-white/20 px-2 py-1 rounded">
                      เร็วๆ นี้
                    </span>
                  )}
                </a>
              ))}
            </div>
          </div>
        ))}
      </div>

      {/* Platform Support */}
      <section className="mt-16 bg-gradient-to-br from-earthen-50 to-white rounded-2xl p-8 md:p-12">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          รองรับทุกแพลตฟอร์ม
        </h2>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-3">
              <Image
                src="/images/logo-apple-app-store.webp"
                alt="iOS"
                fill
                className="object-contain"
              />
            </div>
            <p className="font-semibold text-gray-700">iOS / iPadOS</p>
          </div>
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-3">
              <Image
                src="/images/logo-google-play-store.webp"
                alt="Android"
                fill
                className="object-contain"
              />
            </div>
            <p className="font-semibold text-gray-700">Android</p>
          </div>
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-3">
              <Image
                src="/images/logo-windows.webp"
                alt="Windows"
                fill
                className="object-contain"
              />
            </div>
            <p className="font-semibold text-gray-700">Windows</p>
          </div>
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-3">
              <Image
                src="/images/logo-ubuntu.webp"
                alt="Linux"
                fill
                className="object-contain"
              />
            </div>
            <p className="font-semibold text-gray-700">Linux / Ubuntu</p>
          </div>
        </div>
      </section>

      {/* Help Section */}
      <section className="mt-12 text-center">
        <div className="card-feature max-w-2xl mx-auto p-8">
          <h3 className="text-2xl font-bold font-mitr text-earthen-700 mb-4">
            ต้องการความช่วยเหลือ?
          </h3>
          <p className="text-gray-600 mb-6">
            ติดต่อทีมงานของเราเพื่อขอคำแนะนำในการติดตั้งและใช้งาน
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0899223131" className="btn-secondary">
              📞 089-922-3131
            </a>
            <a
              href="https://line.me/ti/p/%40smlsoft"
              target="_blank"
              rel="noopener noreferrer"
              className="btn-primary"
            >
              💬 Line: @smlsoft
            </a>
          </div>
        </div>
      </section>
    </div>
  );
}
