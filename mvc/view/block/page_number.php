<div class="home-post__numpage">
    <div class="home-post__numpage-item">
        <a href=""><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <?php for ($i = 1; $i <= $so_chia; $i++) { ?>
        <div class="home-post__numpage-item <?= $i === $so ? "home-post__numpage-item--select" : "" ?>">
            <a href="">
                <?= $i ?>
            </a>
        </div>
    <?php } ?>
    <div class="home-post__numpage-item">
        <a href=""><i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>