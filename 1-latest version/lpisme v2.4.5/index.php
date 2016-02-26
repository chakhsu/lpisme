<?php
/**
 * Lpisme是Typecho的一套主题模板，特点还未想好日后补充。
 *
 * @package Lpisme Theme
 * @author Chakhsu Lau
 * @version 2.3.5
 * @link www.linpx.com
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

                                <div class="index-post-date">
                                    <?php $this->date('F jS , Y'); ?>

                                </div>
                                <div class="index-post-title">
                                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                                </div>
                            </div>
                            <section class="index-post-content">
                                <?php $this->description(); ?>

                            </section>
                            <?php $thumb = showThumb($this,null,true); if(!empty($thumb)):?>

                            <div class="index-post-thumb">
                                <img class="thumb" src="<?php echo $thumb;?>">
                            </div>
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