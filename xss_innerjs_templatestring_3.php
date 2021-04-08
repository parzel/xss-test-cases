<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            $query = $_GET["a"];
            $query = htmlspecialchars($query);
            $query = addslashes($query);
            echo '<script>var aaa =`'.$query.'`;</script>';
        }
        ?> 
    </body>
</html>
