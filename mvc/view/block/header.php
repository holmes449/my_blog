<header class="header">
    <div class="header-logo">
        <a href="<?= ROOT_URL ?>"><img src="<?= ROOT_URL ?>/public/image/logo/logo.png" alt="Logo-image"
                class="header-logo__img" title="Trang chủ" /></a>
    </div>

    <div class="header-search">
        <form action="<?= ROOT_URL ?>" method="get">
            <input type="text" name="timkiem" id="timkiem" class="header-search__text input input--half"
                placeholder="Nhập từ khóa cần tìm..." title="Nhập từ khóa cần tìm..." />
            <input type="submit" value="Tìm kiếm" class="header-search__btn btn btn--half" />
        </form>
    </div>
</header>