<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();


if(is_single()||is_category())
{
    if(get_category_children(get_category_root_id(the_category_ID(false)))!= "" )
    {
        echo '<ul>';
        echo wp_list_categories("child_of=".get_category_root_id(the_category_ID(false)). "&depth=0&hide_empty=0&title_li=&orderby=id&order=ASC");
        echo '</ul>';
    }
}
?>
<div id="wrapper" class="project-wrapper">
<div id="navsecond">
<div id="course">
<h2>目录</h2>
</div> 
<div class="sidebar-content">
<div class="sidebar-tree">
<div class="sidebar-tree-content">
<div class="dd" id="nestable_handbook" data-tid="" data-id="handbook">
<ol class="dd-list" style="margin: 0 6px 10px;padding: 0;">
<li class="dd-item  " data-id="241bxf21" ismenu="1">
<div class="dd-content folder-open">
<h2 class="menu-title"><span class="leftth" title="HTML 教程">
HTML 教程</span>
</h2></div>
<ol class="dd-list" style="margin: 0;padding: 0;">
<li class="dd-item  " data-id="html-tutorial">
<div class="dd-content ">
<a href="/html/html-tutorial.html" title="HTML 教程导读">HTML 教程导读</a>
</div>
</li> 
<li class="dd-item  " data-id="html-intro">
<div class="dd-content ">
<a href="/html/html-intro.html" title="HTML 简介">HTML 简介</a>
</div>
</li> 
<li class="dd-item  " data-id="html-editors">
<div class="dd-content ">
<a href="/html/html-editors.html" title="HTML 编辑器的介绍及推荐">HTML 编辑器</a>
</div>
</li> 
<li class="dd-item  " data-id="html-basic">
<div class="dd-content ">
<a href="/html/html-basic.html" title="HTML 基础">HTML 基础</a>
</div>
</li> 
<li class="dd-item  " data-id="html-elements">
<div class="dd-content ">
<a href="/html/html-elements.html" title="HTML 元素">HTML 元素</a>
</div>
</li> 
<li class="dd-item  " data-id="html-attributes">
<div class="dd-content ">
<a href="/html/html-attributes.html" title="HTML 属性">HTML 属性</a>
</div>
</li> 
<li class="dd-item  " data-id="html-heading">
<div class="dd-content ">
<a href="/html/html-heading.html" title="HTML 标题">HTML 标题</a>
</div>
</li> 
<li class="dd-item  " data-id="html-paragraphs">
<div class="dd-content ">
<a href="/html/html-paragraphs.html" title="HTML 段落">HTML 段落</a>
</div>
</li> 
<li class="dd-item  " data-id="html-formatting">
<div class="dd-content ">
<a href="/html/html-formatting.html" title="HTML 文本格式化">HTML 文本格式化</a>
</div>
</li> 
<li class="dd-item  " data-id="html-links">
<div class="dd-content ">
<a href="/html/html-links.html" title="HTML 链接">HTML 链接</a>
</div>
</li> 
<li class="dd-item  " data-id="html-head">
<div class="dd-content ">
<a href="/html/html-head.html" title="HTML 头部">HTML 头部</a>
</div>
</li> 
<li class="dd-item  " data-id="html-css">
<div class="dd-content ">
<a href="/html/html-css.html" title="HTML CSS百科及常用嵌入方式">HTML CSS</a>
</div>
</li> 
<li class="dd-item  " data-id="html-images">
<div class="dd-content ">
<a href="/html/html-images.html" title="HTML 图像">HTML 图像</a>
</div>
</li> 
<li class="dd-item  " data-id="html-tables">
<div class="dd-content ">
<a href="/html/html-tables.html" title="HTML 表格">HTML 表格</a>
</div>
</li> 
<li class="dd-item  " data-id="html-lists">
<div class="dd-content ">
<a href="/html/html-lists.html" title="HTML 列表">HTML 列表</a>
</div>
</li> 
<li class="dd-item  " data-id="html-blocks">
<div class="dd-content ">
<a href="/html/html-blocks.html" title="HTML 区块">HTML 区块</a>
</div>
</li> 
<li class="dd-item  " data-id="html-layouts">
<div class="dd-content ">
<a href="/html/html-layouts.html" title="HTML 布局">HTML 布局</a>
</div>
</li> 
<li class="dd-item  " data-id="html-form">
<div class="dd-content ">
<a href="/html/html-form.html" title="HTML 表单">HTML 表单</a>
</div>
</li> 
<li class="dd-item  " data-id="html-iframes">
<div class="dd-content ">
<a href="/html/html-iframes.html" title="HTML 框架">HTML 框架</a>
</div>
</li> 
<li class="dd-item  " data-id="html-colors">
<div class="dd-content ">
<a href="/html/html-colors.html" title="HTML 颜色">HTML 颜色</a>
</div>
</li> 
<li class="dd-item  " data-id="html-colornames">
<div class="dd-content ">
<a href="/html/html-colornames.html" title="HTML 颜色名">HTML 颜色名</a>
</div>
</li> 
<li class="dd-item  " data-id="html-colorvalues">
<div class="dd-content ">
<a href="/html/html-colorvalues.html" title="HTML 颜色值">HTML 颜色值</a>
</div>
</li> 
<li class="dd-item  " data-id="html-scripts">
<div class="dd-content ">
<a href="/html/html-scripts.html" title="HTML 脚本">HTML 脚本</a>
</div>
</li> 
<li class="dd-item  " data-id="html-entities">
<div class="dd-content ">
<a href="/html/html-entities.html" title="HTML 字符实体">HTML 字符实体</a>
</div>
</li> 
<li class="dd-item  " data-id="html-url">
<div class="dd-content ">
<a href="/html/html-url.html" title="HTML URL">HTML URL</a>
</div>
</li> 
<li class="dd-item  " data-id="html-quicklist">
<div class="dd-content ">
<a href="/html/html-quicklist.html" title="HTML 速查列表">HTML 速查列表</a>
</div>
</li> 
<li class="dd-item  " data-id="html-summary">
<div class="dd-content ">
<a href="/html/html-summary.html" title="HTML 总结">HTML 总结</a>
</div>
</li> 
 
