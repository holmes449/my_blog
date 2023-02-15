<nav class="nav">
    <div class="nav-container">
        <ul class="nav-menu">
            <li class="nav-menu__item">
                <a href="<?= ROOT_URL ?>" class="nav-menu__link"><i
                        class="fa-solid fa-house-user nav-menu__icon nav-menu__icon--left"></i>Trang chủ</a>
            </li>
            <li class="nav-menu__item">
                <a href="<?= ROOT_URL ?>/blog" class="nav-menu__link">Tất cả bài viết</a>
            </li>
            <li class="nav-menu__item">
                <a href="<?= ROOT_URL ?>/about" class="nav-menu__link">Về chúng tôi</a>
            </li>
            <li class="nav-menu__item">
                <a href="<?= ROOT_URL ?>/blog/type" class="nav-menu__link">Thẻ<i
                        class="fa-solid fa-caret-down nav-menu__icon nav-menu__icon--right"></i></a>
                <ul class="nav-submenu">
                    <?php foreach ($page['nav'] as $item_tag) { ?>
                        <li class="nav-submenu__item">
                            <a href="<?= ROOT_URL ?>/blog/type/<?= $item_tag['id_tag'] ?>" class="nav-submenu__link">
                                <?= $item_tag['ten_tag'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
        <ul class="nav-log">

            <?php if (!isset($_SESSION['user'])) { ?>
                <!-- Trước khi đăng nhập -->
                <li class="nav-log__item">
                    <a href="<?= ROOT_URL ?>/log/register" class="nav-log__link">Đăng ký</a>
                </li>
                <span class="nav-line"></span>
                <li class="nav-log__item">
                    <a href="<?= ROOT_URL ?>/log" class="nav-log__link">Đăng nhập</a>
                </li>
                <!-- End -->
            <?php } else { ?>
                <!-- Sau khi đăng nhập -->
                <li class="nav-menu__item">
                    <a href="" class="nav-menu__link">
                        <?= $_SESSION['user']['ho'] . " " . $_SESSION['user']['ten'] ?><i
                            class="fa-solid fa-caret-down nav-menu__icon nav-menu__icon--right"></i>
                    </a>
                    <ul class="nav-submenu">
                        <li class="nav-submenu__item">
                            <a href="<?= ROOT_URL ?>/log/info" class="nav-submenu__link">Xem thông
                                tin</a>
                        </li>
                        <?php if ($_SESSION['user']['vaitro'] === 1) { ?>
                            <li class="nav-submenu__item">
                                <a href="<?= ROOT_URL ?>/admin" class="nav-submenu__link">Xem trang quản trị</a>
                            </li>
                        <?php } ?>
                        <li class="nav-submenu__item">
                            <a href="" class="nav-submenu__link">Sửa thông tin</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="<?= ROOT_URL ?>/log/logout/<?= $_SESSION['user']['id'] ?>" class="nav-submenu__link"
                                onclick="return confirm('Bạn có muốn đăng xuất?');">Đăng xuất</a>
                        </li>
                    </ul>
                </li>
                <!-- End -->
            <?php } ?>
        </ul>
    </div>
</nav>