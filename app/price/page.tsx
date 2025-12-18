import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'ราคาแพ็คเกจ | DeDe POS',
  description: 'ราคาแพ็คเกจ DeDe Order Station และ DeDe POS Cafe สำหรับร้านอาหารทุกรูปแบบ',
};

export default function PricePage() {
  return (
    <div className="container-thai py-16 animate-fade-in">
      <div className="text-center mb-12">
        <h1 className="text-4xl md:text-5xl font-bold font-mitr text-earthen-700 mb-4">
          ราคาแพ็คเกจ
        </h1>
        <p className="text-xl text-gray-600">
          เลือกแพ็คเกจที่เหมาะกับร้านของคุณ
        </p>
        <div className="w-24 h-1 bg-gradient-to-r from-isaan-400 to-silk-400 mx-auto rounded-full mt-4"></div>
      </div>

      {/* Kiosk Package */}
      <section className="mb-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-6">
          DeDe Order Station (Kiosk) - ร้านอาหารแบบกินก่อนจ่าย
        </h2>
        <div className="overflow-x-auto">
          <div className="grid grid-cols-1 md:grid-cols-4 gap-6 min-w-[800px]">
            {/* Starter */}
            <div className="card-pottery">
              <div className="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-t-2xl">
                <h3 className="text-2xl font-bold font-mitr text-center">Starter</h3>
                <p className="text-4xl font-bold text-center mt-4">ฟรี</p>
              </div>
              <div className="p-6 space-y-4">
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่อง Kiosk</p>
                    <p className="text-sm text-gray-600">สูงสุด 2 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่องพิมพ์ครัว</p>
                    <p className="text-sm text-gray-600">ไม่จำกัด</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Kbank Prompt Pay</p>
                    <p className="text-sm text-gray-600">ไม่มีค่าธรรมเนียม</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">บิลขาย/เดือน</p>
                    <p className="text-sm text-gray-600">10,000 บิล (เฉลี่ย 333/วัน)</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Standard */}
            <div className="card-pottery border-2 border-isaan-400 transform scale-105">
              <div className="bg-gradient-to-r from-isaan-400 to-isaan-500 text-white p-6 rounded-t-2xl">
                <div className="bg-white/20 text-xs font-bold px-2 py-1 rounded inline-block mb-2">
                  แนะนำ
                </div>
                <h3 className="text-2xl font-bold font-mitr text-center">Standard</h3>
                <p className="text-4xl font-bold text-center mt-4">150 ฿</p>
                <p className="text-sm text-center opacity-90">ต่อเดือน/สาขา</p>
              </div>
              <div className="p-6 space-y-4">
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่อง Kiosk</p>
                    <p className="text-sm text-gray-600">สูงสุด 4 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่องพิมพ์ครัว</p>
                    <p className="text-sm text-gray-600">ไม่จำกัด</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">ระบบสมาชิก</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">ลูกค้าสั่งเองด้วยมือถือ</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">บิลขาย/เดือน</p>
                    <p className="text-sm text-gray-600">30,000 บิล (เฉลี่ย 1,000/วัน)</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Premium */}
            <div className="card-pottery">
              <div className="bg-gradient-to-r from-earthen-600 to-earthen-700 text-white p-6 rounded-t-2xl">
                <h3 className="text-2xl font-bold font-mitr text-center">Premium</h3>
                <p className="text-4xl font-bold text-center mt-4">300 ฿</p>
                <p className="text-sm text-center opacity-90">ต่อเดือน/สาขา</p>
              </div>
              <div className="p-6 space-y-4">
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่อง Kiosk</p>
                    <p className="text-sm text-gray-600">สูงสุด 9 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">ระบบเสริฟท์</p>
                    <p className="text-sm text-gray-600">ติดตามอาหาร วิเคราะห์เวลา</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">ระบบคำนวณวัตถุดิบ (BOM)</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">ระบบสมาชิก + ลูกค้าสั่งเอง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">บิลขาย/เดือน</p>
                    <p className="text-sm text-gray-600">60,000 บิล (เฉลี่ย 2,000/วัน)</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Features Column */}
            <div className="card-feature">
              <h4 className="font-bold font-mitr text-earthen-700 mb-4">คุณสมบัติทั่วไป</h4>
              <ul className="space-y-2 text-sm">
                <li>✓ ระบบหลังร้าน Merchant</li>
                <li>✓ ระบบเจ้าของร้าน Owner</li>
                <li>✓ แจ้งเตือน Line Notify</li>
                <li>✓ ป้ายสินค้าไม่จำกัด</li>
                <li>✓ KBank EDC เชื่อมอัตโนมัติ</li>
                <li>✓ รองรับหลายช่องทางชำระเงิน</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <div className="section-divider"></div>

      {/* Restaurant POS Package */}
      <section className="mt-16">
        <h2 className="text-3xl font-bold font-mitr text-earthen-700 mb-6">
          DeDe POS Cafe - ร้านอาหารทั่วไป
        </h2>
        <div className="overflow-x-auto">
          <div className="grid grid-cols-1 md:grid-cols-4 gap-6 min-w-[800px]">
            {/* Starter */}
            <div className="card-pottery">
              <div className="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-t-2xl">
                <h3 className="text-2xl font-bold font-mitr text-center">Starter</h3>
                <p className="text-4xl font-bold text-center mt-4">ฟรี</p>
              </div>
              <div className="p-6 space-y-4">
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">โต๊ะสูงสุด</p>
                    <p className="text-sm text-gray-600">20 โต๊ะ</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่องพิมพ์ครัว</p>
                    <p className="text-sm text-gray-600">4 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">KDS</p>
                    <p className="text-sm text-gray-600">8 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Staff</p>
                    <p className="text-sm text-gray-600">4 เครื่อง (+20฿/เครื่อง)</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-green-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Cashier</p>
                    <p className="text-sm text-gray-600">1 เครื่อง</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Standard */}
            <div className="card-pottery border-2 border-isaan-400 transform scale-105">
              <div className="bg-gradient-to-r from-isaan-400 to-isaan-500 text-white p-6 rounded-t-2xl">
                <div className="bg-white/20 text-xs font-bold px-2 py-1 rounded inline-block mb-2">
                  แนะนำ
                </div>
                <h3 className="text-2xl font-bold font-mitr text-center">Standard</h3>
                <p className="text-4xl font-bold text-center mt-4">400 ฿</p>
                <p className="text-sm text-center opacity-90">ต่อเดือน/สาขา</p>
              </div>
              <div className="p-6 space-y-4">
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">โต๊ะสูงสุด</p>
                    <p className="text-sm text-gray-600">30 โต๊ะ</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่องพิมพ์ครัว</p>
                    <p className="text-sm text-gray-600">8 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">KDS</p>
                    <p className="text-sm text-gray-600">16 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Staff</p>
                    <p className="text-sm text-gray-600">8 เครื่อง (+30฿/เครื่อง)</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-isaan-500 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Cashier</p>
                    <p className="text-sm text-gray-600">1 เครื่อง (+80฿/เครื่อง)</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Premium */}
            <div className="card-pottery">
              <div className="bg-gradient-to-r from-earthen-600 to-earthen-700 text-white p-6 rounded-t-2xl">
                <h3 className="text-2xl font-bold font-mitr text-center">Premium</h3>
                <p className="text-4xl font-bold text-center mt-4">900 ฿</p>
                <p className="text-sm text-center opacity-90">ต่อเดือน/สาขา</p>
              </div>
              <div className="p-6 space-y-4">
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">โต๊ะสูงสุด</p>
                    <p className="text-sm text-gray-600">50 โต๊ะ</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">เครื่องพิมพ์ครัว</p>
                    <p className="text-sm text-gray-600">16 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">KDS</p>
                    <p className="text-sm text-gray-600">32 เครื่อง</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Staff</p>
                    <p className="text-sm text-gray-600">16 เครื่อง (+40฿/เครื่อง)</p>
                  </div>
                </div>
                <div className="flex items-start space-x-2">
                  <span className="text-earthen-600 mt-1">✓</span>
                  <div>
                    <p className="font-semibold">Cashier</p>
                    <p className="text-sm text-gray-600">1 เครื่อง (+160฿/เครื่อง)</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Features Column */}
            <div className="card-feature">
              <h4 className="font-bold font-mitr text-earthen-700 mb-4">คุณสมบัติทั่วไป</h4>
              <ul className="space-y-2 text-sm">
                <li>✓ Self Ordering</li>
                <li>✓ Merchant & Owner</li>
                <li>✓ Kbank Prompt Pay</li>
                <li>✓ Payment Gateway</li>
                <li>✓ Line Notify</li>
                <li>✓ Multi Branch Support</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="mt-16 bg-gradient-to-r from-isaan-400 to-isaan-500 rounded-2xl p-12 text-center text-white">
        <h2 className="text-3xl md:text-4xl font-bold font-mitr mb-4">
          พร้อมเริ่มต้นแล้วหรือยัง?
        </h2>
        <p className="text-xl mb-8 opacity-90">
          ทดลองใช้ฟรี ไม่มีค่าใช้จ่าย ไม่ต้องผูกบัตร
        </p>
        <a
          href="https://dedemerchant.web.app/"
          target="_blank"
          rel="noopener noreferrer"
          className="inline-block px-8 py-4 bg-white text-isaan-600 font-bold font-mitr rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300"
        >
          สมัครใช้งานฟรี
        </a>
      </section>
    </div>
  );
}
