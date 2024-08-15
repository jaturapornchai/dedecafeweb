<?php 
    $title="DeDe Pos Cafe : Price";
    include('header.php'); 
?>
<body>
    <?php include 'menu.php'; ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <h2>ราคาแพ็คเกจ DeDe Order Station (Kiosk) สำหรับร้านอาหารแบบกินก่อนจ่าย</h2>
        <table style="width: 100%;">
            <thead style="border-top: 1pt solid gray;border-bottom: 1pt solid gray">
                <tr style="background-color: rgb(173, 222, 251);font-size: 14px;">
                    <th style="width: 20%;text-align: center;padding: 10px;">แพ็คเกจต่อสาขา</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Starter</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Standard</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Premium</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-dollar-sign icon" style="color: green;"></i>&nbsp;<b>ราคา</b></td>
                    <td class="center">ฟรี</td>
                    <td class="center">150 บาท/เดือน/สาขา</td>
                    <td class="center">300 บาท/เดือน/สาขา</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-tv icon" style="color: blue;"></i>&nbsp;<b>จำนวนเครื่อง Kiosk สูงสุด</b></td>
                    <td class="center">2 เครื่อง</td>
                    <td class="center">4 เครื่อง</td>
                    <td class="center">9 เครื่อง</td>
                </tr>
                <tr>
                    <td><i class="fas fa-print icon" style="color: purple;"></i>&nbsp;<b>จำนวนเครื่องพิมพ์ครัวสูงสุด</b></td>
                    <td class="center">ไม่จำกัด</td>
                    <td class="center">ไม่จำกัด</td>
                    <td class="center">ไม่จำกัด</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-qrcode icon" style="color: orange;"></i>&nbsp;<b>Kbank Prompt Pay ระบบชำระ Qrcode อัตโนมัติ (ด้วยระบบ API) Prompt Pay ของธนาคารกสิกรไทย</b></td>
                    <td class="center blue">ไม่มีค่าธรรมเนียม</td>
                    <td class="center blue">ไม่มีค่าธรรมเนียม</td>
                    <td class="center blue">ไม่มีค่าธรรมเนียม</td>
                </tr>
                <tr>
                    <td><i class="fas fa-credit-card icon" style="color: teal;"></i>&nbsp;<b>KBank EDC เชื่อมอัตโนมัติ<br/>ระบบ USB Port (Prompt Pay,บัตรเครดิต)</b></td>
                    <td class="center blue">&#10003;</td>
                    <td class="center blue">&#10003;</td>
                    <td class="center blue">&#10003;</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-mobile-alt icon" style="color: red;"></i>&nbsp;<b>ระบบชำระ Qrcode อัตโนมัติ (ด้วยระบบ API)<br/>Prompt Pay, Alipay, weChat Pay,True Money</b></td>
                    <td class="center blue">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                    <td class="center blue">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                    <td class="center blue">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                </tr>
                <tr>
                    <td><i class="fas fa-tags icon" style="color: pink;"></i>&nbsp;<b>จำนวนป้ายสูงสุด</b></td>
                    <td class="center">ไม่จำกัด</td>
                    <td class="center">ไม่จำกัด</td>
                    <td class="center">ไม่จำกัด</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-utensils icon" style="color: brown;"></i>&nbsp;<b>ระบบเสริฟท์ (ติดตามอาหาร)<br/>วิเคราะห์เวลาในปรุงอาหาร</b></td>
                    <td class="center blue"></td>
                    <td class="center blue"></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr>
                    <td><i class="fas fa-store icon" style="color: indigo;"></i>&nbsp;<b>ระบบหลังร้าน Merchant</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-calculator icon" style="color: green;"></i>&nbsp;<b><i>ระบบคำนวณวัตถุดิบ (BOM)</i></b></td>
                    <td class="center blue"></td>
                    <td class="center blue"></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr>
                    <td><i class="fas fa-user-tie icon" style="color: navy;"></i>&nbsp;<b>ระบบเจ้าของร้าน (Owner)</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-bell icon" style="color: orange;"></i>&nbsp;<b>ระบบแจ้งเตือนผ่าน Line Notify อัตโนมัติ</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr>
                    <td><i class="fas fa-users icon" style="color: purple;"></i>&nbsp;<b>ระบบสมาชิก</b></td>
                    <td class="center blue"></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-mobile-alt icon" style="color: teal;"></i>&nbsp;<b>ระบบลูกค้าสั่งเองด้วยมือถือ</b></td>
                    <td class="center blue"></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr>
                    <td><i class="fas fa-receipt icon" style="color: gray;"></i>&nbsp;<b>จำนวนบิลขายสูงสุด/เดือน</b></td>
                    <td class="center">10,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 333 บิล/วัน/สาขา</div></td>
                    <td class="center">30,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 1,000 บิล/วัน/สาขา</div></td>
                    <td class="center">60,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 2,000 บิล/วัน/สาขา</div></td>
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
            <tbody>
                <tr>
                    <td><i class="fas fa-dollar-sign icon" style="color: green;"></i>&nbsp;<b>ราคา</b></td>
                    <td class="center">ฟรี</td>
                    <td class="center">400 บาท/เดือน</td>
                    <td class="center">900 บาท/เดือน</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-chair icon" style="color: brown;"></i>&nbsp;<b>จำนวนโต๊ะสูงสุด</b></td>
                    <td class="center">20 โต๊ะ</td>
                    <td class="center">30 โต๊ะ</td>
                    <td class="center">50 โต๊ะ</td>
                </tr>
                <tr>
                    <td><i class="fas fa-print icon" style="color: purple;"></i>&nbsp;<b>จำนวนเครื่องพิมพ์ครัวสูงสุด</b></td>
                    <td class="center">4 เครื่อง</td>
                    <td class="center">8 เครื่อง</td>
                    <td class="center">16 เครื่อง</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-desktop icon" style="color: blue;"></i>&nbsp;<b>จำนวน KDS สูงสุด</b></td>
                    <td class="center">8 เครื่อง</td>
                    <td class="center">16 เครื่อง</td>
                    <td class="center">32 เครื่อง</td>
                </tr>
                <tr>
                    <td><i class="fas fa-users icon" style="color: orange;"></i>&nbsp;<b>จำนวน STAFF สูงสุด</b></td>
                    <td class="center"><b>4 เครื่อง</b><br/><div style="font-size: 10px;">เครื่องต่อไป +20 บาท/เดือน</div></td>
                    <td class="center"><b>8 เครื่อง</b><br/><div style="font-size: 10px;">เครื่องต่อไป +30 บาท/เดือน</div></td>
                    <td class="center"><b>16 เครื่อง</b><br/><div style="font-size: 10px;">เครื่องต่อไป +40 บาท/เดือน</div></td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-receipt icon" style="color: gray;"></i>&nbsp;<b>จำนวนบิลขายสูงสุด/เดือน</b></td>
                    <td class="center">10,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 333 บิล/วัน</div></td>
                    <td class="center">30,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 1,000 บิล/วัน</div></td>
                    <td class="center">60,000 บิล<br/><div style="font-size: 10px;">เฉลี่ย 2,000 บิล/วัน</div></td>
                </tr>
                <tr>
                    <td><i class="fas fa-mobile-alt icon" style="color: teal;"></i>&nbsp;<b>ระบบลูกค้าสั่งเอง Self Ordering</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-cash-register icon" style="color: green;"></i>&nbsp;<b>ระบบหน้าร้าน Cashier</b></td>
                    <td class="center"><b>1 เครื่อง</b></td>
                    <td class="center"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +80 บาท/เดือน</div></td>
                    <td class="center"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +160 บาท/เดือน</div></td>
                </tr>
                <tr>
                    <td><i class="fas fa-store icon" style="color: indigo;"></i>&nbsp;<b>ระบบหลังร้าน Merchant</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-user-tie icon" style="color: navy;"></i>&nbsp;<b>ระบบเจ้าของร้าน (Owner)</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                    <td class="center blue"><b>&#10003;</b></td>
                </tr>
                <tr>
                    <td><i class="fas fa-qrcode icon" style="color: orange;"></i>&nbsp;<b>ระบบชำระ Qrcode อัตโนมัติ (ด้วยระบบ API)<br/>Prompt Pay ของธนาคารกสิกรไทย</b></td>
                    <td class="center blue">ไม่มีค่าธรรมเนียม</td>
                    <td class="center blue">ไม่มีค่าธรรมเนียม</td>
                    <td class="center blue">ไม่มีค่าธรรมเนียม</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td><i class="fas fa-mobile-alt icon" style="color: red;"></i>&nbsp;<b>ระบบชำระ Qrcode อัตโนมัติ (ด้วยระบบ API)<br/>Prompt Pay, Alipay, weChat Pay,True Money</b></td>
                    <td class="center blue">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                    <td class="center blue">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                    <td class="center blue">มีค่าแรกเข้า และค่าธรรมเนียม<br/>Lugent Pay, GB Prime Pay</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include 'footer-script.php'; ?>
