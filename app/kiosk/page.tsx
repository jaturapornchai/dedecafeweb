'use client';

import Image from 'next/image';
import Link from 'next/link';

export default function KioskPage() {
  const kioskTypes = [
    {
      title: 'Kiosk Fast Food',
      image: '/images/kiosk-fast-food.webp',
      description: 'เหมาะกับร้าน Fast Food ที่ต้องการความรวดเร็ว ลดการรอคิว',
      href: '/kiosk-fast-food',
      features: ['สั่งอาหารรวดเร็ว', 'จ่ายเงินก่อน', 'ระบบคิว', 'แจ้งเตือนเมื่อพร้อม'],
    },
    {
      title: 'Kiosk Food Truck',
      image: '/images/kiosk-food-truck.webp',
      description: 'สำหรับรถขายอาหาร Food Truck พร้อมระบบรับ Order และชำระเงิน',
      href: '/kiosk-food-truck',
      features: ['รับ Order ที่โต๊ะ', 'ชำระด้วย QR Code', 'ปรับแต่งเมนู', 'จัดการคิว'],
    },
    {
      title: 'Kiosk Restaurant',
      image: '/images/kiosk-restaurant.webp',
      description: 'ระบบ Kiosk สำหรับร้านอาหาร ครบครัน มีหลายฟีเจอร์',
      href: '/kiosk-restaurant',
      features: ['Self Order', 'Staff Order', 'KDS', 'รายงานครบถ้วน'],
    },
  ];

  return (
    <div className="container-thai py-16 animate-fade-in">
      {/* Hero Section */}
      <div className="text-center mb-12">
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          ระบบ Kiosk สำหรับร้านอาหาร
        </h1>
        <p className="text-xl text-gray-600 max-w-3xl mx-auto">
          เลือกระบบ Kiosk ที่เหมาะกับรูปแบบร้านของคุณ
        </p>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full mt-4"></div>
      </div>

      {/* Kiosk Types Grid */}
      <section className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        {kioskTypes.map((kiosk, index) => (
          <Link
            key={index}
            href={kiosk.href}
            className="card-pottery overflow-hidden group hover:-translate-y-2 transition-all duration-300"
          >
            <div className="relative h-64 overflow-hidden">
              <Image
                src={kiosk.image}
                alt={kiosk.title}
                fill
                className="object-cover group-hover:scale-110 transition-transform duration-500"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <h2 className="absolute bottom-4 left-4 right-4 text-2xl font-bold font-mitr text-white">
                {kiosk.title}
              </h2>
            </div>
            <div className="p-6">
              <p className="text-gray-700 mb-4">{kiosk.description}</p>
              <ul className="space-y-2">
                {kiosk.features.map((feature, featureIndex) => (
                  <li key={featureIndex} className="flex items-center text-sm text-gray-600">
                    <span className="text-green-500 mr-2">✓</span>
                    {feature}
                  </li>
                ))}
              </ul>
              <div className="mt-4 text-isaan-500 font-semibold group-hover:text-isaan-600">
                เรียนรู้เพิ่มเติม →
              </div>
            </div>
          </Link>
        ))}
      </section>

      {/* What is Kiosk Section */}
      <section className="mb-16 bg-gradient-to-br from-earthen-50 to-white rounded-2xl p-8 md:p-12">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-6">
          ระบบ Kiosk คืออะไร?
        </h2>
        <div className="prose prose-lg max-w-none">
          <p className="text-gray-700 leading-relaxed mb-4">
            ระบบ Kiosk เป็นระบบสั่งอาหารอัตโนมัติที่ช่วยให้ลูกค้าสามารถสั่งอาหารและชำระเงินได้ด้วยตนเอง
            ผ่านหน้าจอสัมผัสหรือมือถือของตัวเอง ช่วยลดต้นทุนพนักงาน เพิ่มความเร็วในการให้บริการ
            และลดความผิดพลาดในการรับ Order
          </p>
          <p className="text-gray-700 leading-relaxed">
            ระบบของเรารองรับทุกรูปแบบร้านอาหาร ตั้งแต่ร้านเล็ก Fast Food, Food Truck
            ไปจนถึงร้านอาหารขนาดใหญ่ พร้อมฟีเจอร์ครบครัน เช่น ระบบชำระเงิน QR Code
            ระบบคิว KDS และรายงานการขายแบบ Real-time
          </p>
        </div>
      </section>

      {/* Benefits Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          ประโยชน์ของระบบ Kiosk
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {[
            {
              icon: '💰',
              title: 'ลดต้นทุน',
              description: 'ลดพนักงานรับ Order และ Cashier',
            },
            {
              icon: '⚡',
              title: 'เพิ่มความเร็ว',
              description: 'ลูกค้าสั่งได้เลย ไม่ต้องรอพนักงาน',
            },
            {
              icon: '📈',
              title: 'เพิ่มยอดขาย',
              description: 'ลูกค้าสั่งได้มากขึ้น เพราะไม่รีบ',
            },
            {
              icon: '✅',
              title: 'ลดข้อผิดพลาด',
              description: 'ไม่มีการสื่อสารผิดพลาด',
            },
          ].map((benefit, index) => (
            <div key={index} className="card-feature text-center">
              <div className="text-5xl mb-4">{benefit.icon}</div>
              <h3 className="text-xl font-bold font-mitr text-earthen-700 mb-2">
                {benefit.title}
              </h3>
              <p className="text-gray-600">{benefit.description}</p>
            </div>
          ))}
        </div>
      </section>

      {/* CTA Section */}
      <section className="bg-gradient-to-r from-isaan-400 to-isaan-500 rounded-2xl p-12 text-center text-white">
        <h2 className="text-3xl md:text-4xl font-bold font-mitr mb-4">
          พร้อมเริ่มต้นใช้ระบบ Kiosk?
        </h2>
        <p className="text-xl mb-8 opacity-90">
          ทดลองใช้ฟรี ไม่มีค่าใช้จ่าย เหมาะกับทุกรูปแบบร้าน
        </p>
        <div className="flex flex-col sm:flex-row gap-4 justify-center">
          <a
            href="https://dedemerchant.web.app/"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-block px-8 py-4 bg-white text-isaan-600 font-bold font-mitr rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300"
          >
            สมัครใช้งานฟรี
          </a>
          <a href="/hardware" className="btn-outline border-white text-white hover:bg-white hover:text-isaan-600">
            ดูอุปกรณ์ที่แนะนำ
          </a>
        </div>
      </section>
    </div>
  );
}
