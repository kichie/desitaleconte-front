<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <title>NowNever</title>
  <!-- Information -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicons -->
  <!-- <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> -->

  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    @font-face {
      font-family: "KosugiMaru-Regular";
      src: url("/fonts/KosugiMaru-Regular.ttf") format('opentype');
      font-weight: normal;
    }
  </style>

  <!-- CSS -->
  <link rel="stylesheet" href="/css/style.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/js/common.js"></script>
  <?php
    $url = $_SERVER['REQUEST_URI'];
    if(strstr($url,'edit')==true):
  ?>
  <!-- js -->
  <script src="/js/edit.js"></script>

  <!-- slick -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

  <?php elseif(strstr($url,'upload')==true): ?>
  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/js/upload.js"></script>
  <?php endif; ?>

</head>
