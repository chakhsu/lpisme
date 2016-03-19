<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

	<div id="footer" class="cf">
		<div class="social-wrapper">
		<?php if ($this->options->socialgithub): ?>
			<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">
				<i class="icon icon-github"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialgoogle): ?>
			<a class="social google-plus" target="blank" href="<?php $this->options->socialgoogle(); ?>">
				<i class="icon icon-google-plus"></i>
			</a>
		<?php endif; ?>
			<a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">
				<i class="icon icon-rss"></i>
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
			Theme is <span class="codename">Lpisme</span> by <a href="https://www.linpx.com" target="_blank">Chakhsu</a> / Powered by <a href="http://www.typecho.org" target="_blank">Typecho</a>
		</div>
		<div>
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
		</div>
	</div>
	<?php $this->footer(); ?>

	<script src="<?php $this->options->themeUrl('js/functions.js'); ?>"></script>
	<?php if(!empty($this->options->search_form) && in_array('Pjax', $this->options->search_form)): ?>

	<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" data-no-instant></script>
	<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>" data-no-instant></script>
	<script data-no-instant>
	//Here is for Google Analytics.
	</script>
	<script data-no-instant>
	InstantClick.on('change', function(isInitialLoad) {
		if (isInitialLoad === false) {
			if (typeof Prism !== 'undefined') Prism.highlightAll(true,null);
			if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
		}
	});
	InstantClick.init();
	</script>
	<?php else : ?>

	<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" ></script>
	<?php endif; ?>
	
	</body>
</html>