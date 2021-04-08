<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            $query = $_GET["a"];
            $query = htmlspecialchars($query);
            $query = str_replace("`", "", $query);
            $query = addslashes($query);
            echo '<script>var aaa =`${var a=b; '.$query.'}`;</script>';
        }
        ?> 
    </body>
</html>
