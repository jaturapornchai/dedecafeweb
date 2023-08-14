<?php
$title = "DeDe Pos Cafe Article";
$page = "";
$keyword = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $file = 'article/' . $page . '.html';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $content = str_replace("\n", "<br/>", $content);
        $contentkeyword = strip_tags($content);
        $content = str_replace('สั่งอาหาร', '<span>สั่งอาหาร</span>', $content);
        $content = str_replace('โปรแกรม', '<span>โปรแกรม</span>', $content);
        $content = str_replace('ร้านอาหาร', '<span>ร้านอาหาร</span>', $content);         
    }
}

$filename = 'dictionary.txt';

$dictionary = array();

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $dictionary[] = $line;
    }
    foreach ($dictionary as $word) {
        $word = trim($word);
        // length > 10
        if (strlen($word) > 10) {
            $contentkeyword = str_replace($word, '|' . $word , $contentkeyword);
        }
    }
    $contentkeyword = str_replace('<br/>', '|' , $contentkeyword);
    $contentkeyword = str_replace('(', '|' , $contentkeyword);
    $contentkeyword = str_replace(')', '|' , $contentkeyword);
    $contentkeyword = str_replace(' ', '|' , $contentkeyword);
    $contentkeyword = str_replace(' ', '|' , $contentkeyword);
    $contentkeyword = str_replace('.', '|' , $contentkeyword);
    $contentkeyword = str_replace(',', '|' , $contentkeyword);
    $contentkeyword = str_replace('||', '|' , $contentkeyword);
    $contentkeyword = str_replace('||', '|' , $contentkeyword);
    // to array
    $contentkeyword = explode('|', $contentkeyword);
    // remove if length < 15
    foreach ($contentkeyword as $key => $word) {
        if (strlen($word) < 20) {
            unset($contentkeyword[$key]);
        }
    }
    // count keyword and sort
    $countkeyword = array();
    foreach ($contentkeyword as $word) {
        $word = trim($word);
        if (isset($countkeyword[$word])) {
            $countkeyword[$word] += 1;
        } else {
            $countkeyword[$word] = 1;
        }
    }
    arsort($countkeyword);
    // top ten
    $countkeyword = array_slice($countkeyword, 0, 10);
    $keyword = implode(',', array_keys($countkeyword));
}
include('header.php');
?>

