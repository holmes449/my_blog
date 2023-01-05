<!-- Trang Page Home -->
<article class="home">
    <!-- Home About -->
    <section class="home-about home-width">
        <div class="layout-row--two home-margin">
            <div class="home-about__item">
                <p class="home-about__text">
                    Hello, I'm <span class="home-about__text--blue">Mai Long</span>
                </p>
                <p class="home-about__text">Welcome to my blog</p>
            </div>
            <div class="home-about__item">
                <img src="<?= ROOT_URL ?>/public/image/banner/featured.png" alt="Banner-image"
                    class="home-about__img" />
            </div>
        </div>
    </section>

    <!-- Home Featured -->
    <section class="home-featured home-width home-bg">
        <div class="home-featured__head">Tin nổi bật</div>
        <div class="home-featured__cont layout-row--three">
            <?php foreach ($page['tin_noibat'] as $item) { ?>
                <!-- Item -->
                <div class="home-fearured__item post home-featured__hot">
                    <img src="<?= ROOT_URL ?>/<?= $item['anh_bia'] ?>" alt="Post-image" class="home-frearured__hot-img" />
                    <div class="home-frearured__hot-list">
                        <div class="home-frearured__hot-tag">
                            <?php
                            foreach ($page['m_tag']->tagSelectById($item['id_bv']) as $tag_item) {
                                ?>
                                <!-- Item -->
                                <span><a href="<?= ROOT_URL ?>/blog/type/<?= $tag_item['id_tag'] ?>" style="color: white">
                                        <?= $tag_item['ten_tag'] ?>
                                    </a></span>

                            <?php } ?>
                        </div>
                        <div class="home-frearured__hot-head">
                            <a href="<?= ROOT_URL ?>/blog/detail/<?= $item['id_bv'] ?>">
                                <?= $item['tieu_de'] ?>
                            </a>
                        </div>
                        <div class="home-frearured__hot-date">
                            <?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?>
                            <span></span>
                            <?= $item['luot_xem'] ?> view
                        </div>
                    </div>
                    <div class="home-frearured__hot-btn">
                        <i class="fa-solid fa-arrow-left-long home-frearured__hot-btn--back" onclick="plusDivs(-1)"></i>
                        <i class="fa-solid fa-arrow-right-long home-frearured__hot-btn--next" onclick="plusDivs(+1)"></i>
                    </div>
                </div>
            <?php } ?>

            <?php foreach ($page['m_post']->postSelectNewFour() as $item) { ?>
                <!-- Item -->
                <div class="home-fearured__item post--shadow">
                    <div class="home-fearured__post">
                        <div class="home-fearured__post-img">
                            <img src="<?= ROOT_URL ?>/<?= $item['anh_bia'] ?>" alt="Post-image" width="100%"
                                height="100%" />
                            <div></div>
                        </div>
                        <div class="home-fearured__post-cont">
                            <div class="home-fearured__post-head">
                                <a href="<?= ROOT_URL ?>/post/detail/<?= $item['id_bv'] ?>">
                                    <?= $item['tieu_de'] ?>
                                </a>
                            </div>
                            <div class="home-fearured__post-date">
                                <?= date("d/m/Y - H:i", strtotime($item['ngay_capnhat'])) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </section>

    <!-- Home View -->
    <div class="home-container home-width home-bg row">
        <div class="home-list">
            <div class="home-view__head">Bài viết xem nhiều</div>
            <section class="home-view layout-row--two">

                <?php foreach ($page['m_post']->postSelectView() as $item) { ?>
                    <!-- Post -->
                    <div class="home-view__item post--shadow">
                        <div class="home-view__img">
                            <a href="<?= ROOT_URL ?>/blog/detail/<?= $item['id_bv'] ?>"><img
                                    src="<?= ROOT_URL ?>/<?= $item['anh_bia'] ?>" alt="Post-image" />
                                <div></div>
                            </a>
                        </div>
                        <div class="home-view__cont">
                            <?php foreach ($page['m_tag']->tagSelectById($item['id_bv']) as $item_tag) { ?>
                                <div class="home-view__cont-tag"><?= $item_tag['ten_tag'] ?></div>
                            <?php } ?>
                            <div class="home-view__cont-head">
                                <a href="<?= ROOT_URL ?>/blog/detail/<?= $item['id_bv'] ?>">
                                    <?= $item['tieu_de'] ?>
                                </a>
                            </div>
                            <div class="home-view__cont-text">
                                <?= $item['tom_tat'] ?>
                            </div>
                            <div class="home-view__cont-date">
                                <?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?> <span></span>
                                <?= $item['luot_xem'] ?> view
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>

            <!-- New Post -->
            <section class="home-post">
                <div class="home-view__head">Bài viết mới</div>

                <?php foreach ($page['m_post']->postSelectNewSix() as $item) { ?>
                    <!-- Post -->
                    <div class="home-post__item">
                        <div class="home-post__img">
                            <a href="<?= ROOT_URL ?>/blog/detail/<?= $item['id_bv'] ?>"><img
                                    src="<?= ROOT_URL ?>/<?= $item['anh_bia'] ?>" alt="Post-image" /></a>
                        </div>
                        <div class="home-post__cont">
                            <div class="home-post__cont-tag">Thẻ</div>
                            <div class="home-post__cont-head">
                                <a href="">
                                    <?= $item['tieu_de'] ?>
                                </a>
                            </div>
                            <div class="home-post__cont-date">
                                <?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?><span></span>
                                <?= $item['luot_xem'] ?> VIEW
                            </div>
                        </div>
                    </div>
                    <!--  -->
                <?php } ?>

                <!-- Page Number -->
                <!-- <div class="home-post__numpage">
                    <div class="home-post__numpage-item">
                        <a href=""><i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                    <div class="home-post__numpage-item home-post__numpage-item--select">
                        <a href="">1</a>
                    </div>
                    <div class="home-post__numpage-item"><a href="">2</a></div>
                    <div class="home-post__numpage-item"><a href="">3</a></div>
                    <div class="home-post__numpage-item">
                        <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div> -->
            </section>
        </div>

        <!-- Aside Home -->
        <aside class="home-aside">
            <!-- Aside About -->
            <div class="home-aside__about">
                <div class="home-aside__about-img">
                    <img src="<?= ROOT_URL ?>/<?= $page['admin']['avatar'] ?>" alt=" About-image" />
                </div>
                <div class="home-aside__about-head">Hello I'm <?= $page['admin']['ho'] . " " . $page['admin']['ten'] ?>
                </div>
                <div class="home-aside__about-text">
                    <?= $page['admin']['gioi_thieu'] ?>
                </div>
            </div>

            <!-- Aside Comment -->
            <div class="home-aside__comment">
                <!-- Aside Comment Head -->
                <div class="home-aside__comment-head">Nhận xét cuối cùng</div>

                <?php foreach ($page['cmt'] as $item) { ?>
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
                                <div class="home-aside__comment-item-date"><?= date("d/m/Y", strtotime($item['ngay_capnhat'])) ?></div>
                            </div>
                            <div class="home-aside__comment-item-text">
                                <?= $item['noidung_cmt'] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </aside>
    </div>
</article>