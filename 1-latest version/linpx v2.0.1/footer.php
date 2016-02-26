<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

	<div id="footer">
	<section class="adlink">
		<ul class="links-wrapper">
			<li><a target="_blank" href="http://asheblog.org/">AsheBlog</a></li>
			<li><a target="_blank" href="http://www.cmhello.com/">倡萌的自留地</a></li>
			<li><a target="_blank" href="http://www.bgbk.org/">斌果博客</a></li>
			<li><a target="_blank" href="http://ji8.me/">基吧</a></li>
			<li><a target="_blank" href="http://www.zuifengyun.com/">醉风云</a></li>
			<li><a target="_blank" href="http://zhuweisheng.com.cn/">碎碎念</a></li>
			<li><a target="_blank" href="http://qiukong.com">秋空</a></li>
			<li><a target="_blank" href="http://www.oreshura.com">不破草堂</a></li>
			<li><a target="_blank" href="http://199508.com/">nob太雄</a></li>
			<li><a target="_blank" href="http://fatesinger.com">大发</a></li>
			<li><a target="_blank" href="https://www.qionglu.pw">穹庐</a></li>
			<li><a target="_blank" href="https://tumutanzi.com/">土木坛子</a></li>
			<li><a target="_blank" href="http://www.endskin.com/">EndSkin</a></li>
			<li><a target="_blank" href="http://www.rcek.net/">MrH</a></li>
			<li><a target="_blank" href="http://www.chaui.org/">Rich</a></li>
			<li><a target="_blank" href="http://icedme.com/">冰龙</a></li>
			<li><a target="_blank" href="http://www.isweetnight.com/ ">sweetnight床垫怎么样</a></li>
			<li><a target="_blank" href="http://www.ilangzi.com/">朗姿官网</a></li>
			<li><a target="_blank" href="http://www.imengjie.com/">梦洁家纺旗舰店</a></li>
			<li><a target="_blank" href="http://www.bidegaidi.net/">彼德盖帝皮鞋官网</a></li>
			<li><a target="_blank" href="http://www.zhuoshini.org/">卓诗尼官方旗舰店</a></li>
		</ul>
	</section>
	Theme is Linpx by <a href="<?php $this->options->siteUrl(); ?>">Chakhsu</a><br>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> - 粤ICP备16005586号-1
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