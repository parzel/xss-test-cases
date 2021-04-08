<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_GET["a"])){
                $query = $_GET["a"];
                $query = str_replace("</script>", "", $query);
                $query = htmlspecialchars($query);
                echo "<a something='".$query."'>abc</a>";
            }
            ?>
    </body>
</html>
