<?php
/**
 * LiNPX是Typecho的一套主题模板，特点还未想好日后补充。
 *
 * @package LiNPX Theme
 * @author Chakhsu
 * @version 2.1.0
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
                                <?php if (isset($this->fields->video)): ?>
                                <div class="index-post-avatar avatar-format video left"></div>
                                <?php elseif (isset($this->fields->image)): ?>
                                <div class="index-post-avatar avatar-format image left"></div>
                                <?php elseif (isset($this->fields->nopic)): ?>
                                <div class="index-post-avatar avatar-format nopic left"></div>
                                <?php elseif (isset($this->fields->audio)): ?>
                                <div class="index-post-avatar avatar-format audio left"></div>
                                <?php elseif (isset($this->fields->quote)): ?>
                                <div class="index-post-avatar avatar-format quote left"></div>
                                <?php elseif (isset($this->fields->chat)): ?>
                                <div class="index-post-avatar avatar-format chat left"></div>
                                <?php elseif (isset($this->fields->link)): ?>
                                <div class="index-post-avatar avatar-format link left"></div>
                                <?php elseif (isset($this->fields->locked)): ?>
                                <div class="index-post-avatar avatar-format locked left"></div>
                                <?php elseif (isset($this->fields->standard)): ?>
                                <div class="index-post-avatar avatar-format standard left"></div>
                                <?php else : ?>
                                <div class="index-post-avatar avatar-format left"></div>
                                <?php endif; ?>

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
                            <?php if (isset($this->fields->thumbnail)): ?>
                            <div class="index-post-thumb">
                                <img class="thumb" src="<?php echo $this->fields->thumbnail;?>">
                            </div>

                            <?php else : ?>
                            <?php $thumb = showThumb($this,null,true); if(!empty($thumb)):?>

                            <div class="index-post-thumb">
                                <img class="thumb" src="<?php echo $thumb;?>">
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>

                            <section class="index-post-meta cf">
                                <div class="index-post-button"><a href="<?php $this->permalink() ?>">Read more</a>
                                </div>
                                <div class="index-post-button index-post-comments">
                                    <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t('No comment'), _t('1 comment'), _t('%d comments')); ?></a>
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