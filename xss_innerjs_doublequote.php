<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            echo "<script>document.write('<a></a>');</script>";
            $query = $_GET["a"];
            $query = str_replace("<", "", $query);
            $query = str_replace("\\", "\\\\", $query);
            echo "<script>var aaa =\"".$query."\";</script>";
        }
        ?> 
    </body>
</html>
