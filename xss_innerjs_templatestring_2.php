<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            $query = $_GET["a"];
            $query = htmlspecialchars($query);
            $query = str_replace("`", "", $query);
            $query = addslashes($query);
            echo '<script>var aaa =`'.$query.'`;</script>';
        }
        ?> 
    </body>
</html>
