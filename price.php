<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>DeDe POS Cafe</title>
    <meta name="description" content="โปรแกรมร้านอาหารที่ทันสมัย ใช้สำหรับสั่งอาหารด้วยมือถือได้ง่าย ไม่ว่าจะเป็นการสั่งอาหารเอง, กินก่อนจ่าย, จ่ายก่อนกิน หรือบุฟเฟต์ รองรับทั้ง android, ios, windows และ ubuntu พร้อมบริการจัดส่งถึงบ้าน">
    <meta name="author" content="Ban Chiang Soft">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php include_once('include/header.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 14px;">
        <table style="width: 100%;">
            <thead style="border-bottom: 1pt solid gray">
                <tr style="background-color: rgb(173, 222, 251);font-size: 18px;">
                    <th style="width: 20%;text-align: center;padding: 10px;">แพ็คเกจหลัก/สาขา</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">ฟรี</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Starter</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Standard</th>
                    <th style="width: 20%;text-align: center;padding: 10px;">Premium</th>
                </tr>
            </thead>
            <tbody >
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ราคา</b></td>
                    <td style="text-align: center;">ฟรี</td>
                    <td style="text-align: center;">490 บาท/เดือน<br><div style="color: red;">1,620 บาท/ปี</div></td>
                    <td style="text-align: center;">990 บาท/เดือน<br><div style="color: red;">2,700 บาท/ปี</div></td>
                    <td style="text-align: center;">1,490 บาท/เดือน<br><div style="color: red;">5,400 บาท/ปี</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนโต๊ะสูงสุด</b></td>
                    <td style="text-align: center;">15 โต๊ะ</td>
                    <td style="text-align: center;">20 โต๊ะ</td>
                    <td style="text-align: center;">30 โต๊ะ</td>
                    <td style="text-align: center;">50 โต๊ะ</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนเครื่องพิมพ์ครัวสูงสุด</b></td>
                    <td style="text-align: center;">2 เครื่อง</td>
                    <td style="text-align: center;">4 เครื่อง</td>
                    <td style="text-align: center;">8 เครื่อง</td>
                    <td style="text-align: center;">16 เครื่อง</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวน KDS สูงสุด</b></td>
                    <td style="text-align: center;">4 เครื่อง</td>
                    <td style="text-align: center;">8 เครื่อง</td>
                    <td style="text-align: center;">16 เครื่อง</td>
                    <td style="text-align: center;">32 เครื่อง</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวน STAFF สูงสุด</b></td>
                    <td style="text-align: center;"><b>2 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +10 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b></b>4 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +20 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b></b>8 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +30 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b></b>16 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +40 บาท/เดือน</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>จำนวนบิลขายสูงสุด/เดือน</b></td>
                    <td style="text-align: center;">10,000 บิล<br/><div style="font-size: 10px;">333 บิล/วัน</div></td>
                    <td style="text-align: center;">30,000 บิล<br/><div style="font-size: 10px;">1,000 บิล/วัน</div></td>
                    <td style="text-align: center;">60,000 บิล<br/><div style="font-size: 10px;">2,000 บิล/วัน</div></td>
                    <td style="text-align: center;">120,000 บิล<br/><div style="font-size: 10px;">4,000 บิล/วัน</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบลูกค้าสั่งเอง Self Ordering</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบหน้าร้าน Cashier</b></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +20 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +40 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +80 บาท/เดือน</div></td>
                    <td style="text-align: center;"><b>1 เครื่อง</b><div style="font-size: 10px;">เครื่องต่อไป +160 บาท/เดือน</div></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบหลังร้าน Merchant</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(196, 191, 191);">
                    <td><b>ระบบเจ้าของร้าน (Owner)</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                    <td style="text-align: center;color: blue;"><b>&#10003;</b></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include_once('include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>