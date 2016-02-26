<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

	<div id="footer">
		Theme is LiNPX by <a href="<?php $this->options->siteUrl(); ?>">Chakhsu Lau</a><br>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> & <?php _e('由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动'); ?>

	</div>

	<?php $this->footer(); ?>

	<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
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