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
            <div class="wrapper">
                <div class="main" role="main">
                    <?php while($this->next()): ?>

                        <article class="post">
                            <h2 class="post-title" itemprop="name headline">
                                <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                            </h2>

                            <div class="post-meta">
                                <span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F jS , Y'); ?></span>
                            </div>

                            <div class="post-content" itemprop="articleBody">
                                <?php $this->content('READ MORE...'); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>

                </div>
                <div class="pagenav clearfix">
            		<?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
                </div>
            </div>
        </div>
<?php $this->need('footer.php'); ?>