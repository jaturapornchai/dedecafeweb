'use client';

import Image from 'next/image';

interface DetailSection {
  id: string;
  title: string;
  image: string;
  content: {
    intro?: string;
    items: { title: string; description: string }[];
  };
}

const detailSections: DetailSection[] = [
  {
    id: 'eat-and-pay',
    title: 'ระบบร้านกินก่อนจ่าย',
    image: '/images/eat-and-pay.webp',
    content: {
      items: [
        {
          title: 'เปิดโต๊ะ',
          description:
            'เมื่อลูกค้าเข้ามาที่ร้าน และเลือกโต๊ะได้แล้ว พนักงานจะเปิดโต๊ะให้ลูกค้านั่งได้ทันที พร้อมกับสั่งอาหารได้ทันที หรือลูกค้าสามารถสั่งอาหารเองได้ด้วยตัวเอง ผ่านระบบ Self Order (QR Code) ที่เราจัดให้',
        },
        {
          title: 'สั่งอาหาร',
          description: 'ลูกค้าสามารถเรียกพนักงาน เพื่อสั่งอาหาร หรือลูกค้าสามารถสั่งอาหารเองได้ด้วยตัวเอง',
        },
        {
          title: 'ย้ายโต๊ะ',
          description: 'กรณีลูกค้าต้องการย้ายโต๊ะ เพื่อความเหมาะสม สามารถแจ้งพนักงานทำการย้ายโต๊ะได้ทันที',
        },
        {
          title: 'แยกโต๊ะ',
          description:
            'กรณีลูกค้ามาด้วยกัน แต่ต้องการแยกโต๊ะ เพื่อแยกสั่งอาหาร และแยกคิดเงิน สามารถแจ้งพนักงานให้แยกโต๊ะได้ทันที',
        },
        {
          title: 'รวมโต๊ะ',
          description: 'กรณีลูกค้าต้องการรวมโต๊ะ เพื่อคิดเงินรวมกัน สามารถแจ้งพนักงานให้รวมโต๊ะได้ทันที',
        },
        {
          title: 'แยกชำระเงิน',
          description:
            'กรณีต้องการแยกชำระเงิน เช่น นักท่องเที่ยวต่างชาติ สามารถแจ้งพนักงานให้ทำรายการแยกชำระเงินได้',
        },
        {
          title: 'ชำระเงิน',
          description:
            'สามารถแจ้งพนักงานเพื่อชำระเงิน สามารถชำระเงินสด หรือชำระด้วย Prompt Pay ได้ทันที หรือจะมาชำระที่เครื่องแคชเชียร์ก็ได้',
        },
      ],
    },
  },
  {
    id: 'pay-and-eat',
    title: 'ระบบร้านจ่ายก่อนกิน',
    image: '/images/pay-and-eat.webp',
    content: {
      items: [
        {
          title: 'ระบบสั่งอาหารล่วงหน้า',
          description:
            'ลูกค้าสามารถ Scan QR Code เพื่อเลือกสินค้า และเครื่องดื่มล่วงหน้า แล้วระบบจะสร้าง QR Code เพื่อให้เจ้าของร้าน สามารถ Scan ได้จากมือถือลูกค้า และเมื่อรับเงินจากลูกค้าแล้ว รายการที่ลูกค้าเลือกทั้งหมดก็จะเข้าระบบร้านอาหาร และสั่งพิมพ์ไปครัว และระบบ KDS แบบทันที พร้อมระบบคิวในใบเสร็จ',
        },
        {
          title: 'ระบบชำระเงิน',
          description:
            'เจ้าของร้านสามารถรับ Order จากลูกค้า และสามารถชำระเงินได้ทันที โดยสามารถชำระเงินได้ทั้งสด หรือชำระด้วย Prompt Pay ได้ทันที หลังจากชำระเงินแล้ว ระบบจะส่งเข้าครัว และระบบ KDS ทันที พร้อมระบบคิวในใบเสร็จ',
        },
        {
          title: 'ระบบเรียกคิว',
          description: 'เมื่อประกอบอาหารเสร็จแล้ว ระบบจะเรียกคิว มารับอาหารหรือเครื่องดื่มโดยอัตโนมัติ',
        },
      ],
    },
  },
  {
    id: 'buffet',
    title: 'ระบบร้านบุฟเฟต์',
    image: '/images/buffet.webp',
    content: {
      items: [
        {
          title: 'เลือกน้ำซุปได้เมื่อเปิดโต๊ะ',
          description:
            'เลือกน้ำซุป เช่น ซุปกระดูก และซุปหมาล่า ระบบจะแจ้งไปทางครัวเพื่อให้เตรียมรายการได้ล่วงหน้า',
        },
        {
          title: 'ระบบสั่งอาหารด้วยมือถือ',
          description:
            'ลูกค้าสามารถ Scan QR Code เพื่อเลือกสินค้า และเครื่องดื่ม พร้อมส่งเข้าระบบครัว และระบบ KDS ได้ทันที ทำให้การนำส่งอาหาร และเครื่องดื่มเป็นไปอย่างรวดเร็ว',
        },
        {
          title: 'จัดการเมนู',
          description:
            'ระบบจัดการเมนู เช่น บุฟเฟต์หมู, บุฟเฟต์เนื้อ, บุฟเฟต์ทะเล ซึ่งจะเปลี่ยนแปลงไปตามเงื่อนไขที่ลูกค้าเลือก',
        },
        {
          title: 'นับเวลาถอยหลัง',
          description:
            'มีระบบนับเวลาในการใช้บริการ สามารถแจ้งเตือนเมื่อใกล้หมดเวลา เพื่อแจ้งเตือนลูกค้าได้',
        },
      ],
    },
  },
  {
    id: 'dede-pos',
    title: 'DeDe POS (Cashier)',
    image: '/images/cashier.webp',
    content: {
      items: [
        {
          title: 'ใช้ได้หลาย Platform',
          description:
            'ใช้ได้ทั้งระบบ iOS, Android, Windows, Ubuntu ถ้าเป็นร้านเล็กแนะนำ Android, iOS ถ้าเป็นร้านขนาดใหญ่ แนะนำ Windows, Ubuntu',
        },
        {
          title: 'โปรโมชั่น',
          description: 'ลด, แถม สามารถกำหนดสูตรโปรโมชั่นได้หลายแบบ',
        },
        {
          title: 'รับชำระเงินได้หลายแบบ',
          description:
            'Prompt Pay พร้อมจำนวนเงิน เพื่อลดความผิดพลาด, รับชำระเงินสด, เงินโอน, คูปอง, บัตรเครดิต, Alipay, WeChat',
        },
        {
          title: 'ระบบกะทำงาน',
          description: 'เปิดกะ, ปิดกะ, เติมเงิน, นำเงินออก',
        },
      ],
    },
  },
  {
    id: 'dede-merchant',
    title: 'DeDe Merchant',
    image: '/images/merchant.webp',
    content: {
      intro:
        'ระบบจัดการหลังบ้าน กำหนดรายละเอียดกิจการ รูปแบบกิจการ รายละเอียดสินค้า รูปภาพสินค้า จัดกลุ่มสินค้า ราคาสินค้า เงื่อนไขสินค้า สูตรการตัดสต๊อกของสินค้า รายละเอียดโปรโมชั่น รายละเอียดพนักงาน รายละเอียดลูกค้า รายละเอียดโต๊ะ รายละเอียดครัว และรายละเอียดอื่นๆ ที่เกี่ยวข้องกับการจัดการร้านอาหาร เพื่อให้พนักงานเก็บเงิน พนักงานบริการ ทำงานได้อย่างรวดเร็ว มีประสิทธิภาพ ไม่ผิดพลาด พร้อมทั้งมีระบบงานบัญชี ไม่ว่าจะเป็นการซื้อสินค้า การรับสินค้า การผลิตสินค้า เจ้าหนี้ ลูกหนี้ เงินสด ธนาคาร รายงานต่างๆ ที่เกี่ยวข้องกับการบริหารจัดการร้านอาหาร',
      items: [],
    },
  },
];

