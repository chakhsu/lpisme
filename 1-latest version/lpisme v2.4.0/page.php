<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

        <div class="container">
			<div class="wrapper main" role="main">
			    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			        <div class="post-title no-meta" itemprop="name headline"><?php $this->title() ?></div>
			        <div class="post-content" itemprop="articleBody">
			            <?php $this->content(); ?>
			        </div>
			    </article>
			    <?php $this->need('comments.php'); ?>
			</div>
		</div>

<?php $this->need('footer.php'); ?>