<?php 
    $title = "โปรแกรมร้านอาหาร ใช้ฟรี รับเงินด้วย Qrcode แบบอัตโนมัติ ไม่ต้องถ่ายรูป Slip";
    include 'header.php'; 
?>

<body>
    <?php include 'menu.php'; ?>
    <div class="container my-5">
        <h1 class="text-center mb-5 text-primary">ใช้ฟรี* - ระบบ KIOSK ร้านอาหาร</h1>
        <div class="card custom-card">
            <div class="card-body">
                <h5 class="card-title mb-4"><b>ร้านจะได้อะไรจากการใช้ KIOSK</b></h5>
                <div class="custom-list">
                    <div class="custom-list-item">
                        <i class="bi bi-cash-stack me-2 text-primary"></i>
                        <b>ลดต้นทุนพนักงาน</b> KIOSK เหมาะกับร้านอาหารประเภทจ่ายก่อนกิน เพื่อลดจำนวนพนักงานรับ Order พนักงาน Cashier หมดปัญหาเรื่องสั่งอาหารผิด ไม่ต้องถ่ายรูป SLIP เพราะเงินเข้าทันที (ร้านกาแฟ, ร้าน Cafe, ศูนย์อาหาร, ร้าน Fast Food)
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-graph-up-arrow me-2 text-success"></i>
                        <b>เพิ่มยอดขาย</b> ลูกค้าสามารถเลือกสินค้าได้นานขึ้นด้วยมือถือ หรือเครื่อง KIOSK ทำให้การสั่งต่อ Order มากขึ้น และยอดขายเพิ่มขึ้น
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-tools me-2 text-info"></i>
                        <b>ลดการลงต้นทุนอุปกรณ์</b> ใช้ได้กับทุกอุปกรณ์ Android Tablet, Android Phone, iPad, iPhone, Windows, Linux เอาเครื่องเก่าที่ไม่ได้ใช้มาใช้ใหม่ได้
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="card custom-card">
            <div class="card-body">
                <h5 class="card-title mb-4"><b>เหมาะกับร้านแบบไหนบ้าง</b></h5>
                <div class="custom-list">
                    <div class="custom-list-item">
                        <i class="bi bi-credit-card me-2 text-primary"></i>
                        <b>กินก่อนจ่าย</b> ลูกค้าสั่งอาหารจากมือถือของลูกค้า หรือสั่งผ่านพนักงานของร้าน และเมื่อมีการเรียกเช็คบิล ระบบรวมใบสั่งแต่ละครั้ง มาสรุปเป็นบิลเดียว และจ่ายเงินที่โต๊ะ หรือจ่ายเงินที่จุดจ่ายเงิน หลังจากกินเสร็จ เช่น ร้านก๋วยเตี๋ยว ร้านอาหารทั่วไป
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-cart-check me-2 text-success"></i>
                        <b>จ่ายก่อนกิน</b> ร้านที่เป็นระบบจ่ายก่อนกินทั้งหมด เหมือนร้านอาหารในประเทศญี่ปุ่นนิยมใช้ ที่เราต้องไปกดเลือกอาหาร และจ่ายเงินก่อน ถึงจะได้คิว และเข้าไปในร้าน
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-cup-hot me-2 text-warning"></i>
                        <b>ร้านกาแฟ</b> ลูกค้าสามารถสั่งกดเอง และชำระเงินเอง สามารถเลือกความเข้มข้นได้ ใส่น้ำตาล ใส่นม ฯลฯ หลังจากชำระเงิน มีระบบคิวรอเรียกได้เลย
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-truck me-2 text-info"></i>
                        <b>Food Truck</b> ลูกค้าสามารถสั่งกดเอง และชำระเงินเอง สามารถเลือกความต้องการเพิ่มเติมได้ เผ็ดมาก เผ็ดน้อย ไม่หวาน ฯลฯ และป้อนหมายเหตุได้ด้วย หลังจากชำระเงิน มีระบบคิวรอเรียกได้เลย
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-phone me-2 text-secondary"></i>
                        <b>ลูกค้าสั่งเองที่โต๊ะ</b> ลูกค้าสามารถสั่งกดเอง และชำระเงินเอง ที่โต๊ะได้ด้วยมือถือตัวเอง หลังจากชำระเงิน บิลทั้งหมดจะวิ่งไปที่ครัว หรือบาร์ได้ทันที
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-tablet me-2 text-dark"></i>
                        <b>รับ Order ที่โต๊ะ</b> เจ้าของร้านสามารถถือเครื่องไปรับ Order ที่โต๊ะก็ได้ และให้ลูกค้า Scan จ่ายเงิน หรือเป็นเงินสด หลังจากชำระเงิน บิลทั้งหมดจะวิ่งไปที่ครัว หรือบาร์ได้ทันที
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-person-video me-2 text-danger"></i>
                        <b>ระบบ KIOSK สามารถใช้แบบผสมได้</b> ทั้งให้ลูกค้าสั่งเองที่เครื่อง สั่งด้วยมือถือของลูกค้าเอง หรือสั่งผ่านเจ้าของร้าน หรือพนักงาน
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-building me-2 text-muted"></i>
                        <b>ร้านอาหารขนาดใหญ่</b> แนะนำใช้โปรแกรมร้านอาหารเต็มรูปแบบ
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="card custom-card">
            <div class="card-body">
                <h5 class="card-title mb-4"><b>ความสามารถของระบบ Kiosk</b></h5>
                <div class="custom-list">
                    <div class="custom-list-item">
                        <i class="bi bi-server me-2 text-primary"></i>
                        <b>รวมข้อมูล</b> สามารถดูข้อมูลทุกเครื่อง ทุกสาขารวมกันได้ โดยไม่ต้อง Login ใหม่ มีกี่สาขาก็เอาอยู่
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-gear me-2 text-secondary"></i>
                        <b>หน้าร้านจัดการเอง</b> สินค้าหยุดขายชั่วคราว สินค้าหมด หรือสินค้ามีจำนวน เช่น ขายได้แค่ 10 ชิ้น ระบบจะหยุดขายให้เอง ไม่ต้องกดปุ่มอะไรเลย เพื่อป้องกันการสั่งแล้วไม่ได้สินค้า ทั้งหมดหน้าร้านสามารถจัดการได้เอง
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-card-list me-2 text-info"></i>
                        <b>e-Menu</b> รายการอาหารเครื่องดื่ม สามารถเพิ่ม ลบ แก้ไข ย้ายหมวด ได้ตลอดเวลา ทำให้สะดวก ไม่ต้องพิมพ์เมนูอีกต่อไป
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-list-check me-2 text-success"></i>
                        <b>จัดการ Order ง่าย</b> สินค้าหยุดขายชั่วคราว สินค้าเลิกขาย สินค้าหมด ผู้จัดการ หรือครัว กดได้เอง เพื่อไม่ให้ลูกค้าสั่งเข้ามา หมดปัญหาเรื่องสั่งแล้วไม่ได้ของ
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-cart-plus me-2 text-primary"></i>
                        <b>สะดวก</b> ลูกค้าสั่งอาหารเอง ด้วยเครื่อง KIOSK และชำระเงินก่อน ระบบถึงจะส่ง Order เข้าครัว (ลูกค้าสั่งได้มากขึ้น เพราะไม่ต้องรีบ)
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-phone me-2 text-info"></i>
                        <b>สบาย</b> ลูกค้าสั่งอาหารเอง ด้วยมือถือของลูกค้าเอง ชำระเงินด้วยมือถือของลูกค้าเอง ระบบถึงจะส่ง Order เข้าครัว (ระบบนี้ไม่ต้องกลัวว่าลูกค้าจะต่อคิว)
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-people me-2 text-secondary"></i>
                        พนักงานไปรับ Order ลูกค้าได้ ในกรณีที่ลูกค้าต้องการสั่งกับพนักงาน
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-tablet me-2 text-warning"></i>
                        พนักงานสามารถถือเครื่อง ไปรับ Order ที่โต๊ะได้ ลูกค้าจ่ายที่โต๊ะได้เลย
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-lightning-fill me-2 text-danger"></i>
                        <b>รวดเร็ว</b> ส่ง Order เข้าห้องครัว หรือบาร์น้ำ หลังจากยืนยันการรับเงินแล้ว ทันที
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-currency-exchange me-2 text-success"></i>
                        <b>ขายได้หลายช่องทาง</b> กำหนดราคาได้หลายแบบ ราคาหน้าร้าน, ราคากลับบ้าน, ราคา Grab, ราคา Food Panda, ราคา Line Man เพราะบางร้าน ราคาไม่เท่ากัน แล้วแต่ช่องทางการขาย
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-tv me-2 text-info"></i>
                        <b>เร็วขึ้นไปอีก</b> แสดงจอ KDS สำหรับหัวหน้าครัว เพื่อตรวจสอบ Order ที่มาใหม่ และค้างอยู่ จะมีกี่จอก็ได้ เอาไว้หน้ากุ๊กเลยก็ได้ ลูกค้าสั่งปุ๊บ ทำปั๊บ
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-check-circle-fill me-2 text-success"></i>
                        <b>Checker</b> มีระบบการยืนยันการเสิร์ฟ Order ไม่มีตกหล่น ถ้า Order ไหนช้า ก็จะขึ้นสีแดงให้ พร้อมแจ้งเตือนผ่าน Line กลุ่มอาหารช้า เจ้าของร้านจะได้รับการแจ้งเตือนตลอดเวลา เพื่อแก้ไขสถานการณ์ได้อย่างรวดเร็ว
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-eye me-2 text-primary"></i>
                        <b>ดูได้ทุกบิล</b> ทุก Order ส่งเข้า Line กลุ่ม ได้ เจ้าของร้าน ผู้จัดการ สามารถดูบิลได้ทุกบิล แค่ดูใน Line กลุ่ม ไม่ต้องเปิดระบบ ไม่ต้องเปิดเว็บ ไม่ต้องเปิดโปรแกรม ดูได้ทุกที่ทุกเวลา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-bar-chart-line me-2 text-success"></i>
                        เจ้าของร้านดูยอดขายผ่านมือถือได้ตลอดเวลา
                    </div>
                    <div class="custom-list-item">
                        <i class="bi bi-robot me-2 text-muted"></i>
                        <b>ChatGPT</b> ส่งข้อมูลเข้าระบบ AI ได้ เพื่อให้วิเคราะห์สินค้าขายดี สินค้าขายไม่ดี และสรุปยอดขาย ไปจนถึงการวางแผนการขาย การจัด Set อาหาร อัตโนมัติ และอื่นๆ แล้วแต่จะจินตนาการ
                    </div>
                </div>
            </div>
        </div>
        <br/>
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