export default function DetailSections() {
  return (
    <>
      {detailSections.map((section, index) => (
        <section
          key={section.id}
          id={section.id}
          className={`${
            index % 2 === 0 ? 'bg-white' : 'bg-gradient-to-br from-earthen-50 to-white'
          } py-16`}
        >
          <div className="container-thai">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
              {/* Image */}
              <div className="order-2 lg:order-1">
                <div className="relative h-64 md:h-80 lg:h-96 rounded-2xl overflow-hidden shadow-pottery">
                  <Image
                    src={section.image}
                    alt={section.title}
                    fill
                    className="object-cover"
                  />
                </div>
              </div>

              {/* Content */}
              <div className="order-1 lg:order-2 space-y-6">
                <h2 className="text-3xl md:text-4xl font-bold font-mitr text-earthen-700">
                  {section.title}
                </h2>

                {section.content.intro && (
                  <p className="text-gray-700 leading-relaxed">{section.content.intro}</p>
                )}

                {section.content.items.length > 0 && (
                  <ul className="space-y-4">
                    {section.content.items.map((item, itemIndex) => (
                      <li key={itemIndex} className="card-feature">
                        <h3 className="text-lg font-bold font-mitr text-earthen-700 mb-2">
                          {item.title}
                        </h3>
                        <p className="text-gray-600 leading-relaxed">{item.description}</p>
                      </li>
                    ))}
                  </ul>
                )}
              </div>
            </div>
          </div>
          {index < detailSections.length - 1 && <div className="section-divider"></div>}
        </section>
      ))}
    </>
  );
}
