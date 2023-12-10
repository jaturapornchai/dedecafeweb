<?php
$title = "DeDe Pos Cafe : Download";
include('header.php');
?>

<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <?php
            $folderPath = 'downloads/';
            if (is_dir($folderPath)) {
                $files = scandir($folderPath);
                
                // Remove '.' and '..' entries from the list
                $files = array_diff($files, array('.', '..'));
                
                if (count($files) > 0) {
                    echo "<h2>Files available for download:</h2>";
                    echo "<ul>";
                    
                    foreach ($files as $file) {
                        $filePath = $folderPath . $file;
                        echo "<li><a href='$filePath' download='$file'>$file</a></li>";
                    }
                    
                    echo "</ul>";
                } else {
                    echo "<p>No files available for download.</p>";
                }
            } else {
                echo "<p>Folder not found.</p>";
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
<?php include('footer-script.php'); ?>
