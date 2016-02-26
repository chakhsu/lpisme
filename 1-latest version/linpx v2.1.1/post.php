<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

        <div class="container">
            <div class="wrapper main" role="main">
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                    <h1 class="post-title" itemprop="name headline"><a href="<?php $this->permalink() ?>" itemtype="url"><?php $this->title() ?></a></h1>
                    <div class="post-meta">
                        <span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F jS , Y'); ?></span>
                    </div>
                    <div class="post-content cf" itemprop="articleBody">
                        <?php $this->content(); ?>
                        <div class="post-tags"><?php $this->tags(' ', true, ''); ?></div>
                    </div>
                </article>
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
<?php $this->need('footer.php'); ?>