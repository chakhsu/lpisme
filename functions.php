<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	$slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, NULL, _t('logo旁边的标语'), _t('在这里输入标语'));
	$form->addInput($slogan);

	//图标设置
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon'), _t('在这里输入图标链接,带http:// ,不填则使用主题自带的Favicon'));
	$form->addInput($favicon);
	$iosicon = new Typecho_Widget_Helper_Form_Element_Text('iosicon', NULL, NULL, _t('Apple Touch Icon'), _t('在这里输入图标链接,带http:// ,不填则使用主题自带的Apple Touch Icon'));
	$form->addInput($iosicon);

	//文章列表
	$listCol = new Typecho_Widget_Helper_Form_Element_Select('listCol', array('one' => _t('单列'),'two' => _t('双列'),), 'one', _t('首页文章列表样式'), _t('设置文章列表显示列数'));
	$form->addInput($listCol);

	//Pjax加速
	$search_form = new Typecho_Widget_Helper_Form_Element_Checkbox('search_form',
	array('Pjax' => _t('启用Pjax加速站点,勾上即可，为使原生评论生效需要到设置-评论，去掉开启垃圾评论过滤，主题已内置相关js'),),array('ShowSearch'), _t('设置开启Pjax'));
	$form->addInput($search_form->multiMode());

	//社交链接
	$socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接,带http://'));
	$form->addInput($socialweibo);
	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('输入Twitter链接'), _t('在这里输入twitter链接,带http://'));
	$form->addInput($socialtwitter);
	$socialgoogle = new Typecho_Widget_Helper_Form_Element_Text('socialgoogle', NULL, NULL, _t('输入Google +链接'), _t('在这里输入Google +链接,带http://'));
	$form->addInput($socialgoogle);


	//附件源地址
	$src_address = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('替换前地址'), _t('即你的附件存放链接，如http://www.yourblog.com/usr/uploads/'));
	$form->addInput($src_address);
	//替换后地址
	$cdn_address = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('替换后'), _t('即你的七牛云存储域名，如http://yourblog.qiniudn.com/'));
	$form->addInput($cdn_address);

	//默认缩略图
	$default = new Typecho_Widget_Helper_Form_Element_Text('default_thumb', NULL, '', _t('默认缩略图'),_t('文章没有图片时显示的默认缩略图，为空时表示不显示，如http://www.yourblog.com/image.png'));
	$form->addInput($default);
	//默认宽度
	$width = new Typecho_Widget_Helper_Form_Element_Text('thumb_width', NULL, '600', _t('缩略图默认宽度'));
	$form->addInput($width);
	//默认高度
	$height = new Typecho_Widget_Helper_Form_Element_Text('thumb_height', NULL, '100%', _t('缩略图默认高度'));
	$form->addInput($height);
}

function showThumb($obj,$size=null,$link=false,$pattern='<div class="post-thumb"><a class="thumb" href="{permalink}" title="{title}" style="background-image:url({thumb})"></a></div>'){

    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');

    $attach = $obj->attachments(1)->attachment;

    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
        if($size!='full'){
            $thumb_width = $options->thumb_width;
            $thumb_height = $options->thumb_height;

            if($size!=null){
                $size = explode('x', $size);
                if(!empty($size[0]) && !empty($size[1])){
                    list($thumb_width,$thumb_height) = $size;
                }
            }
            $thumb .= '?imageView2/4/w/'.$thumb_width.'/h/'.$thumb_height;
        }
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
        if($size!='full'){
            $thumb_width = $options->thumb_width;
            $thumb_height = $options->thumb_height;

            if($size!=null){
                $size = explode('x', $size);
                if(!empty($size[0]) && !empty($size[1])){
                    list($thumb_width,$thumb_height) = $size;
                }
            }
            $thumb .= '?imageView2/4/w/'.$thumb_width.'/h/'.$thumb_height;
        }
    }

    if(empty($thumb) && empty($options->default_thumb)){
        return '';
    }else{
        $thumb = empty($thumb) ? $options->default_thumb : $thumb;
    }
    if($link){
        return $thumb;
    }
    echo str_replace(
        array('{title}','{thumb}','{permalink}'),
        array($obj->title,$thumb,$obj->permalink),
        $pattern);
}
/**
 * 解析内容以实现附件加速
 * @access public
 * @param string $content 文章正文
 * @param Widget_Abstract_Contents $obj
 */
function parseContent($obj){
    $options = Typecho_Widget::widget('Widget_Options');
    if(!empty($options->src_add) && !empty($options->cdn_add)){
        $obj->content = str_ireplace($options->src_add,$options->cdn_add,$obj->content);
    }
    echo trim($obj->content);
}