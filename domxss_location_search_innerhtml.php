<html>
  <body>
    <div id="a"></div>
    <script>
      var payload = (new URLSearchParams(window.location.search)).get("a");;
      document.getElementById("a").innerHTML = payload;
    </script>
  </body>
</html>