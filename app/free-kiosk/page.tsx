'use client';

import Image from 'next/image';
import { FaCheckCircle } from 'react-icons/fa';

export default function FreeKioskPage() {
  const benefits = [
    {
      title: 'ลดต้นทุนพนักงาน',
      description:
        'KIOSK เหมาะกับร้านอาหารประเภทจ่ายก่อนกิน เพื่อลดจำนวนพนักงานรับ Order พนักงาน Cashier หมดปัญหาเรื่องสั่งอาหารผิด ไม่ต้องถ่ายรูป SLIP เพราะเงินเข้าทันที (ร้านกาแฟ, ร้าน Cafe, ศูนย์อาหาร, ร้าน Fast Food)',
      icon: '💰',
    },
    {
      title: 'เพิ่มยอดขาย',
      description:
        'ลูกค้าสามารถเลือกสินค้าได้นานขึ้นด้วยมือถือ หรือเครื่อง KIOSK ทำให้การสั่งต่อ Order มากขึ้น และยอดขายเพิ่มขึ้น',
      icon: '📈',
    },
    {
      title: 'ลดการลงทุนอุปกรณ์',
      description:
        'ใช้ได้กับทุกอุปกรณ์ Android Tablet, Android Phone, iPad, iPhone, Windows, Linux เอาเครื่องเก่าที่ไม่ได้ใช้มาใช้ใหม่ได้',
      icon: '🔧',
    },
  ];

  const suitableFor = [
    {
      title: 'กินก่อนจ่าย',
      description:
        'ลูกค้าสั่งอาหารจากมือถือของลูกค้า หรือสั่งผ่านพนักงานของร้าน และเมื่อมีการเรียกเช็คบิล ระบบรวมใบสั่งแต่ละครั้ง มาสรุปเป็นบิลเดียว และจ่ายเงินที่โต๊ะ หรือจ่ายเงินที่จุดจ่ายเงิน หลังจากกินเสร็จ เช่น ร้านก๋วยเตี๋ยว ร้านอาหารทั่วไป',
    },
    {
      title: 'จ่ายก่อนกิน',
      description:
        'ร้านที่เป็นระบบจ่ายก่อนกินทั้งหมด เหมือนร้านอาหารในประเทศญี่ปุ่นนิยมใช้ ที่เราต้องไปกดเลือกอาหาร และจ่ายเงินก่อน ถึงจะได้คิว และเข้าไปในร้าน',
    },
    {
      title: 'ร้านกาแฟ',
      description:
        'ลูกค้าสามารถสั่งกดเอง และชำระเงินเอง สามารถเลือกความเข้มข้นได้ ใส่น้ำตาล ใส่นม ฯลฯ หลังจากชำระเงิน มีระบบคิวรอเรียกได้เลย',
    },
    {
      title: 'Food Truck',
      description:
        'ลูกค้าสามารถสั่งกดเอง และชำระเงินเอง สามารถเลือกความต้องการเพิ่มเติมได้ เผ็ดมาก เผ็ดน้อย ไม่หวาน ฯลฯ และป้อนหมายเหตุได้ด้วย หลังจากชำระเงิน มีระบบคิวรอเรียกได้เลย',
    },
    {
      title: 'ลูกค้าสั่งเองที่โต๊ะ',
      description:
        'ลูกค้าสามารถสั่งกดเอง และชำระเงินเอง ที่โต๊ะได้ด้วยมือถือตัวเอง หลังจากชำระเงิน บิลทั้งหมดจะวิ่งไปที่ครัว หรือบาร์ได้ทันที',
    },
    {
      title: 'รับ Order ที่โต๊ะ',
      description:
        'เจ้าของร้านสามารถถือเครื่องไปรับ Order ที่โต๊ะก็ได้ และให้ลูกค้า Scan จ่ายเงิน หรือเป็นเงินสด หลังจากชำระเงิน บิลทั้งหมดจะวิ่งไปที่ครัว หรือบาร์ได้ทันที',
    },
    {
      title: 'ระบบ KIOSK สามารถใช้แบบผสมได้',
      description:
        'ทั้งให้ลูกค้าสั่งเองที่เครื่อง สั่งด้วยมือถือของลูกค้าเอง หรือสั่งผ่านเจ้าของร้าน หรือพนักงาน',
    },
  ];

  const features = [
    'รวมข้อมูล - สามารถดูข้อมูลทุกเครื่อง ทุกสาขารวมกันได้ โดยไม่ต้อง Login ใหม่',
    'หน้าร้านจัดการเอง - สินค้าหยุดขายชั่วคราว สินค้าหมด หรือสินค้ามีจำนวน เช่น ขายได้แค่ 10 ชิ้น ระบบจะหยุดขายให้เอง',
    'e-Menu - รายการอาหารเครื่องดื่ม สามารถเพิ่ม ลบ แก้ไข ย้ายหมวด ได้ตลอดเวลา',
    'จัดการ Order ง่าย - สินค้าหยุดขายชั่วคราว สินค้าเลิกขาย สินค้าหมด ผู้จัดการ หรือครัว กดได้เอง',
    'สะดวก - ลูกค้าสั่งอาหารเอง ด้วยเครื่อง KIOSK และชำระเงินก่อน ระบบถึงจะส่ง Order เข้าครัว',
    'สบาย - ลูกค้าสั่งอาหารเอง ด้วยมือถือของลูกค้าเอง ชำระเงินด้วยมือถือของลูกค้าเอง ระบบถึงจะส่ง Order เข้าครัว',
    'พนักงานไปรับ Order ลูกค้าได้ - ในกรณีที่ลูกค้าต้องการสั่งกับพนักงาน',
  ];

  return (
    <div className="container-thai py-16 animate-fade-in">
      {/* Hero Section */}
      <div className="text-center mb-12">
        <div className="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-2 rounded-full font-bold mb-4">
          ใช้ฟรี ไม่มีค่าใช้จ่าย
        </div>
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          ระบบ KIOSK ร้านอาหาร
        </h1>
        <p className="text-xl text-gray-600 max-w-3xl mx-auto">
          ลดต้นทุน เพิ่มยอดขาย ด้วยระบบสั่งอาหารอัตโนมัติ
        </p>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full mt-4"></div>
      </div>

      {/* Benefits Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8 text-center">
          ร้านจะได้อะไรจากการใช้ KIOSK
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          {benefits.map((benefit, index) => (
            <div key={index} className="card-pottery p-6 text-center">
              <div className="text-5xl mb-4">{benefit.icon}</div>
              <h3 className="text-xl font-bold font-mitr text-earthen-700 mb-3">
                {benefit.title}
              </h3>
              <p className="text-gray-600 leading-relaxed">{benefit.description}</p>
            </div>
          ))}
        </div>
      </section>

      {/* Suitable For Section */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8">
          เหมาะกับร้านแบบไหนบ้าง
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {suitableFor.map((item, index) => (
            <div key={index} className="card-feature">
              <h3 className="text-xl font-bold font-mitr text-earthen-700 mb-3">
                {item.title}
              </h3>
              <p className="text-gray-600 leading-relaxed">{item.description}</p>
            </div>
          ))}
        </div>
      </section>

      {/* Features Section */}
      <section className="mb-16 bg-gradient-to-br from-earthen-50 to-white rounded-2xl p-8">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-8">
          ความสามารถของระบบ Kiosk
        </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
          {features.map((feature, index) => (
            <div key={index} className="flex items-start space-x-3">
              <FaCheckCircle className="text-green-500 mt-1 flex-shrink-0" size={20} />
              <span className="text-gray-700">{feature}</span>
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
          <a href="/download" className="btn-outline border-white text-white hover:bg-white hover:text-isaan-600">
            ดาวน์โหลดแอป
          </a>
        </div>
      </section>
    </div>
  );
}