</ol></li>  
<li class="dd-item  " data-id="9odg1ptd" ismenu="1">
<div class="dd-content folder-open">
<h2 class="menu-title"><span class="leftth" title="HTML XHTML">
HTML XHTML</span>
</h2></div>
<ol class="dd-list" style="margin: 0;padding: 0;">
<li class="dd-item  " data-id="html-xhtml">
<div class="dd-content ">
<a href="/html/html-xhtml.html" title="XHTML 简介">XHTML 简介</a>
</div>
</li> 
 
</ol></li>  
<li class="dd-item  " data-id="1pdjxf21" ismenu="1">
<div class="dd-content folder-open">
<h2 class="menu-title"><span class="leftth" title="HTML 媒体">
HTML 媒体</span>
</h2></div>
<ol class="dd-list" style="margin: 0;padding: 0;">
<li class="dd-item  " data-id="html-media">
<div class="dd-content ">
<a href="/html/html-media.html" title="HTML 媒体(Media)">HTML 媒体(Media)</a>
</div>
</li> 
<li class="dd-item  " data-id="html-object">
<div class="dd-content ">
<a href="/html/html-object.html" title="HTML 插件">HTML 插件</a>
</div>
</li> 
<li class="dd-item  " data-id="html-sounds">
<div class="dd-content ">
<a href="/html/html-sounds.html" title="HTML 音频(Audio)">HTML 音频(Audio)</a>
</div>
</li> 
<li class="dd-item  " data-id="html-videos">
<div class="dd-content ">
<a href="/html/html-videos.html" title="HTML 视频(Videos)播放">HTML 视频(Videos)播放</a>
</div>
</li> 
<li class="dd-item  " data-id="html-examples">
<div class="dd-content ">
<a href="/html/html-examples.html" title="HTML 实例">HTML 实例</a>
</div>
</li> 
 
</ol></li>  
<li class="dd-item  " data-id="y12r1210" ismenu="1">
<div class="dd-content folder-open">
<h2 class="menu-title"><span class="leftth" title="实例/测验">
实例/测验</span>
</h2></div>
<ol class="dd-list" style="margin: 0;padding: 0;">
<li class="dd-item  " data-id="html-html_examples">
<div class="dd-content ">
<a href="/html/html-html_examples.html" title="HTML 实例">HTML 实例</a>
</div>
</li> 
<li class="dd-item  " data-id="html-html_quiz">
<div class="dd-content ">
<a href="/html/html-html_quiz.html" title="HTML 测验">HTML 测验</a>
</div>
</li> 
<li class="dd-item  " data-id="html-codecamp">
<div class="dd-content ">
<a href="/html/html-codecamp.html" title="HTML 编程实战闯关">HTML 编程实战闯关</a>
</div>
</li> 
 
