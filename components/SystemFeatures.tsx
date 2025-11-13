'use client';

import Image from 'next/image';

export default function SystemFeatures() {
  const systems = [
    {
      id: 'dede-pos',
      title: 'ระบบ Cashier',
      subtitle: 'ดูแลเงินสด',
      image: '/images/cashier.webp',
      platforms: ['apple', 'android', 'windows', 'linux'],
    },
    {
      id: 'dede-merchant',
      title: 'ระบบ Merchant',
      subtitle: 'จัดการหลังบ้าน',
      image: '/images/merchant.webp',
      platforms: ['apple', 'android', 'windows', 'chrome', 'safari'],
    },
    {
      id: 'dede-customer-display',
      title: 'Customer Display',
      subtitle: 'หน้าจอฝั่งลูกค้า',
      image: '/images/customer-display.webp',
      platforms: ['apple', 'android'],
    },
    {
      id: 'dede-staff',
      title: 'ระบบ Staff',
      subtitle: 'สำหรับพนักงานบริการ',
      image: '/images/staff-system.webp',
      platforms: ['apple', 'android'],
    },
    {
      id: 'dede-kds',
      title: 'ระบบห้องครัว (KDS)',
      subtitle: 'สำหรับพ่อครัว',
      image: '/images/kds-system.webp',
      platforms: ['apple', 'android'],
    },
    {
      id: 'dede-delivery',
      title: 'ระบบจัดการ Delivery',
      subtitle: 'จัดคิวการส่งอาหาร',
      image: '/images/delivery-system.webp',
      platforms: ['apple', 'android'],
    },
    {
      id: 'dede-queue',
      title: 'ระบบ Queue',
      subtitle: 'จัดคิวลูกค้าพร้อมแจ้งเตือน',
      image: '/images/queue-system.webp',
      platforms: ['apple', 'android'],
    },
    {
      id: 'dede-self-order',
      title: 'ระบบลูกค้าสั่งเอง',
      subtitle: 'ด้วย QR Code',
      image: '/images/self-order.webp',
      platforms: ['chrome', 'safari'],
    },
    {
      id: 'dede-crm',
      title: 'ระบบ CRM',
      subtitle: 'ประวัติลูกค้า สถิติการใช้บริการ',
      image: '/images/crm.webp',
      platforms: ['chrome', 'safari'],
    },
    {
      id: 'dede-account',
      title: 'ระบบบัญชี',
      subtitle: 'สต๊อก, เจ้าหนี้, ลูกหนี้, เงินสด, ธนาคาร, ปิดงบ',
      image: '/images/account-system.webp',
      platforms: ['apple', 'android', 'chrome', 'safari'],
    },
    {
      id: 'dede-owner',
      title: 'ระบบ Owner',
      subtitle: 'เจ้าของร้าน',
      image: '/images/owner-system.webp',
      platforms: ['apple', 'android', 'chrome', 'safari'],
    },
    {
      id: 'dede-franchise',
      title: 'ระบบแฟรนไชส์',
      subtitle: 'ดูแลร้านสมาชิก',
      image: '/images/franchise.webp',
      platforms: ['chrome', 'safari'],
    },
  ];

  const getPlatformIcon = (platform: string) => {
    const icons: { [key: string]: string } = {
      apple: '/images/logo-apple-app-store.webp',
      android: '/images/logo-google-play-store.webp',
      windows: '/images/logo-windows.webp',
      linux: '/images/logo-ubuntu.webp',
      chrome: '/images/logo-browser-chrome.webp',
      safari: '/images/logo-browser-safari.webp',
    };
    return icons[platform] || '';
  };

  const handleScrollTo = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  };

  return (
    <section className="bg-gradient-to-b from-earthen-50 to-white py-16">
      <div className="container-thai">
        <div className="text-center mb-12">
          <h2 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
            ระบบร้านอาหารครบวงจร
          </h2>
          <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full"></div>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-6">
          {systems.map((system, index) => (
            <button
              key={index}
              onClick={() => handleScrollTo(system.id)}
              className="card-pottery p-4 text-center group transform hover:-translate-y-2 transition-all duration-300"
            >
              <div className="relative h-32 md:h-40 mb-3 overflow-hidden rounded-lg">
                <Image
                  src={system.image}
                  alt={system.title}
                  fill
                  className="object-cover shadow-pottery group-hover:scale-110 transition-transform duration-500"
                />
              </div>

              <div className="flex justify-center space-x-1 mb-2 flex-wrap gap-1">
                {system.platforms.map((platform, pIndex) => (
                  <div key={pIndex} className="relative w-6 h-6">
                    <Image
                      src={getPlatformIcon(platform)}
                      alt={platform}
                      fill
                      className="object-contain"
                    />
                  </div>
                ))}
              </div>

              <h3 className="text-sm md:text-base font-bold font-mitr text-earthen-700 group-hover:text-isaan-500 transition-colors mb-1">
                {system.title}
              </h3>
              <p className="text-xs text-gray-600">{system.subtitle}</p>
            </button>
          ))}
        </div>
      </div>
    </section>
  );
}
