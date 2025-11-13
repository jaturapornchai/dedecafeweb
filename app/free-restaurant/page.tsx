'use client';

import Image from 'next/image';
import { FaCheckCircle, FaUsers, FaUtensils, FaChartLine } from 'react-icons/fa';

export default function FreeRestaurantPage() {
  const features = [
    {
      title: 'ระบบ Cashier',
      description: 'รับชำระเงิน จัดการโต๊ะ กะทำงาน ออกใบเสร็จ',
      icon: <FaChartLine className="text-4xl text-isaan-500" />,
    },
    {
      title: 'ระบบ Staff',
      description: 'พนักงานบริการ เปิดโต๊ะ สั่งอาหาร รับชำระเงินที่โต๊ะ',
      icon: <FaUsers className="text-4xl text-isaan-500" />,
    },
    {
      title: 'ระบบ KDS',
      description: 'Kitchen Display System สำหรับห้องครัว พร้อมระบบเตือน',
      icon: <FaUtensils className="text-4xl text-isaan-500" />,
    },
  ];

  const capabilities = [
    {
      title: 'กินก่อนจ่าย',
      items: [
        'เปิดโต๊ะ - ลูกค้านั่งโต๊ะได้ทันที พร้อมสั่งอาหารผ่านพนักงานหรือ Self Order',
        'สั่งอาหาร - สั่งผ่านพนักงาน หรือลูกค้าสั่งเองด้วยมือถือ',
        'ย้ายโต๊ะ - ย้ายโต๊ะได้ทันทีเมื่อลูกค้าต้องการ',
        'แยกโต๊ะ - แยกโต๊ะเพื่อแยกสั่งอาหารและแยกคิดเงิน',
        'รวมโต๊ะ - รวมโต๊ะเพื่อคิดเงินรวมกัน',
        'ชำระเงิน - รับชำระเงินสด Prompt Pay หรือชำระที่แคชเชียร์',
      ],
    },
    {
      title: 'ระบบลูกค้าสั่งเอง (Self Ordering)',
      items: [
        'สั่งอาหารด้วย QR Code - ลูกค้า Scan QR Code สั่งอาหารด้วยมือถือตัวเอง',
        'ติดตามสถานะ - ลูกค้าสามารถดูว่าอาหารเสริฟหรือยัง',
        'สรุปยอดใช้บริการ - ดูยอดใช้บริการได้ทันที',
        'เรียกพนักงาน - เรียกพนักงานผ่านมือถือได้',
      ],
    },
    {
      title: 'ระบบห้องครัว (KDS)',
      items: [
        'แสดงคิวรายการ - แสดงคิวประกอบอาหารพร้อมรายละเอียด',
        'พูดชื่ออาหาร - ระบบพูดชื่ออาหาร จำนวน และรายละเอียด',
        'เตือนอาหารช้า - มีระบบเตือนเมื่ออาหารช้าเกินกำหนด',
        'พิมพ์ใบติดจาน - พิมพ์ใบติดจานเพื่อนำเสริฟท์ได้',
      ],
    },
  ];

  const benefits = [
    'รองรับร้านขนาดเล็ก ขนาดกลาง และขนาดใหญ่',
    'ใช้ได้กับ iOS, Android, Windows, Ubuntu',
    'รองรับโต๊ะสูงสุด 20 โต๊ะ (แพ็คเกจฟรี)',
    'เครื่องพิมพ์ครัวสูงสุด 4 เครื่อง',
    'KDS สูงสุด 8 เครื่อง',
    'Staff สูงสุด 4 เครื่อง',
    'ระบบ Merchant สำหรับจัดการหลังบ้าน',
    'ระบบ Owner สำหรับเจ้าของร้าน',
    'Kbank Prompt Pay ไม่มีค่าธรรมเนียม',
    'บิลขายสูงสุด 10,000 บิล/เดือน',
  ];

  return (
    <div className="container-thai py-16 animate-fade-in">
      {/* Hero Section */}
      <div className="text-center mb-12">
        <div className="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-2 rounded-full font-bold mb-4">
          ใช้ฟรี สำหรับร้านขนาดใหญ่
        </div>
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          ระบบร้านอาหารครบวงจร
        </h1>
        <p className="text-xl text-gray-600 max-w-3xl mx-auto">
          จัดการร้านอาหารแบบมืออาชีพ ตั้งแต่รับ Order จนถึงชำระเงิน
        </p>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full mt-4"></div>
      </div>

      {/* Features Grid */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          ระบบหลักที่ได้ใช้งาน
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          {features.map((feature, index) => (
            <div key={index} className="card-pottery p-8 text-center hover:-translate-y-2 transition-all">
              <div className="mb-4 flex justify-center">{feature.icon}</div>
              <h3 className="text-xl font-bold font-mitr text-earthen-700 mb-3">
                {feature.title}
              </h3>
              <p className="text-gray-600">{feature.description}</p>
            </div>
          ))}
        </div>
      </section>

      {/* Capabilities Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8">
          ความสามารถของระบบ
        </h2>
        <div className="space-y-8">
          {capabilities.map((section, index) => (
            <div key={index} className="card-feature">
              <h3 className="text-2xl font-bold font-mitr text-earthen-700 mb-4">
                {section.title}
              </h3>
              <ul className="grid grid-cols-1 md:grid-cols-2 gap-3">
                {section.items.map((item, itemIndex) => (
                  <li key={itemIndex} className="flex items-start space-x-2">
                    <FaCheckCircle className="text-green-500 mt-1 flex-shrink-0" />
                    <span className="text-gray-700">{item}</span>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </section>

      {/* Benefits Section */}
      <section className="mb-16 bg-gradient-to-br from-earthen-50 to-white rounded-2xl p-8">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          คุณสมบัติแพ็คเกจฟรี
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
          {benefits.map((benefit, index) => (
            <div key={index} className="flex items-start space-x-3">
              <FaCheckCircle className="text-green-500 mt-1 flex-shrink-0" size={20} />
              <span className="text-gray-700 font-medium">{benefit}</span>
            </div>
          ))}
        </div>
      </section>

      {/* Image Section */}
      <section className="mb-16">
        <div className="card-pottery overflow-hidden">
          <div className="relative h-96">
            <Image
              src="/images/solao.jpg"
              alt="ร้านอาหารขนาดใหญ่"
              fill
              className="object-cover"
            />
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="bg-gradient-to-r from-isaan-400 to-isaan-500 rounded-2xl p-12 text-center text-white">
        <h2 className="text-3xl md:text-4xl font-bold font-mitr mb-4">
          เริ่มใช้งานฟรีวันนี้
        </h2>
        <p className="text-xl mb-8 opacity-90">
          ไม่มีค่าใช้จ่าย ไม่ต้องผูกบัตร สำหรับร้านอาหารทุกขนาด
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
          <a href="/price" className="btn-outline border-white text-white hover:bg-white hover:text-isaan-600">
            ดูแพ็คเกจทั้งหมด
          </a>
        </div>
      </section>
    </div>
  );
}