</ol></li>  
<li class="dd-item  " data-id="4flh1s7s" ismenu="1">
<div class="dd-content folder-open">
<h2 class="menu-title"><span class="leftth" title="拓展阅读">
拓展阅读</span>
</h2></div>
<ol class="dd-list" style="margin: 0;padding: 0;">
<li class="dd-item  " data-id="html-space">
<div class="dd-content ">
<a href="/html/html-space.html" title="HTML中如何键入空格">HTML中如何键入空格</a>
</div>
</li> 
<li class="dd-item  " data-id="html-code">
<div class="dd-content ">
<a href="/html/html-code.html" title="程序员必须知道的HTML常用代码有哪些？">HTML常用代码</a>
</div>
</li> 
<li class="dd-item  " data-id="html-Label">
<div class="dd-content ">
<a href="/html/html-Label.html" title="全方位详解HTML常用标签（含视频教程）">HTML常用标签</a>
</div>
</li> 
<li class="dd-item  " data-id="html-template">
<div class="dd-content ">
<a href="/html/html-template.html" title="精选多个程序员都想要的免费HTML模板下载">HTML模板下载</a>
</div>
</li> 
<li class="dd-item  " data-id="html-textbox">
<div class="dd-content ">
<a href="/html/html-textbox.html" title="HTML文本框参考样式及常见操作技巧大全">HTML文本框样式</a>
</div>
</li> 
<li class="dd-item  " data-id="html-scrollbar">
<div class="dd-content ">
<a href="/html/html-scrollbar.html" title="HTML滚动条样式代码及使用技巧">HTML滚动条样式</a>
</div>
</li> 
<li class="dd-item  " data-id="html-copyright">
<div class="dd-content ">
<a href="/html/html-copyright.html" title="HTML版权符号写法及美化">HTML版权符号写法</a>
</div>
</li> 
<li class="dd-item  " data-id="html-cui11xk2">
<div class="dd-content ">
<a href="/html/html-cui11xk2.html" title="HTML元素嵌套嵌套错误可能引起的问题">HTML元素嵌套问题</a>
</div>
</li> 
 
