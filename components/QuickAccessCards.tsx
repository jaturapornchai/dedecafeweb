'use client';

import Image from 'next/image';
import Link from 'next/link';

export default function QuickAccessCards() {
  const cards = [
    {
      title: 'ร้านอาหาร\nขนาดเล็ก ใช้ฟรี',
      image: '/images/png/free.png',
      href: '/free-kiosk',
      color: 'from-green-500 to-green-600',
    },
    {
      title: 'ร้านอาหาร\nขนาดใหญ่ ใช้ฟรี',
      image: '/images/staff-system.webp',
      href: '/free-restaurant',
      color: 'from-blue-500 to-blue-600',
    },
    {
      title: 'แนะนำอุปกรณ์',
      image: '/images/png/hardware.png',
      href: '/hardware',
      color: 'from-isaan-500 to-isaan-600',
    },
  ];

  return (
    <section className="container-thai py-12">
      <div className="text-center mb-8">
        <p className="text-lg text-gray-700 leading-relaxed">
          ปรับตัวเพื่อการแข่งขัน เพื่อให้เป็นร้านอาหารอัตโนมัติ ลดต้นทุน เพิ่มรายได้
          ด้วยระบบร้านอาหารครบวงจร ร้านขนาดเล็ก, ขนาดใหญ่, หลายสาขา
          รองรับ iPhone, iPad, Android, Tablet, Windows
          สามารถนำอุปกรณ์เก่ามาใช้ได้ทันที
        </p>
      </div>

      <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
        {cards.map((card, index) => (
          <Link
            key={index}
            href={card.href}
            className="group card-pottery overflow-hidden transform hover:-translate-y-2 transition-all duration-300"
          >
            <div className="relative h-64 overflow-hidden">
              <Image
                src={card.image}
                alt={card.title}
                fill
                className="object-cover group-hover:scale-110 transition-transform duration-500"
              />
              <div className={`absolute inset-0 bg-gradient-to-t ${card.color} opacity-0 group-hover:opacity-90 transition-opacity duration-300`}></div>
            </div>
            <div className={`relative bg-gradient-to-r ${card.color} p-6`}>
              <h3 className="text-2xl font-bold font-mitr text-white text-center whitespace-pre-line">
                {card.title}
              </h3>
            </div>
          </Link>
        ))}
      </div>
    </section>
  );
}
