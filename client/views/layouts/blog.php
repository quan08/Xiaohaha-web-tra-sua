<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Tin Tức</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $post_new = loadall_blog_new()  ?>
            <?php foreach ($post_new as $post) : ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?= IMG_URL . $post['thumbnail1'] ?>" alt="" style="width:70%">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i><?= $post['created_at'] ?></li>
                                <li><i class="fa fa-comment-o"></i> <?= $post['created_by'] ?></li>
                            </ul>
                            <h5><a href="#"><?= $post['title'] ?></a></h5>
                            <p><?= $post['content1'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>