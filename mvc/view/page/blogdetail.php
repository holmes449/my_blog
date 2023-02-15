<!-- Trang Page Blog Detail -->
<article class="detail">
    <section class="detail-post">
        <div class="detail-head--big">
            <?= $page['post']['tieu_de'] ?>
        </div>
        <div class="detail-user">
            <div class="detail-user__img">
                <img src="<?= ROOT_URL ?>/<?= $page['user']['avatar'] ?>" alt="avatar" />
            </div>
            <div>
                <div class="detail-user__name">Tác giả <span>
                        <?= $page['user']['ho'] . " " . $page['user']['ten'] ?>
                    </span></div>
                <div class="detail-user__date">
                    <?= date("d/m/Y", strtotime($page['post']['ngay_capnhat'])) ?>
                </div>
            </div>
        </div>
        <div class="detail-img">
            <img src="<?= ROOT_URL ?>/<?= $page['post']['anh_bia'] ?>" alt="Post-image" />
        </div>
        <div class="detail-cont">
            <?= $page['post']['noi_dung'] ?>
        </div>
        <div class="detail-tag">
            Thẻ:

            <?php foreach ($page['tag_post'] as $item) { ?>
                <a href="<?= ROOT_URL ?>/blog/type/<?= $item['id_tag'] ?>" class="detail-tag__link">
                    <?= $item['ten_tag'] ?>
                </a>
            <?php } ?>
        </div>
        <div class="detail-show">
            <i class="fa-regular fa-comment"></i>
            <?= $page['sum_cmt']['so_luong'] ?> Nhận xét
        </div>

        <div class="detail-head--min">Bài viết liên quan</div>
        <!-- Related Post -->
        <section class="detail-related-post">
            <?php foreach ($page['post_like'] as $item) { ?>
                <!-- Post -->
                <div class="detail-related-post__item">
                    <div class="detail-related-post__img">
                        <img src="<?= ROOT_URL ?>/<?=$item['anh_bia']?>" alt="Post-image" />
                    </div>
                    <div class="detail-related-post__list">
                        <div class="detail-related-post__tag">
                            <?php foreach($page['m_tag']->tagSelectById($item['id_bv']) as $t) { ?>
                            <?= $t['ten_tag']?><span></span>
                            <?php } ?>
                        </div>
                        <div class="detail-related-post__head">
                            <a href="<?=ROOT_URL?>/blog/detail/<?=$item['id_bv']?>"><?=$item['tieu_de']?></a>
                        </div>
                        <div class="detail-related-post__date"><?=date("d/m/Y", strtotime($item['ngay_capnhat']))?></div>
                    </div>
                </div>
            <?php } ?>
        </section>

        <div class="detail-head--min">Nhận xét</div>
        
        <div id="ajax_cmt">
        <?php foreach($page['m_cmt']->cmtSelectAll($page['post']['id_bv']) as $cmt) { ?>
        <?php $user = $page['m_user']->userSelectById($cmt['id_tk']);?>
        <!-- Comment -->
        <div class="detail-comment">
            <!-- Item Deatil Comment -->
            <div class="detail-comment__item detail-comment__item--reply">
                <div class="detail-comment__item--left">
                    <div class="detail-comment__item-img">
                        <img src="<?= ROOT_URL ?>/<?=$user['avatar']?>" alt="avatar" />
                    </div>
                </div>
                <div class="detail-comment__item--right">
                    <div class="detail-comment__item-content">
                        <?=$cmt['noidung_cmt']?>
                    </div>
                    <div class="detail-comment__item-info">
                        <div class="detail-comment__item-name"><?=$user['ho']." ".$user['ten']?></div>
                        <div class="detail-comment__item-date">
                            <?=date("d/m/Y", strtotime($cmt['ngay_capnhat']))?><span></span><?=date("H:i", strtotime($cmt['ngay_capnhat']))?>
                        </div>
                    </div>
                </div>

                <div class="detail-comment__btn--reply">
                    <a href="">Trả lời</a>
                </div>
            </div>

            <?php foreach($page['m_cmt']->cmtSelectAllChild($cmt['id_cmt']) as $cmt_child){ ?>
            <?php $user = $page['m_user']->userSelectById($cmt_child['id_tk']) ?>
            <!-- Comment Child -->
            <div class="detail-comment__item detail-comment__child">
                <div class="detail-comment__item--left">
                    <div class="detail-comment__item-img">
                        <img src="<?= ROOT_URL ?>/<?=$user['avatar']?>" alt="avatar" />
                    </div>
                </div>
                <div class="detail-comment__item--right">
                    <div class="detail-comment__item-content">
                        <?=$cmt_child['noidung_cmt']?>
                    </div>
                    <div class="detail-comment__item-info">
                        <div class="detail-comment__item-name"><?=$user['ho']." ".$user['ten']?></div>
                        <div class="detail-comment__item-date">
                        <?=date("d/m/Y", strtotime($cmt_child['ngay_capnhat']))?><span></span><?=date("H:i", strtotime($cmt_child['ngay_capnhat']))?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--  -->
        <?php } ?>
        </div>

        <!-- _____________________________________________________________ -->
        <div class="detail-head--min">Nhận xét tại đây</div>
        <!-- Comment Form -->
        <section class="detail-comment__form">
            <!-- <form action="" method="post"> -->
                <textarea name="" id="" cols="30" rows="10" class="textarea textarea--full"
                    placeholder="Viết nhận xét"></textarea>
                <br />
                <div class="detail-comment__form-input">
                    <input type="text" name="" id="" class="input input--origin" placeholder="Tên của bạn" <?= isset($_SESSION['user']) ? "disabled" : "" ?> />
                    <input type="email" name="" id="" class="input input--origin" placeholder="Email" <?= isset($_SESSION['user']) ? "disabled" : "" ?> />
                </div>
                <input type="submit" value="Đăng nhận xét" onclick="sendMsg()" class="btn btn--full detail-comment__form-btn" />
            <!-- </form> -->
        </section>
    </section>
</article>