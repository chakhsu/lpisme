<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

        <div class="container">
            <div class="wrapper">
                <div class="main" role="main">
                    <h3 class="archive-title"><?php $this->archiveTitle(array(
			            'category'  =>  _t('分类 “%s” 下的文章'),
			            'search'    =>  _t('包含关键字 “%s” 的文章'),
			            'tag'       =>  _t('标签 “%s” 下的文章'),
			            'author'    =>  _t('“%s” 发布的文章')
			        ), '', ''); ?></h3>
			        <?php if ($this->have()): ?>
                    <?php while($this->next()): ?>

                        <article class="post">
                            <h2 class="post-title" itemprop="name headline">
                                <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                            </h2>

                            <div class="post-meta">
                                <span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j , Y'); ?></span><span><a href="<?php $this->permalink() ?>#comments" class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></a></span>
                            </div>

                            <div class="post-content" itemprop="articleBody">
                                <?php $this->content('READ MORE...'); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
			        <?php else: ?>
			            <article class="post">
			                <h2 class="archive-search-nothing"><?php _e('没有找到内容,请换别的关键字进行检索...'); ?></h2>
			            </article>
			        <?php endif; ?>
                </div>
                <div class="pagenav clearfix">
            		<?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
                </div>
            </div>
        </div>

<?php $this->need('footer.php'); ?>