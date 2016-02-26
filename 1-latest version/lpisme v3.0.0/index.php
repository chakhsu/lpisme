<?php
/**
 * Lpisme是Typecho的一套主题模板，特点还未想好日后补充。
 *
 * @package Lpisme Theme
 * @author Chakhsu Lau
 * @version 2.4.5
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
                                <?php if (isset($this->fields->eye)): ?>
                                <span class="index-post-avatar icon-eyeglass left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                </span>

                                <?php elseif (isset($this->fields->code)): ?>
                                <span class="index-post-avatar icon-coding left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span><span class="path36"></span><span class="path37"></span><span class="path38"></span><span class="path39"></span><span class="path40"></span><span class="path41"></span><span class="path42"></span><span class="path43"></span><span class="path44"></span>
                                </span>

                                <?php elseif (isset($this->fields->list)): ?>
                                <span class="index-post-avatar icon-list left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span>
                                </span>

                                <?php elseif (isset($this->fields->quote)): ?>
                                <span class="index-post-avatar icon-ss left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                </span>

                                <?php elseif (isset($this->fields->share)): ?>
                                <span class="index-post-avatar icon-share left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span>
                                </span>

                                <?php elseif (isset($this->fields->chat)): ?>
                                <span class="index-post-avatar icon-chat left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                                </span>

                                <?php elseif (isset($this->fields->locked)): ?>
                                <span class="index-post-avatar icon-locked left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                </span>

                                <?php elseif (isset($this->fields->images)): ?>
                                <span class="index-post-avatar icon-images left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                </span>

                                <?php elseif (isset($this->fields->link)): ?>
                                <span class="index-post-avatar icon-share left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span>
                                </span>

                                <?php else : ?>
                                <span class="index-post-avatar icon-lamp left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span>
                                </span>

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