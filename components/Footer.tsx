'use client';

import Image from 'next/image';
import Link from 'next/link';
import { FaLine, FaFacebook, FaYoutube, FaPhone } from 'react-icons/fa';

export default function Footer() {
  return (
    <>
      {/* Footer Main */}
      <footer className="bg-gradient-to-br from-earthen-700 via-earthen-600 to-earthen-700 text-white mt-20">
        <div className="container-thai py-16">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            {/* Column 1: About */}
            <div className="space-y-4">
              <h3 className="text-2xl font-bold font-mitr text-isaan-300">
                DeDe POS
              </h3>
              <p className="text-earthen-100 leading-relaxed">
                ระบบร้านอาหารครบวงจร รองรับร้านขนาดเล็ก ขนาดใหญ่ และหลายสาขา
              </p>
              <div className="flex space-x-2">
                <Image src="/images/logo-apple-app-store.webp" alt="iOS" width={40} height={40} className="rounded-lg shadow-md" />
                <Image src="/images/logo-google-play-store.webp" alt="Android" width={40} height={40} className="rounded-lg shadow-md" />
                <Image src="/images/logo-windows.webp" alt="Windows" width={40} height={40} className="rounded-lg shadow-md" />
                <Image src="/images/logo-ubuntu.webp" alt="Linux" width={40} height={40} className="rounded-lg shadow-md" />
              </div>
            </div>

            {/* Column 2: Quick Links */}
            <div className="space-y-4">
              <h3 className="text-xl font-bold font-mitr text-isaan-300">
                เมนูหลัก
              </h3>
              <ul className="space-y-2">
                <li>
                  <Link href="/" className="text-earthen-100 hover:text-white transition-colors">
                    หน้าแรก
                  </Link>
                </li>
                <li>
                  <Link href="/price" className="text-earthen-100 hover:text-white transition-colors">
                    ราคา
                  </Link>
                </li>
                <li>
                  <Link href="/hardware" className="text-earthen-100 hover:text-white transition-colors">
                    แนะนำอุปกรณ์
                  </Link>
                </li>
                <li>
                  <Link href="/download" className="text-earthen-100 hover:text-white transition-colors">
                    ดาวน์โหลด
                  </Link>
                </li>
              </ul>
            </div>

            {/* Column 3: Features */}
            <div className="space-y-4">
              <h3 className="text-xl font-bold font-mitr text-isaan-300">
                ระบบย่อย
              </h3>
              <ul className="space-y-2">
                <li>
                  <Link href="/free-kiosk" className="text-earthen-100 hover:text-white transition-colors">
                    ร้านขนาดเล็ก (ฟรี)
                  </Link>
                </li>
                <li>
                  <Link href="/free-restaurant" className="text-earthen-100 hover:text-white transition-colors">
                    ร้านขนาดใหญ่ (ฟรี)
                  </Link>
                </li>
                <li>
                  <Link href="/kiosk" className="text-earthen-100 hover:text-white transition-colors">
                    ระบบ Kiosk
                  </Link>
                </li>
                <li>
                  <Link href="/small-fast-food" className="text-earthen-100 hover:text-white transition-colors">
                    ร้านเล็ก Fast Food
                  </Link>
                </li>
              </ul>
            </div>

            {/* Column 4: Contact */}
            <div className="space-y-4">
              <h3 className="text-xl font-bold font-mitr text-isaan-300">
                ติดต่อเรา
              </h3>
              <div className="space-y-3">
                <a
                  href="https://line.me/ti/p/%40smlsoft"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="flex items-center space-x-2 text-earthen-100 hover:text-white transition-colors"
                >
                  <FaLine className="text-2xl" />
                  <span>Line: @smlsoft</span>
                </a>
                <a
                  href="tel:0899223131"
                  className="flex items-center space-x-2 text-earthen-100 hover:text-white transition-colors"
                >
                  <FaPhone className="text-xl" />
                  <span>089-922-3131</span>
                </a>
                <div className="flex space-x-4 pt-2">
                  <a
                    href="https://www.facebook.com/people/DEDE-POS-Cafe/100094264791299/"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-earthen-100 hover:text-white transition-colors"
                  >
                    <FaFacebook size={28} />
                  </a>
                  <a
                    href="https://www.youtube.com/@dedepos-zu7eg"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-earthen-100 hover:text-white transition-colors"
                  >
                    <FaYoutube size={28} />
                  </a>
                </div>
              </div>
            </div>
          </div>

          {/* Company Info */}
          <div className="mt-12 pt-8 border-t border-earthen-500">
            <div className="text-center md:text-left space-y-2">
              <p className="text-earthen-200 font-semibold">
                บริษัท เอสเอ็มแอล ซอฟต์ จำกัด
              </p>
              <p className="text-earthen-300 text-sm">
                <span className="font-semibold">กรุงเทพ:</span> อาคารซอฟท์แวร์พาร์ค ชั้น 7 ถ.แจ้งวัฒนะ ต.คลองเกลือ อ.ปากเกร็ด จ.นนทบุรี 11120
              </p>
              <p className="text-earthen-300 text-sm">
                <span className="font-semibold">เชียงใหม่:</span> 141/469 หมู่ที่ 2 ต.ต้นเปา อ.สันกำแพง จ.เชียงใหม่ 50130
              </p>
            </div>
          </div>
        </div>

        {/* Copyright */}
        <div className="bg-earthen-900 py-4">
          <div className="container-thai">
            <p className="text-center text-earthen-300 text-sm">
              © {new Date().getFullYear()} บริษัท เอสเอ็มแอล ซอฟต์ จำกัด. สงวนลิขสิทธิ์.
            </p>
          </div>
        </div>
      </footer>

      {/* Floating Action Buttons */}
      <div className="fixed bottom-6 right-6 flex flex-col space-y-3 z-40">
        <a
          href="tel:0899223131"
          className="w-14 h-14 bg-gradient-to-br from-isaan-400 to-isaan-500 rounded-full flex items-center justify-center text-white shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300"
          aria-label="โทรติดต่อ"
        >
          <FaPhone size={24} />
        </a>
        <a
          href="https://line.me/ti/p/%40smlsoft"
          target="_blank"
          rel="noopener noreferrer"
          className="w-14 h-14 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300"
          aria-label="Line ติดต่อ"
        >
          <FaLine size={28} />
        </a>
      </div>
    </>
  );
}
