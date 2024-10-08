<?php
$title = "DeDe Pos Cafe : Download";
include 'header.php';
?>

<style>
    .custom-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .custom-table__cell {
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
    }
    .custom-table__link {
        text-decoration: none;
    }
    .custom-table__image {
        transition: transform 0.3s ease;
    }
    .custom-table__link:hover .custom-table__image {
        transform: scale(1.05);
    }
</style>

<body>
    <?php include 'menu.php'; ?>
    <div class="container my-5">
        <br/><br/>
        <table class="custom-table">
            <tr>
                <td class="custom-table__cell" width="100%">
                    <b>โปรแกรม KIOSK (สำหรับเครื่อง Android)</b><br/>หน้าจอสำหรับพนักงาน หรือ หน้าจอสำหรับลูกค้าสั่งอาหารเอง
                </td>
                <td class="custom-table__cell">
                    <a class="custom-table__link" href="https://play.google.com/store/apps/details?id=com.smlsoft.dedekiosk" target="_blank">
                        <img class="custom-table__image" src="images/png/download-logo-google.png" alt="Google Play" width="100px" />
                    </a>
                    <br/><br/>
                    <a class="custom-table__link" href="/wait" target="_blank">
                        <img class="custom-table__image" src="images/png/download-logo-appstore.png" alt="App Store" width="100px" />                    
                </td>
            </tr>
        </table>
        <br/>
        <table class="custom-table">
            <tr>
                <td class="custom-table__cell" width="100%">
                    <b>โปรแกรม Merchant Lite (สำหรับเครื่อง Android)</b><br/>โปรแกรมสำหรับเจ้าของร้านใช้บนมือถือ ในการกำหนดค่าต่างๆ เช่น ชื่อบริษัท สินค้า หมวดสินค้า ราคา โปรโมชั่น และอื่นๆ รวมไปถึงรายงานต่างๆ
                </td>
                <td class="custom-table__cell">
                    <a class="custom-table__link" href="https://play.google.com/store/apps/details?id=com.smlsoft.cocomerchantlite" target="_blank">
                        <img class="custom-table__image" src="images/png/download-logo-google.png" alt="Google Play" width="100px" />
                    </a>
                    <br/><br/>
                    <a class="custom-table__link" href="/wait" target="_blank">
                        <img class="custom-table__image" src="images/png/download-logo-appstore.png" alt="App Store" width="100px" />                    
                </td>
            </tr>
        </table>
        <br/>
        <table class="custom-table">
            <tr>
                <td class="custom-table__cell" width="100%">
                    <b>โปรแกรม Merchant ทำงานบน Browser</b><br/>โปรแกรมสำหรับเจ้าของร้านเต็บรูปแบบ ในการกำหนดค่าต่างๆ เช่น ชื่อบริษัท สินค้า หมวดสินค้า ราคา โปรโมชั่น และอื่นๆ รวมไปถึงรายงานต่างๆ
                </td>
                <td class="custom-table__cell">
                    <a class="custom-table__link" href="https://dedemerchant.web.app/" target="_blank">
                        <img class="custom-table__image" src="images/png/browser.png" alt="Browser" width="100px" />
                    </a>
                </td>
            </tr>
        </table>
        <br/>
        <table class="custom-table">
            <tr>
                <td class="custom-table__cell" width="100%">
                    <b>Download</b><br/>โปรแกรมที่ไม่มี App ใน Google Play หรือ App Store สามารถดาวน์โหลดได้จากลิงค์นี้ (Android App, Windows App)
                </td>
                <td class="custom-table__cell">
                    <a class="custom-table__link" href="https://drive.google.com/drive/folders/1clNxnVydeqtG1ZhnT5jjgr99m1g3oLuF?usp=sharing" target="_blank">
                        <img class="custom-table__image" src="images/png/xdownload-icon.png" alt="Download" width="100px" />
                    </a>
                </td>
            </tr>
        </table>
        <br/>
    </div>
    <?php include_once 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include 'footer-script.php'; ?>
