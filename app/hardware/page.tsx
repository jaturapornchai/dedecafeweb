'use client';

import Image from 'next/image';
import { FaCheckCircle } from 'react-icons/fa';

export default function HardwarePage() {
  const requirements = [
    'กรณียังไม่มั่นใจ ให้รออนุมัติระบบการชำระเงินด้วย QRCode จากธนาคารก่อน (ไม่มีค่าธรรมเนียม)',
    'ต้องใช้ Internet 100% เพราะต้องเชื่อมระหว่างร้านกับลูกค้า และเชื่อมระบบรับชำระเงิน',
    'IPAD Gen9 ใช้ได้',
    'Tablet Android Version 7.1 อย่างน้อย',
    'ถ้าต้องการจอใหญ่ สามารถสั่งเองได้จากประเทศจีน หรือหาจอใหญ่ในไทยก็ได้',
  ];

  const equipment = [
    {
      title: 'จอสำหรับพนักงาน',
      description:
        'ใช้สำหรับรับเงินสด และจัดการต่างๆ เช่น สินค้าหมด สินค้าหยุดขายชั่วคราว และอื่นๆ สามารถใช้ Tablet Android ทั่วไป หรือ IPAD หรือ โทรศัพท์ (จอจะเล็ก)',
    },
    {
      title: 'จอสำหรับให้ลูกค้ากดสั่งอาหาร',
      description:
        'สามารถเลือกได้หลายแบบ เริ่มต้น แนะนำให้ใช้ Tablet เก่าที่มีอยู่ทดลองก่อน แล้วค่อยพิจารณาซื้อจอใหญ่ สามารถใช้ได้ไม่จำกัด',
      link: {
        text: 'TouchWo (สั่งจากจีน)',
        url: 'https://www.lazada.co.th/products/i4270512767-s19985795672.html',
      },
    },
    {
      title: 'เครื่องพิมพ์',
      description:
        'เลือกได้หลายแบบ ทั้งแบบ USB, LAN ถ้าดีที่สุดคือระบบ LAN แต่ต้องเดินสาย LAN จำนวนขึ้นอยู่กับจำนวนเครื่องสั่งอาหาร เครื่องพนักงาน ครัวร้อน ครัวเย็น ฯลฯ',
      link: {
        text: 'Thermal Printer (Lazada)',
        url: 'https://www.lazada.co.th/tag/xprinter/',
      },
    },
    {
      title: 'ลิ้นชักเก็บเงิน',
      description: 'ให้เลือกแบบต่อจากเครื่องพิมพ์ Thermal',
    },
  ];

  return (
    <div className="container-thai py-16 animate-fade-in">
      {/* Header */}
      <div className="text-center mb-12">
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          อุปกรณ์ที่ใช้ได้กับระบบ KIOSK
        </h1>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full"></div>
      </div>

      {/* Requirements Section */}
      <section className="mb-12">
        <div className="card-pottery p-8">
          <h2 className="text-2xl font-bold font-mitr text-earthen-700 mb-6">
            ข้อควรรู้ก่อนเริ่มใช้งาน
          </h2>
          <ul className="space-y-4">
            {requirements.map((item, index) => (
              <li key={index} className="flex items-start space-x-3">
                <FaCheckCircle className="text-green-500 mt-1 flex-shrink-0" size={20} />
                <span className="text-gray-700 leading-relaxed">{item}</span>
              </li>
            ))}
          </ul>
        </div>
      </section>

      {/* Equipment Section */}
      <section className="mb-12">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8">
          อุปกรณ์ที่จำเป็นสำหรับระบบ Kiosk
        </h2>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {equipment.map((item, index) => (
            <div key={index} className="card-feature">
              <h3 className="text-xl font-bold font-mitr text-earthen-700 mb-3">
                {item.title}
              </h3>
              <p className="text-gray-700 leading-relaxed mb-4">{item.description}</p>
              {item.link && (
                <a
                  href={item.link.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="inline-block text-isaan-500 hover:text-isaan-600 font-semibold transition-colors"
                >
                  → {item.link.text}
                </a>
              )}
            </div>
          ))}
        </div>
      </section>

      {/* Platform Icons */}
      <section className="bg-gradient-to-br from-earthen-50 to-white rounded-2xl p-8 md:p-12">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          รองรับทุกแพลตฟอร์ม
        </h2>
        <div className="flex justify-center items-center space-x-6 flex-wrap gap-4">
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-2">
              <Image
                src="/images/logo-apple-app-store.webp"
                alt="iOS"
                fill
                className="object-contain"
              />
            </div>
            <p className="text-sm font-semibold text-gray-700">iOS / iPadOS</p>
          </div>
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-2">
              <Image
                src="/images/logo-google-play-store.webp"
                alt="Android"
                fill
                className="object-contain"
              />
            </div>
            <p className="text-sm font-semibold text-gray-700">Android</p>
          </div>
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-2">
              <Image
                src="/images/logo-windows.webp"
                alt="Windows"
                fill
                className="object-contain"
              />
            </div>
            <p className="text-sm font-semibold text-gray-700">Windows</p>
          </div>
          <div className="text-center">
            <div className="relative w-16 h-16 mx-auto mb-2">
              <Image
                src="/images/logo-ubuntu.webp"
                alt="Linux"
                fill
                className="object-contain"
              />
            </div>
            <p className="text-sm font-semibold text-gray-700">Linux / Ubuntu</p>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="mt-12 text-center">
        <div className="card-pottery p-8 bg-gradient-to-r from-isaan-400 to-isaan-500">
          <h3 className="text-2xl md:text-3xl font-bold font-mitr text-white mb-4">
            พร้อมเริ่มต้นใช้งานแล้วหรือยัง?
          </h3>
          <p className="text-white text-lg mb-6 opacity-90">
            สอบถามรายละเอียดเพิ่มเติมหรือขอคำแนะนำการเลือกอุปกรณ์
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:0899223131" className="btn-secondary">
              📞 โทรปรึกษา 089-922-3131
            </a>
            <a
              href="https://line.me/ti/p/%40smlsoft"
              target="_blank"
              rel="noopener noreferrer"
              className="inline-block px-8 py-3 bg-white text-isaan-600 font-bold font-mitr rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300"
            >
              💬 Line: @smlsoft
            </a>
          </div>
        </div>
      </section>
    </div>
  );
}
