<?php
$title = "โปรแกรมร้านอาหาร ใช้ฟรี รับเงินด้วย Qrcode แบบอัตโนมัติ ไม่ต้องถ่ายรูป Slip";
include 'header.php';
?>

<body>
    <?php include 'menu.php'; ?>
    <div class="container my-5">
        <h1 class="text-center mb-5 text-primary">ใช้ฟรี* - ระบบร้านอาหาร</h1>

        <div class="card custom-card">
            <div class="card-body">
                <h5 class="card-title mb-4"><b>ร้านจะได้อะไรจากการใช้</b></h5>
                <div class="custom-list">
                    <div class="custom-list-item">
                        <i class="bi bi-graph-up-arrow me-2 text-success"></i>
                        <b>เพิ่มยอดขาย</b> ลูกค้าสามารถเลือกสินค้าได้นานขึ้นด้วยมือถือ ทำให้การสั่งต่อ Order มากขึ้น และยอดขายเพิ่มขึ้น
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-cash-coin me-2 text-success"></i>
                        <b>ลดต้นทุนพนักงาน</b> ใช้พนักงานจำนวนน้อยลง แต่ได้ประสิทธิภาพการทำงานมากขึ้น ลดค่าใช้จ่ายในการจ้างพนักงาน
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-phone me-2 text-primary"></i>
                        <b>ลดการลงต้นทุนอุปกรณ์</b> ใช้ได้กับทุกอุปกรณ์ Android Tablet, Android Phone, iPad, iPhone, Windows, Linux เอาเครื่องเก่าที่ไม่ได้ใช้มาใช้ใหม่ได้ ไม่ต้องจ่ายค่าใช้จ่ายในการซื้ออุปกรณ์ใหม่
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-shield-check me-2 text-danger"></i>
                        <b>ลดการทุจริต</b> ลูกค้าจะได้รับใบเสร็จทันที ผ่านระบบ email และชำระเงินด้วย Qrcode API ทำให้ลดการทุจริตในการชำระเงิน และการทำรายการ
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-lightning-charge me-2 text-warning"></i>
                        <b>รวดเร็ว</b> ลูกค้าสามารถสั่งอาหารได้ทันที จากมือถือของลูกค้าเอง และส่งเข้าครัว เพื่อประกอบอาหารได้ทันที ลูกค้าไม่ต้องรอนาน พร้อมมีระบบวิเคราห์การทำอาหาร เริ่มตั้งแต่การสั่งอาหารจนถึงการเสิร์ฟอาหาร เพื่อการวิเคราะห์ข้อมูลการทำงาน นำไปปรับปรุงการทำงานให้ดียิ่งขึ้น
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-check-circle me-2 text-success"></i>
                        <b>ลดการผิดพลาด</b> ลูกค้าสามารถเลือกสินค้าได้เอง ไม่มีการผิดพลาดจากการสั่งอาหารของพนักงาน ทำให้ลดการผิดพลาดในการสั่งอาหาร และการเสิร์ฟอาหาร ทำให้ลูกค้ามีประสบการณ์ที่ดี และกลับมาใช้บริการอีกครั้ง
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-gear me-2 text-secondary"></i>
                        <b>ระบบหลังบ้าน</b> มีระบบสต๊อกสินค้า วัตถุดิบ รวมไปถึงระบบ BOM ที่ช่วยให้การจัดการสต๊อกสินค้า วัตถุดิบ และการทำอาหารเป็นไปอย่างรวดเร็ว และมีระบบรายงานการทำงาน ที่ช่วยให้เจ้าของร้านสามารถดูยอดขาย และประสิทธิภาพการทำงานของร้านได้ตลอดเวลา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-star me-2 text-warning"></i>
                        <b>ระบบสมาชิก สะสมแต้ม</b> มีระบบสมาชิก สะสมแต้ม ที่ช่วยให้เจ้าของร้านสามารถสร้างสมาชิก และสะสมแต้มให้ลูกค้าได้ และสามารถใช้แต้มสะสมในการส่วนลด หรือแลกของรางวัลได้
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-megaphone me-2 text-info"></i>
                        <b>ระบบการส่งเสริมการขาย</b> มีระบบส่งเสริมการขาย ที่ช่วยให้เจ้าของร้านสามารถส่งข้อความ โปรโมชั่น และส่วนลด ไปยังลูกค้าได้ และสามารถส่งข้อความไปยังลูกค้าที่สั่งอาหารมาก่อนหน้าได้ ทำให้ลูกค้ากลับมาใช้บริการอีกครั้ง
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="card custom-card">
            <div class="card-body">
                <h5 class="card-title mb-4"><b>ความสามารถของระบบ ร้านอาหาร</b></h5>
                <div class="custom-list-container">
                    <div class="custom-list-item">
                        <i class="bi bi-cash-coin me-2 text-success"></i>
                        <b>กินก่อนจ่าย</b> ลูกค้าสั่งอาหารจากมือถือของลูกค้า หรือสั่งผ่านพนักงานของร้าน และเมื่อมีการเรียกเช็คบิล ระบบรวมใบสั่งแต่ละครั้ง มาสรุปเป็นบิลเดียว และจ่ายเงินที่โต๊ะ หรือจ่ายเงินที่จุดจ่ายเงิน หลังจากกินเสร็จ
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-phone me-2 text-primary"></i>
                        <b>ลูกค้าสั่งเองที่โต๊ะ</b> ลูกค้าสามารถสั่งอาหารได้เอง ที่โต๊ะ โดยใช้มือถือของลูกค้า หรือให้พนักงานสั่งให้ลูกค้า และเมื่อลูกค้าสั่งเสร็จ ระบบจะส่งเข้าครัว หรือบาร์ทันที
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-person-lines-fill me-2 text-info"></i>
                        <b>รับ Order ที่โต๊ะ</b> ร้านอาหารที่มีพนักงานรับ Order ที่โต๊ะ และส่งเข้าครัว หรือบาร์ ทันที ทำให้ลูกค้าได้รับอาหารได้เร็วขึ้น
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-display me-2 text-warning"></i>
                        <b>ระบบ KDS</b> ร้านอาหารที่มีระบบ KDS จัดคิวการทำอาหาร ตามอาหารช้า ทำให้ลูกค้าได้รับอาหารที่ร้อน และสดอร่อยที่สุด
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-truck me-2 text-success"></i>
                        <b>ร้านอาหารที่มีบริการ Delivery</b> ร้านอาหารที่มีบริการ Delivery สามารถใช้ระบบนี้ในการรับ Order จากลูกค้า และส่ง Order ไปยังลูกค้าได้
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-bag me-2 text-primary"></i>
                        <b>ร้านอาหารที่มีบริการ Takeaway</b> ร้านอาหารที่มีบริการ Takeaway สามารถใช้ระบบนี้ในการรับ Order จากลูกค้า และส่ง Order ไปยังลูกค้าได้
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-diagram-3 me-2 text-info"></i>
                        <b>รวมข้อมูล</b> สามารถดูข้อมูลทุกเครื่อง ทุกสาขารวมกันได้ โดยไม่ต้อง Login ใหม่ มีกี่สาขาก็เอาอยู่
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-gear me-2 text-secondary"></i>
                        <b>หน้าร้านจัดการเอง</b> สินค้าหยุดขายชั่วคราว สินค้าหมด หรือสินค้ามีจำนวน เช่น ขายได้แค่ 10 ชิ้น ระบบจะหยุดขายให้เอง ไม่ต้องกดปุ่มอะไรเลย เพื่อป้องกันการสั่งแล้วไม่ได้สินค้า ทั้งหมดหน้าร้านสามารถจัดการได้เอง
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-card-list me-2 text-primary"></i>
                        <b>e-Menu</b> รายการอาหารเครื่องดื่ม สามารถเพิ่ม ลบ แก้ไข ย้ายหมวด ได้ตลอดเวลา ทำให้สะดวก ไม่ต้องพิมพ์เมนูอีกต่อไป
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-pencil-square me-2 text-success"></i>
                        <b>จัดการ Order ง่าย</b> สินค้าหยุดขายชั่วคราว สินค้าเลิกขาย สินค้าหมด ผู้จัดการ หรือครัว กดได้เอง เพื่อไม่ให้ลูกค้าสั่งเข้ามา หมดปัญหาเรื่องสั่งแล้วไม่ได้ของ
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-phone-fill me-2 text-info"></i>
                        <b>สบาย</b> ลูกค้าสั่งอาหารเอง ด้วยมือถือของลูกค้าเอง ชำระเงินด้วยมือถือของลูกค้าเอง ระบบถึงจะส่ง Order เข้าครัว (ระบบนี้ไม่ต้องกลัวว่าลูกค้าจะต่อคิว)
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-person-lines-fill me-2 text-primary"></i>
                        พนักงานไปรับ Order ลูกค้าได้ ในกรณีที่ลูกค้าต้องการสั่งกับพนักงาน
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-tablet-fill me-2 text-secondary"></i>
                        พนักงานสามารถถือเครื่อง ไปรับ Order ที่โต๊ะได้ ลูกค้าจ่ายที่โต๊ะได้เลย
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-lightning-fill me-2 text-warning"></i>
                        <b>รวดเร็ว</b> ส่ง Order เข้าห้องครัว หรือบาร์น้ำ หลังจากยืนยันการรับเงินแล้ว ทันที
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-shop me-2 text-success"></i>
                        <b>ขายได้หลายช่องทาง</b> กำหนดราคาได้หลายแบบ ราคาหน้าร้าน, ราคากลับบ้าน, ราคา Grab, ราคา Food Panda, ราคา Line Man เพราะบางร้าน ราคาไม่เท่ากัน แล้วแต่ช่องทางการขาย
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-speedometer2 me-2 text-danger"></i>
                        <b>เร็วขึ้นไปอีก</b> แสดงจอ KDS สำหรับหัวหน้าครัว เพื่อตรวจสอบ Order ที่มาใหม่ และค้างอยู่ จะมีกี่จอก็ได้ เอาไว้หน้ากุ๊กเลยก็ได้ ลูกค้าสั่งปุ๊บ ทำปั๊บ
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-check-circle-fill me-2 text-success"></i>
                        <b>Checker</b> มีระบบการยืนยันการเสิร์ฟ Order ไม่มีตกหล่น ถ้า Order ไหนช้า ก็จะขึ้นสีแดงให้ พร้อมแจ้งเตือนผ่าน Line กลุ่มอาหารช้า เจ้าของร้านจะได้รับการแจ้งเตือนตลอดเวลา เพื่อแก้ไขสถานการณ์ได้อย่างรวดเร็ว
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-receipt me-2 text-primary"></i>
                        <b>ดูได้ทุกบิล</b> ทุก Order ส่งเข้า Line กลุ่ม ได้ เจ้าของร้าน ผู้จัดการ สามารถดูบิลได้ทุกบิล แค่ดูใน Line กลุ่ม ไม่ต้องเปิดระบบ ไม่ต้องเปิดเว็บ ไม่ต้องเปิดโปรแกรม ดูได้ทุกที่ทุกเวลา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-graph-up me-2 text-success"></i>
                        <b>บริหารงานได้ทุกที่</b> เจ้าของร้านดูยอดขายผ่านมือถือได้ตลอดเวลา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-robot me-2 text-info"></i>
                        <b>ChatGPT</b> ส่งข้อมูลเข้าระบบ AI ได้ เพื่อให้วิเคราะห์สินค้าขายดี สินค้าขายไม่ดี และสรุปยอดขาย ไปจนถึงการวางแผนการขาย การจัด Set อาหาร อัตโนมัติ และอื่นๆ แล้วแต่จะจินตนาการ
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="card custom-card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-4"><b>* เงื่อนไขการใช้ฟรี</b></h5>
                <div class="custom-list">
                    <div class="custom-list-item">
                        <i class="bi bi-geo-alt-fill me-2 text-danger"></i>
                        ใช้ได้หลายสาขา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-receipt-cutoff me-2 text-success"></i>
                        ระบบ KIOSK ใช้ฟรีไม่เกิน 333 ใบเสร็จต่อวัน/สาขา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-info-square-fill me-2 text-info"></i>
                        กรณีต้องการใช้การรับชำระด้วย QRCode แบบอัตโนมัติ จะต้องขอใช้บริการเพิ่มเติมจากธนาคาร ให้ลงทะเบียนไว้ได้ที่ line : <b>@smlsoft</b>
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-credit-card me-2 text-warning"></i>
                        ถ้าไม่ต้องการรับชำระด้วย QRcode ก็ใช้ได้ แต่ต้องมีพนักงานรับชำระเอง
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include 'footer-script.php'; ?>