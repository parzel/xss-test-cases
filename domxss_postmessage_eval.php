<html>
  <body>
    <script>
        window.addEventListener('message', function(e) {
            console.log(e);
            eval(e.data);
        }, false);
    </script>
  </body>
</html>