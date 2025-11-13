'use client';

import Image from 'next/image';
import Link from 'next/link';

export default function RestaurantTypes() {
  const types = [
    {
      title: 'Kiosk',
      image: '/images/kiosk-food-truck.webp',
      href: '/kiosk',
    },
    {
      title: 'ร้านเล็ก',
      image: '/images/cook.webp',
      href: '/small-fast-food',
    },
    {
      title: 'กินก่อนจ่าย',
      image: '/images/eat-and-pay.webp',
      href: '#eat-and-pay',
      scrollTo: 'eat-and-pay',
    },
    {
      title: 'จ่ายก่อนกิน',
      image: '/images/pay-and-eat.webp',
      href: '#pay-and-eat',
      scrollTo: 'pay-and-eat',
    },
    {
      title: 'บุฟเฟต์',
      image: '/images/buffet.webp',
      href: '#buffet',
      scrollTo: 'buffet',
    },
  ];

  const handleClick = (e: React.MouseEvent, scrollTo?: string) => {
    if (scrollTo) {
      e.preventDefault();
      const element = document.getElementById(scrollTo);
      if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  };

  return (
    <section className="container-thai py-16">
      <div className="text-center mb-12">
        <h2 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          รองรับรูปแบบร้านอาหาร
        </h2>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full"></div>
      </div>

      <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
        {types.map((type, index) => (
          <Link
            key={index}
            href={type.href}
            onClick={(e) => handleClick(e, type.scrollTo)}
            className="group card-pottery p-4 text-center transform hover:-translate-y-2 transition-all duration-300"
          >
            <div className="relative h-40 md:h-48 mb-4 overflow-hidden rounded-lg">
              <Image
                src={type.image}
                alt={type.title}
                fill
                className="object-cover shadow-pottery group-hover:scale-110 transition-transform duration-500"
              />
            </div>
            <h3 className="text-xl md:text-2xl font-bold font-mitr text-earthen-700 group-hover:text-isaan-500 transition-colors">
              {type.title}
            </h3>
          </Link>
        ))}
      </div>
    </section>
  );
}
