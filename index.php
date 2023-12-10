<?php
$title = "DeDe Pos Cafe";
include('header.php');
?>

<body>
    <?php include('menu.php'); ?>
    <div style="margin-top: 90px;">
        <div
            style="width: 100%;height: auto; padding: 10px;background-image: url('images/home-background.webp');background-repeat: no-repeat;background-size: cover;">
            <div class="container" style="width: auto;padding: 0px;height: auto;">
                <div style="font-size:5vw;text-shadow: 4px 4px #000;color: white;">
                    <b><span>ระบบร้านอาหารครบวงจร</span></b>
                </div>
                
                <!--
                <a href="https://www.dedecafe.com/free" class="button">สมัคร</a><br /><br />
                <img src="images/logo-apple-app-store.webp" alt="app store" width="40px;">
                <img src="images/logo-google-play-store.webp" alt="google play store" width="40px;">
                <img src="images/logo-windows.webp" alt="windows" width="40px;">
                <img src="images/logo-ubuntu.webp" alt="linux" width="40px;">
                -->
            </div>
        </div>
        <div class="container" style="width: auto; padding: 0px; height: auto; padding-top: 18px;; padding-left: 15px;; padding-right: 15px;">
            <div style="max-width: 400px; margin:0 auto;">
                <h1 class="fit-text">รองรับรูปแบบร้านอาหาร</h1>
            </div>
            <div class="row" style="margin-right: -15px; margin-left: -15px;">
                <div class="col" style="padding: 0;">
                    <button class="buttonhome" onclick="window.location.href='/small-fast-food';">
                        <img src="images/cook.webp" alt="kiosk" width="100%" class="imgshadow"><br />
                        <b style="color: #000;font-size: 2vw;">ร้านขนาดเล็ก</b>
                    </button>
                </div>
                <div class="col" style="padding: 0;">
                    <button class="buttonhome" onclick="window.location.href='/kiosk';">
                        <img src="images/kiosk-food-truck.webp" alt="kiosk" width="100%" class="imgshadow"><br />
                        <b style="color: #000;font-size: 2vw;">Kiosk</b>
                    </button>
                </div>
                <div class="col" style="padding: 0;">
                    <button class="buttonhome" onclick="document.getElementById('eat-and-pay').scrollIntoView({ behavior: 'smooth', block: 'end', inline: 'nearest'});">
                        <img src="images/eat-and-pay.webp" alt="กินก่อนจ่าย" width="100%" class="imgshadow"><br />
                        <b style="color: #000;font-size: 2vw;">กินก่อนจ่าย</b>
                    </button>
                </div>
                <div class="col" style="padding: 0;">
                    <button class="buttonhome" onclick="document.getElementById('pay-and-eat').scrollIntoView({ behavior: 'smooth', block: 'end', inline: 'nearest'});">
                        <img src="images/pay-and-eat.webp" alt="จ่ายก่อนกิน" width="100%" class="imgshadow"><br />
                        <b style="color: #000;font-size: 2vw;">จ่ายก่อนกิน</b>
                    </button>
                </div>
                <div class="col" style="padding: 0;">
                    <button class="buttonhome" onclick="document.getElementById('buffet').scrollIntoView({ behavior: 'smooth', block: 'end', inline: 'nearest'});">
                        <img src="images/buffet.webp" alt="บุฟเฟต์" width="100%" class="imgshadow"><br />
                        <b style="color: #000;font-size: 2vw;">บุฟเฟต์</b>
                    </button>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" style="width: auto;padding: 0px;height: auto;">
            <div style="max-width: 400px; margin:0 auto;">
                <h1 class="fit-text">ระบบร้านอาหารครบวงจร</h1>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-pos').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/cashier.webp" alt="Cashier" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        <img src="images/logo-windows.webp" alt="pos" width="20px">
                        <img src="images/logo-ubuntu.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบ Cashier</div>
                        <div class="listdetail">ดูแลเงินสด</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-merchant').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/merchant.webp" alt="Merchant" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        <img src="images/logo-windows.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบ Merchant</div>
                        <div class="listdetail">จัดการหลังบ้าน</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-customer-display').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/customer-display.webp" alt="Customer Display" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            Customer Display</div>
                        <div class="listdetail">หน้าจอฝั่งลูกค้า</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-staff').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/staff-system.webp" alt="Staff" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบ Staff</div>
                        <div class="listdetail">สำหรับพนักงานบริการ</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-kds').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/kds-system.webp" alt="KDS" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">ระบบห้องครัว (KDS)</div>
                        <div class="listdetail">สำหรับพ่อครัว</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-delivery').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/delivery-system.webp" alt="Delivery" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">ระบบจัดการ Delivery</div>
                        <div class="listdetail">จัดคิวการส่งอาหาร</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-queue').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/queue-system.webp" alt="Queue" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">ระบบ Queue</div>
                        <div class="listdetail">จัดคิวลูกค้าพร้อมแจ้งเตือน</div>

                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-self-order').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/self-order.webp" alt="ระบบลูกค้าสั่งเอง" width="90%" class="imgshadow"><br />
                        <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">ระบบลูกค้าสั่งเอง</div>
                        <div class="listdetail">ด้วย QR Code</div>

                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-crm').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/crm.webp" alt="crm" width="90%" class="imgshadow"><br />
                        <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบ CRM</div>
                        <div class="listdetail">ประวัติลูกค้า<br />สถิติการใช้บริการ</div>

                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-account').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/account-system.webp" alt="ระบบบัญชี" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบบัญชี</div>
                        <div class="listdetail">สต๊อก, เจ้าหนี้, ลูกหนี้, เงินสด, ธนาคาร, ปิดงบ</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-owner').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/owner-system.webp" alt="Owner" width="90%" class="imgshadow"><br />
                        <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                        <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบ Owner</div>
                        <div class="listdetail">เจ้าของร้าน</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('dede-franchise').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/franchise.webp" alt="ระบบแฟรนไชส์" width="90%" class="imgshadow"><br />
                        <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                        <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
                        </br>
                        <div class="listheader fit-text">
                            ระบบแฟรนไชส์</div>
                        <div class="listdetail">ดูแลร้านสมาชิก</div>
                    </button>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <br />
        <div class="container" style="width: auto;padding: 0px;height: auto;">
            <div style="max-width: 200px; margin:0 auto;">
                <h1 class="fit-text">คุณสมบัติทั่วไป</h1>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('multi-language').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/tourists.webp" alt="รองรับหลายภาษา" width="100%" class="imgshadow"><br />
                        <div style="color: #000;">
                            <b class="fit-text">รองรับหลายภาษา</b><br />
                            <div class="fit-text">นักท่องเที่ยวต่างชาติ สั่งอาหารและเครื่องดื่ม ด้วยภาษาตัวเอง</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('data-center').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/restaurant_data_synchronization.webp" alt="เชื่อมข้อมูลทั่วโลก" width="100%"
                            class="imgshadow"><br />
                        <div style="color: #000;font-size: 12px;">
                            <b class="fit-text">เชื่อมข้อมูลทั่วโลก</b>
                            <div class="fit-text">ข้อมูลเชื่อมถึงกันทันที Internet เสีย ก็ยังใช้ระบบได้</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('data-center-management').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/chain.webp" alt="จัดการสาขาได้ทั่วโลก" width="100%" class="imgshadow"><br />
                        <div style="color: #000;font-size: 12px;">
                            <b class="fit-text">จัดการสาขาได้ทั่วโลก</b>
                            <div class="fit-text">ภาษาของสำนักงานใหญ่ และภาษาของสาขา (Data
                                Center)</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('multi-device').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/multi-device.webp" alt="หลากหลายอุปกรณ์" width="100%" class="imgshadow"><br />
                        <div style="color: #000;font-size: 12px;">
                            <b class="fit-text">หลากหลายอุปกรณ์</b>
                            <div class="fit-text">Windows, Ubuntu, Andoid, iOS, Browser</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('cook-helper').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/cook.webp" alt="ระบบผู้ช่วยกุ๊ก" width="100%" class="imgshadow"><br />
                        <div style="color: #000;font-size: 12px;">
                            <b class="fit-text">ระบบผู้ช่วยกุ๊ก</b>
                            <div class="fit-text">พูดชื่ออาหารได้ จัดคิวประกอบอาหาร ตามอาหารช้าอัตโนมัติ</div>
                        </div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-6 col-12 py-2">
                    <button class="buttonhome" style="width: 100%;"
                        onclick="document.getElementById('pay-at-table').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                        <img src="images/pay-at-table.webp" alt="รับชำระเงินที่โต๊ะลูกค้า" width="100%" class="imgshadow"><br />
                        <div style="color: #000;font-size: 12px;">
                            <b class="fit-text">รับชำระเงินที่โต๊ะลูกค้า</b>
                            <div class="fit-text">รับเป็นเงินสด Qr Prompt
                                Pay พร้อมพิมพ์ใบเสร็จที่โต๊ะ</div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="eat-and-pay">
            <img src="images/eat-and-pay.webp" alt="กินก่อนจ่าย" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>กินก่อนจ่าย</h2>
                <ul style="padding: 20px;">
                    <li><b>เปิดโต๊ะ</b>&nbsp;เมื่อลูกค้าเข้ามาที่ร้าน และเลือกโต๊ะได้แล้ว
                        พนักงานจะเปิดโต๊ะให้ลูกค้านั่งได้ทันที พร้อมกับสั่งอาหารได้ทันที
                        หรือลูกค้าสามารถสั่งอาหารเองได้ด้วยตัวเอง ผ่านระบบ Self Order (QR Code) ที่เราจัดให้
                        โดยลูกค้าสามารถสั่งอาหารได้ทันที </li>
                    <li><b>สั่งอาหาร</b>&nbsp;ลูกค้าสามารถเรียกพนักงาน เพื่อสั่งอาหาร
                        หรือลูกค้าสามารถสั่งอาหารเองได้ด้วยตัวเอง</li>
                    <li><b>ย้ายโต๊ะ</b>&nbsp;กรณีลูกค้าต้องการย้ายโต๊ะ เพื่อความเหมาะสม
                        สามารถแจ้งพนักงานทำการย้ายโต๊ะได้ทันที</li>
                    <li><b>แยกโต๊ะ</b>&nbsp;กรณีลูกค้ามาด้วยกัน แต่ต้องการแยกโต๊ะ เพื่อแยกสั่งอาหาร และแยกคิดเงิน
                        สามารถแจ้วพนักงานให้แยกโต๊ะได้ทันที</li>
                    <li><b>รวมโต๊ะ</b>&nbsp;กรณีลูกค้าต้องการรวมโต๊ะ เพื่อคิดเงินรวมกัน
                        สามารถแจ้งพนักงานให้รวมโต๊ะได้ทันที
                    </li>
                    <li><b>แยกชำระเงิน</b>&nbsp;กรณีต้องการแยกชำระเงิน เช่น นักท่องเที่ยวต่างชาติ
                        สามารถแจ้งพนักงานให้ทำรายการแยกชำระเงินได้</li>
                    <li><b>ชำระเงิน</b>&nbsp;สามารถแจ้งพนักงานเพื่อชำระเงิน สามารถชำระเงินสด หรือชำระด้วย Prompt Pay
                        ได้ทันที หรือจะมาชำระที่เครื่องแคชเชียร์ก็ได้</li>
                </ul>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="pay-and-eat">
            <img src="images/pay-and-eat.webp" alt="จ่ายก่อนกิน" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>จ่ายก่อนกิน</h2>
                <ul style="padding: 20px;">
                    <li><b>ระบบสั่งอาหารล่วงหน้า</b>&nbsp;ลูกค้าสามารถ Scan QR Code เพื่อเลือกสินค้า
                        และเครื่องดื่มล่วงหน้า
                        แล้วระบบจะสร้าง QR Code เพื่อให้เจ้าของร้าน สามารถ Scan ได้จากมือถือลูกค้า
                        และเมื่อรับเงินจากลูกค้าแล้ว รายการที่ลูกค้าเลือกทั้งหมดก็จะเข้าระบบร้านอาหาร และสั่งพิมพ์ไปครัว
                        และระบบ KDS แบบทันที พร้อมระบบคิวในใบเสร็จ</li>
                    <li><b>ระบบชำระเงิน</b>&nbsp;เจ้าของร้านสามารถรับ Order จากลูกค้า และสามารถชำระเงินได้ทันที
                        โดยสามารถชำระเงินได้ทั้งสด หรือชำระด้วย Prompt Pay ได้ทันที หลังจากชำระเงินแล้ว
                        ระบบจะส่งเข้าครัว
                        และระบบ KDS ทันที พร้อมระบบคิวในใบเสร็จ</li>
                    <li><b>ระบบเรียกคิว</b>&nbsp;เมื่อประกอบอาหารเสร็จแล้ว ระบบจะเรียกคิว
                        มารับอาหารหรือเครื่องดื่มโดยอัตโนมัติ</li>
                </ul>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="buffet">
            <img src="images/buffet.webp" alt="บุฟเฟต์" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>บุฟเฟต์</h2>
                <ul style="padding: 20px;">
                    <li><b>เลือกน้ำซุปได้เมื่อเปิดโต๊ะ</b>&nbsp;เลือกน้ำซุป เช่น ซุปกระดูก และซุปหมาล่า
                        ระบบจะแจ้งไปทางครัวเพื่อให้เตรียมรายการได้ล่วงหน้า</li>
                    <li><b>ระบบสั่งอาหารด้วยมือถือ</b>&nbsp;ลูกค้าสามารถ Scan QR Code เพื่อเลือกสินค้า และเครื่องดื่ม
                        พร้อมส่งเข้าระบบครัว และระบบ KDS ได้ทันที ทำให้การนำส่งอาหาร และเครื่องดื่มเป็นไปอย่างรวดเร็ว
                    </li>
                    <li><b>จัดการเมนู</b>&nbsp;ระบบจัดการเมนู เช่น บุฟเฟต์หมู,​ บุฟเฟต์เนื้อ,​ บุฟเฟต์ทะเล
                        ซึ่งจะเปลี่ยนแปลงไปตามเงื่อนไขที่ลูกค้าเลือก</li>
                    <li><b>นับเวลาถอยหลัง</b>&nbsp;มีระบบนับเวลาในการใช้บริการ สามารถแจ้งเตือนเมื่อใกล้หมดเวลา
                        เพื่อแจ้งเตือนลูกค้าได้</li>
                </ul>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-pos">
            <img src="images/cashier.webp" alt="point of sale" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe POS (Cashier)</h2>
                <ul style="padding: 20px;">
                    <li><b>ใช้ได้หลาย Platform</b>&nbsp;ใช้ได้ทั้งระบบ iOS, Android, Windows, Ubuntu
                        ถ้าเป็นร้านเล็กแนะนำ
                        Android,iOS ถ้าเป็นร้านขนาดใหญ่ แนะนำ Windows, Ubuntu</li>
                    <li><b>โปรโมชั่น</b>&nbsp;ลด, แถม สามารถกำหนดสูตรโปรโมชั่นได้หลายแบบ</li>
                    <li><b>รับขำระเงินได้หลายแบบ</b>&nbsp;Prompt Pay พร้อมจำนวนเงิน เพื่อลดความผิดพลาด, รับชำระเงินสด,
                        เงินโอน, คูปอง,​ บัตรเดรดิต, Alipay, weChat</li>
                    <li><b>ระบบกะทำงาน</b>&nbsp;เปิดกะ​, ปิดกะ, เติมเงิน,​ นำเงินออก</li>
                </ul>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-merchanrt" style="min-height: 210px;">
            <img src="images/merchant.webp" alt="Merchant" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Merchant</h2>
                ระบบจัดการหลังบ้าน กำหนดรายละเอียดกิจการ รูปแบบกิจการ รายละเอียดสินค้า รูปภาพสินค้า จัดกลุ่มสินค้า
                ราคาสินค้า เงื่อนไขสินค้า สูตรการตัดสต๊อกของสินค้า รายละเอียดโปรโมชั่น รายละเอียดพนักงาน
                รายละเอียดลูกค้า
                รายละเอียดโต๊ะ รายละเอียดครัว และรายละเอียดอื่นๆ ที่เกี่ยวข้องกับการจัดการร้านอาหาร
                เพื่อให้พนักงานเก็บเงิน
                พนักงานบริการ ทำงานได้อย่างรวดเร็ว มีประสิทธิภาพ ไม่ผิดพลาด พร้อมทั้งมีระบบงานบัญชี
                ไม่ว่าจะเป็นการซื้อสินค้า การรับสินค้า การผลิตสินค้า เจ้าหนี้ ลูกหนี้ เงินสด ธนาคาร รายงานต่างๆ
                ที่เกี่ยวข้องกับการบริหารจัดการร้านอาหาร
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-customer-display" style="min-height: 210px;">
            <img src="images/customer-display.webp" alt="Customer Display" width="200px"
                style="float: right;padding: 10px;" class="imgshadow">
            <div>
                <h2>DeDe Customer Display</h2>
                สำหรับ Andoird หรือ iOs แสดงหน้าจอสำหรับให้ลูกค้าดูรายการที่กำลังขาย ราคา จำนวน รวมราคา<br />
                และรายการที่ขายไปแล้ว ราคารวม ราคาทอน เพื่อให้ลูกค้าสามารถตรวจสอบรายการที่ซื้อได้
                และเพิ่มความน่าเชื่อถือในการขายสินค้า<br />
                พร้อมทั้งลูกค้าสามารถกดหมายเลขสมาชิก หมายเลขโทรศัพท์ หรือ Scan Qr Code บัตรสมาชิก
                เพื่อสิทธิประโยชน์ของลูกค้า<br />
                เช่น ส่วนลดพิเศษ การสะสมแต้ม ทำให้ลูกค้าเกิดความมั่นใจ และพึงพอใจในการใช้บริการ
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-staff" style="min-height: 210px;">
            <img src="images/staff-system.webp" alt="Staff" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Staff</h2>
                เป็น App ที่ทำงานบนระบบมือถือ iOS, Android เพื่อให้พนักงานบริการสามารถให้บริการได้สะดวก รวดเร็ว
                ไม่ผิดพลาด
                เช่น เปิดโต๊ะ, ปิดโต๊ะ,​ ย้ายโต๊ะ, รวมโต๊ะ, แยกโต๊ะ, สรุปยอด พร้อมรับเงินสดจากลูกค้า หรือ Scan Qr Code
                และพิมพ์ใบเสร็จรับเงินได้ทันที โดยที่ไม่ต้องเดินไปมาระหว่างโต๊ะลูกค้า และ Cashier ให้เสียเวลา
                อาจทำให้ลูกค้ารอนาน และเกิดความไม่พอใจ พร้อมทั้งพนักงานบริการสามารถดูได้ว่า อาหาร
                หรือเครื่องดื่มตัวไหนหมดแล้ว เพื่อการสื่อสารระหว่างห้องครัว และส่วนหน้า เป็นไปอย่างมีประสิทธิภาพ
                และถ้ารายการอาหาร หรือเครื่องดื่มตัวไหนหมดแล้ว ระบบ Self Ordering ฝั่งลูกค้าที่สั่งอาหารเอง
                ก็จะเห็นสถานะสินค้า ว่า หมด หรือหรือจำนวนเท่าใดได้ แบบทันที
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-kds" style="min-height: 210px;">
            <img src="images/kds-system.webp" alt="KDS" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe KDS</h2>
                ระบบ Kitchen Display System สำหรับห้องครัว และกุ๊ก โดยระบบจะแสดงคิวรายการประกอบอาหาร
                พร้อมคำแนะนำในการประกอบอาหารให้รวดเร็ว สามารถพูดชื่ออาหาร จำนวน และรายละเอียดอื่นๆ ของรายการอาหารที่สั่ง
                ได้โดยไม่ต้องดูหน้าจอ และเมื่อประกอบอาหารเสร็จแล้ว สามารถกดเพื่อปิดสถานะว่าประกอบเสร็จแล้ว
                และยังสามารถพิมพ์ใบติดจาน เพื่อนำเสริฟท์ได้ พร้อมมีระบบเตือนอาหารช้าเกินกำหนด ระบบแสดงสถานะการทำอาหารว่า
                ปรกติ ช้า และช้ามาก เพื่อให้กุ๊กสามารถบริหารจัดการห้องครัวได้ง่ายขึ้น
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-delivery" style="min-height: 210px;">
            <img src="images/delivery-system.webp" alt="Delivery" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Delivery</h2>
                สามารถเปิด Job ตามรายการสั่งอาหารจาก Platform Delivery สามารถสั่งอาหารตาม Order
                โดยระบบจะส่งต่อไปยังครัวโดยอัตโนมัติ พร้อมทั้งสามารถพิมพ์ใบสรุปรายการ เพื่อประกอบกับ Order ของ Platform
                Delivery ได้
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-queue" style="min-height: 210px;">
            <img src="images/queue-system.webp" alt="Queue" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Queue</h2>
                ลูกค้าสามารถ Scan Qr Code เพื่อจองคิวได้เอง หรือให้พนักงานกดจองคิวให้ก็ได้ เมื่อถึงคิว
                พนักงานสามารถกดเพื่อเรียกคิว พร้อมเสียงพูดหมาบเลขคิว ลูกค้าสามารถตรวจสอบคิวได้ผ่านระบบ Internet
                โดยไม่ต้องรออยู่ในร้าน และสามารถเดินไปทำกิจกรรมอย่างอื่นได้ โดยระบบจะแสดงสถานะว่า มีคิวก่อนหน้ากี่คิว
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-self-order" style="min-height: 210px;">
            <img src="images/self-order.webp" alt="Self Ordering" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Self Ordering</h2>
                ลูกค้าสามารถ Scan Qr Code ด้วยมือถือส่วนตัว เพื่อสั่งอาหารได้เอง สามารถติดตามได้ว่าอาหารเสริฟหรือยัง
                และสรุปยอด่าใช้บริการได้ทันที สามารถแยกได้ว่า สั่งทานที่ร้าน หรือสั่งกลับบ้าน โดยรวมเป็นยอดเดียวกัน
                พร้อมทั้งระบบเรียกพนักงานผ่านมือถือ
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-crm" style="min-height: 210px;">
            <img src="images/crm.webp" alt="CRM" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe CRM</h2>
                Customer Relation Management ระบบบริหารความสัมพันธ์กับลูกค้า สามารถเก็บรายละเอียดของลูกค้า
                ประวัติการใช้บริการ และสามารถส่งข้อความแจ้งเตือนได้ โดยอัตโนมัติ เช่น วันเกิด วันครบรอบการใช้บริการ
                พร้อมทั้งส่ง SMS ไปยังลูกค้าตามกิจกรรมต่างๆ ที่กำหนดไว้
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-account" style="min-height: 210px;">
            <img src="images/account-system.webp" alt="Account" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Account</h2>
                ระบบบัญชีสำหรับร้านอาหาร ออกแบบมาเพื่อร้านอาหารที่ต้องการทำระบบเต็มรูปแบบ เพื่อให้การจัดการเป็นโดยมีระบบ
                ได้ข้อมูลในการตัดสินใจรวดเร็ว ประกอบด้วยระบบต่างๆ คู่มือ
                <ul>
                    <li><b>ระบบสินค้าคงคลัง</b>&nbsp;รองรับประเภทสินค้า เช่น อาหาร, เครื่องดื่ม, บริการ,
                        สินค้าสำเร็จรูป,
                        สินค้ากึ่งสำเร็จรูป วัตถุดิบเหลือมากเกินไป วัตถุดิบเหลือน้อยเกินไป
                        พร้อมเตือนเมื่อวัตถุดิบใกล้หมด
                        เหมาะสำหรับสต๊อกร้านอาหารเป็นอย่างมาก</li>
                    <li><b>ระบบสั่งซื้อ</b>&nbsp;สามารถสร้างใบสั่งซื้อ เพื่อสั่งซื้อวัตถุดิบ หรือสินค้า จาก Supplier ได้
                    </li>
                    <li><b>ระบบซื้อ</b>&nbsp;เมื่อมีการซื้อสินค้า สามารถนำเอกสารมาบันทึกการซื้อได้ทันที
                        สามารถซื้อเป็นเงินสด
                        หรือเงินเชื่อ เพื่อตั้งเจ้าหนี้ได้ และเมื่อมีการซื้อสินค้า หรือวัตถุดิบเข้ามาแล้ว
                        ระบบจะงานตามขบวนการบัญชีอัตโนมัติ เช่น เพิ่มสต๊อก, คำนวณต้นทุนให้ใหม่, คำนวณยอดเจ้าหนี้ ฯลฯ</li>
                    <li><b>ระบบขาย</b>&nbsp;สามารถขายสินค้าให้กับตัวแทน หรือ แฟรนไชส์ได้ โดยสามารถขายสด, ขายเชื่อ
                        เพื่อตั้งเป็นลูกหนี้ได้</li>
                    <li><b>ระบบบัญชีเจ้าหนี้</b>&nbsp;</li>
                    <li><b>ระบบบัญชีลูกหนี้</b>&nbsp;</li>
                    <li><b>ระบบเงินสด</b>&nbsp;</li>
                    <li><b>ระบบธนาคาร</b>&nbsp;</li>
                    <li><b>ระบบรายได้อื่น/ค่าใช้จ่ายอื่น</b>&nbsp;</li>
                    <li><b>ระบบปิดงบ</b>&nbsp;</li>
                </ul>
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-owner" style="min-height: 210px;">
            <img src="images/owner-system.webp" alt="Owner" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>DeDe Owner</h2>
                โปรแกรมสำหรับเจ้าของร้านอาหาร ที่ต้องการตรวจสอบการทำงานของร้านอาหาร และต้องการรายงานการทำงานของร้านอาหาร
                เช่น ยอดขายประจำวัน, ยอดขายประจำเดือน, ยอดขายประจำปี สามารถกำหนดช่วงเวลาได้ตามที่ต้องการ ยอดสินค้าขายดี
                ยอดสินค้าขายไม่ไดี และอื่นๆ เพื่อให้การบริหารงานเป็นไปอย่างอัตโนมัติ และรวดเร็ว โดยระบบจะรวบรวมข้อมูลจาก
                DeDe Account มาแสดงผลประกอบด้วย
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="dede-franchise" style="min-height: 210px;">
            <img src="images/franchise.webp" alt="แฟรนไชส์" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>แฟรนไชส์</h2>
                สามารถส่งรายการสินค้าใหม่ เพื่อเตรียมตัวในการขายสินค้าใหม่ สามารถแก้ไขราคาขาย หรือส่วนลดได้
                และสามารถตรวจสอบยอดขายได้ พร้อมทั้งคำนวณค่าการตลาด และทำบัญชีลูกหนี้ได้ เจ้าของแฟรนไชส์
                สามารถตรวจสอบการทำงาน และการเคลื่อนไหวของสินค้าในร้านค้าแฟรนไขส์ได้ทันที
                และยังสามารถรวมข้อมูลทั้งหมดของแฟรนไชส์ มาวิเคราห์ได้ในหน้าจอเดียว
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="multi-language" style="min-height: 210px;">
            <img src="images/tourists.webp" alt="multi language" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>รองรับหลายภาษา</h2>
                สามารถกำหนดลำดับของภาษาได้ เช่น ภาษาไทย, ภาษาอังกฤษ, ภาษาจีน, ภาษาญี่ปุ่น ไม่จำกัดจำนวนภาษา
                และสามารถแก้ไขข้อความได้ตามที่ต้องการ เพื่อให้ลูกค้า หรือนักท่องเที่ยวชาวต่างชาติ
                สามารถสั่งอาหารได้ในภาษาของตนเอง และยังสามารถพิมพ์ใบเสร็จในภาษาของตนเองได้ด้วย
                โดยภาษาผู้ใช้สามารถแปลได้เอง
                หรือให้ Google Translate แปลให้ในหน้าจอ Merchant ได้เลย
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="data-center" style="min-height: 210px;">
            <img src="images/restaurant_data_synchronization.webp" alt="เชื่อมข้อมูลทั่วโลก" width="200px"
                style="float: right;padding: 10px;" class="imgshadow">
            <div>
                <h2>เชื่อมข้อมูลทั่วโลก</h2>
                สามารเชื่อมข้อมูลทั่วโลกได้ทันทีแบบ Real Time ไม่ว่าจะเป็นการเพิ่มสินค้าใหม่ การกำหนดราคาใหม่
                และเงื่อนไขการขายใหม่ พร้อมทั้งสามารถรับข้อมูลการขาย และกิจกรรมในร้าน ส่งกลับมายังสำนักงานใหญ่ได้ทันที
                เพื่อทำระบบ Big Data และนำไปทำระบบ Business Intelligence ได้ทันที
                และลูกค้ายังสามารถนำข้อมูลออกไปเพื่อประมวลผลเองได้ เช่น ทำระบบ AI เพื่อวิเคราห์พฤติกรรมข้อมูล และให้ AI
                วางแผนการขายให้เราได้ด้วย
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="data-center-management" style="min-height: 210px;">
            <img src="images/chain.webp" alt="จัดการสาขาได้ทั่วโลก" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>จัดการสาขาได้ทั่วโลก</h2>
                กรณีที่มีสาขาอยู่ต่างประเทศ ต่างภาษา ต่างโซนเวลา ต่างระบบภาษี ต่างระบบการชำระเงิน
                โดยระบบนี้ออกแบบมาเพื่อรองรับการทำกิจการได้ทั่วโลก โดยสำนักงานใหญ่สามารถดูและข้อมูล กำหนดข้อมูล
                และดึงข้อมูลเพื่อประวลผลได้ตลอดเวลา ทำให้การบริหารงานสะดวก
                รวดเร็ว<br />พร้อมทั้งระบบภาษาสามารถสลับไปมาได้
                เช่น สำนักงานใช้ภาษา ไทย, อังกฤษ, เวียตนาม, ญี่ปุ่น, เกาหลี สามารถกำหนด สาขาที่ประเทศเวียตนามให้ใช้ภาษา
                เวียตนาม, อังกฤษ, ไทย, ญี่ปุ่น, เกาหลี เมื่อข้อมูลมารวมกัน
                ระบบจะจับคู่ภาษาให้เหมาะสมกับสาขาที่เป็นของตนเอง
                ให้โดยอัตโนมัติ
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="multi-device" style="min-height: 210px;">
            <img src="images/multi-device.webp" alt="หลากหลายอุปกรณ์" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>หลากหลายอุปกรณ์</h2>
                โปรแกรมออกแบบมาเพื่อให้สามารถใช้งานได้หลากหลายอุปกรณ์ เพื่อความสะดวกในการใช้งานเช่น สามารถใช้ได้กับ
                iPhone,
                iPad, Android Tablet, Android Phone, Windows, Ubuntu, Smart TV, Google Chrome, Safari, Firefox
                ขึ้นอยู่กับลักษณะงาน<br />
                <img src="images/logo-apple-app-store.webp" alt="pos" width="20px">
                <img src="images/logo-google-play-store.webp" alt="pos" width="20px">
                <img src="images/logo-windows.webp" alt="pos" width="20px">
                <img src="images/logo-ubuntu.webp" alt="pos" width="20px">
                <img src="images/logo-browser-chrome.webp" alt="pos" width="20px">
                <img src="images/logo-browser-safari.webp" alt="pos" width="20px">
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="cook-helper" style="min-height: 210px;">
            <img src="images/cook.webp" alt="ผู้ช่วยกุ๊ก" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>ผู้ช่วยกุ๊ก</h2>
                จัดคิวการประกอบอาหาร พร้อมรายการละเอียดการประกอบอาหาร เช่น เผ็ดมาก ไม่เค็ม
                สามารถพูดรายการอาหารที่ต้องประกอบอาหารตามคิว พร้อมทั้งการแสดงผลสถานะอาหารช้า
                และมีเสียงเตือนเมื่ออาหารช้า
                และจัดกลุ่มการประกอบอาหาร เพื่อให้ทำงานได้รวดเร็วยิ่งขึ้น ไม่มีการลัดคิว เพื่อให้ลูกค้ามีความพึงพอใจ
                และรวดเร็ว ตามคิว การสั่งอาหาร<br />
            </div>
        </div>
        <hr style="border: 1px solid #000;" />
        <div class="container" id="pay-at-table" style="min-height: 210px;">
            <img src="images/pay-at-table.webp" alt="รับชำระเงินที่โต๊ะลูกค้า" width="200px" style="float: right;padding: 10px;"
                class="imgshadow">
            <div>
                <h2>รับชำระเงินที่โต๊ะลูกค้า</h2>
                เมื่อลูกค้ากดชำระเงินที่ระบบ Self Ordering หรือเรียกพนักงานบริการเพื่อเก็บเงิน พนักงานสามารถแสดงรายการ
                พิมพ์ใบสรุปรายการ ที่โต๊ะลูกค้า และรับชำระเงินเป็นเงินสด หรือให้ลูกค้า Scan Qr Code ระบบ Prompt Pay
                พร้อมจำนวนเงินจากระบบ ได้ทันที พร้อมทั้งสามารถ่ายรูป SLIP
                การจ่ายเงินเข้าสู่ระบบเพื่อตรวจสอบได้ในคราวเดียว
                และยังสามารถพิมพ์ใบเสร็จรับเงิน/ใบกำกับภาษี แทน Cashier ที่โต๊ะลูกค้าได้เลย ไม่ต้องเดินไปมาระหว่าง
                Cashier
                และโต๊ะลูกค้า ทำให้การปิดโต๊ะได้รวดเร็ว และสมบูรณ์<br />
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>

<?php include('footer-script.php'); ?>
