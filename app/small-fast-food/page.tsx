'use client';

import Image from 'next/image';
import { FaCheckCircle, FaMobileAlt, FaPrint, FaQrcode } from 'react-icons/fa';

export default function SmallFastFoodPage() {
  const features = [
    {
      icon: <FaMobileAlt className="text-5xl text-isaan-500" />,
      title: 'สั่งอาหารด้วยมือถือ',
      description: 'ลูกค้า Scan QR Code สั่งอาหารด้วยมือถือตัวเอง สะดวก รวดเร็ว ไม่ต้องรอพนักงาน',
    },
    {
      icon: <FaQrcode className="text-5xl text-isaan-500" />,
      title: 'ชำระเงิน Prompt Pay',
      description: 'รับชำระเงินผ่าน QR Code อัตโนมัติ ไม่ต้องถ่ายรูป Slip เงินเข้าทันที',
    },
    {
      icon: <FaPrint className="text-5xl text-isaan-500" />,
      title: 'พิมพ์ใบเสร็จอัตโนมัติ',
      description: 'เมื่อได้รับเงินแล้ว ระบบพิมพ์ใบเสร็จและส่ง Order เข้าครัวอัตโนมัติ',
    },
  ];

  const benefits = [
    'เหมาะกับร้านขนาดเล็ก ร้าน Fast Food ร้านกาแฟ',
    'ไม่ต้องจ้างพนักงานเพิ่ม ประหยัดค่าแรง',
    'ลูกค้าสั่งได้เอง ไม่ต้องรอคิว',
    'ไม่มีปัญหาสั่งอาหารผิด',
    'เงินเข้าทันที ไม่ต้องตรวจสอบ Slip',
    'มีรายงานยอดขายแบบ Real-time',
    'ใช้ได้กับอุปกรณ์ที่มีอยู่แล้ว',
    'ไม่ต้องลงทุนซื้ออุปกรณ์ราคาแพง',
  ];

  const howItWorks = [
    {
      step: '1',
      title: 'ลูกค้า Scan QR Code',
      description: 'ลูกค้าเข้ามาที่ร้าน Scan QR Code ที่โต๊ะหรือ ณ จุดสั่งอาหาร',
    },
    {
      step: '2',
      title: 'เลือกสินค้าและสั่ง',
      description: 'เลือกสินค้าที่ต้องการ ปรับแต่งรายละเอียด (เช่น ไม่เผ็ด น้ำตาลน้อย)',
    },
    {
      step: '3',
      title: 'ชำระเงิน',
      description: 'ชำระเงินด้วย Prompt Pay QR Code หรือเงินสด กับพนักงาน',
    },
    {
      step: '4',
      title: 'รอรับอาหาร',
      description: 'Order ส่งเข้าครัวทันที ระบบเรียกคิวเมื่ออาหารพร้อม',
    },
  ];

  return (
    <div className="container-thai py-16 animate-fade-in">
      {/* Hero Section */}
      <div className="text-center mb-12">
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          ระบบร้านอาหารขนาดเล็ก
        </h1>
        <p className="text-xl text-gray-600 max-w-3xl mx-auto">
          เหมาะสำหรับ ร้าน Fast Food, ร้านกาแฟ, Food Truck, ร้านเล็กทั่วไป
        </p>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full mt-4"></div>
      </div>

      {/* Hero Image */}
      <section className="mb-16">
        <div className="card-pottery overflow-hidden">
          <div className="relative h-96">
            <Image
              src="/images/cook.webp"
              alt="ร้านอาหารขนาดเล็ก"
              fill
              className="object-cover"
            />
          </div>
        </div>
      </section>

      {/* Features Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          ฟีเจอร์หลัก
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {features.map((feature, index) => (
            <div key={index} className="card-pottery p-8 text-center">
              <div className="flex justify-center mb-4">{feature.icon}</div>
              <h3 className="text-xl font-bold font-mitr text-earthen-700 mb-3">
                {feature.title}
              </h3>
              <p className="text-gray-600 leading-relaxed">{feature.description}</p>
            </div>
          ))}
        </div>
      </section>

      {/* How It Works Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          วิธีการใช้งาน
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {howItWorks.map((item, index) => (
            <div key={index} className="relative">
              <div className="card-feature text-center">
                <div className="w-16 h-16 bg-gradient-to-r from-isaan-400 to-isaan-500 text-white rounded-full flex items-center justify-center text-2xl font-bold font-mitr mx-auto mb-4">
                  {item.step}
                </div>
                <h3 className="text-lg font-bold font-mitr text-earthen-700 mb-2">
                  {item.title}
                </h3>
                <p className="text-gray-600 text-sm">{item.description}</p>
              </div>
              {index < howItWorks.length - 1 && (
                <div className="hidden lg:block absolute top-1/2 -right-3 transform -translate-y-1/2 text-3xl text-isaan-300">
                  →
                </div>
              )}
            </div>
          ))}
        </div>
      </section>

      {/* Benefits Section */}
      <section className="mb-16 bg-gradient-to-br from-earthen-50 to-white rounded-2xl p-8">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          ทำไมต้องใช้ระบบนี้?
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

      {/* Suitable For Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          เหมาะกับร้านอะไรบ้าง?
        </h2>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
          {[
            { name: 'ร้านกาแฟ', emoji: '☕' },
            { name: 'Fast Food', emoji: '🍔' },
            { name: 'Food Truck', emoji: '🚚' },
            { name: 'ร้านก๋วยเตี๋ยว', emoji: '🍜' },
            { name: 'ร้านเครื่องดื่ม', emoji: '🧋' },
            { name: 'ร้านขนม', emoji: '🧁' },
            { name: 'ร้านอาหารตามสั่ง', emoji: '🍳' },
            { name: 'ศูนย์อาหาร', emoji: '🍱' },
          ].map((type, index) => (
            <div key={index} className="card-pottery p-6 text-center">
              <div className="text-4xl mb-2">{type.emoji}</div>
              <p className="font-semibold text-earthen-700">{type.name}</p>
            </div>
          ))}
        </div>
      </section>

      {/* CTA Section */}
      <section className="bg-gradient-to-r from-isaan-400 to-isaan-500 rounded-2xl p-12 text-center text-white">
        <h2 className="text-3xl md:text-4xl font-bold font-mitr mb-4">
          เริ่มใช้งานฟรีวันนี้
        </h2>
        <p className="text-xl mb-8 opacity-90">
          ไม่มีค่าใช้จ่าย ไม่ต้องผูกบัตร ทดลองใช้ได้ทันที
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
          <a href="/free-kiosk" className="btn-outline border-white text-white hover:bg-white hover:text-isaan-600">
            ดูระบบ Kiosk
          </a>
        </div>
      </section>
    </div>
  );
}
