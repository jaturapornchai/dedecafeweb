<?php
$title = "DeDe Pos Cafe : Knowledge";
$page = "";
$keyword = "";
$dir = "knowledge";
include('genkeyword.php');
include 'header.php';
?>

<body>
    <?php include 'menu.php'; ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <?php
        echo "<h1>$header</h1><br/>";                
        echo "<div style='font-size: 14px;'>";
        echo $content;
        echo "</div>";
        echo "<br/><br/>";        
        ?>
        <a href="manualvideo/pos">Point of Sale</a>
        <br />
    </div>
    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
<?php include 'footer-script.php'; ?>
