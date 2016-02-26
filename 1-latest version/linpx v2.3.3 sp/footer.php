<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

	<div id="footer">
	<section class="adlink">
		<ul class="links-wrapper">
			<li><a target="_blank" href="http://www.hiumanlau.com/">Hiuman Lau</a></li>
			<li><a target="_blank" href="http://lightfish.cn/">光鱼</a></li>
			<li><a target="_blank" href="http://www.cmhello.com/">倡萌的自留地</a></li>
			<li><a target="_blank" href="http://www.bgbk.org/">斌果博客</a></li>
			<li><a target="_blank" href="http://lixianhua.com/">绛木子</a></li>
			<li><a target="_blank" href="https://www.idevs.cn/">设计笔记</a></li>
			<li><a target="_blank" href="http://zmingcx.com/">知更鸟</a></li>
			<li><a target="_blank" href="https://blog.phpgao.com/">老高的技术博客</a></li>
			<li><a target="_blank" href="https://holywhite.com//">白翼的服務器運維博客</a></li>
			<li><a target="_blank" href="https://imququ.com/">Jerry Qu</a></li>
			<li><a target="_blank" href="https://www.phodal.com/">PHODAL</a></li>
			<li><a target="_blank" href="http://blog.devtang.com/">唐巧的技术博客</a></li>
			<li><a target="_blank" href="http://laravelbase.com/">LaraBase</a></li>
			<li><a target="_blank" href="http://hanc.cc/">HanSon的博客</a></li>
			<li><a target="_blank" href="http://otakism.org/">宅谈</a></li>
			<li><a target="_blank" href="https://mufeng.me/">牧风</a></li>
			<li><a target="_blank" href="https://jimmycai.org/">Jimmy Cai’s</a></li>
			<li><a target="_blank" href="http://www.thedailyzen.org/">The Daily Zen</a></li>
			<li><a target="_blank" href="http://typecho.org/">Typecho</a></li>
		</ul>
	</section>
	Theme is LiNPX by <a href="<?php $this->options->siteUrl(); ?>">Chakhsu</a><br>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> . <?php if ($this->options->icpNum): ?><a href="http://www.miitbeian.gov.cn/" target="blank"><?php $this->options->icpNum(); ?></a><?php endif; ?>
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