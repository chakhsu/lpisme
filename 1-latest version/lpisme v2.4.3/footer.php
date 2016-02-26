<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

	<div id="footer">
		<div class="social-wrapper">
		<?php if ($this->options->socialgithub): ?>
			<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">
				<i class="icon icon-github"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialemail): ?>
			<a class="social email" target="blank" href="mailto:<?php $this->options->socialemail(); ?>">
				<i class="icon icon-email"></i>
			</a>
		<?php endif; ?>
			<a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">
				<i class="icon icon-rss"></i>
			</a>
			<a class="social cc" target="blank" href="http://creativecommons.org/licenses/by/3.0/cn/">
				<i class="icon icon-cc"></i>
			</a>
		<?php if ($this->options->socialtwitter): ?>
			<a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>">
				<i class="icon icon-twitter"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialweibo): ?>
			<a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>">
				<i class="icon icon-weibo"></i>
			</a>
		<?php endif; ?>
		</div>
		<div>
			Theme is <span class="codename">Lpisme</span> by Chakhsu . <?php if ($this->options->icpNum): ?><a href="http://www.miitbeian.gov.cn/" target="_blank"><?php $this->options->icpNum(); ?></a><?php endif; ?>
		</div>
		<div>
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
		</div>
	</div>
	<?php $this->footer(); ?>

	<script src="<?php $this->options->themeUrl('js/functions.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>" data-no-instant></script>
	<script data-no-instant>
		InstantClick.on('change', function(isInitialLoad) {
		  if (isInitialLoad === false) {
		    if (typeof _self !== 'undefined') Prism.highlightAll(true,null);
		  }
		});
		InstantClick.init();
	</script>
	</body>
</html>