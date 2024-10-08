<?php 
    $title = "DeDe Pos Cafe : Free";
    include 'header.php'; 
?>

<style>
        body {
            background-color: #f8f9fa;
        }
        .custom-shadow {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
</style>

<body>
    <?php include 'menu.php'; ?>
    <div class="container py-5">
        <h1 class="text-center text-primary mb-5">อุปกรณ์ที่ใช้ได้กับระบบ KIOSK</h1>
        
        <div class="card custom-shadow mb-5">
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>กรณียังไม่มั่นใจ ให้รออนุมัติระบบการชำระเงินด้วย QRCode จากธนาคารก่อน (ไม่มีค่าธรรมเนียม)</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>ต้องใช้ Internet 100% เพราะต้องเชื่อมระหว่างร้านกับลูกค้า และเชื่อมระบบรับชำระเงิน</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>IPAD Gen9 ใช้ได้</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Tablet Android Version 7.1 อย่างน้อย</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>ถ้าต้องการจอใหญ่ สามารถสั่งเองได้จากประเทศจีน หรือหาจอใหญ่ในไทยก็ได้</li>            
                </ul>
            </div>
        </div>

        <h2 class="text-primary mb-4">อุปกรณ์ที่จำเป็นสำหรับระบบ Kiosk ประกอบด้วย</h2>
        <div class="card custom-shadow mb-5">
            <div class="card-body">
                <p class="card-text"><strong>จอสำหรับพนักงาน:</strong> ใช้สำหรับรับเงินสด และจัดการต่างๆ เช่น สินค้าหมด สินค้าหยุดขายชั่วคราว และอื่นๆ สามารถใช้ Tablet Android ทั่วไป หรือ IPAD หรือ โทรศัพท์ (จอจะเล็ก)</p>
                <p class="card-text"><strong>จอสำหรับให้ลูกค้ากดสั่งอาหาร:</strong> สามารถเลือกได้หลายแบบ เริ่มต้น แนะนำให้ใช้ Tablet เก่าที่มีอยู่ทดลองก่อน แล้วค่อยพิจารณาซื้อจอใหญ่ สามารถใช้ได้ไม่จำกัด : <a href="https://www.lazada.co.th/products/i4270512767-s19985795672.html?urlFlag=true&mp=1&tradePath=omItm&tradeOrderId=850886500341530&tradeOrderLineId=850886500441530" target="_blank" class="text-decoration-none">TouchWo (สั่งจากจีน)</a></p>
                <p class="card-text"><strong>เครื่องพิมพ์:</strong> เลือกได้หลายแบบ ทั้งแบบ USB, LAN ถ้าดีที่สุดคือระบบ LAN แต่ต้องเดินสาย LAN จำนวนขึ้นอยู่กับจำนวนเครื่องสั่งอาหาร เครื่องพนักงาน ครัวร้อน ครัวเย็น ฯลฯ : <a href="https://www.lazada.co.th/tag/xprinter/?q=xprinter&catalog_redirect_tag=true" target="_blank" class="text-decoration-none">Thermal Printer (Lazada)</a></p>
                <p class="card-text"><strong>ลิ้นชักเก็บเงิน:</strong> ให้เลือกแบบต่อจากเครื่องพิมพ์ Thermal</p>
            </div>
        </div>

        <div class="text-center">
            <img src="images/logo-apple-app-store.webp" alt="app store" width="40" class="me-2">
            <img src="images/logo-google-play-store.webp" alt="google play store" width="40" class="me-2">
            <img src="images/logo-windows.webp" alt="windows" width="40" class="me-2">
            <img src="images/logo-ubuntu.webp" alt="linux" width="40">
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>
<?php include 'footer-script.php'; ?>