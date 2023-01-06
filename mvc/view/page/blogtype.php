<!-- Trang Page Blog Type -->
<article class="all">
    <div class="all-head">
        <?= $page['chude']['ten_tag'] ?>
    </div>
    <div class="all-container">
        <section class="all-main">
            <?php foreach ($page['post'] as $item) { ?>
                <!-- All Item -->
                <div class="all-main__item">
                    <div class="all-main__item-img">
                        <img src="<?= ROOT_URL ?>/<?=$item['anh_bia']?>" alt="Post-image" />
                    </div>
                    <div class="all-main__item-list">
                        <div class="all-main__item-tag">
                        <?php foreach($page['m_tag']->tagSelectById($item['id_bv']) as $t){ ?>
                            <?=$t['ten_tag']?><span></span>
                        <?php } ?>
                        </div>
                        <div class="all-main__item-head">
                            <a href="<?=ROOT_URL?>/blog/detail/<?=$item['id_bv']?>"><?=$item['tieu_de']?></a>
                        </div>
                        <div class="all-main__item-date">
                            <?=date("d/m/Y",strtotime($item['ngay_capnhat']))?><span></span><?=$item['luot_xem']?> Lượt xem
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