<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= ROOT_URL ?>/public/image/logo/icon_favicon.png" type="image/x-icon">
  <title>Stories</title>

  <!-- Css -->
  <link rel="stylesheet" href="<?= ROOT_URL ?>/public/css/style.css" />
  <!-- Font icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <!-- SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <div class="app">
    <!-- Header -->
    <?php require_once("./mvc/view/block/header.php") ?>

    <div class="line"></div>

    <!-- Menu -->
    <?php require_once("./mvc/view/block/nav.php") ?>

    <!-- Include Trang Page Vào -->
    <?php require_once("./mvc/view/page/" . $page['page'] . ".php") ?>

    <!-- Footer -->
    <?php require_once("./mvc/view/block/footer.php") ?>
  </div>

  <!-- JavaScript -->
  <script src="<?= ROOT_URL ?>/public/js/frearuned.js"></script>
  <script src="<?= ROOT_URL ?>/public/js/error_login.js"></script>
  <script src="<?= ROOT_URL ?>/public/js/error_register.js"></script>
</body>

</html>