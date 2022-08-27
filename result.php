<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Running Text Online dengan metode GET.">
    <meta name="author" content="Axel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method PHP - Fumioo</title>
  </head>
  <?php
    $action = $_GET['create'];

    if(isset($action))
    {
        echo "<div id='infoMsg'>Successfully created your confess.site</div>";
        echo "<div id='infoMsg'>Link: https://lynxteam.xyz/user/",$_GET['create'],"</div>";
    }

    else
    {
        echo "<div id='infoMsg'>Please enter your name</div>";
    }
    ?>
</html>
