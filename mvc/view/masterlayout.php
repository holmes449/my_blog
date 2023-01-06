<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stories</title>

    <!-- Css -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>/public/css/style.css" />
    <!-- Font icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <div class="app">
        <!-- Header -->
        <header class="header">
            <div class="header-logo">
                <a href="<?= ROOT_URL ?>/home"><img src="<?= ROOT_URL ?>/public/image/logo/logo.png" alt="Logo-image"
                        class="header-logo__img" title="Trang chủ" /></a>
            </div>

            <div class="header-search">
                <form action="" method="get">
                    <input type="text" name="" id="" class="header-search__text input input--half"
                        placeholder="Nhập từ khóa cần tìm..." title="Nhập từ khóa cần tìm..." />
                    <input type="submit" value="Tìm kiếm" class="header-search__btn btn btn--half" />
                </form>
            </div>
        </header>
        <div class="line"></div>

        <!-- Menu -->
        <nav class="nav">
            <div class="nav-container">
                <ul class="nav-menu">
                    <li class="nav-menu__item">
                        <a href="<?= ROOT_URL ?>/home" class="nav-menu__link"><i
                                class="fa-solid fa-house-user nav-menu__icon nav-menu__icon--left"></i>Trang chủ</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="<?= ROOT_URL ?>/blog" class="nav-menu__link">Tất cả bài viết</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="<?=ROOT_URL?>/about" class="nav-menu__link">Về chúng tôi</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="<?= ROOT_URL ?>/blog/type" class="nav-menu__link">Thẻ<i
                                class="fa-solid fa-caret-down nav-menu__icon nav-menu__icon--right"></i></a>
                        <ul class="nav-submenu">
                            <?php foreach ($page['tag'] as $item_tag) { ?>
                                <li class="nav-submenu__item">
                                    <a href="<?= ROOT_URL ?>/blog/type/<?= $item_tag['id_tag'] ?>"
                                        class="nav-submenu__link">
                                        <?= $item_tag['ten_tag'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
                <ul class="nav-log">
                    <li class="nav-log__item">
                        <a href="<?= ROOT_URL ?>/log/register" class="nav-log__link">Đăng ký</a>
                    </li>
                    <span class="nav-line"></span>
                    <li class="nav-log__item">
                        <a href="<?= ROOT_URL ?>/log" class="nav-log__link">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Include Trang Page Vào -->
        <?php require_once("./mvc/view/page/" . $page['page'] . ".php") ?>


        <!-- Footer -->
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-list">
                    <div class="footer-item">
                        <div class="footer-item__head">Về chúng tôi</div>
                        <div class="footer-item__content">
                            Chào các bạn, mình là Mai Tiểu Long, tác giả của blog này. Các
                            bạn có thể gọi mình là Mai Long.
                        </div>
                        <div class="footer-item__content">
                            <span class="footer-item__content--bold">Địa chỉ</span>
                            Nhơn Trạch/ Đồng Nai
                        </div>
                        <div class="footer-item__content">
                            <span class="footer-item__content--bold">Liên hệ</span>
                            Email: mailong123@gmail.com
                        </div>
                    </div>
                    <div class="footer-item">
                        <div class="footer-item__head">Liên kết nhanh</div>
                        <div class="footer-quicklink">
                            <div class="footer-quicklink__item">
                                <a href="" class="footer-quicklink__link">Link liên kết nhanh</a>
                            </div>
                        </div>
                    </div>

                    <div class="footer-item">
                        <div class="footer-item__head">Chủ đề</div>
                        <div class="footer-tag">

                            <?php foreach ($page['tag'] as $item) { ?>
                                <!-- Item -->
                                <div class="footer-tag__item">
                                    <a href="<?=ROOT_URL?>/blog/type/<?=$item['id_tag']?>" class="footer-tag__link"><?= $item['ten_tag'] ?></a>
                                </div>
                                <!--  -->
                            <?php } ?>

                        </div>
                    </div>

                    <div class="footer-item">
                        <div class="footer-item__head">Công cụ</div>
                        <div class="footer-newslleter">
                            <div class="footer-newslleter__text">
                                Blog này là nơi mình chia sẻ những kiến thức, kinh nghiệm mà
                                mình đạt được trong quá trình học tập và làm việc.
                            </div>
                            <form action="" method="get">
                                <input type="text" name="" id="" class="input input--half"
                                    placeholder="Nhập từ khóa cần tìm..." title="Nhập từ khóa cần tìm..." />
                                <input type="submit" value="Tìm kiếm" class="btn btn--half" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-detail">
                    <div class="footer-detail__item">
                        <a href="" class="footer-detail__link">
                            © 2022, Stories - Personal Blog Mai Long
                        </a>
                    </div>
                    <div class="footer-detail__item">
                        <a href="" class="footer-detail__link"> Design by AliThemes</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- JavaScript -->
    <script src="<?= ROOT_URL ?>/public/js/frearuned.js"></script>
</body>

</html>