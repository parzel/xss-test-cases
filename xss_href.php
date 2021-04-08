<html>
    <body>
        <?php
            if(isset($_GET["a"])){
                $query = $_GET["a"];
                $query = htmlspecialchars($query);
                $query = str_replace("'", "", $query);
                echo "<a href='".$query."' />";
            }
            ?>
    </body>
</html>