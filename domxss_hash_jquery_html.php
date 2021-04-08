<html>
  <body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <div></div>
    <script>
      var payload = window.location.hash.substr(1);
      $("div").html(decodeURIComponent(payload));
    </script>
  </body>
</html>