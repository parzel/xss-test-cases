<html>
  <body>
    <div id="a"></div>
    <script>
      var payload = document.referrer;
      document.getElementById("a").innerHTML = "<a href='"+payload+"'>";
    </script>
  </body>
</html>