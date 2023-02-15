<!-- Trang Page User Info -->
<article class="user_info">
    <div class="user_info__container">
        <div class="user_info__img">
            <img src="<?= ROOT_URL ?>/<?= $page['user']['avatar'] ?>" alt="Avatar" />
        </div>
        <div class="user_info__info">
            <div class="user_info__name">
                <?= $page['user']['ho'] . " " . $page['user']['ten'] ?>
            </div>
            <div class="user_info__about"><?= $page['user']['gioi_thieu'] ?></div>
        </div>
    </div>
</article>