<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            $query = $_GET["a"];
            $query = str_replace("<", "", $query);
            $query = addslashes($query);
            echo "<script>var aaa = 123 + ".$query.";</script>";
        }
        ?> 
    </body>
</html>
