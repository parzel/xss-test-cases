<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_GET["a"])){
                $query = $_GET["a"];
                echo "<a something=\"".$query."\">abc</a>";
            }
            ?>
    </body>
</html>
