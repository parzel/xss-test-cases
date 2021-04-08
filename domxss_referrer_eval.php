<html>
  <body>
    <script>
      var payload = document.referrer;
      eval("var a=123; console.log(123); var c = '"+payload+"'");
    </script>
  </body>
</html>