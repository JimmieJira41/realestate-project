<?php

  require './src/model/session.php';

?>
<!doctype html>
<html lang="en">

<head>
  <title><?php echo $title ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./src/css/stylesheet_admin.css">
  <script src="./src/tinymce/tinymce.min.js"></script>

  <!-- Preview multiple image upload -->
  <!-- production -->
  <!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" href="./src/plugin/js/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />
  <script src="./src/plugin/js/plupload.full.min.js"></script>
  <script src="./src/plugin/js/jquery.ui.plupload/jquery.ui.plupload.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> -->
  <!-- <link rel="stylesheet" href="./src/css/image-uploader.min.css">
  <!-- <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
  <style>
    .swal-modal .swal-text {
      text-align: center;
    }

    img {
      width:100%;
      height:auto;
    }
  </style>
  <style>
    .modal-img {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, .5);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .modal-img .content {
      background: #fff;
      display: inline-block;
      padding: 2rem;
      position: relative;
    }

    .modal-img .content h4 {
      margin-top: 0;
    }

    .modal-img .content a.close {
      position: absolute;
      top: 1rem;
      right: 1rem;
      color: inherit;
    }

    ::-webkit-scrollbar {
      width: 10px;
      height: 10px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    /* @media screen and (max-width: 1366px) {
      body {
        font-size: 15px;
      }

      nav ul li a {
        font-size: 1.1em;

      }
    }

    @media screen and (max-width: 992px) {
      main {
        margin: 2rem 0;
      }

      nav {
        margin-left: -10em;
      }
    }

    @media screen and (max-width: 786px) {
      body {
        font-size: 14px;
      }

      nav {
        display: none;
      }

      .container {
        width: 80%;
      }
    }

    @media screen and (max-width: 450px) {
      .container {
        width: 90%;
      }
    } */
  </style>
</head>

<body>