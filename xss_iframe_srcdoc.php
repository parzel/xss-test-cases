<html>
    <body>
        <?php
            if(isset($_GET["a"])){
                $query = $_GET["a"];
                $encoded_query = htmlspecialchars ($query);
                echo "<iframe srcdoc=\"".$encoded_query."\">abc</a>";
            }
            ?>
    </body>
</html>