<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <?php
/*$topics = [   "สูตรสำหรับร้านอาหาร ต้มยำกุ้ง",
    "สูตรสำหรับร้านอาหาร ปัดไทย",
    "สูตรสำหรับร้านอาหาร กะเพราไก่",
    "สูตรสำหรับร้านอาหาร แกงส้มชะอมกุ้ง",
    "สูตรสำหรับร้านอาหาร แกงเขียวหวาน",
    "สูตรสำหรับร้านอาหาร ข้าวผัดกุ้ง",
    "สูตรสำหรับร้านอาหาร ข้าวมันไก่",
    "สูตรสำหรับร้านอาหาร ส้มตำ",
    "สูตรสำหรับร้านอาหาร ลาบ",
    "สูตรสำหรับร้านอาหาร ยำวุ้นเส้น",
    "สูตรสำหรับร้านอาหาร ยำทะเล",
    "สูตรสำหรับร้านอาหาร ข้าวปั้น",
    "สูตรสำหรับร้านอาหาร หมูกระทะ",
    "สูตรสำหรับร้านอาหาร หมูสามชั้นทอดกรอบ",
    "สูตรสำหรับร้านอาหาร ทอดมันกุ้ง",
    "สูตรสำหรับร้านอาหาร ขนมจีนน้ำยา",
    "สูตรสำหรับร้านอาหาร ขนมจีนแกงไตปลา",
    "สูตรสำหรับร้านอาหาร แกงป่า",
    "สูตรสำหรับร้านอาหาร แกงเผ็ดปลากระพง",
    "สูตรสำหรับร้านอาหาร แกงจืด",
    "สูตรสำหรับร้านอาหาร ข้าวซอย",
    "สูตรสำหรับร้านอาหาร น้ำตกหมู",
    "สูตรสำหรับร้านอาหาร กุ้งอบวุ้นเส้น",
    "สูตรสำหรับร้านอาหาร ปูผัดผงกะหรี่",
    "สูตรสำหรับร้านอาหาร หอยลายผัดพริกเผา",
    "สูตรสำหรับร้านอาหาร หอยแครงสตู",
    "สูตรสำหรับร้านอาหาร ไก่ทอด",
    "สูตรสำหรับร้านอาหาร ยำปลาดุกฟู",
    "สูตรสำหรับร้านอาหาร ยำคานา",
    "สูตรสำหรับร้านอาหาร ก๋วยเตี๋ยวเรือ",
    "สูตรสำหรับร้านอาหาร ไก่ผัดเม็ดมะม่วงหิมพานต์",
    "สูตรสำหรับร้านอาหาร แกงคั่วกระหรี่ไก่",
    "สูตรสำหรับร้านอาหาร ผัดฉ่ากุ้ง",
    "สูตรสำหรับร้านอาหาร ข้าวเหนียวมะม่วง",
    "สูตรสำหรับร้านอาหาร ทับทิมกรอบ",
    "สูตรสำหรับร้านอาหาร บะหมี่หมูแดง",
    "สูตรสำหรับร้านอาหาร ก๋วยจั๊บน้ำใส",
    "สูตรสำหรับร้านอาหาร ผัดไทยห่อไข่",
    "สูตรสำหรับร้านอาหาร ข้าวผัดปู",
    "สูตรสำหรับร้านอาหาร กุ้งอบชีส",
    "สูตรสำหรับร้านอาหาร ปลาหมึกผัดไข่เค็ม",
    "สูตรสำหรับร้านอาหาร ไก่ย่าง",
    "สูตรสำหรับร้านอาหาร ก๋วยเตี๋ยวหมูแดง",
    "สูตรสำหรับร้านอาหาร หมูย่าง",
    "สูตรสำหรับร้านอาหาร ปลานึ่งมะนาว",
    "สูตรสำหรับร้านอาหาร แกงเลียง",
    "สูตรสำหรับร้านอาหาร ยำกุ้งสด",
    "สูตรสำหรับร้านอาหาร ยำสาหร่าย",
    "สูตรสำหรับร้านอาหาร แกงจืดตำลึง",
    "สูตรสำหรับร้านอาหาร ซุปหน่อไม้",
    "สูตรสำหรับร้านอาหาร สปาเก็ตตี้ผัดไทย",
    "สูตรสำหรับร้านอาหาร ผัดพริกขิง",
    "สูตรสำหรับร้านอาหาร ปลากระพงทอดน้ำปลา",
    "สูตรสำหรับร้านอาหาร แกงเห็ด",
    "สูตรสำหรับร้านอาหาร ก๋วยเตี๋ยวเนื้อ",
    "สูตรสำหรับร้านอาหาร ยำหอยเชอรี่",
    "สูตรสำหรับร้านอาหาร ปอเปี๊ยะทอด",
    "สูตรสำหรับร้านอาหาร หมูปิ้ง",
    "สูตรสำหรับร้านอาหาร ยำปลากระป๋อง",
    "สูตรสำหรับร้านอาหาร ปูนิ่มทอดกระเทียม",
    "สูตรสำหรับร้านอาหาร กุ้งแช่น้ำปลา",
    "สูตรสำหรับร้านอาหาร ข้าวคลุกกะปิ",
    "สูตรสำหรับร้านอาหาร หมูทอดกระเทียมพริกไทย",
    "สูตรสำหรับร้านอาหาร ไก่ทอดเกาหลี",
    "สูตรสำหรับร้านอาหาร ผัดซีอิ้ว",
    "สูตรสำหรับร้านอาหาร แกงเคียน",
    "สูตรสำหรับร้านอาหาร ข้าวหมกไก่",
    "สูตรสำหรับร้านอาหาร คอหมูย่าง",
    "สูตรสำหรับร้านอาหาร สาคูไส้หมู",
    "สูตรสำหรับร้านอาหาร ยำขนมจีน",
    "สูตรสำหรับร้านอาหาร คั่วกลิ้ง",
    "สูตรสำหรับร้านอาหาร ไข่เจียว",
    "สูตรสำหรับร้านอาหาร ปลาดอรี่ทอดกระเทียม",
    "สูตรสำหรับร้านอาหาร ไก่ห่อใบเตย",
    "สูตรสำหรับร้านอาหาร แกงเทโพ",
    "สูตรสำหรับร้านอาหาร สเต็กหมู",
    "สูตรสำหรับร้านอาหาร ต้มข่าไก่",
    "สูตรสำหรับร้านอาหาร ปลาหมึกยัดไส้",
    "สูตรสำหรับร้านอาหาร ผัดกะเพราหมูกรอบ",
    "สูตรสำหรับร้านอาหาร ยำวุ้นเส้นเต้าหู้ยาง",
    "สูตรสำหรับร้านอาหาร ปลาสวายทอดน้ำปลา",
    "สูตรสำหรับร้านอาหาร ขนมจีบ",
    "สูตรสำหรับร้านอาหาร แซลมอนย่าง",
    "สูตรสำหรับร้านอาหาร ต้มเลือดหมู",
    "สูตรสำหรับร้านอาหาร น้ำพริกหนุ่ม",
    "สูตรสำหรับร้านอาหาร ผัดผักบุ้งไฟแดง",
    "สูตรสำหรับร้านอาหาร ต้มแซ่บกระดูกอ่อนเนื้อ",
    "สูตรสำหรับร้านอาหาร ต้มโคล้งปลาเก๋า",
    "สูตรสำหรับร้านอาหาร แกงคั่วหมูป่า",
    "สูตรสำหรับร้านอาหาร กุ้งสามรส",
    "สูตรสำหรับร้านอาหาร ยำแซลมอน",
    "สูตรสำหรับร้านอาหาร ยำหมูยอ",
    "สูตรสำหรับร้านอาหาร แกงปู",
    "สูตรสำหรับร้านอาหาร ปลากระพงนึ่งสมุนไพร",
    "สูตรสำหรับร้านอาหาร ไก่ผัดเข้มข้น",
    "สูตรสำหรับร้านอาหาร ยำกุ้งเผา",
    "สูตรสำหรับร้านอาหาร สปาเก็ตตี้ผัดคี้มาว",
    "สูตรสำหรับร้านอาหาร หมูปิ้งน้ำแจ่ว",
    "สูตรสำหรับร้านอาหาร ข้าวแซลมอนย่าง",
    "สูตรสำหรับร้านอาหาร ไก่แช่ราดน้ำปลา",
    "สูตรสำหรับร้านอาหาร ยำปลากระป๋อง"];
foreach ($topics as $topic) {
    echo "$topic<br/>";
    $file = fopen($topic . ".html", "w");
    fwrite($file, $topic . "\n");
    fclose($file);
}*/
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $file = 'article/' . $page . '.html';
            if (file_exists($file)) {
                $content = file_get_contents($file);
                $content = str_replace("\n", "<br/>", $content);
                echo "<h1>$page</h1><br/>";                
                echo "<div style='font-size: 24px;'>";
                $content = str_replace('สั่งอาหาร', '<span>สั่งอาหาร</span>', $content);
                $content = str_replace('โปรแกรม', '<span>โปรแกรม</span>', $content);
                $content = str_replace('ร้านอาหาร', '<span>ร้านอาหาร</span>', $content);
                echo $content;
                echo "</div>";
            } else {
                echo 'File not found';
            }
        }
        echo "<br/><br/>";
        $files = scandir('article');
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            $file = str_replace('.html', '', $file);
            echo '<a href="articleview?page=' . $file . '">' . $file . '</a> : ';
        }
        ?>
        <br />
    </div>
    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>

