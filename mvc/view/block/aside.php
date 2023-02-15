<aside class="home-aside">
    <!-- Aside About -->
    <div class="home-aside__about">
        <div class="home-aside__about-img">
            <img src="<?= ROOT_URL ?>/<?= $page['admin']['avatar'] ?>" alt=" About-image" />
        </div>
        <div class="home-aside__about-head">Hello I'm
            <?= $page['admin']['ho'] . " " . $page['admin']['ten'] ?>
        </div>
        <div class="home-aside__about-text">
            <?= $page['admin']['gioi_thieu'] ?>
        </div>
    </div>

    <!-- Aside Comment -->
    <div class="home-aside__comment">
        <!-- Aside Comment Head -->
        <div class="home-aside__comment-head">Nhận xét cuối cùng</div>

        <?php foreach ($page['m_cmt']->cmtSelectNew() as $item) { ?>
            <?php $user = $page['m_user']->userSelectById($item['id_tk']) ?>
            <!-- Aside Comment Item -->
            <div class="home-aside__comment-item post">
                <div class="home-aside__comment-item-img">
                    <img src="<?= ROOT_URL ?>/<?= $user['avatar'] ?>" alt="User-image" />
                </div>
                <div>
                    <div class="home-aside__comment-item-head">
                        <div class="home-aside__comment-item-name">
                            <?= $user['ho'] . " " . $user['ten'] ?>
                        </div>
                        <div class="home-aside__comment-item-date">
                            <?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?>
                        </div>
                    </div>
                    <div class="home-aside__comment-item-text">
                        <?= $item['noidung_cmt'] ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</aside>