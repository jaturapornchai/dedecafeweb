'use client';

import { useState, useEffect } from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { FaBars, FaTimes } from 'react-icons/fa';

export default function Header() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const menuItems = [
    { name: 'หน้าแรก', href: '/' },
    { name: 'วิดีโอ', href: 'https://www.youtube.com/@dedepos-zu7eg', external: true },
    { name: 'ราคา', href: '/price' },
    { name: 'ดาวน์โหลด', href: '/download' },
    { name: 'เข้าสู่ระบบ', href: 'https://dedemerchant.web.app/', external: true },
    { name: 'โปรแกรมบัญชี', href: 'https://www.smlsoft.com', external: true },
  ];

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled
          ? 'bg-white/95 backdrop-blur-sm shadow-lg'
          : 'bg-white'
      }`}
    >
      <nav className="container-thai">
        <div className="flex items-center justify-between h-20">
          {/* Logo */}
          <Link href="/" className="flex items-center space-x-3 group">
            <div className="relative w-14 h-14 rounded-full overflow-hidden shadow-pottery border-2 border-earthen-300 group-hover:border-isaan-400 transition-all duration-300">
              <Image
                src="/images/logo.webp"
                alt="DeDe POS Logo"
                fill
                className="object-cover"
              />
            </div>
            <div className="hidden md:block">
              <h1 className="text-xl font-bold text-earthen-700 font-mitr leading-tight">
                ระบบร้านอาหาร<br />
                <span className="text-isaan-500">ครบวงจร</span>
              </h1>
            </div>
          </Link>

          {/* Desktop Menu */}
          <div className="hidden lg:flex items-center space-x-1">
            {menuItems.map((item) => (
              item.external ? (
                <a
                  key={item.name}
                  href={item.href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="px-4 py-2 text-gray-700 font-medium hover:text-isaan-500 hover:bg-earthen-50 rounded-lg transition-all duration-200"
                >
                  {item.name}
                </a>
              ) : (
                <Link
                  key={item.name}
                  href={item.href}
                  className="px-4 py-2 text-gray-700 font-medium hover:text-isaan-500 hover:bg-earthen-50 rounded-lg transition-all duration-200"
                >
                  {item.name}
                </Link>
              )
            ))}
          </div>

          {/* CTA Button */}
          <a
            href="https://dedemerchant.web.app/"
            target="_blank"
            rel="noopener noreferrer"
            className="hidden lg:block btn-primary"
          >
            สมัครใช้งาน
          </a>

          {/* Mobile Menu Button */}
          <button
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            className="lg:hidden p-2 text-earthen-700 hover:bg-earthen-100 rounded-lg transition-colors"
            aria-label="Toggle menu"
          >
            {isMenuOpen ? <FaTimes size={24} /> : <FaBars size={24} />}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="lg:hidden py-4 border-t border-earthen-200 animate-fade-in">
            <div className="flex flex-col space-y-2">
              {menuItems.map((item) => (
                item.external ? (
                  <a
                    key={item.name}
                    href={item.href}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="px-4 py-3 text-gray-700 font-medium hover:bg-earthen-50 hover:text-isaan-500 rounded-lg transition-all"
                    onClick={() => setIsMenuOpen(false)}
                  >
                    {item.name}
                  </a>
                ) : (
                  <Link
                    key={item.name}
                    href={item.href}
                    className="px-4 py-3 text-gray-700 font-medium hover:bg-earthen-50 hover:text-isaan-500 rounded-lg transition-all"
                    onClick={() => setIsMenuOpen(false)}
                  >
                    {item.name}
                  </Link>
                )
              ))}
              <a
                href="https://dedemerchant.web.app/"
                target="_blank"
                rel="noopener noreferrer"
                className="mx-4 btn-primary text-center"
                onClick={() => setIsMenuOpen(false)}
              >
                สมัครใช้งาน
              </a>
            </div>
          </div>
        )}
      </nav>
    </header>
  );
}
