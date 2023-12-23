<?php 
    $title="DeDe Pos Cafe : ร้านอาหารขนาดเล็ก DeDe Order Station";
    include('header.php'); 
?>
<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 14px;">
        <h1>🌟 <b>โปรแกรม DeDe Order Station</b> 🌈</h1>
        <h2>สำหรับร้านอาหารขนาดเล็ก 🍽️: ทำให้การบริการของคุณง่ายขึ้น!</h2>
        <p><b>🚀 กินก่อนจ่าย, จ่ายก่อนกิน 💸:</b> ลูกค้าสามารถจ่ายก่อนหรือหลังรับประทานอาหาร พร้อมทั้งระบบบันทึกรายการอาหารอย่างละเอียด!</p>
        <p><b>🍳 พิมพ์ไปห้องครัว 🖨️:</b> ส่งใบสั่งอาหารไปยังหลายเครื่องพิมพ์ในครัวได้พร้อมกัน ลดเวลาในการจัดการออร์เดอร์!</p>
        <p><b>🔍 Checker 👀:</b> ตรวจสอบรายการอาหารและวิเคราะห์เวลาในการทำอาหาร เพื่อปรับปรุงการบริการให้มีประสิทธิภาพ!</p>
        <p><b>📲 ลูกค้าสั่งอาหารได้เอง 📱:</b> สแกน QR Code ง่ายๆ เพื่อสั่งอาหารโดยไม่ต้องผ่านพนักงาน!</p>
        <p><b>💻 ตั้งเครื่องให้ลูกค้าสั่งเอง 🖥️:</b> ลูกค้าสามารถสั่งอาหารที่เครื่องของร้านและจ่ายเงินได้ทันที!</p>
        <p><b>🏠 ลูกค้าสั่งอาหารจากที่บ้าน 🏡:</b> สั่งอาหารจากที่ไหนก็ได้และสร้าง QR Code สำหรับการชำระเงินได้ทันที!</p>
        <p><b>🔢 ระบบคิว 🎟️:</b> จัดการคิวอาหารได้ง่ายดาย เพื่อความสะดวกสบายของลูกค้า!</p>
        <p><b>🌐 ระบบป้ายบริการ 🏷️:</b> รับป้ายบริการและรออาหารที่โต๊ะได้ทันที เมื่อสั่งเสร็จ!</p>
        <p><b>💵 รับเงินสด 💰:</b> รองรับการชำระเงินสดสำหรับลูกค้าที่ต้องการความสะดวก!</p>
        <p><b>🚚 Delivery 🛵:</b> บริการจัดส่งพร้อมตั้งราคาแยกสำหรับการสั่งนอกสถานที่!</p>
        <p><b>🏢 สาขา 🌍:</b> ขยายสาขาได้ไม่จำกัด พร้อมการจัดการเงินอย่างมีประสิทธิภาพ!</p>
        <p><b>🛑 สินค้าอยุดขายชั่วคราว ⏸️:</b> จัดการสินค้าที่หมดหรือไม่พร้อมขายได้อย่างรวดเร็ว!</p>
        <p><b>📈 สินค้ามีจำนวนคงเหลือ 📊:</b> ตรวจสอบและปรับปรุงจำนวนสต็อกสินค้าได้ทันที!</p>
        <p><b>🌎 รองรับหลายภาษา 🗣️:</b> นักท่องเที่ยวสามารถสั่งอาหารด้วยภาษาของตนเอง!</p>
        <p><b>📊 รู้ยอดขายได้ทันที 📋:</b> ตรวจสอบยอดขายและรายละเอียดได้ทันทีผ่านระบบ!</p>
        <p><b>👍 ข้อดี 🌟:</b> รับออร์เดอร์ได้อย่างรวดเร็วและไม่ผิดพลาด พร้อมรับชำระเป็นเงินสดหรือ QR Code!</p>
        <p><b>💸 ประหยัดการลงทุน 📉:</b> ใช้อุปกรณ์ที่มีอยู่แล้วในร้านได้ ไม่ต้องลงทุนเพิ่ม!</p>
        <p><b>🌐 Data Center 🖥️:</b> จัดการข้อมูลขายแยกตามสาขาได้อย่างละเอียด!</p>
        <p><b>🔗 API 🔨:</b> เชื่อมต่อกับโปรแกรมอื่นได้ง่ายดายผ่าน API!</p>
        <p><b>🔌 Off Line 🔋:</b> ทำงานได้แม้ไม่มีอินเทอร์เน็ต และ Sync ข้อมูลเมื่อมีเน็ตได้!</p>
        <p><b>🎉 ราคาพิเศษ! เพียง 150 บาท/สาขา/เดือน/ 🌈</b><br>ใช้ได้สูงสุด 10 จุดบริการ, 10 เครื่องพิมพ์ในห้องครัว, ลูกค้าสั่งอาหารเองได้ไม่จำกัด (ราคานี้ไม่เกิน 30,000 บิล/เดือน/สาขา)</p>
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
