<?php
header('Content-Type: text/html; charset=UTF-8');
if (empty($keyword)) {
    $keyword = "โปรแกรมร้านอาหาร, สั่งอาหารด้วยมือถือ, กินก่อนจ่าย, จ่ายก่อนกิน, บุฟเฟต์, android, ios, windows, ubuntu, ipad";
}
?>
<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="โปรแกรมร้านอาหารที่ทันสมัย ใช้สำหรับสั่งอาหารด้วยมือถือได้ง่าย ไม่ว่าจะเป็นการสั่งอาหารเอง, กินก่อนจ่าย, จ่ายก่อนกิน หรือบุฟเฟต์ รองรับทั้ง android, ios, windows และ ubuntu">
    <?php
    echo '<meta name="keywords" content="' . $keyword . '">';
    ?>

    <meta name="author" content="Ban Chiang Soft">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php
    // random guid by date time now
    $myuid = date('YmdHis');
    echo '<link rel="stylesheet" type="text/css" href="css/style.css?a='. $myuid . '" />';
    ?>
</head>
