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
                        <?php parseContent($this); ?>

                        <div class="post-copyright">
                            <div class="alert" role="alert">本文由 Chakhsu Lau 创作，采用 <a target="_blank" href="https://creativecommons.org/licenses/by/4.0/" rel="external nofollow">知识共享署名 4.0</a> 国际许可协议进行许可。<br>可自由转载、引用，但需署名作者且注明文章出处。</div>
                        </div>
                        <div class="post-tags"><?php $this->tags(' ', true, ''); ?></div>
                    </div>
                </article>
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
<?php $this->need('footer.php'); ?>