</ol></li>  
</ol>
</div>  
</div>
</div>
</div>
</div>
<div id="pro-mian" class="main-container">
<div class="project-cover">
<div id="pcover">
<div class="portlet">
<div class="coverimg">
<a href="//www.w3cschool.cn/html" title="HTML教程">                
<img class="pimgcover" src="/attachments/cover/cover_html.png" width="150" height="150" alt="HTML教程">
</a>
</div>
<div class="coverinfo">
<h1><a href="//www.w3cschool.cn/html" title="HTML教程">HTML教程</a></h1>
<div class="coverinfo-desc">
<h2>手册简介:</h2>
<p>HTML 指超文本标签语言。
HTML 是通向 WEB 技术世界的钥匙。
在 W3CSchool 的 HTML 教程中，您将学习如何使用 HTML 来创建站点。
HTML 非常容易学习！你会喜欢它的！</p>
<div class="content-group">
<span id="content-head-viewcount"><i class="viewcount-icon"></i>阅读 (157057)</span>
<a id="hbstar" href="javascript:;" onclick="isProjectStar()" data-type="star"><i class="star-icon"></i><span>收藏</span></a>
<a class="btn-thumbs-up" href="javascript:;" onclick="isProjectLike()">
<i class="thumbs-up-icon"></i>
<span id="likestatus">赞</span>
(<span id="likecount">345</span>)
</a>
<a href="javascript:;" title="分享" class="share-km-a btn btn-sm popup_more bdsharebuttonbox bdshare-button-style2-16" data-cmd="more" data-bd-bind="1486647816538"><i class="share-icon"></i> 分享</a>
</div>
</div>
</div>
</div>
<div class="project-desc content-intro">
<h3><i class="icon-reorder"></i>手册说明:</h3>
<div>
<p>HTML是现在世界通用的超文本标记语言，通过它，可以实现图片、链接、音乐以及程序等等多种元素。现如今，HTML已经是程序员必须掌握的一项基本功。&nbsp;</p><p style="text-align: center; "><img src="http://www.eeedong.com/attachments/image/20161021/1477036444719391.jpg" alt="HTML"></p><h2>HTML发展史</h2><p>HTML没有1.0，因为关于它的初版存在争议，1995年HTML 2.0面试，1997年由国际官方组织W3C推出了HTML 3.2以及HTML 4.0标准，后面W3C(万维网联盟)也渐渐变成Web技术领域的权威，经过漫长的演变，2014年，HTML 5标准最终面世。</p><p>HTML 2.0——1995年11月，RFC 1866发布</p><p>HTML 3.2——1997年1月14日，W3C发布推荐标准</p><p>HTML 4.0——1997年12月18日，W3C<span style="line-height: 1.7;">发布</span><span style="line-height: 1.7;">推荐标准</span></p><p>HTML 4.01——1999年12月24日，W3C<span style="line-height: 1.7;">发布</span><span style="line-height: 1.7;">推荐标准</span></p><p>HTML 5——2014年10月28日，W3C<span style="line-height: 1.7;">发布</span><span style="line-height: 1.7;">推荐标准</span></p><h2>HTML结构</h2><p>HTML的结构一般包括&lt;head&gt;标签和&lt;body&gt;标签，&lt;head&gt;&lt;/head&gt;这2个标记符分别表示网页的头部和正文。头部中可包含页面的标题、关键词、描述说明等内容，它本身不作为内容来显示，但影响网页显示的效果。&lt;body&gt;&lt;/body&gt;当中是网页实际显示的内容，正文标记符又被称为实体标记。页面当中通常包含有很多指向其他相关页面或其他节点的指针，通过点击，可以很方便地获取新的网页，这是HTML获得广泛推广运用最重要的原因之一，而由这些相互之间存在关联的页面组成的有机集合便是网站。</p><p>究竟HTML为什么会被普及?这就要归功于互联网的高速发展，对于编程语言的需求直线上升。而HTML5具有超集方式的简易性、运用广泛的可拓展性、灵活应变的平台适应性以及简单的通用性。凭借着这些特性，HTML越来越受到人们的喜爱。</p><h2>HTML5编辑规范</h2><p>1、文件拓展名默认使用htm，便于操作系统或者程序辨认文件，而图片则基本上存为gif或jpg</p><p>2、浏览器默认忽视回车符，不过为了方便阅览，人们还是会习惯地在写完一段代码后进行回车</p><p>3、标记符号用尖括号括起来，带斜杠的元素表示该标记说明结束，大多数标记符必须成对使用，用以说明起始和结束。</p><p>4、必须使用半角而不是全角字符</p><p>5、HTML注释&lt;!--注释内容--&gt;的内容不给予显示。</p><h2>除了这本手册，你还可以参考</h2><p><a href="http://www.w3cschool.cn/wzjszn/web-validate.html" target="_blank">《HTML验证》</a></p><p><a href="http://www.w3cschool.cn/html/html-html_examples.html" target="_blank">《HTML实例》</a></p><p><a href="http://www.w3cschool.cn/html/html-html_quiz.html" target="_blank">《HTML测验》</a></p><p><a href="http://www.w3cschool.cn/codecamp/list?ccid=2" target="_blank">《HTML实战》</a></p><p><a href="http://www.w3cschool.cn/htmltags/index.html" target="_blank">《HTML参考手册》</a></p><h2>开始学习HTML</h2><p>接下来，你可以打开这本教程，先了解html的基本概念，然后一个一个地掌握<a href="http://www.w3cschool.cn/htmltags/tag-a.html" target="_blank">HTML标签</a>、<a href="http://www.w3cschool.cn/webdevelopment/rezj1jsl.html" target="_blank">HTML语法</a>、<a href="http://www.w3cschool.cn/htmltags/tag-comment.html" target="_blank">HTML注释</a>、<a href="http://www.w3cschool.cn/htmltags/tag-frame.html" target="_blank">HTML框架</a>的用法，并且参考借鉴一些优秀的网站，通过浏览器的“查看源代码”功能来了解别人写的HTML代码结构。</p><p>HTML对于系统环境配置要求一点也不高，基本上，你只需要有一台电脑就够了。</p><p><br></p></div>
</div>
<div class="project-desc">
<h3><i class="icon-reorder"></i>更新记录：</h3>
<ul class="portlet-body">
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-iframes.html" title="HTML 框架"><i class="icons-img icons-artile"></i>HTML 框架</a>
<span class="logtime">02-03 16:11</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-index.html" title="HTML 简介"><i class="icons-img icons-artile"></i>HTML 简介</a>
<span class="logtime">01-13 15:43</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-table-borders.html" title="HTML 表边框"><i class="icons-img icons-artile"></i>HTML 表边框</a>
<span class="logtime">01-13 15:35</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-table-caption.html" title="HTML 表标题"><i class="icons-img icons-artile"></i>HTML 表标题</a>
<span class="logtime">01-13 15:35</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-table-span.html" title="HTML 表跨度"><i class="icons-img icons-artile"></i>HTML 表跨度</a>
<span class="logtime">01-13 15:35</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-table-column.html" title="HTML 表列"><i class="icons-img icons-artile"></i>HTML 表列</a>
<span class="logtime">01-13 15:35</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-table-header.html" title="HTML 表头"><i class="icons-img icons-artile"></i>HTML 表头</a>
<span class="logtime">01-13 15:35</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-form-input-validation.html" title="HTML 表单验证"><i class="icons-img icons-artile"></i>HTML 表单验证</a>
<span class="logtime">01-13 14:40</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-form-output.html" title="HTML 表单输出"><i class="icons-img icons-artile"></i>HTML 表单输出</a>
<span class="logtime">01-13 14:30</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<i class="ic-folder-open2"></i><a href="/html/html-css-form-textarea.html" title="HTML 表单文本域"><i class="icons-img icons-artile"></i>HTML 表单文本域</a>
<span class="logtime">01-13 14:29</span>
</div>
</li>
</ul>
</div>
<div class="project-desc">
<h3>
<i class="icon-reorder"></i>常见问题：
<a href="/html/topic" target="_blank" class="ask-btn">更多&gt;&gt;</a>
</h3>
<ul class="portlet-body">
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231638.html" title="大家好！求解答一下我这一小段代码，我为什么实现不了居右的效果？"><i class="icons-img icons-question"></i>大家好！求解答一下我这一小段代码，我为什么实现不了居右的效果？</a>
<span class="answercount">回答(6)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231351.html" title="在html代码中的&amp;qhsj是什么意思？"><i class="icons-img icons-question"></i>在html代码中的&amp;qhsj是什么意思？</a>
<span class="answercount">回答(3)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231673.html" title="html直接键入多个空格为什么只能显示一个空格占位？"><i class="icons-img icons-question"></i>html直接键入多个空格为什么只能显示一个空格占位？</a>
<span class="answercount">回答(3)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231585.html" title="在HTML中，要想输入多行文本，应该使用什么标记？"><i class="icons-img icons-question"></i>在HTML中，要想输入多行文本，应该使用什么标记？</a>
<span class="answercount">回答(2)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231594.html" title="table表格怎么样添加滚动条"><i class="icons-img icons-question"></i>table表格怎么样添加滚动条</a>
<span class="answercount">回答(2)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231675.html" title="html怎么空行,在html文章段落间空行用什么方法？"><i class="icons-img icons-question"></i>html怎么空行,在html文章段落间空行用什么方法？</a>
<span class="answercount">回答(2)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231650.html" title="html中如何实现段落首行悬挂？"><i class="icons-img icons-question"></i>html中如何实现段落首行悬挂？</a>
<span class="answercount">回答(1)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231661.html" title="什么是HTML标签？HTML标签有什么作用？"><i class="icons-img icons-question"></i>什么是HTML标签？HTML标签有什么作用？</a>
<span class="answercount">回答(1)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231662.html" title="HTML网页自动跳转代码怎么写？"><i class="icons-img icons-question"></i>HTML网页自动跳转代码怎么写？</a>
<span class="answercount">回答(1)</span>
</div>
</li>
<li class="logrow">
<div class="loginfo">
<a href="/html/question-10231663.html" title="文字和图片居中的HTML代码怎么写？"><i class="icons-img icons-question"></i>文字和图片居中的HTML代码怎么写？</a>
<span class="answercount">回答(1)</span>
</div>
</li>
</ul>
</div>
</div> 
<script type="text/javascript">
function isProjectLike(){
$.ajaxdo({
url: "/project/islike/html.html",
type: "post",
dataType: 'json',
data: {},
sync: false,
success: function (data) {
if (data.statusCode == 200) {
$('.avatar-list').find('p').remove();
$('.avatar-list').append('<a href="/u/' + data.data + '" title="' + data.data + '"><img src="/attachments/avatar/avatar_' + data.data + '.jpg" title=""></a>');
var likecount = $("#likecount").text() * 1 + 1;
$("#likecount").html(likecount);
$(".btn-thumbs-up i").attr('class','thumbs-up-icon-isdone');
$("#likestatus").html('已赞');
toastr.success(data.message,'',{"positionClass": "toast-top-center"});
} else {
toastr.warning(data.message,'',{"positionClass": "toast-top-center"});
}
}
});
}

