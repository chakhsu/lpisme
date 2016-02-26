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
                    </div>
                </article>
                <div id="warning-toggle">点击这里了解更多 <i class="icon icon-chevron-thin-down"></i></div>
                <div class="post-warning cf">
                    <div class="post-warning-info">
                        <div>标题: <?php $this->title() ?></div>
                        <div>作者: <?php $this->author(); ?></div>
                        <div>链接: <?php $this->permalink() ?></div>
                        <div>版权声明: <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" target="_blank">署名-非商业性使用-相同方式共享 4.0</a></div>
                        <div class="post-tags"><?php $this->tags(' ', true, ''); ?></div>
                    </div>
                    <img class="post-warning-qrcode" src="http://s.jiathis.com/qrcode.php?url=<?php $this->permalink() ?>">
                </div>

                <?php $this->need('comments.php'); ?>
            </div>
        </div>
<?php $this->need('footer.php'); ?>