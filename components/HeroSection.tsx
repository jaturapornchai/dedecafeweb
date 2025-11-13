'use client';

import Image from 'next/image';
import { FaApple, FaAndroid, FaWindows, FaLinux } from 'react-icons/fa';

export default function HeroSection() {
  return (
    <section className="relative min-h-[600px] flex items-center overflow-hidden">
      {/* Background Image with Overlay */}
      <div className="absolute inset-0 z-0">
        <Image
          src="/images/home-background.webp"
          alt="ระบบร้านอาหาร"
          fill
          className="object-cover"
          priority
        />
        <div className="absolute inset-0 bg-gradient-to-r from-earthen-900/90 via-earthen-800/80 to-transparent"></div>
      </div>

      {/* Content */}
      <div className="container-thai relative z-10 py-20">
        <div className="max-w-3xl">
          {/* Main Heading with Thai Pattern */}
          <div className="space-y-6 animate-fade-in">
            <div className="inline-block">
              <div className="bg-isaan-400/20 backdrop-blur-sm border-2 border-isaan-400 rounded-2xl px-6 py-2 mb-4">
                <span className="text-isaan-300 font-mitr font-semibold text-lg">
                  ✦ ระบบร้านอาหารครบวงจร ✦
                </span>
              </div>
            </div>

            <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold font-mitr text-white leading-tight drop-shadow-lg">
              ร้านขนาดเล็ก <span className="text-isaan-300">•</span> ขนาดใหญ่
              <br />
              <span className="text-isaan-300">หลายสาขา</span>
            </h1>

            <p className="text-xl md:text-2xl text-earthen-100 font-medium leading-relaxed drop-shadow-md">
              iPhone • iPad • Android • Tablet • Windows
              <br />
              <span className="text-isaan-300 font-bold">ใช้ฟรี</span> ใช้กับเครื่องเก่าได้ (ประหยัด)
            </p>

            {/* Platform Icons */}
            <div className="flex items-center space-x-4 pt-4">
              <div className="flex items-center space-x-3">
                <div className="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-white/20 transition-all">
                  <FaApple className="text-3xl text-white" />
                </div>
                <div className="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-white/20 transition-all">
                  <FaAndroid className="text-3xl text-white" />
                </div>
                <div className="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-white/20 transition-all">
                  <FaWindows className="text-3xl text-white" />
                </div>
                <div className="w-12 h-12 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-white/20 transition-all">
                  <FaLinux className="text-3xl text-white" />
                </div>
              </div>

              <a
                href="https://dedemerchant.web.app/"
                target="_blank"
                rel="noopener noreferrer"
                className="btn-primary text-lg px-8 py-4 animate-pulse hover:animate-none"
              >
                สมัครใช้งาน
              </a>
            </div>
          </div>
        </div>
      </div>

      {/* Decorative Elements */}
      <div className="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent z-10"></div>
    </section>
  );
}
