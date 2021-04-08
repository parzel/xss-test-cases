<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            $query = $_GET["a"];
            $query = str_replace("<", "", $query);
            $query = addslashes($query);
            echo "<script>";
            echo "var a = 1;\n";
            echo "/*".$query."*/\n";
            echo "</script>";
        }
        ?> 
    </body>
</html>
