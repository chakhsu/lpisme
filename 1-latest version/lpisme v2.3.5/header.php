<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php $this->options->charset(); ?>">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="robots" content="noarchive">
        <meta http-equiv="Cache-Control" content="no-transform"/>
        <meta http-equiv="Cache-Control" content="no-siteapp"/>

<title><?php $this->archiveTitle(array(
        'category'  =>  _t(' %s '),
        'search'    =>  _t(' %s '),
        'tag'       =>  _t(' %s '),
        'author'    =>  _t(' %s ')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply='); ?>
<link rel="shortcut icon" href="<?php $this->options->themeUrl('assets/images/favicon.ico'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/icomoon/style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prism.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body class="null" gtools_scp_screen_capture_injected="true">
        <!--[if lt IE 9]>
        <div class="browsehappy" role="dialog">
        当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>。
        </div>
        <![endif]-->
        <div class="header">
            <div class="logo left">
                <a href="<?php $this->options->siteUrl(); ?>">
                    <?php $this->options->title() ?>

                </a>
            </div>
            <div class="slogan">
                <span class="description"><?php $this->options->description() ?></span>
            </div>
            <div class="buttons">
                <div id="search-toggle"><i class="icon icon-search"></i></div>
                <div id="menu-toggle"><i class="icon icon-menu"></i></div>
            </div>
        </div>
        <form id="search">
                <input type="text" class="input" name="s" id="s" required="true" placeholder="...Search" dir="rtl">
        </form>
        <nav class="nav">
            <div class="nav-wrapper right">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>

                <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>

            </div>
        </nav>