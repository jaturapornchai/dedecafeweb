<?php 
    $title="DeDe Pos Cafe : Price";
    include('header.php'); 
?>
<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        ใช้ก่อนจ่าย สามารถใช้งานได้ทันทีโดยไม่มีค่าใช้จ่ายเริ่มต้น เมื่อครบ 1 เดือน ระบบจะแจ้งไปทาง email, SMS, line เพื่อให้ชำระเงินต่อไป (สามารถสอบถามการใช้งานได้)<br/><br/>
        <h2>ราคาแพ็คเกจ DeDe Order Station (Kiosk) สำหรับร้านอาหารแบบกินก่อนจ่าย</h2>
        <table style="width: 100%;">
            <thead style="border-top: 1pt solid gray;border-bottom: 1pt solid gray">
                <tr style="background-color: rgb(173, 222, 251);font-size: 14px;">
                    <th style="width: 20%;text-align: center;padding: 10px;">แพ็คเกจต่อสาขา</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Standard</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Premium</th>
                </tr>
            </thead>
            <tbody >
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ราคา</b></td>
                    <td style="text-align: center;">150 บาท/เดือน</td>
                    <td style="text-align: center;">300 บาท/เดือน</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนเครื่อง Kiosk สูงสุด</b></td>
                    <td style="text-align: center;">ไม่จำกัด</td>
                    <td style="text-align: center;">ไม่จำกัด</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนป้ายสูงสุด</b></td>
                    <td style="text-align: center;">ไม่จำกัด</td>
                    <td style="text-align: center;">ไม่จำกัด</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนเครื่องพิมพ์ครัวสูงสุด</b></td>
                    <td style="text-align: center;">ไม่จำกัด</td>
                    <td style="text-align: center;">ไม่จำกัด</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบเชื่อม EDC Kbank อัตโนมัติ<br/>ระบบ USB Port (Prompt Pay,บัตรเครดิต)</b></td>
                    <td style="text-align: center;color: blue;">&#10003;</td>
                    <td style="text-align: center;color: blue;">&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบชำระ Qrcode อัตโนมัติ (ด้วยระบบ API)<br/>Prompt Pay, Alipay, weChat Pay,True Money</b></td>
                    <td style="text-align: center;color: blue;">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                    <td style="text-align: center;color: blue;">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบเสริฟท์ (ติดตามอาหาร)<br/>วิเคราะห์เวลาในปรุงอาหาร</b></td>
                    <td style="text-align: center;color: blue;"></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบหลังร้าน Merchant</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b><i>&#10000; ระบบคำนวณวัตถุดิบ (BOM)</i></b></td>
                    <td style="text-align: center;color: blue;"></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบเจ้าของร้าน (Owner)</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบแจ้งเตือนผ่าน Line Notify อัตโนมัติ</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบสมาชิก</b></td>
                    <td style="text-align: center;color: blue;"></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบลูกค้าสั่งเองด้วยมือถือ</b></td>
                    <td style="text-align: center;color: blue;"></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนบิลขายสูงสุด/เดือน</b></td>
                    <td style="text-align: center;">30,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 1,000 บิล/วัน</div></td>
                    <td style="text-align: center;">120,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 4,000 บิล/วัน</div></td>
                </tr>
            </tbody>
        </table>
        <br/><br/>
        <h2>ราคาแพ็คเกจ DeDe POS Cafe สำหรับร้านอาหาร</h2>
        <table style="width: 100%;">
            <thead style="border-top: 1pt solid gray;border-bottom: 1pt solid gray">
                <tr style="background-color: rgb(173, 222, 251);font-size: 14px;">
                    <th style="width: 20%;text-align: center;padding: 10px;">แพ็คเกจต่อสาขา</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Starter</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Standard</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Premium</th>
                </tr>
            </thead>
            <tbody >
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ราคา</b></td>
                    <td style="text-align: center;">500 บาท/เดือน</td>
                    <td style="text-align: center;">1,000 บาท/เดือน</td>
                    <td style="text-align: center;">1,500 บาท/เดือน</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนโต๊ะสูงสุด</b></td>
                    <td style="text-align: center;">20 โต๊ะ</td>
                    <td style="text-align: center;">30 โต๊ะ</td>
                    <td style="text-align: center;">50 โต๊ะ</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนเครื่องพิมพ์ครัวสูงสุด</b></td>
                    <td style="text-align: center;">4 เครื่อง</td>
                    <td style="text-align: center;">8 เครื่อง</td>
                    <td style="text-align: center;">16 เครื่อง</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวน KDS สูงสุด</b></td>
                    <td style="text-align: center;">8 เครื่อง</td>
                    <td style="text-align: center;">16 เครื่อง</td>
                    <td style="text-align: center;">32 เครื่อง</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวน STAFF สูงสุด</b></td>
                    <td style="text-align: center;"><b></b>4 เครื่อง</b><br/><div style="font-size: 10px;">เครื่องต่อไป +20 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b></b>8 เครื่อง</b><br/><div style="font-size: 10px;">เครื่องต่อไป +30 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b></b>16 เครื่อง</b><br/><div style="font-size: 10px;">เครื่องต่อไป +40 บาท/เดือน</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนบิลขายสูงสุด/เดือน</b></td>
                    <td style="text-align: center;">30,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 1,000 บิล/วัน</div></td>
                    <td style="text-align: center;">60,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 2,000 บิล/วัน</div></td>
                    <td style="text-align: center;">120,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 4,000 บิล/วัน</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบลูกค้าสั่งเอง Self Ordering</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบหน้าร้าน Cashier</b></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +40 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +80 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +160 บาท/เดือน</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบหลังร้าน Merchant</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบเจ้าของร้าน (Owner)</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include('footer-script.php'); ?>
