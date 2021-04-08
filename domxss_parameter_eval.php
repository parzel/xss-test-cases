<html>
  <body>
    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        payload = urlParams.get('a');
        eval(payload);
    </script>
  </body>
</html>