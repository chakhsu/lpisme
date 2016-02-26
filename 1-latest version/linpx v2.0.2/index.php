<?php
/**
 * LiNPX是Typecho的一套主题模板，特点还未想好日后补充。
 *
 * @package LiNPX Theme
 * @author Chakhsu
 * @version 0.1.0
 * @link linpx.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

        <div class="container">
            <div class="index-wrapper">
                <div class="index-posts">
                    <?php while($this->next()): ?>

                    <article class="index-post">
                        <div class="index-post-inner">
                            <div class="index-post-header cf">
                                <div class="index-post-date" datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                                    <?php $this->date('F jS , Y'); ?>

                                </div>
                                <div class="index-post-title" itemprop="name headline">
                                    <a href="<?php $this->permalink() ?>" itemtype="url"><?php $this->title() ?></a>
                                </div>
                            </div>
                            <section class="index-post-content" itemprop="articleBody">
                                <?php $this->description(); ?>

                            </section>
                            <?php $thumb = showThumb($this,null,true); if(!empty($thumb)):?>

                            <div class="index-post-thumb">
                                <img class="thumb" src="<?php echo $thumb;?>">
                            </div>
                            <?php endif;?>

                            <section class="index-post-meta cf">
                                <div class="index-post-button"><a href="<?php $this->permalink() ?>">Read more</a>
                                </div>
                                <div class="index-post-button index-post-comments">
                                    <a href="<?php $this->permalink() ?>#comments"></i> <?php $this->commentsNum('%d'); ?> Comment(s)</a>
                                </div>
                                <div class="index-post-category">
                                    <?php $this->category(','); ?>

                                </div>
                            </section>
                        </div>
                    </article>
                    <?php endwhile; ?>

                </div>
                <div class="pagenav cf">
                    <?php $this->pageNav('&laquo; ', ' &raquo;'); ?>

                </div>
            </div>
        </div>

<?php $this->need('footer.php'); ?>