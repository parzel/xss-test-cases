<html>
  <body>
    <script>
      eval("console.log(1);")
      var payload = "console.log(2); var a ='" + window.location.hash.substr(1)+"'; console.log(3);";
      eval(payload);
    </script>
  </body>
</html>