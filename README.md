####更新（2016年5月3日01:44:21）

- 已 fix 主题缩略图功能存在一个图片判断失误的bug (via:https://github.com/loozx/lpisme/issues/7)

####更新（2016年3月15日21:34:59）

 - 增加外观后台设置是否开启Pjax选项，使用了cloudflare的cdn加速服务的不需要勾选

另外，主题评论已经内置了te的垃圾评论过滤的相关js，需要设置-评论，去掉开启垃圾评论过滤功能，不然原生评论无法生效···

####更新（2016年3月14日00:05:57）

根据网友和使用者的要求更新了很多细节，例如

 - 增加了文章自定义字段 thumb ，后面跟着的值带上你的图片URL，需要含http(s)://
 - 文章缩略图的优先级顺序变为 自定义字段thumb -> 附件第一张图片 -> 文章图片 -> 默认缩略图 -> 无
 - 由原来的列更新换成行更新
 - 主题样式style.css细节修改
 - 更多变化等你去发现···

####更新（2016年3月6日09:15:17）

更新内容：
 - prismjs加入了对vim的代码高亮
 - 首页由原来的列更新换成行更新
 - 首页分页由数字分页变成上下页分页
 - 样式调整
 - 其他改变等你去发现···


###Lpisme，Typecho主题

Lpisme是Typecho的一套主题模板，Lpisme这个主题的名字由来，Lp是我女朋友的名字的首个字母，没错我女朋友的名字只有两个字。So，很容易看出，Lp is me。一开始是打算起Lpismine，但太长了同时觉得还是要有点chinese的感觉，故Lpisme诞生，意味着女朋友是我的。

Lpisme主题从2016年1月22日开始制作，一直迭代升级到现在的3.1.0版本

更多版本详情可以浏览：

https://github.com/loozx/lpisme-version

下载地址：

https://github.com/loozx/lpisme

主题预览为本站：

https://www.linpx.com

####主题亮点

先上图片 ，更多预留点击 [www.linpx.com/](https://www.linpx.com/)

![](http://ww4.sinaimg.cn/large/7c98397dgw1f1fj3721ajj20ps0huwhw.jpg)

 - 无jQuery，无前端框架，轻量级
 - InstantClick实现PJAX无刷新操作
 - Prismjs代码高亮集成
 - 响应式设计，手机浏览效果更棒
 - 支持图片CDN
 - 支持社交按钮，但无社交分享
 - 支持自定义字段实现文章类型归类
 - 更多亮点等你去发现···

####主题激活

下载后，重命名文件夹为lpisme，然后放到typecho里的theme目录内，进入typecho后台，外观，激活即可。

####主题设置

进入主题外观设置

![](http://ww4.sinaimg.cn/large/7c98397dgw1f1e3qav9ysj20mu0e83zi.jpg)

上面依次是标语，和页尾的社交链接

![](http://ww3.sinaimg.cn/large/7c98397dgw1f1e3ru8n7ij20mk0cn3zj.jpg)

上面是图片CDN，推荐使用七牛

####主题使用

主题的使用，大概有三点

#####文章缩略图

文章的缩略图的设置

第一个附件图片  --->  文章内图片  --->  默认缩略图  --->  无

如果文章没有图片，你可以直接在附件里上传图片，也能实现首页缩略图

**注意事项**：附件的第一个最好是图片，然后再是其他

#####文章的类型

![](http://ww1.sinaimg.cn/large/7c98397dgw1f1e3z0yyx1j20o206f0t6.jpg)

进入文章编辑，在最后可以看到上面的自定义字段

其中，有 `eye` 、  `code` 、 `list` 、 `quote` 、 `share` 、 `chat` 、 `locked` 、 `images` 、 `ad` 和 不填

一共十个的文章类型划分，可根据需要使用，例如文章加密的，在自定义字段处写上 `locked` ，首页显示会有一个小锁的标识

#####文章的归档

进入页面编写

选择 Template Page of Archives 的页面模板，即可实现归档页 

Ok，至此主题介绍完毕·····

###License

Open sourced under the [MIT license](https://github.com/loozx/lpisme/blob/master/LICENSE.md).

