<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>DeDe POS Cafe</title>
    <meta name="description" content="โปรแกรมร้านอาหารที่ทันสมัย ใช้สำหรับสั่งอาหารด้วยมือถือได้ง่าย ไม่ว่าจะเป็นการสั่งอาหารเอง, กินก่อนจ่าย, จ่ายก่อนกิน หรือบุฟเฟต์ รองรับทั้ง android, ios, windows และ ubuntu พร้อมบริการจัดส่งถึงบ้าน">
    <meta name="author" content="Ban Chiang Soft">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php include('include/header.php'); ?>
    <div style="width: 100%;height: auto; padding: 10px;background-image: url('images/home-background.png');background-repeat: no-repeat;background-size: cover;margin-top: 90px;">
        <div class="container" style="width: auto;padding: 0px;height: auto;">
            <div style="font-size:5vw;text-shadow: 4px 4px #000;color: white;"><b><span>ระบบร้านอาหารครบวงจร</span></b>
            </div>
            <div style="font-size:2vw;text-shadow: 2px 2px #000;color: white;">
                ช่วยให้การบริหารจัดการร้านอาหารของคุณง่ายขึ้น</div><br />
            <a href="https://dedefoodorder.web.app/" target="_blank" class="button">ทดลองใช้ระบบสั่งอาหาร (Self
                Ordering)</a><br /><br />
            <a href="https://dedemerchant.web.app/" class="button">สมัครใช้ฟรี</a><br /><br />
            <img src="images/logo-apple-app-store.png" alt="app store" width="40px;">
            <img src="images/logo-google-play-store.png" alt="google play store" width="40px;">
            <img src="images/logo-windows.png" alt="windows" width="40px;">
            <img src="images/logo-ubuntu.png" alt="linux" width="40px;">
        </div>
    </div>
    <div class="container" style="width: auto;padding: 0px;height: auto;padding: 18px;">
        <h1>รองรับรูปแบบร้านอาหาร</h1>
        <div class="row">
            <div class="col">
                <button class="buttonhome" onclick="document.getElementById('eat-and-pay').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/eat-and-pay.png" alt="pos" width="90%" class="imgshadow"><br />
                    <b style="color: #000;font-size: 18px;">กินก่อนจ่าย</b>
            </div>
            <div class="col">
                <button class="buttonhome" onclick="document.getElementById('pay-and-eat').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/pay-and-eat.png" alt="pos" width="90%" class="imgshadow"><br />
                    <b style="color: #000;font-size: 18px;">จ่ายก่อนกิน</b>
            </div>
            <div class="col">
                <button class="buttonhome" onclick="document.getElementById('buffet').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/buffet.png" alt="pos" width="90%" class="imgshadow"><br />
                    <b style="color: #000;font-size: 18px;">บุฟเฟต์</b>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" style="width: auto;padding: 0px;height: auto;">
        <h1>ระบบร้านอาหารครบวงจร</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-pos').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/cashier.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    <img src="images/logo-windows.png" alt="pos" width="20px">
                    <img src="images/logo-ubuntu.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบ Cashier</b><br />ดูแลเงินสด
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-merchant').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/merchant.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    <img src="images/logo-windows.png" alt="pos" width="20px">
                    <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
                    <img src="images/logo-browser-safari.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบ Merchant</b><br />จัดการหลังบ้าน
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-customer-display').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/customer-display.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>Customer Display</b><br />หน้าจอฝั่งลูกค้า
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-staff').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/staff-system.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบ Staff</b><br />สำหรับพนักงานบริการ
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-kds').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/kds-system.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    </br>
                    <b style="color: #000;font-size: 18px;">ระบบห้องครัว (KDS)</b>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-delivery').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/delivery-system.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบจัดการ Delivery</b><br />จัดคิวการส่งอาหาร
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-queue').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/queue-system.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบ Queue</b><br />จัดคิวลูกค้าพร้อมแจ้งเตือน
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-self-order').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/self-order.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
                    <img src="images/logo-browser-safari.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบลูกค้าสั่งเอง</b><br />ด้วย QR Code
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-crm').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/crm.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
                    <img src="images/logo-browser-safari.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบ CRM</b><br />ประวัติลูกค้า<br />สถิติการใช้บริการ
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-account').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/account-system.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
                    <img src="images/logo-browser-safari.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบบัญชี</b><br />สต๊อก, เจ้าหนี้, ลูกหนี้, เงินสด, ธนาคาร, ปิดงบ
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-owner').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/owner-system.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
                    <img src="images/logo-google-play-store.png" alt="pos" width="20px">
                    <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
                    <img src="images/logo-browser-safari.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบ Owner</b><br />เจ้าของร้าน
                    </div>
                </button>
            </div>
            <div class="col-lg-3 col-md-6 col-12 py-3">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('dede-franchise').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/franchise.png" alt="pos" width="90%" class="imgshadow"><br />
                    <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
                    <img src="images/logo-browser-safari.png" alt="pos" width="20px">
                    </br>
                    <div style="color: #000;font-size: 18px;">
                        <b>ระบบแฟรนไชส์</b><br />ดูแลร้านสมาชิก
                    </div>
                </button>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <br />
    <div class="container" style="width: auto;padding: 0px;height: auto;">
        <h1>คุณสมบัติ</h1>
        <div class="row">
            <div class="col-lg-2 col-md-6 col-12 py-2">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('multi-language').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/tourists.png" alt="pos" width="100%" class="imgshadow"><br />
                    <div style="color: #000;font-size: 12px;">
                        <b>รองรับหลายภาษา</b><br />นักท่องเที่ยวต่างชาติ<br />
                        สั่งอาหารและเครื่องดื่ม<br />ด้วยภาษาตัวเอง
                    </div>
                </button>
            </div>
            <div class="col-lg-2 col-md-6 col-12 py-2">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('data-center').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/restaurant_data_synchronization.png" alt="pos" width="100%" class="imgshadow"><br />
                    <div style="color: #000;font-size: 12px;">
                        <b>เชื่อมข้อมูลทั่วโลก</b><br />ข้อมูลเชื่อมถึงกันทันที<br />Internet เสีย<br />ก็ยังใช้ระบบได้
                    </div>
                </button>
            </div>
            <div class="col-lg-2 col-md-6 col-12 py-2">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('data-center-management').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/chain.png" alt="pos" width="100%" class="imgshadow"><br />
                    <div style="color: #000;font-size: 12px;">
                        <b>จัดการสาขาได้ทั่วโลก</b><br />ภาษาของสำนักงานใหญ่<br />และภาษาของสาขา<br />Data
                        Center
                    </div>
                </button>
            </div>
            <div class="col-lg-2 col-md-6 col-12 py-2">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('multi-device').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/multi-device.png" alt="pos" width="100%" class="imgshadow"><br />
                    <div style="color: #000;font-size: 12px;">
                        <b>หลากหลายอุปกรณ์</b><br />Windows, Ubuntu<br />Andoid, iOS, Browser
                    </div>
                </button>
            </div>
            <div class="col-lg-2 col-md-6 col-12 py-2">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('cook-helper').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/cook.png" alt="pos" width="100%" class="imgshadow"><br />
                    <div style="color: #000;font-size: 12px;">
                        <b>ผู้ช่วยกุ๊ก</b><br />พูดชื่ออาหารได้<br />จัดคิวประกอบอาหาร<br />ตามอาหารช้าอัตโนมัติ
                    </div>
                </button>
            </div>
            <div class="col-lg-2 col-md-6 col-12 py-2">
                <button class="buttonhome" style="width: 100%;" onclick="document.getElementById('pay-at-table').scrollIntoView({ behavior: 'smooth', block: 'end',inline: 'nearest'});">
                    <img src="images/pay-at-table.png" alt="pos" width="100%" class="imgshadow"><br />
                    <div style="color: #000;font-size: 12px;">
                        <b>รับชำระเงินที่โต๊ะลูกค้า</b><br />รับเป็นเงินสด<br />Qr Prompt
                        Pay<br />พร้อมพิมพ์ใบเสร็จที่โต๊ะ
                    </div>
                </button>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="eat-and-pay">
        <img src="images/eat-and-pay.png" alt="กินก่อนจ่าย" width="200px" style="float: right;padding: 10px;" class="imgshadow">
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
                <li><b>รวมโต๊ะ</b>&nbsp;กรณีลูกค้าต้องการรวมโต๊ะ เพื่อคิดเงินรวมกัน สามารถแจ้งพนักงานให้รวมโต๊ะได้ทันที
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
        <img src="images/pay-and-eat.png" alt="จ่ายก่อนกิน" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>จ่ายก่อนกิน</h2>
            <ul style="padding: 20px;">
                <li><b>ระบบสั่งอาหารล่วงหน้า</b>&nbsp;ลูกค้าสามารถ Scan QR Code เพื่อเลือกสินค้า และเครื่องดื่มล่วงหน้า
                    แล้วระบบจะสร้าง QR Code เพื่อให้เจ้าของร้าน สามารถ Scan ได้จากมือถือลูกค้า
                    และเมื่อรับเงินจากลูกค้าแล้ว รายการที่ลูกค้าเลือกทั้งหมดก็จะเข้าระบบร้านอาหาร และสั่งพิมพ์ไปครัว
                    และระบบ KDS แบบทันที พร้อมระบบคิวในใบเสร็จ</li>
                <li><b>ระบบชำระเงิน</b>&nbsp;เจ้าของร้านสามารถรับ Order จากลูกค้า และสามารถชำระเงินได้ทันที
                    โดยสามารถชำระเงินได้ทั้งสด หรือชำระด้วย Prompt Pay ได้ทันที หลังจากชำระเงินแล้ว ระบบจะส่งเข้าครัว
                    และระบบ KDS ทันที พร้อมระบบคิวในใบเสร็จ</li>
                <li><b>ระบบเรียกคิว</b>&nbsp;เมื่อประกอบอาหารเสร็จแล้ว ระบบจะเรียกคิว
                    มารับอาหารหรือเครื่องดื่มโดยอัตโนมัติ</li>
            </ul>
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="buffet">
        <img src="images/buffet.png" alt="บุฟเฟต์" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>บุฟเฟต์</h2>
            <ul style="padding: 20px;">
                <li><b>เลือกน้ำซุปได้เมื่อเปิดโต๊ะ</b>&nbsp;เลือกน้ำซุป เช่น ซุปกระดูก และซุปหมาล่า
                    ระบบจะแจ้งไปทางครัวเพื่อให้เตรียมรายการได้ล่วงหน้า</li>
                <li><b>ระบบสั่งอาหารด้วยมือถือ</b>&nbsp;ลูกค้าสามารถ Scan QR Code เพื่อเลือกสินค้า และเครื่องดื่ม
                    พร้อมส่งเข้าระบบครัว และระบบ KDS ได้ทันที ทำให้การนำส่งอาหาร และเครื่องดื่มเป็นไปอย่างรวดเร็ว</li>
                <li><b>จัดการเมนู</b>&nbsp;ระบบจัดการเมนู เช่น บุฟเฟต์หมู,​ บุฟเฟต์เนื้อ,​ บุฟเฟต์ทะเล
                    ซึ่งจะเปลี่ยนแปลงไปตามเงื่อนไขที่ลูกค้าเลือก</li>
                <li><b>นับเวลาถอยหลัง</b>&nbsp;มีระบบนับเวลาในการใช้บริการ สามารถแจ้งเตือนเมื่อใกล้หมดเวลา
                    เพื่อแจ้งเตือนลูกค้าได้</li>
            </ul>
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="dede-pos">
        <img src="images/cashier.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe POS (Cashier)</h2>
            <ul style="padding: 20px;">
                <li><b>ใช้ได้หลาย Platform</b>&nbsp;ใช้ได้ทั้งระบบ iOS, Android, Windows, Ubuntu ถ้าเป็นร้านเล็กแนะนำ
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
        <img src="images/merchant.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe Merchant</h2>
            ระบบจัดการหลังบ้าน กำหนดรายละเอียดกิจการ รูปแบบกิจการ รายละเอียดสินค้า รูปภาพสินค้า จัดกลุ่มสินค้า
            ราคาสินค้า เงื่อนไขสินค้า สูตรการตัดสต๊อกของสินค้า รายละเอียดโปรโมชั่น รายละเอียดพนักงาน รายละเอียดลูกค้า
            รายละเอียดโต๊ะ รายละเอียดครัว และรายละเอียดอื่นๆ ที่เกี่ยวข้องกับการจัดการร้านอาหาร เพื่อให้พนักงานเก็บเงิน
            พนักงานบริการ ทำงานได้อย่างรวดเร็ว มีประสิทธิภาพ ไม่ผิดพลาด พร้อมทั้งมีระบบงานบัญชี
            ไม่ว่าจะเป็นการซื้อสินค้า การรับสินค้า การผลิตสินค้า เจ้าหนี้ ลูกหนี้ เงินสด ธนาคาร รายงานต่างๆ
            ที่เกี่ยวข้องกับการบริหารจัดการร้านอาหาร
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="dede-customer-display" style="min-height: 210px;">
        <img src="images/customer-display.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
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
        <img src="images/staff-system.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe Staff</h2>
            เป็น App ที่ทำงานบนระบบมือถือ iOS, Android เพื่อให้พนักงานบริการสามารถให้บริการได้สะดวก รวดเร็ว ไม่ผิดพลาด
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
        <img src="images/kds-system.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
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
        <img src="images/delivery-system.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe Delivery</h2>
            สามารถเปิด Job ตามรายการสั่งอาหารจาก Platform Delivery สามารถสั่งอาหารตาม Order
            โดยระบบจะส่งต่อไปยังครัวโดยอัตโนมัติ พร้อมทั้งสามารถพิมพ์ใบสรุปรายการ เพื่อประกอบกับ Order ของ Platform
            Delivery ได้
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="dede-queue" style="min-height: 210px;">
        <img src="images/queue-system.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe Queue</h2>
            ลูกค้าสามารถ Scan Qr Code เพื่อจองคิวได้เอง หรือให้พนักงานกดจองคิวให้ก็ได้ เมื่อถึงคิว
            พนักงานสามารถกดเพื่อเรียกคิว พร้อมเสียงพูดหมาบเลขคิว ลูกค้าสามารถตรวจสอบคิวได้ผ่านระบบ Internet
            โดยไม่ต้องรออยู่ในร้าน และสามารถเดินไปทำกิจกรรมอย่างอื่นได้ โดยระบบจะแสดงสถานะว่า มีคิวก่อนหน้ากี่คิว
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="dede-self-order" style="min-height: 210px;">
        <img src="images/self-order.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe Self Ordering</h2>
            ลูกค้าสามารถ Scan Qr Code ด้วยมือถือส่วนตัว เพื่อสั่งอาหารได้เอง สามารถติดตามได้ว่าอาหารเสริฟหรือยัง
            และสรุปยอด่าใช้บริการได้ทันที สามารถแยกได้ว่า สั่งทานที่ร้าน หรือสั่งกลับบ้าน โดยรวมเป็นยอดเดียวกัน
            พร้อมทั้งระบบเรียกพนักงานผ่านมือถือ
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="dede-crm" style="min-height: 210px;">
        <img src="images/crm.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe CRM</h2>
            Customer Relation Management ระบบบริหารความสัมพันธ์กับลูกค้า สามารถเก็บรายละเอียดของลูกค้า
            ประวัติการใช้บริการ และสามารถส่งข้อความแจ้งเตือนได้ โดยอัตโนมัติ เช่น วันเกิด วันครบรอบการใช้บริการ
            พร้อมทั้งส่ง SMS ไปยังลูกค้าตามกิจกรรมต่างๆ ที่กำหนดไว้
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="dede-account" style="min-height: 210px;">
        <img src="images/account-system.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>DeDe Account</h2>
            ระบบบัญชีสำหรับร้านอาหาร ออกแบบมาเพื่อร้านอาหารที่ต้องการทำระบบเต็มรูปแบบ เพื่อให้การจัดการเป็นโดยมีระบบ
            ได้ข้อมูลในการตัดสินใจรวดเร็ว ประกอบด้วยระบบต่างๆ คู่มือ
            <ul>
                <li><b>ระบบสินค้าคงคลัง</b>&nbsp;รองรับประเภทสินค้า เช่น อาหาร, เครื่องดื่ม, บริการ, สินค้าสำเร็จรูป,
                    สินค้ากึ่งสำเร็จรูป วัตถุดิบเหลือมากเกินไป วัตถุดิบเหลือน้อยเกินไป พร้อมเตือนเมื่อวัตถุดิบใกล้หมด
                    เหมาะสำหรับสต๊อกร้านอาหารเป็นอย่างมาก</li>
                <li><b>ระบบสั่งซื้อ</b>&nbsp;สามารถสร้างใบสั่งซื้อ เพื่อสั่งซื้อวัตถุดิบ หรือสินค้า จาก Supplier ได้
                </li>
                <li><b>ระบบซื้อ</b>&nbsp;เมื่อมีการซื้อสินค้า สามารถนำเอกสารมาบันทึกการซื้อได้ทันที สามารถซื้อเป็นเงินสด
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
        <img src="images/owner-system.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
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
        <img src="images/franchise.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
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
        <img src="images/tourists.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>รองรับหลายภาษา</h2>
            สามารถกำหนดลำดับของภาษาได้ เช่น ภาษาไทย, ภาษาอังกฤษ, ภาษาจีน, ภาษาญี่ปุ่น ไม่จำกัดจำนวนภาษา
            และสามารถแก้ไขข้อความได้ตามที่ต้องการ เพื่อให้ลูกค้า หรือนักท่องเที่ยวชาวต่างชาติ
            สามารถสั่งอาหารได้ในภาษาของตนเอง และยังสามารถพิมพ์ใบเสร็จในภาษาของตนเองได้ด้วย โดยภาษาผู้ใช้สามารถแปลได้เอง
            หรือให้ Google Translate แปลให้ในหน้าจอ Merchant ได้เลย
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="data-center" style="min-height: 210px;">
        <img src="images/restaurant_data_synchronization.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
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
        <img src="images/chain.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>จัดการสาขาได้ทั่วโลก</h2>
            กรณีที่มีสาขาอยู่ต่างประเทศ ต่างภาษา ต่างโซนเวลา ต่างระบบภาษี ต่างระบบการชำระเงิน
            โดยระบบนี้ออกแบบมาเพื่อรองรับการทำกิจการได้ทั่วโลก โดยสำนักงานใหญ่สามารถดูและข้อมูล กำหนดข้อมูล
            และดึงข้อมูลเพื่อประวลผลได้ตลอดเวลา ทำให้การบริหารงานสะดวก รวดเร็ว<br />พร้อมทั้งระบบภาษาสามารถสลับไปมาได้
            เช่น สำนักงานใช้ภาษา ไทย, อังกฤษ, เวียตนาม, ญี่ปุ่น, เกาหลี สามารถกำหนด สาขาที่ประเทศเวียตนามให้ใช้ภาษา
            เวียตนาม, อังกฤษ, ไทย, ญี่ปุ่น, เกาหลี เมื่อข้อมูลมารวมกัน ระบบจะจับคู่ภาษาให้เหมาะสมกับสาขาที่เป็นของตนเอง
            ให้โดยอัตโนมัติ
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="multi-device" style="min-height: 210px;">
        <img src="images/multi-device.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>หลากหลายอุปกรณ์</h2>
            โปรแกรมออกแบบมาเพื่อให้สามารถใช้งานได้หลากหลายอุปกรณ์ เพื่อความสะดวกในการใช้งานเช่น สามารถใช้ได้กับ iPhone,
            iPad, Android Tablet, Android Phone, Windows, Ubuntu, Smart TV, Google Chrome, Safari, Firefox
            ขึ้นอยู่กับลักษณะงาน<br />
            <img src="images/logo-apple-app-store.png" alt="pos" width="20px">
            <img src="images/logo-google-play-store.png" alt="pos" width="20px">
            <img src="images/logo-windows.png" alt="pos" width="20px">
            <img src="images/logo-ubuntu.png" alt="pos" width="20px">
            <img src="images/logo-browser-chrome.png" alt="pos" width="20px">
            <img src="images/logo-browser-safari.png" alt="pos" width="20px">
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="cook-helper" style="min-height: 210px;">
        <img src="images/cook.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>ผู้ช่วยกุ๊ก</h2>
            จัดคิวการประกอบอาหาร พร้อมรายการละเอียดการประกอบอาหาร เช่น เผ็ดมาก ไม่เค็ม
            สามารถพูดรายการอาหารที่ต้องประกอบอาหารตามคิว พร้อมทั้งการแสดงผลสถานะอาหารช้า และมีเสียงเตือนเมื่ออาหารช้า
            และจัดกลุ่มการประกอบอาหาร เพื่อให้ทำงานได้รวดเร็วยิ่งขึ้น ไม่มีการลัดคิว เพื่อให้ลูกค้ามีความพึงพอใจ
            และรวดเร็ว ตามคิว การสั่งอาหาร<br />
        </div>
    </div>
    <hr style="border: 1px solid #000;" />
    <div class="container" id="pay-at-table" style="min-height: 210px;">
        <img src="images/pay-at-table.png" alt="point of sale" width="200px" style="float: right;padding: 10px;" class="imgshadow">
        <div>
            <h2>รับชำระเงินที่โต๊ะลูกค้า</h2>
            เมื่อลูกค้ากดชำระเงินที่ระบบ Self Ordering หรือเรียกพนักงานบริการเพื่อเก็บเงิน พนักงานสามารถแสดงรายการ
            พิมพ์ใบสรุปรายการ ที่โต๊ะลูกค้า และรับชำระเงินเป็นเงินสด หรือให้ลูกค้า Scan Qr Code ระบบ Prompt Pay
            พร้อมจำนวนเงินจากระบบ ได้ทันที พร้อมทั้งสามารถ่ายรูป SLIP การจ่ายเงินเข้าสู่ระบบเพื่อตรวจสอบได้ในคราวเดียว
            และยังสามารถพิมพ์ใบเสร็จรับเงิน/ใบกำกับภาษี แทน Cashier ที่โต๊ะลูกค้าได้เลย ไม่ต้องเดินไปมาระหว่าง Cashier
            และโต๊ะลูกค้า ทำให้การปิดโต๊ะได้รวดเร็ว และสมบูรณ์<br />
        </div>
    </div>
    <?php include('include/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>