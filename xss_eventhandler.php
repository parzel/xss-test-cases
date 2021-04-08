<html>
    <body>
        <?php
        if(isset($_GET["a"])){
            $query = $_GET["a"];
            $query = htmlspecialchars($query);
            echo '<img src=x onerror="'.$query.'">';
        }
        ?> 
    </body>
</html>