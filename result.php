<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Running Text Online dengan metode GET.">
    <meta name="author" content="Axel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method PHP - Fumioo</title>
  </head>
</html>

<?php
          echo "<marquee>", $_GET['text'], "</marquee>"; //Hasil-1
          echo "Hasil: <strong>", $_GET['text'], "</strong>"; //Hasil-2
?>