function isProjectStar(){
var type = $('#hbstar').attr('data-type');
$.ajaxdo({
url: "/project/star/html.html",
type: "post",
dataType: 'json',
data: {},
success: function (data) {
if(data.statusCode == 200){
if (type == 'star') {
$('#hbstar').html('<i class="star-icon-isdone"></i><span>已收藏</span>');
$('#hbstar').attr('data-type','rstar');
toastr.success(data.message,'',{"positionClass": "toast-top-center"});
} else {
$('#hbstar').html('<i class="star-icon"></i><span>收藏</span>');
$('#hbstar').attr('data-type','star');
toastr.success(data.message,'',{"positionClass": "toast-top-center"});
}
}else{
toastr.warning(data.message,'',{"positionClass": "toast-top-center"});
}
}
});
}
</script>
</div>
</div>
<div id="sidebar">
<div class="tools-box">
<div id="course">
<h2>扩展栏目</h2>
</div>
<div id="tools">
<h5 id="tools_3"><a href="/html/topic" target="_blank" title="html问答讨论区">html问答讨论区</a></h5><h5 id="tools_2"><a href="/html/dict" target="_blank" title="html速查词典">html速查词典</a></h5><h5 id="tools_3"><a href="/html5/" target="_blank" title="HTML5教程">HTML5教程</a></h5>
<h5 id="tools_3"><a href="/htmltags/" target="_blank" title="HTML参考手册">HTML参考手册</a></h5>
<h5 id="tools_3"><a href="/codecamp/say-hello-to-html-element.html" target="_blank" title="HTML编程入门训练">HTML编程入门训练</a></h5>
<h5 id="tools_1"><a href="/webide">开发工具IDE</a></h5>         
<h5 id="tools_3"><a href="/codecamp/">编程训练营</a></h5>
</div>
</div>
<!--广告放置-->
<!--内容页竖版广告开始--> 
<div class="sidebar-box">
<div id="course">
<h2>Advertisement</h2>
</div>
<div class="abox">
<script type="text/javascript">
/*内容页竖版*/
var cpro_id = "u2890388";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
</div>
<!--内容页竖版广告结束--> 
<!--分类导航-->
<!--siderbar_nav start--> 
<div class="sidebar-box">
<div id="course">
<h2>分类导航</h2>
</div>
<ul class="nav1">
<li class="li1">
<a href="javascript:;">最新推荐</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/freejquery/index.html" title="免费Jquery插件合集">免费Jquery插件合集</a></li>
<li class="li2"><a href="//www.w3cschool.cn/plk2fi/index.html" title="前端学习资源汇总">前端学习资源汇总</a></li>
<li class="li2"><a href="//www.w3cschool.cn/wxxcx/index.html" title="微信小程序资源汇总">微信小程序资源汇总</a></li>
<li class="li2"><a href="//www.w3cschool.cn/smarty/index.html" title="Smarty教程">Smarty教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/kfm2f1/index.html" title="SEO基础知识教程">SEO基础知识教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/wkspring/index.html" title="Spring 教程">Spring 教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">HTML/CSS</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/html/index.html" title="HTML教程">HTML教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/html5/index.html" title="HTML5教程">HTML5教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/css/index.html" title="CSS教程">CSS教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/css3/index.html" title="CSS3教程">CSS3教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/bootstrap/index.html" title="bootstrap教程">bootstrap教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/foundation/index.html" title="Foundation5 教程">Foundation5 教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">javascript</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/javascript/index.html" title="javascript教程">javascript教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/htmldom/index.html" title="HTML DOM教程">HTML DOM教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/jquery/index.html" title="jQuery教程">jQuery教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/angularjs/index.html" title="AngularJS教程">AngularJS教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/react/index.html" title="React 教程">React 教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/jqueryui/index.html" title="jQuery UI教程">jQuery UI教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/jqueryeasyui/index.html" title="jQuery EasyUI教程">jQuery EasyUI教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/nodejs/index.html" title="Node.js教程">Node.js教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/ajax/index.html" title="AJAX教程">AJAX教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/json/index.html" title="JSON教程">JSON教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/highcharts/index.html" title="Highcharts教程">Highcharts教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/googleditu/index.html" title="Google地图教程">Google地图教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">服务端</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/php/index.html" title="PHP教程">PHP教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/python/index.html" title="python基础教程">python基础教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/python3/index.html" title="Python 3教程">Python 3教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/django/index.html" title="Django教程">Django教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/linux/index.html" title="Linux教程">Linux教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/docker/index.html" title="Docker教程">Docker教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/ruby/index.html" title="Ruby教程">Ruby教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/java/index.html" title="Java教程">Java教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/c/index.html" title="C教程">C教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/cpp/index.html" title="C++教程">C++教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/perl/index.html" title="Perl 教程">Perl 教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/servlet/index.html" title="Servlet教程">Servlet教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/jsp/index.html" title="JSP教程">JSP教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/lua/index.html" title="Lua教程">Lua教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/scala/index.html" title="scala">scala</a></li>
<li class="li2"><a href="//www.w3cschool.cn/go/index.html" title="Go教程">Go教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/shejimoshi/index.html" title="设计模式">设计模式</a></li>
<li class="li2"><a href="//www.w3cschool.cn/zhengzebiaodashi/index.html" title="正则表达式">正则表达式</a></li>
<li class="li2"><a href="//www.w3cschool.cn/asp/index.html" title="ASP教程">ASP教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/appml/index.html" title="AppML教程">AppML教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/vbscript/index.html" title="VBScript教程">VBScript教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/wkspring/index.html" title="Spring 教程">Spring 教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">数据库</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/sql/index.html" title="SQL教程">SQL教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/mysql/index.html" title="MySQL教程">MySQL教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/sqlite/index.html" title="SQLite教程">SQLite教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/mongodb/index.html" title="MongoDB教程">MongoDB教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/redis/index.html" title="Redis教程">Redis教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/memcached/index.html" title="Memcached教程">Memcached教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">移动端</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/android/index.html" title="Android教程">Android教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/swift/index.html" title="Swift 教程">Swift 教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/jquerymobile/index.html" title="jQuery Mobile教程">jQuery Mobile教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/ionic/index.html" title="ionic">ionic</a></li>
<li class="li2"><a href="//www.w3cschool.cn/ios/index.html" title="ios开发手册">ios开发手册</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">ASP.NET</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/aspnet/index.html" title="ASP.NET教程">ASP.NET教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/csharp/index.html" title="C#教程">C#教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">Web Services</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/webservices/index.html" title="Web Services教程">Web Services教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/wsdl/index.html" title="WSDL教程">WSDL教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/soap/index.html" title="SOAP教程">SOAP教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/rss/index.html" title="RSS教程">RSS教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/rdf/index.html" title="RDF教程">RDF教程</a></li>
</ul>
</li>
<li class="li1">
<a href="javascript:;">开发工具</a>
<ul class="nav2">
<li class="li2"><a href="//www.w3cschool.cn/eclipse/index.html" title="Eclipse教程">Eclipse教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/git/index.html" title="Git教程">Git教程</a></li>
<li class="li2"><a href="//www.w3cschool.cn/firebug/index.html" title="Firebug教程">Firebug教程</a></li>
</ul>
</li>
</ul>
</div>
<!--siderbar_nav end--></div>
</div>



<?php get_footer(); ?>
