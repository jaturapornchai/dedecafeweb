<?php
$title = "DeDe Pos Cafe : Knowledge";
if (isset($_GET['page'])) {
    $title = $_GET['page'];
}
include('header.php');
?>

<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $file = 'knowledge/' . $page . '.html';
            if (file_exists($file)) {
                $content = file_get_contents($file);
                $content = str_replace("\n", "<br/>", $content);
                echo "<h1>" . $_GET['name'] . "</h1><br/>";                
                echo "<div style='font-size: 14px;'>";
                $content = str_replace('สั่งอาหาร', '<span>สั่งอาหาร</span>', $content);
                $content = str_replace('โปรแกรม', '<span>โปรแกรม</span>', $content);
                $content = str_replace('ร้านอาหาร', '<span>ร้านอาหาร</span>', $content);
                echo "<img src='knowledge/" . $page . ".png' style='width: 40%;margin-left:10px;' ALIGN='right' class='imgshadow' alt='" . $_GET['name'] . "'>";
                echo $content;
                echo "</div>";
            } else {
                echo 'File not found';
            }
        }
        echo "<br/><br/>";
        $dir = 'knowledge';
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($iterator as $file) {
            if ($file->isFile() && pathinfo($file->getFilename(), PATHINFO_EXTENSION) == 'html') {
                $pathWithoutExtension = str_replace('.html', '', $file->getPathname());
                $relativePath = substr($pathWithoutExtension, strlen($dir) + 1); // +1 for the trailing slash
                $fileName = $file->getBasename('.html');
                echo '<a href="knowledgeview?page=' . urlencode($relativePath) . '&name=' . urlencode($fileName) . '">' . htmlspecialchars($fileName) . '</a> : ';
            }
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
