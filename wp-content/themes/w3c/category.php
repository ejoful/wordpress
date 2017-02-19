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

$category = get_the_category();
//print_r($category);die();

global $cat;
$cats = get_categories(array(
    'child_of' => $cat,
    'parent' => $cat,
    'hide_empty' => 0
));
$cur_category = get_category($cat);
//print_r($cur_category);
//$categories = get_the_category($cat);

//print_r($cat);
//print_r($cats);




if(!empty($cats)){
    $cat_str = '';
    foreach($cats as $the_cat){
        $posts = get_posts(array(
            'category' => $the_cat->cat_ID,
            'orderby' => 'date',
            'order' => 'ASC',
        ));

        if(!empty($posts)){
            $cat_str .= '<li class="dd-item" data-id="y12r1210" ismenu="1">';
            $cat_str .= '<div class="dd-content folder-open">';
            $cat_str .= '<h2 class="menu-title">';
            $cat_str .= '<span class="leftth" title="'.$the_cat->name.'">'.$the_cat->name.'</span>';
            $cat_str .= '</h2></div>';
            $cat_str .= '<ol class="dd-list" style="margin: 0;padding: 0;">';

            foreach($posts as $post){
                $cat_str .= '<li class="dd-item" data-id="html-html_examples">';
                $cat_str .= '<div class="dd-content ">';
                $cat_str .= '<a href="'.get_permalink($post->ID).'" title="'.$post->post_title.'">'.$post->post_title.'</a>';
                $cat_str .= '</div>';
                $cat_str .= '</li>';
            }
            $cat_str .= '</ol></li>';
        }
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
    <?php echo $cat_str; ?>
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
<a href="/<?php echo $cur_category->slug;?>" title="<?php echo $cur_category->name;?>教程">

<img class="pimgcover" src="<?php echo $cur_category->meta['image'];?>" width="150" height="150" alt="<?php echo $cur_category->name;?>教程">
</a>
</div>
<div class="coverinfo">
<h1><a href="/<?php echo $cur_category->slug;?>" title="<?php echo $cur_category->name;?>教程"><?php echo $cur_category->name;?>教程</a></h1>
<div class="coverinfo-desc">
<h2>手册简介:</h2>
<p><?php the_category_top_text(); ?></p>

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
<div><?php the_category_bottom_text(); ?></div>
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
