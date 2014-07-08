<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/html">
<!-- Copyright (c) 2000-{{ year }} 3F sas All rights reserved. -->
<head>
  <title>{{ domainName|capitalize }}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="//{{ serverName }}/ciripottolo.js"></script>
</head>
<body onload="localStorage.clear();">

  <div id="content">
    <a><img src="/img/ciripottolo.jpg" /></a>
  </div> <!-- /content -->

  <script>
    $(document).ready(
      function() {
        $("#content > a").click(
          function() {
            event.preventDefault();

            var postId = 'ciripottolo';

            $.post('http://ajax.ciripottolo.com/vota/', {id: postId}, function(data) {
              $(this).addClass('active');
            });

            //alert(postId);
          }
        );
      }
    );
  </script>

</body>
</html>