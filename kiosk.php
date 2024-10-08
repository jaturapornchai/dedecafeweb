<?php 
    $title="DeDe Pos Cafe : Self Ordering Kiosk Station";
    include 'header.php'; 
?>
<body>
    <?php include 'menu.php'; ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        โปรแกรม DeDe Kiosk ออกแบบมาสำหรับร้านอาหารขนาดเล็ก เช่น ร้านก๋วยเตี๋ยว ร้านอาหาหารตามสั่ง จ่ายก่อนกิน หรือกินก่อนจ่าย เพื่อลดต้นทุนพนักงาน และเพิ่มประสิทธิภาพในการให้บริการ โดยมีคุณสมบัติดังนี้
        <br/><br/>
        <h2>คุณสมบัติของระบบ</h2>
        <h2>ยืนยันการชำระเงินอัตโนมัติด้วย Qrcode</h2>
        เมื่อลูกค้าสั่งรายการอาหาร และเครื่องดื่มแล้ว สามารถชำระเงินด้วยระบบ Qrcode ได้ทันที รองรับการชำระเงินหลายระบบไม่ว่าจะเป็นระบบ Prompt Pay, Alipay, Wechat Pay, True Money และอื่นๆ ทำให้ลูกค้าสามารถชำระเงินได้ทันที ไม่ต้องรอคิวหรือติดต่อพนักงานแคชเชียร์ และเมื่อได้รับการยืนยันจากธนาคารแล้ว โปรแกรมจะพิมพ์ใบเสร็จ/ใบกำกับภาษีให้ลูกค้า พร้อมหมายเลขคิวให้กับลูกค้า และส่งรายการอาหาร และเครื่องดื่มไปยังครัว เพื่อประกอบอาหารทันที<br/>
        <br/><br/>
        <center>
        <img src="images/logo-promptpay.webp" style="border: 1px solid #555;" class="shadow" alt="Prompt Pay"  height="100px;"/>
        <img src="images/alipay-wechatpay.png" style="border: 1px solid #555;" class="shadow" alt="Alipay"   height="100px;"/>
        <img src="images/logo-truemoney.png" style="border: 1px solid #555;" class="shadow" alt="True Money"   height="100px;"/>
        <img src="images/logo-visa.png" style="border: 1px solid #555;" class="shadow" alt="Visa Card"   height="100px;"/>
        <img src="images/logo-master.png" style="border: 1px solid #555;" class="shadow" alt="Master Card"   height="100px;"/>
        </center>
        <br/><br/>
        <font color="red">
        * การยืนยันการชำระเงินผ่าน Qrcode อาจจะมีค่าบริการจากธนาคาร หรือ Payment Gateway ตามที่ระบุไว้ในสัญญาระหว่างลูกค้า และ Payment Gateway โดย DeDe Pos Cafe ไม่มีส่วนเกี่ยวข้องในการเรียกเก็บค่าบริการดังกล่าว
        </font>
        <br/>
        <font color="blue">
        * กรณีร้านค้าไม่ได้ใช้ระบบยืนยันการชำระเงินอัตโนมัติ เนื่องจากกังวลเรื่องค่าใช้จ่าย ก็สามารถใช้งานระบบนี้ได้ โดยให้ลูกค้าเมื่อสั่งอาหารแล้ว ให้ไปหาพนักงาน แจ้งหมายเลขคิว และ Scan Qrcode การชำระเงินจากพนักงานขาย เพื่อยืนยันการชำระเงิน และพนักงานขายจะสามารถพิมพ์ใบเสร็จ/ใบกำกับภาษีให้กับลูกค้าได้ทันที
        </font>
        <br/><br/>
        <center><h2>ผู้ให้บริการด้านระบบการชำระเงินที่รองรับระบบ Qrcode</h2></center>
        <br/>
        <center>
        <a href="https://www.lugentcorporation.com/th/" target="_blank">
            <img src="https://image.makewebeasy.net/makeweb/m_1920x0/UcQVuE3vM/Home/unnamed__2_.png?v=202305101549" style="border: 1px solid #555;" class="shadow" alt="Lugent Pay"  height="100px;"/>
        </a><br/>
        </center>
        <br/>
        <br/><br/><br/>
        <h2>ระบบ Self Ordering Kiosk ลูกค้าทำรายการซื้ออาหาร/เครื่องดื่ม พร้อมยืนยันการชำระเงินด้วย Prompt Pay การทำงานที่เร็วและทันสมัย</h2>        
        <br/>
        <ol style="font-size:16px;">
            <li><strong>ลดความผิดพลาดในการสั่งอาหาร:</strong><br/>
                <i>* ลูกค้าสามารถเลือกและตรวจสอบรายการที่สั่งได้ด้วยตนเอง ลดโอกาสที่จะเกิดความผิดพลาดจากการทำงานของพนักงาน</i><br/>
                <i>* มี่ระบบสินค้าเลิกขาย ​สินค้าหมด และจะแสดงในหน้าจอ Kiosk หรือหน้าจอมือถือลูกค้า</i><br/>
                <i>* มีระบบจำนวนสินค้า เช่น กำหนดว่าไก่ย่างมีทั้งหมด 20 ตัว เมื่อไก่ย่างหมดแล้ว ลูกค้าจะไม่สามารถสั่งไก่ย่างได้ จนกว่าเจ้าของร้านจะเติมไก่ย่างเข้าไปในระบบ</i><br/><br/>
            </li>
            <li><strong>สั่งอาหารล่วงหน้าด้วยมือถือ:</strong><br/>
                <i>* ลูกค้าสามารถสั่งอาหารก่อนมาถึงร้านได้ด้วยมือถือของตัวเอง เมื่อมาถึงร้านก็ทำการชำระเงินที่ Kiosk ได้ทันที</i><br/><br/>
            </li>
            <li><strong>ความสะดวกและรวดเร็ว:</strong><br/>
                <i>* ลูกค้าสามารถสั่งอาหารและชำระเงินได้ด้วยตนเองโดยไม่ต้องรอพนักงาน</i><br/>
                <i>* การชำระเงินด้วย QR code ทำให้กระบวนการเร็วขึ้นและลดความซับซ้อนในการทอนเงิน</i><br/><br/>
            </li>
            <li><strong>เพิ่มประสิทธิภาพในการทำงาน:</strong><br/>
                <i>* พนักงานสามารถมุ่งเน้นไปที่งานอื่นๆ ที่ต้องการความใส่ใจมากขึ้น</i><br/>
                <i>* ช่วยให้พนักงานมีเวลาทำงานที่มีประสิทธิภาพมากขึ้น</i><br/><br/>
            </li>
            <li><strong>ลดต้นทุน:</strong><br/>
                <i>* ลดต้นทุนที่ใช้จ้างพนักงาน</i><br/>
                <i>* ลดความผิดพลาดที่อาจจะเกิดขึ้นจากการทำงานของพนักงาน ทำให้ลดความสูญเสียในค่าอาหาร</i><br/><br/>
            </li>
            <li><strong>เพิ่มความปลอดภัยในการทำธุรกรรม:</strong><br/>
                <i>* การชำระเงินผ่าน QR code ช่วยลดความเสี่ยงที่จะเกิดการโกง ที่เกิดจากการรับเงินสด</i><br/>
                <i>* เงินเข้าแน่นอนและสามารถตรวจสอบได้ทันที</i><br/><br/>
            </li>
            <li><strong>การรวบรวมข้อมูล:</strong><br/>
                <i>* สามารถรวบรวมข้อมูลลูกค้าและพฤติกรรมการซื้อสินค้าได้ เพื่อใช้ในการวิเคราะห์และวางแผนการตลาด</i><br/><br/>
            </li>
            <li><strong>สื่อโฆษณา:</strong><br/>
                <i>* ระหว่างที่รอรับรายการ เครื่องจะแสดงโษณาขึ้นมาโดยอัตโนมัติ รองรับทั้งรูปภาพ และวิดีโอ</i><br/><br/>
            </li>
        </ol>
    </div>

    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include 'footer-script.php'; ?>
