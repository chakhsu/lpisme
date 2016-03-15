<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

        <div class="container">
            <h3 class="archive-title"><?php $this->archiveTitle(array(
                'category'  =>  _t('- %s -'),
                'search'    =>  _t('- %s -'),
                'tag'       =>  _t('- %s -'),
                'author'    =>  _t('- %s -')
            ), '', ''); ?></h3>
            <div class="index-wrapper">
                <div class="index-posts cf">
			        <?php if ($this->have()): ?>
                    <?php while($this->next()): ?>

                    <article class="index-post cf">
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
                                <?php elseif (isset($this->fields->ad)): ?>
                                <span class="index-post-avatar icon-ad left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span>
                                </span>
                                <?php elseif (isset($this->fields->lamp)): ?>
                                <span class="index-post-avatar icon-lamp left">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span>
                                </span>
								<?php else : ?>
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
                        </div>
                    </article>

                    <?php endwhile; ?>
			        <?php else: ?>
			            <article class="post">
			                <h2 class="archive-search-nothing"><?php _e('没有找到内容,请换别的关键字进行检索...'); ?></h2>
			            </article>
			        <?php endif; ?>
                </div>
            </div>
            <div class="index-pagenav cf">
                <div class="page-nav">
                    <div class="page-prev left" title="<?php _e('上一页');?>"><?php $this->pageLink('<i class="icon icon-left"></i> Previous','prev');?></div>
                    <div class="page-next right" title="<?php _e('下一页');?>"><?php $this->pageLink('Next <i class="icon icon-right"></i>','next');?></div>
                </div>
            </div>
        </div>

<?php $this->need('footer.php'); ?>