<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_GET["a"])){
                $query = $_GET["a"];
                # encode
                $encoded_query = htmlspecialchars($query);
                $encoded_query = str_replace('"', '', $encoded_query);
                $encoded_query = str_replace('\'', '', $encoded_query);
                echo "<a something=".$encoded_query.">abc</a>";
            }
            ?>
    </body>
</html>
