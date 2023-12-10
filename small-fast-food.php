<?php 
    $title="DeDe Pos Cafe : ร้านอาหารขนาดเล็ก DeDe Order Station";
    include('header.php'); 
?>
<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 14px;">
        <h1>โปรแกรม DeDe Order Station ใช้ฟรี...</h1><br/>
        <h2>ร้านอาหารขนาดเล็ก</h2>
        <b>ประหยัดการลงทุน</b> : สามารถใช้มือถือของร้านค้า หรือ แท็บเล็ตของร้านค้า ที่มีอยู่แล้ว ในการทำระบบ DeDe Order Station ได้ สามารถกำหนดได้ว่าจะให้พิมพ์ใบสั่งอาหาร หรือไม่พิมพ์ก็ได้<br/>
        <b>รู้ยอดขายได้ทันที</b> : เมื่อทำรายการขายแล้ว ระบบจะเก็บข้อมูลขึ้นระบบ เจ้าของร้าน สามารถดูยอดขายได้ทันที และสามารถดูรายละเอียดยอดขายได้<br/>
        <b>ลูกค้าสั่งอาหารได้เอง</b> : ลูกค้าสามารถ Scan Qrcode ของร้าน เพื่อสั่งอาหารได้เอง แล้วแสดง Qrcode ให้กับเจ้าของร้าน เพื่อดึงรายการ Order เข้าระบบและคิดเงินได้ทันที<br/>
        <b>ตั้งเครื่องให้ลูกค้าสั่งเอง</b> : ลูกค้าสามารถสั่งอาหารที่เครื่องของร้าน และพิมพ์ใบสั่งอาหารได้เอง โดยไม่ต้องรอพนักงานมารับ Order และส่งใบสั่งอาหารให้เจ้าของร้าน และสามารถ Scan Qrcode เพื่อชำระเงินได้<br/>
        <b>ลูกค้าสั่งอาหารจากที่บ้าน</b> : ลูกค้าสามารถสั่งอาหารจากที่บ้าน และสามารถแจ้งเจ้าของร้านเพื่อเรียกรายการสั่งอาหารขึ้นมาได้ทันที พร้อมทั้งสามารถสร้าง Qrcode การชำระเงินเพื่อส่งให้ลูกค้าทาง Line ได้ทันที<br/>
        <b>ระบบคิว</b> : กรณีลูกค้าจำนวนมาก สามารถใช้ระบบคิว ในการสั่งอาหารได้ โดยลูกค้าสามารถสั่งอาหารได้ที่เครื่องของร้าน และรอรับอาหารตามคิวที่จุดรับอาหารได้ทันที<br/>
        <b>ระบบป้ายบริการ</b> : ลูกค้าสามารถสั่งอาหาร ชำระเงิน และรับป้ายบริการ ไปนั่งรอที่โต๊ะอาหาร เมื่อเจ้าของร้านประกอบอาหารเรียบร้อย ก็จะนำอาหารไปเสิร์ฟที่โต๊ะตามป้ายบริการของลูกค้าได้ทันที<br/>
        <b>รับเงินสด</b> : ในกรณีที่ลูกค้าไม่สะดวกในการ Scan จ่ายเงิน ระบบก็สามารถรับเป็นเงินสดได้ โดยลูกค้าชำระเงินสดโดยตรงกับพนักงาน<br/>
        <b>Delivery</b> : สามารถใช้ระบบ Delivery ได้ โดยสามารถกำหนดราคาหน้าร้าน กับราคา Delivery แตกต่างกันได้<br/>
        <b>สาขา</b> : สามารถขยายสาขาได้เรื่อยๆ โดยไม่ต้องกังวลเรื่องการเก็บเงิน เพราะระบบจะรับเงินลูกค้าทันที หมดปัญหาเรื่องทุจริต และสามารถปรับเปลี่ยนสินค้า/ราคา ได้โดยเจ้าของร้าน ทำงานที่ไหนก็ได้<br/>
        <b>สินค้าอยุดขายชั่วคราว</b> : กรณีสินค้าหมด หรือไม่พร้อม สามารถกำหนดจากเจ้าของร้านได้ว่า อยุดขายชั่วคราว เพื่อให้ลูกค้าเห็น และไม่สามารถสั่งมาได้</b>
        <b>สินค้ามีจำนวนคงเหลือ</b> : เป็นระบบตัดสต๊อกอัตโนมัติ เช่น สินค้าไก่ย่างมี 20 ตัว เมื่อมีการสั่งสินค้าจนครบแล้ว ระบบจะแจ้งว่า สินค้าหมด เมื่อมีการย่างไก่เพิ่ม สามารถป้อนจำนวนที่เพิ่มได้ เพื่อให้ลูกค้าสามารถสั่งได้ต่อเนื่อง</br>
        <b>รองรับหลายภาษา</b> : นักท่องเที่ยวสามารถสั่งอาหารได้ด้วยภาษาของตนเอง เพื่อความเข้าใจในรายการอาหาร/เครื่องดื่ม (ภาษาไทย, ภาษาลาว, ภาษาอังกฤษ,​ ภาษาจีน,​ ภาษาเกาหลี,​ ภาษาญี่ปุ่น)<br/>
        <b>ข้อดี</b> : สามารถรับ Order ลูกค้าได้อย่างรวดเร็ว ราคาไม่ผิดพลาด พร้อมรับชำระเป็นเงินสด หรือ Scan Qrcode ได้ทันที และยังสามารถยืนยัน Slip การโอนได้ด้วย<br/>
        <br/><br/>

        <?php
            $video_id = 'HRd3ZtZNQKY';
            // Adding the loop parameter and playlist with the same video ID to make it loop
            $embed_url = 'https://www.youtube.com/embed/' . $video_id . '?autoplay=1&mute=1&modestbranding=1&loop=1&playlist=' . $video_id;

            echo '<iframe width="400" height="660" src="'. $embed_url .'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        ?>
        <br/><br/>
        <?php
            $video_id = 'bRzxQvY49Iw';
            // Adding the loop parameter and playlist with the same video ID to make it loop
            $embed_url = 'https://www.youtube.com/embed/' . $video_id . '?autoplay=1&mute=1&modestbranding=1&loop=1&playlist=' . $video_id;

            echo '<iframe width="100%" height="860" src="'. $embed_url .'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        ?>


</div>

    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include('footer-script.php'); ?>
