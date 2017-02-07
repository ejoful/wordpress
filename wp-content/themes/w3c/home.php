<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="search-banner" class="search-banner2">
<div class="index-wrapper search-wrapper">
<div class="first-w3">
<h1>学技术查资料，从W3Cschool开始</h1>
<h2>高质量、系统化、有温度的IT技术内容平台</h2>
</div>
<form action="/search" method="get">
<div class="search-item">
<input type="text" class="search-box" name="w" value="" placeholder="搜索您感兴趣的内容、教程或需要查阅的技术文档、参考手册...">
<button type="submit" class="search-btn">搜索</button>
</div>
</form>
</div>
</div>
<div class="item-content">
<div class="index-wrapper">
<div class="content-bg">
<div id="navsecond">
<div class="hotpro-list">
<h2 class="sidebar-title">热门教程<a href="http://www.w3cschool.cn/tutorial" target="_blank" class="more-btn" title="编程入门教程">更多</a></h2>
<ul>
  
<li>
<a href="//www.w3cschool.cn/html/" title="HTML教程"><i class="icon-img platform-html"></i>HTML教程</a>
<span>151698人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/css/" title="CSS教程"><i class="icon-img platform-css"></i>CSS教程</a>
<span>92319人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/javascript/" title="javascript教程"><i class="icon-img platform-javascript"></i>javascript教程</a>
<span>126612人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/jquery/" title="jQuery教程"><i class="icon-img platform-jquery"></i>jQuery教程</a>
<span>70370人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/bootstrap/" title="bootstrap教程"><i class="icon-img platform-bootstrap"></i>bootstrap教程</a>
<span>31071人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/php/" title="PHP教程"><i class="icon-img platform-php"></i>PHP教程</a>
<span>48869人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/java/" title="Java教程"><i class="icon-img platform-java"></i>Java教程</a>
<span>35360人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/python/" title="python基础教程"><i class="icon-img platform-python"></i>python基础教程</a>
<span>22349人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/mysql/" title="MySQL教程"><i class="icon-img platform-mysql"></i>MySQL教程</a>
<span>20899人已学</span>
</li>
  
<li>
<a href="//www.w3cschool.cn/sql/" title="SQL教程"><i class="icon-img platform-sql"></i>SQL教程</a>
<span>49364人已学</span>
</li>
</ul>
</div>
<div class="sl-item">
<a href="http://www.w3cschool.cn/sczn" target="_blank">
<img src="http://statics.w3cschool.cn/images/w3c/sl.jpg" alt="W3Cschool手册托管与收录">
</a>
</div>
<div class="recommend-list">
<h2 class="sidebar-title">收录文档推荐<a href="http://www.w3cschool.cn/manual" target="_blank" class="more-btn">更多</a></h2>
<ul>
<li>
<a href="//www.w3cschool.cn/mip/" title="百度搜索MIP教程"><i class="icon-img platform-mip"></i>百度搜索MIP教程</a>
<span>645人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/weixinapp/" title="微信小程序开发文档"><i class="icon-img platform-weixinapp"></i>微信小程序开发文档</a>
<span>50394人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/miniappbook/" title="微信小程序指南手册"><i class="icon-img platform-miniappbook"></i>微信小程序指南手册</a>
<span>392人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/jsref/" title="JavaScript 和 HTML DOM 参考手册"><i class="icon-img platform-jsref"></i>JavaScript 和 HTML DOM 参考手册</a>
<span>24761人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/jfinal/" title="JFinal手册"><i class="icon-img platform-jfinal"></i>JFinal手册</a>
<span>1567人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/cssref/" title="css参考手册"><i class="icon-img platform-cssref"></i>css参考手册</a>
<span>26648人已学</span>
</li>
<li>
<a href="http://www.w3cschool.cn/moresource/cssreference/index.html" title=""><i class="icon-img platform-"></i>CSS属性视觉引导</a>
<span>1219人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/fastjson/" title="FastJson 教程"><i class="icon-img platform-fastjson"></i>FastJson 教程</a>
<span>181人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/thinkphp323/" title="ThinkPHP3.2.3完全开发手册"><i class="icon-img platform-thinkphp323"></i>ThinkPHP3.2.3完全开发手册</a>
<span>7233人已学</span>
</li>
<li>
<a href="//www.w3cschool.cn/yii2manual/" title="Yii 2.0 权威指南"><i class="icon-img platform-yii2manual"></i>Yii 2.0 权威指南</a>
<span>1798人已学</span>
</li>
</ul>
</div>
</div> 
<div id="maincontent">
<div id="w3" class="first-w3">
 
<!--轮播开始-->
<div class="slide-main" id="touchMain">    
<div class="slide-box" id="slideContent">
<div class="slide">
<div class="slide-count-box">
<a stat="sslink-1" href="" target="_blank">
<div class="obj-x"><img src="http://img.w3cschool.cn/attachments/knowledge/201702/13859.png" alt="立春" /></div>
</a>
<!--<div class="slide-article-title">
<a href=""><h4>立春</h4></a>
</div>-->
</div>
</div>        
<div class="slide">
<div class="slide-count-box">
<a stat="sslink-1" href="http://www.w3cschool.cn/miniapp" target="_blank">
<div class="obj-x"><img src="http://img.w3cschool.cn/attachments/knowledge/201701/48474.png" alt="微信小程序导航清单" /></div>
</a>
<!--<div class="slide-article-title">
<a href="http://www.w3cschool.cn/miniapp"><h4>微信小程序导航清单</h4></a>
</div>-->
</div>
</div>        
<div class="slide">
<div class="slide-count-box">
<a stat="sslink-1" href="http://123.w3cschool.cn/wxxcx" target="_blank">
<div class="obj-x"><img src="http://img.w3cschool.cn/attachments/knowledge/201610/79405.png" alt="【推荐】微信小程序资源汇总" /></div>
</a>
<!--<div class="slide-article-title">
<a href="http://123.w3cschool.cn/wxxcx"><h4>【推荐】微信小程序资源汇总</h4></a>
</div>-->
</div>
</div>        
<div class="slide">
<div class="slide-count-box">
<a stat="sslink-1" href="http://www.w3cschool.cn/codecamp" target="_blank">
<div class="obj-x"><img src="http://img.w3cschool.cn/attachments/knowledge/201610/42668.png" alt="编程入门教程实战" /></div>
</a>
<!--<div class="slide-article-title">
<a href="http://www.w3cschool.cn/codecamp"><h4>编程入门教程实战</h4></a>
</div>-->
</div>
</div>        
<div class="slide-next-btn-box" style="display: none;">
<a class="prev" href="javascript:;" stat="prev1001"><img src="http://img.w3cschool.cn/statics/img/l-btn.png" alt="上一张"/></a>
<a class="next" href="javascript:;" stat="next1002"><img src="http://img.w3cschool.cn/statics/img/r-btn.png" alt="下一张"/></a>
</div>
<div class="item">
<a class="cur" stat="item1001" href="javascript:;"></a><a href="javascript:;" stat="item1002"></a><a href="javascript:;" stat="item1003"></a><a href="javascript:;" stat="item1004"></a>
</div>
</div>
</div>
<!--轮播结束-->
</div>
<div class="tutorial-list">
<h2 class="sidebar-title">入门推荐<a href="http://www.w3cschool.cn/codecamp/" target="_blank" class="more-btn">更多</a></h2>
<div class="tutorial-item">
<a href="http://www.w3cschool.cn/html5/" class="tutorial-box" title="HTML5教程">
<i class="html5-icon"></i>                     
<h3>HTML5教程</h3>
</a>
<a href="http://www.w3cschool.cn/css3/" class="tutorial-box" title="CSS3教程">
<i class="css3-icon"></i>   
<h3>CSS3教程</h3>
</a>
<a href="http://www.w3cschool.cn/jsp/" class="tutorial-box" title="JSP教程">              
<i class="jsp-icon"></i>
<h3>JSP教程</h3>
</a>
<a href="http://www.w3cschool.cn/nodejs/" class="tutorial-box" title="Node.js教程">               
<i class="nodejs-icon"></i>
<h3>Node.js教程</h3>
</a>
</div>
<div class="tutorial-item">
<a href="http://www.w3cschool.cn/codecamp/list?ccid=2" class="tutorial-box" title="Html/CSS编程实战"> 
<i class="htmlcss-icon"></i>                   
<h3>Html/CSS编程实战</h3>
</a>
<a href="http://www.w3cschool.cn/codecamp/list?ccid=3" class="tutorial-box" title="Javascript编程实战"> 
<i class="js-icon"></i>
<h3>Javascript编程实战</h3>
</a>
<a href="http://www.w3cschool.cn/codecamp/list?ccid=4" class="tutorial-box" title="Bootstrap编程实战">              
<i class="bootstrap-icon"></i>
<h3>Bootstrap编程实战</h3>
</a>
<a href="http://www.w3cschool.cn/codecamp/list?ccid=5" class="tutorial-box" title="Jquery编程实战">             
<i class="jquery-icon"></i>
<h3>Jquery编程实战</h3>
</a>
</div>
</div>
<div class="article-list">
<h2 class="sidebar-title">最新更新<a href="/archives/" target="_blank" class="more-btn">更多</a></h2>
<ul class="article-box">
<li><a href="//www.w3cschool.cn/css/css-summary.html" target="_blank" title="CSS 总结"><i class="icon-img icon-artile"></i>CSS 总结</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/jiandaoyun/jiandaoyun-592822ot.html" target="_blank" title="简道云简介"><i class="icon-img icon-artile"></i>简道云简介</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/javascript/js-operators.html" target="_blank" title="JavaScript 运算符"><i class="icon-img icon-artile"></i>JavaScript 运算符</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/javascript/js-strings.html" target="_blank" title="JavaScript 字符串"><i class="icon-img icon-artile"></i>JavaScript 字符串</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/git/git-cheat-sheet.html" target="_blank" title="Git 常用命令速查表"><i class="icon-img icon-artile"></i>Git 常用命令速查表</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/pika/pika-yel222nz.html" target="_blank" title="pika 介绍"><i class="icon-img icon-artile"></i>pika 介绍</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/android/android-services.html" target="_blank" title="Android 服务(Service)"><i class="icon-img icon-artile"></i>Android 服务(Service)</a><span>2017-02-06</span></li>
<li><a href="//www.w3cschool.cn/android/android-content-providers.html" target="_blank" title="Android 内容提供者(Content Provider)"><i class="icon-img icon-artile"></i>Android 内容提供者(Content Provider)</a><span>2017-02-05</span></li>
<li><a href="//www.w3cschool.cn/finch/finch-qb9k22kv.html" target="_blank" title="Finch PHP 由来"><i class="icon-img icon-artile"></i>Finch PHP 由来</a><span>2017-02-05</span></li>
<li><a href="//www.w3cschool.cn/finch/finch-av5w22lc.html" target="_blank" title="判断方法"><i class="icon-img icon-artile"></i>判断方法</a><span>2017-02-05</span></li>
<li><a href="//www.w3cschool.cn/finch/finch-h8ox22la.html" target="_blank" title="类库加载机制"><i class="icon-img icon-artile"></i>类库加载机制</a><span>2017-02-05</span></li>
<li><a href="//www.w3cschool.cn/finch/finch-dit922l8.html" target="_blank" title="其他配置"><i class="icon-img icon-artile"></i>其他配置</a><span>2017-02-05</span></li>
<li><a href="//www.w3cschool.cn/finch/finch-r1at22l7.html" target="_blank" title="框架常量"><i class="icon-img icon-artile"></i>框架常量</a><span>2017-02-05</span></li>
<li><a href="//www.w3cschool.cn/finch/finch-73ib22l6.html" target="_blank" title="URL方法"><i class="icon-img icon-artile"></i>URL方法</a><span>2017-02-05</span></li>
</ul>
</div>
</div>
<div id="sidebar">
<div class="quick-item">
<div class="quick-title">
<h2 class="quicklogintt">快速登录</h2>
</div>
<div class="quicklogin quick-box">
<a href="/auth?platform=weibo"><i class="pop-sns icons-weibo"></i>使用微博登录</a>
<a href="/auth"><i class="pop-sns icons-qq"></i>使用QQ登录</a>              
<a class="weixina" href="/auth?platform=weixin"><i class="pop-sns icons-weixin"></i>使用微信登录</a>
<div class="weixinlogin" style="">
<img style="width: 180px;height: 180px;" src="/qrapi?text=http://www.youj.com/auth?platform=weixin">
<div style="margin-bottom: 10px;">使用微信扫码登录</div>  
</div>
</div>
</div>
<div class="focus-item">
<a href="http://www.toutiao.com/m50001900643/" target="_blank">
<img src="http://img.w3cschool.cn/statics/images/w3c/toutiao.png" alt="W3Cschool头条号" width="240">
</a>
</div> 
<div class="focus-item2">
<a href="http://www.w3cschool.cn/article/5007600" target="_blank">
<img src="http://img.w3cschool.cn/attachments/knowledge/201612/98700.png" alt="开源软件托管" width="240" height="160">
</a>
</div>  
<div class="news-list">
<h2 class="sidebar-title">头条公告<a href="http://www.w3cschool.cn/articlelist/" class="more-btn">更多</a></h2>
<ul>
<li><a href="http://www.w3cschool.cn/article/newyear2017" title="致W3Cschool同学们的一封新年祝福信"><i class="icon-img icon-news"></i>致W3Cschool同学们的一封新年祝福信</a></li>
<li><a href="http://www.w3cschool.cn/article/translationtask" title="W3Cschool翻译任务认领（有积分奖励哦~）"><i class="icon-img icon-news"></i>W3Cschool翻译任务认领（有积分奖励哦~）</a></li>
<li><a href="http://www.w3cschool.cn/article/cxyheihua" title="走进程序员江湖，揭秘互联网黑话"><i class="icon-img icon-news"></i>走进程序员江湖，揭秘互联网黑话</a></li>
<li><a href="http://www.w3cschool.cn/article/1grd" title="中国第一代程序员已渐隐，神话恐再难重现"><i class="icon-img icon-news"></i>中国第一代程序员已渐隐，神话恐再难重现</a></li>
<li><a href="http://www.w3cschool.cn/article/baiduNoonecar" title="百度无人车三千多个场景，竟然有一万多个if，谁敢去坐?"><i class="icon-img icon-news"></i>百度无人车三千多个场景，竟然有一万多个if，谁敢去坐?</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="item-contentbg">
<div class="index-wrapper">
<div class="project-title">
<h2>免费的在线教程&amp;技术文档</h2>
</div>
<div class="project-list">
<div class="project-item">
<div class="project-box">   
<h4 class="sidebar-title" id="blockbasis">编程入门教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/html/" title="学习 HTML"><i class="icon-img platform-html"></i>学习 HTML</a></li>
  
<li><a href="//www.w3cschool.cn/html5/" title="学习 HTML5"><i class="icon-img platform-html5"></i>学习 HTML5</a></li>
  
<li><a href="//www.w3cschool.cn/css/" title="学习 CSS"><i class="icon-img platform-css"></i>学习 CSS</a></li>
  
<li><a href="//www.w3cschool.cn/css3/" title="学习 CSS3"><i class="icon-img platform-css3"></i>学习 CSS3</a></li>
  
<li><a href="//www.w3cschool.cn/javascript/" title="学习 Javascript"><i class="icon-img platform-javascript"></i>学习 Javascript</a></li>
  
<li><a href="//www.w3cschool.cn/zhengzebiaodashi/" title="学习 正则表达式"><i class="icon-img platform-zhengzebiaodashi"></i>学习 正则表达式</a></li>
</ul>
<h4 class="sidebar-title" id="blockcodecamp">编程实战训练</h4>       
<ul class="menu">
  
<li><a href="http://www.w3cschool.cn/codecamp/say-hello-to-html-element.html" title="实战 HTML&CSS"><i class="icon-img platform-codecamp-0"></i>实战 HTML&CSS</a></li>
  
<li><a href="http://www.w3cschool.cn/codecamp/list?ccid=3" title="实战 JavaScript"><i class="icon-img platform-codecamp-1"></i>实战 JavaScript</a></li>
  
<li><a href="http://www.w3cschool.cn/codecamp/list?ccid=4" title="实战 Bootstrap"><i class="icon-img platform-codecamp-2"></i>实战 Bootstrap</a></li>
  
<li><a href="http://www.w3cschool.cn/codecamp/list?ccid=5" title="实战 jQuery"><i class="icon-img platform-codecamp-3"></i>实战 jQuery</a></li>
</ul>
<h4 class="sidebar-title" id="blocksql">数据库开发教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/ms_access/" title="学习 Access"><i class="icon-img platform-ms_access"></i>学习 Access</a></li>
  
<li><a href="//www.w3cschool.cn/cassandra/" title="学习 Cassandra"><i class="icon-img platform-cassandra"></i>学习 Cassandra</a></li>
  
<li><a href="//www.w3cschool.cn/hibernate/" title="学习 Hibernate"><i class="icon-img platform-hibernate"></i>学习 Hibernate</a></li>
  
<li><a href="//www.w3cschool.cn/mariadb/" title="学习 MariaDB"><i class="icon-img platform-mariadb"></i>学习 MariaDB</a></li>
  
<li><a href="//www.w3cschool.cn/memcached/" title="学习 Memcached"><i class="icon-img platform-memcached"></i>学习 Memcached</a></li>
  
<li><a href="//www.w3cschool.cn/mongodb/" title="学习 MongoDB"><i class="icon-img platform-mongodb"></i>学习 MongoDB</a></li>
  
<li><a href="//www.w3cschool.cn/mybatis/" title="学习 MyBatis"><i class="icon-img platform-mybatis"></i>学习 MyBatis</a></li>
  
<li><a href="//www.w3cschool.cn/mysql/" title="学习 Mysql"><i class="icon-img platform-mysql"></i>学习 Mysql</a></li>
  
<li><a href="//www.w3cschool.cn/redis/" title="学习 Redis"><i class="icon-img platform-redis"></i>学习 Redis</a></li>
  
<li><a href="//www.w3cschool.cn/scaladevelopmentguide/" title="学习 Scala"><i class="icon-img platform-scaladevelopmentguide"></i>学习 Scala</a></li>
  
<li><a href="//www.w3cschool.cn/slickguide/" title="学习 Slick"><i class="icon-img platform-slickguide"></i>学习 Slick</a></li>
  
<li><a href="//www.w3cschool.cn/spark/" title="学习 Spark"><i class="icon-img platform-spark"></i>学习 Spark</a></li>
  
<li><a href="//www.w3cschool.cn/sql/" title="学习 SQL"><i class="icon-img platform-sql"></i>学习 SQL</a></li>
  
<li><a href="//www.w3cschool.cn/sqlite/" title="学习 SQLite"><i class="icon-img platform-sqlite"></i>学习 SQLite</a></li>
  
<li><a href="//www.w3cschool.cn/storm/" title="学习 Storm"><i class="icon-img platform-storm"></i>学习 Storm</a></li>
</ul>
<h4 class="sidebar-title" id="blockframework">开发框架</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/django/" title="学习 Django"><i class="icon-img platform-django"></i>学习 Django</a></li>
  
<li><a href="//www.w3cschool.cn/jfinal/" title="学习 Jfinal"><i class="icon-img platform-jfinal"></i>学习 Jfinal</a></li>
  
<li><a href="//www.w3cschool.cn/junit/" title="学习 Junit"><i class="icon-img platform-junit"></i>学习 Junit</a></li>
  
<li><a href="//www.w3cschool.cn/revel/" title="学习 Revel"><i class="icon-img platform-revel"></i>学习 Revel</a></li>
  
<li><a href="//www.w3cschool.cn/servlet/" title="学习 Servlet"><i class="icon-img platform-servlet"></i>学习 Servlet</a></li>
  
<li><a href="//www.w3cschool.cn/wkspring/" title="学习 Spring"><i class="icon-img platform-wkspring"></i>学习 Spring</a></li>
  
<li><a href="//www.w3cschool.cn/swing/" title="学习 Swing"><i class="icon-img platform-swing"></i>学习 Swing</a></li>
  
<li><a href="//www.w3cschool.cn/struts_2/" title="学习 Struts2"><i class="icon-img platform-struts_2"></i>学习 Struts2</a></li>
  
<li><a href="//www.w3cschool.cn/wordpress/" title="学习 WordPress"><i class="icon-img platform-wordpress"></i>学习 WordPress</a></li>
</ul>
<h4 class="sidebar-title" id="blockstuget">学习资源收藏</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/plk2fi/" title="前端学习资源汇总"><i class="icon-img platform-plk2fi"></i>前端学习资源汇总</a></li>
  
<li><a href="//www.w3cschool.cn/wxxcx/" title="微信小程序资源汇总"><i class="icon-img platform-wxxcx"></i>微信小程序资源汇总</a></li>
  
<li><a href="//www.w3cschool.cn/freejquery/" title="免费Jquery插件合集"><i class="icon-img platform-freejquery"></i>免费Jquery插件合集</a></li>
  
<li><a href="//www.w3cschool.cn/selfbuild/" title="自助建站资源汇总"><i class="icon-img platform-selfbuild"></i>自助建站资源汇总</a></li>
</ul>
<h4 class="sidebar-title" id="blockcxml">XML教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/xml/" title="学习 XML"><i class="icon-img platform-xml"></i>学习 XML</a></li>
  
<li><a href="//www.w3cschool.cn/dtd/" title="学习 DTD"><i class="icon-img platform-dtd"></i>学习 DTD</a></li>
  
<li><a href="//www.w3cschool.cn/xmldom/" title="学习 XML DOM"><i class="icon-img platform-xmldom"></i>学习 XML DOM</a></li>
  
<li><a href="//www.w3cschool.cn/xslt/" title="学习 XSL T"><i class="icon-img platform-xslt"></i>学习 XSL T</a></li>
  
<li><a href="//www.w3cschool.cn/xslfo/" title="学习 XSL-FO"><i class="icon-img platform-xslfo"></i>学习 XSL-FO</a></li>
  
<li><a href="//www.w3cschool.cn/xpath/" title="学习 XPath"><i class="icon-img platform-xpath"></i>学习 XPath</a></li>
  
<li><a href="//www.w3cschool.cn/xquery/" title="学习 XQuery"><i class="icon-img platform-xquery"></i>学习 XQuery</a></li>
  
<li><a href="//www.w3cschool.cn/soap/" title="学习 SOAP"><i class="icon-img platform-soap"></i>学习 SOAP</a></li>
  
<li><a href="//www.w3cschool.cn/rss/" title="学习 RSS"><i class="icon-img platform-rss"></i>学习 RSS</a></li>
  
<li><a href="//www.w3cschool.cn/webservices/" title="学习 Web Services"><i class="icon-img platform-webservices"></i>学习 Web Services</a></li>
</ul>
</div>
</div>
</div>
<div class="project-list">
<div class="project-item">
<div class="project-box">   
<h4 class="sidebar-title" id="blockweb">前端开发教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/ajax/" title="学习 AJAX"><i class="icon-img platform-ajax"></i>学习 AJAX</a></li>
  
<li><a href="//www.w3cschool.cn/angularjs/" title="学习 AngularJS"><i class="icon-img platform-angularjs"></i>学习 AngularJS</a></li>
  
<li><a href="//www.w3cschool.cn/angular2/" title="学习 Angular2"><i class="icon-img platform-angular2"></i>学习 Angular2</a></li>
  
<li><a href="//www.w3cschool.cn/bootstrap/" title="学习 Bootstrap"><i class="icon-img platform-bootstrap"></i>学习 Bootstrap</a></li>
  
<li><a href="//www.w3cschool.cn/coffeescript/" title="学习 CoffeeScript"><i class="icon-img platform-coffeescript"></i>学习 CoffeeScript</a></li>
  
<li><a href="//www.w3cschool.cn/ecmascript/" title="学习 ECMAScript"><i class="icon-img platform-ecmascript"></i>学习 ECMAScript</a></li>
  
<li><a href="//www.w3cschool.cn/emberjs_guide/" title="学习 Ember"><i class="icon-img platform-emberjs_guide"></i>学习 Ember</a></li>
  
<li><a href="//www.w3cschool.cn/extjs/" title="学习 Extjs"><i class="icon-img platform-extjs"></i>学习 Extjs</a></li>
  
<li><a href="//www.w3cschool.cn/htmldom/" title="学习 HTML DOM"><i class="icon-img platform-htmldom"></i>学习 HTML DOM</a></li>
  
<li><a href="//www.w3cschool.cn/jquery/" title="学习 jQuery"><i class="icon-img platform-jquery"></i>学习 jQuery</a></li>
  
<li><a href="//www.w3cschool.cn/jqueryeasyui/" title="学习 jQuery EasyUI"><i class="icon-img platform-jqueryeasyui"></i>学习 jQuery EasyUI</a></li>
  
<li><a href="//www.w3cschool.cn/jqueryui/" title="学习 jQuery UI"><i class="icon-img platform-jqueryui"></i>学习 jQuery UI</a></li>
  
<li><a href="//www.w3cschool.cn/json/" title="学习 JSON"><i class="icon-img platform-json"></i>学习 JSON</a></li>
  
<li><a href="//www.w3cschool.cn/discovermeteor/" title="学习 Meteor"><i class="icon-img platform-discovermeteor"></i>学习 Meteor</a></li>
  
<li><a href="//www.w3cschool.cn/gwi22k/" title="学习 UI设计"><i class="icon-img platform-gwi22k"></i>学习 UI设计</a></li>
  
<li><a href="//www.w3cschool.cn/aekdgs/" title="学习 Vue"><i class="icon-img platform-aekdgs"></i>学习 Vue</a></li>
  
<li><a href="//www.w3cschool.cn/webdevelopment/" title="学习 前端开发规范"><i class="icon-img platform-webdevelopment"></i>学习 前端开发规范</a></li>
  
<li><a href="http://www.w3cschool.cn/codecamp/list?ccid=8" title="学习 初级脚本算法"><i class="icon-img platform-web-17"></i>学习 初级脚本算法</a></li>
</ul>
<h4 class="sidebar-title" id="blockmobile">移动端开发教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/android_sdk/" title="学习 Android SDK"><i class="icon-img platform-android_sdk"></i>学习 Android SDK</a></li>
  
<li><a href="//www.w3cschool.cn/appcan/" title="学习 AppCan"><i class="icon-img platform-appcan"></i>学习 AppCan</a></li>
  
<li><a href="//www.w3cschool.cn/cordova/" title="学习 Cordova"><i class="icon-img platform-cordova"></i>学习 Cordova</a></li>
  
<li><a href="//www.w3cschool.cn/crossapp/" title="学习 CrossApp"><i class="icon-img platform-crossapp"></i>学习 CrossApp</a></li>
  
<li><a href="//www.w3cschool.cn/jfryse/" title="学习 HomeKit"><i class="icon-img platform-jfryse"></i>学习 HomeKit</a></li>
  
<li><a href="//www.w3cschool.cn/ios/" title="学习 IOS"><i class="icon-img platform-ios"></i>学习 IOS</a></li>
  
<li><a href="//www.w3cschool.cn/jquerymobile/" title="学习 jQuery Mobile"><i class="icon-img platform-jquerymobile"></i>学习 jQuery Mobile</a></li>
  
<li><a href="//www.w3cschool.cn/react/" title="学习 React"><i class="icon-img platform-react"></i>学习 React</a></li>
  
<li><a href="//www.w3cschool.cn/swift/" title="学习 Swift "><i class="icon-img platform-swift"></i>学习 Swift </a></li>
  
<li><a href="//www.w3cschool.cn/weixinapp/" title="学习 微信小程序开发"><i class="icon-img platform-weixinapp"></i>学习 微信小程序开发</a></li>
</ul>
<h4 class="sidebar-title" id="blockbigdate">大数据</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/apache_pig/" title="学习 Apache Pig"><i class="icon-img platform-apache_pig"></i>学习 Apache Pig</a></li>
  
<li><a href="//www.w3cschool.cn/apache_kafka/" title="学习 Kafka"><i class="icon-img platform-apache_kafka"></i>学习 Kafka</a></li>
  
<li><a href="//www.w3cschool.cn/apache_storm/" title="学习 Storm"><i class="icon-img platform-apache_storm"></i>学习 Storm</a></li>
  
<li><a href="//www.w3cschool.cn/hadoop/" title="学习 Hadoop"><i class="icon-img platform-hadoop"></i>学习 Hadoop</a></li>
  
<li><a href="//www.w3cschool.cn/impala/" title="学习 Impala"><i class="icon-img platform-impala"></i>学习 Impala</a></li>
  
<li><a href="//www.w3cschool.cn/zookeeper/" title="学习 Zookeeper"><i class="icon-img platform-zookeeper"></i>学习 Zookeeper</a></li>
</ul>
<h4 class="sidebar-title" id="blockwebsite">网站建设教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/http/" title="学习 HTTP"><i class="icon-img platform-http"></i>学习 HTTP</a></li>
  
<li><a href="//www.w3cschool.cn/tcpip/" title="学习 TCP/IP"><i class="icon-img platform-tcpip"></i>学习 TCP/IP</a></li>
  
<li><a href="//www.w3cschool.cn/llq/" title="浏览器信息"><i class="icon-img platform-llq"></i>浏览器信息</a></li>
  
<li><a href="//www.w3cschool.cn/wzjszn/" title="网站建设指南"><i class="icon-img platform-wzjszn"></i>网站建设指南</a></li>
  
<li><a href="//www.w3cschool.cn/wzzjjc/" title="网站主机"><i class="icon-img platform-wzzjjc"></i>网站主机</a></li>
  
<li><a href="//www.w3cschool.cn/wzpz/" title="网站品质"><i class="icon-img platform-wzpz"></i>网站品质</a></li>
  
<li><a href="//www.w3cschool.cn/xuexiw3c/" title="学习 W3C标准"><i class="icon-img platform-xuexiw3c"></i>学习 W3C标准</a></li>
</ul>
<h4 class="sidebar-title" id="blockoffices">常用办公软件教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/axurezwjc/" title="学习 Axure"><i class="icon-img platform-axurezwjc"></i>学习 Axure</a></li>
  
<li><a href="//www.w3cschool.cn/exceljc/" title="学习 Excel"><i class="icon-img platform-exceljc"></i>学习 Excel</a></li>
  
<li><a href="//www.w3cschool.cn/markdownyfsm/" title="学习 Markdown语法"><i class="icon-img platform-markdownyfsm"></i>学习 Markdown语法</a></li>
  
<li><a href="//www.w3cschool.cn/officejq1000l/" title="学习 Office技巧"><i class="icon-img platform-officejq1000l"></i>学习 Office技巧</a></li>
  
<li><a href="//www.w3cschool.cn/photoshopgjjc/" title="学习 Photoshop"><i class="icon-img platform-photoshopgjjc"></i>学习 Photoshop</a></li>
</ul>
</div>
</div>
</div>
<div class="project-list">
<div class="project-item">
<div class="project-box">   
<h4 class="sidebar-title" id="blockcserver">服务器端开发教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/php/" title="学习 PHP"><i class="icon-img platform-php"></i>学习 PHP</a></li>
  
<li><a href="//www.w3cschool.cn/java/" title="学习 Java"><i class="icon-img platform-java"></i>学习 Java</a></li>
  
<li><a href="//www.w3cschool.cn/jsp/" title="学习 JSP"><i class="icon-img platform-jsp"></i>学习 JSP</a></li>
  
<li><a href="//www.w3cschool.cn/aspnet/" title="学习 ASP.NET"><i class="icon-img platform-aspnet"></i>学习 ASP.NET</a></li>
  
<li><a href="//www.w3cschool.cn/c/" title="学习 C"><i class="icon-img platform-c"></i>学习 C</a></li>
  
<li><a href="//www.w3cschool.cn/cpp/" title="学习 C++"><i class="icon-img platform-cpp"></i>学习 C++</a></li>
  
<li><a href="//www.w3cschool.cn/csharp/" title="学习 C#"><i class="icon-img platform-csharp"></i>学习 C#</a></li>
  
<li><a href="//www.w3cschool.cn/docker/" title="学习 Docker"><i class="icon-img platform-docker"></i>学习 Docker</a></li>
  
<li><a href="//www.w3cschool.cn/erlang/" title="学习 Erlang"><i class="icon-img platform-erlang"></i>学习 Erlang</a></li>
  
<li><a href="//www.w3cschool.cn/go/" title="学习 Go"><i class="icon-img platform-go"></i>学习 Go</a></li>
  
<li><a href="//www.w3cschool.cn/groovy/" title="学习 Groovy"><i class="icon-img platform-groovy"></i>学习 Groovy</a></li>
  
<li><a href="//www.w3cschool.cn/lua/" title="学习 Lua"><i class="icon-img platform-lua"></i>学习 Lua</a></li>
  
<li><a href="//www.w3cschool.cn/nodejs/" title="学习 Node.js"><i class="icon-img platform-nodejs"></i>学习 Node.js</a></li>
  
<li><a href="//www.w3cschool.cn/perl/" title="学习 Perl"><i class="icon-img platform-perl"></i>学习 Perl</a></li>
  
<li><a href="//www.w3cschool.cn/python/" title="学习 Python"><i class="icon-img platform-python"></i>学习 Python</a></li>
  
<li><a href="//www.w3cschool.cn/python3/" title="学习 Python3"><i class="icon-img platform-python3"></i>学习 Python3</a></li>
  
<li><a href="//www.w3cschool.cn/ruby/" title="学习 Ruby"><i class="icon-img platform-ruby"></i>学习 Ruby</a></li>
  
<li><a href="//www.w3cschool.cn/r/" title="学习 R语言"><i class="icon-img platform-r"></i>学习 R语言</a></li>
  
<li><a href="//www.w3cschool.cn/sas/" title="学习 SAS"><i class="icon-img platform-sas"></i>学习 SAS</a></li>
  
<li><a href="//www.w3cschool.cn/servlet/" title="学习 Servlet"><i class="icon-img platform-servlet"></i>学习 Servlet</a></li>
  
<li><a href="//www.w3cschool.cn/swoole/" title="学习 Swoole"><i class="icon-img platform-swoole"></i>学习 Swoole</a></li>
  
<li><a href="//www.w3cschool.cn/vb_net/" title="学习 VB.NET"><i class="icon-img platform-vb_net"></i>学习 VB.NET</a></li>
  
<li><a href="//www.w3cschool.cn/vbscript/" title="学习 VBscript"><i class="icon-img platform-vbscript"></i>学习 VBscript</a></li>
  
<li><a href="//www.w3cschool.cn/julia/" title="学习 Julia"><i class="icon-img platform-julia"></i>学习 Julia</a></li>
  
<li><a href="//www.w3cschool.cn/apex/" title="学习 Apex"><i class="icon-img platform-apex"></i>学习 Apex</a></li>
</ul>
<h4 class="sidebar-title" id="blockoperations">运维及服务器搭建教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/dartstyleguide/" title="学习 Dart"><i class="icon-img platform-dartstyleguide"></i>学习 Dart</a></li>
  
<li><a href="//www.w3cschool.cn/docker/" title="学习 Docker"><i class="icon-img platform-docker"></i>学习 Docker</a></li>
  
<li><a href="//www.w3cschool.cn/reqsgr/" title="学习 Docker从入门到实践"><i class="icon-img platform-reqsgr"></i>学习 Docker从入门到实践</a></li>
  
<li><a href="//www.w3cschool.cn/dosmlxxsc1/" title="学习 DOS命令"><i class="icon-img platform-dosmlxxsc1"></i>学习 DOS命令</a></li>
  
<li><a href="//www.w3cschool.cn/linux/" title="学习 Linux"><i class="icon-img platform-linux"></i>学习 Linux</a></li>
  
<li><a href="//www.w3cschool.cn/nginxsysc/" title="学习 Nginx使用手册"><i class="icon-img platform-nginxsysc"></i>学习 Nginx使用手册</a></li>
  
<li><a href="//www.w3cschool.cn/oauth2/" title="学习 OAuth2"><i class="icon-img platform-oauth2"></i>学习 OAuth2</a></li>
  
<li><a href="//www.w3cschool.cn/shellbook/" title="学习 Shell编程范例"><i class="icon-img platform-shellbook"></i>学习 Shell编程范例</a></li>
  
<li><a href="//www.w3cschool.cn/unix/" title="学习 Unix"><i class="icon-img platform-unix"></i>学习 Unix</a></li>
</ul>
<h4 class="sidebar-title" id="block11">实例/案例</h4>
<ul class="menu">
<li><a href="//www.w3cschool.cn/html/html-html_examples.html" title="HTML 实例"><i class="icon-img platform-htmldom"></i>HTML 实例</a></li>
<li><a href="//www.w3cschool.cn/css/css-csse_examples.html" title="CSS 实例"><i class="icon-img platform-cssdom"></i>CSS 实例</a></li>
<li><a href="//www.w3cschool.cn/xml/xml-xmle_examples.html" title="XML 实例"><i class="icon-img platform-xml"></i>XML 实例</a></li>
<li><a href="//www.w3cschool.cn/javascript/js-examples.html" title="JavaScript 实例"><i class="icon-img platform-javascript"></i>JavaScript 实例</a></li>
<li><a href="//www.w3cschool.cn/javascript/js-ex-objects.html" title="JavaScript 对象实例"><i class="icon-img platform-javascript"></i>JavaScript 对象实例</a></li>
<li><a href="//www.w3cschool.cn/htmldom/htmldom-examples.html" title="HTML DOM 实例"><i class="icon-img platform-htmldom"></i>HTML DOM 实例</a></li>
<li><a href="//www.w3cschool.cn/xmldom/xmldom-xdom_examples.html" title="XML DOM 实例"><i class="icon-img platform-xmldom"></i>XML DOM 实例</a></li>
<!-- <li><a href="//www.w3cschool.cn/html/html-html_examples.html" title="DHTML 实例"><i class="icon-img platform-default"></i>DHTML 实例</a></li> -->
<li><a href="//www.w3cschool.cn/ajax/aeqvxfnu.html" title="AJAX 实例"><i class="icon-img platform-ajax"></i>AJAX 实例</a></li>
<li><a href="//www.w3cschool.cn/vbscript/vbscript-examples.html" title="VBScript 实例"><i class="icon-img platform-vbscript"></i>VBScript 实例</a></li>
<li><a href="//www.w3cschool.cn/asp/asp-examples.html" title="ASP 实例"><i class="icon-img platform-asp"></i>ASP 实例</a></li>
<li><a href="//www.w3cschool.cn/ado/ado-examples.html" title="ADO 实例"><i class="icon-img platform-ado"></i>ADO 实例</a></li>
<li><a href="//www.w3cschool.cn/svg/svg-examples.html" title="SVG 实例"><i class="icon-img platform-svg"></i>SVG 实例</a></li>
<!-- <li><a href="//www.w3cschool.cn/html/html-html_examples.html" title="WAP 实例"><i class="icon-img platform-default"></i>WAP 实例</a></li> -->
</ul>
</div>
</div>
</div>
<div class="project-list">
<div class="project-item">
<div class="project-box">   
<h4 class="sidebar-title" id="blockscksc">参考手册</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/htmltags/" title="HTML 参考手册"><i class="icon-img platform-htmltags"></i>HTML 参考手册</a></li>
  
<li><a href="//www.w3cschool.cn/cssref/" title="CSS 参考手册"><i class="icon-img platform-cssref"></i>CSS 参考手册</a></li>
  
<li><a href="//www.w3cschool.cn/jsref/" title="JavaScript 和 HTML DOM 参考手册"><i class="icon-img platform-jsref"></i>JavaScript 和 HTML DOM 参考手册</a></li>
  
<li><a href="//www.w3cschool.cn/yii2manual/" title="Yii 2.0 权威指南"><i class="icon-img platform-yii2manual"></i>Yii 2.0 权威指南</a></li>
  
<li><a href="//www.w3cschool.cn/thinkphp323/" title="ThinkPHP3.2.3完全开发手册"><i class="icon-img platform-thinkphp323"></i>ThinkPHP3.2.3完全开发手册</a></li>
  
<li><a href="//www.w3cschool.cn/phpkfbmgf/" title="PHP开发编码规范"><i class="icon-img platform-phpkfbmgf"></i>PHP开发编码规范</a></li>
  
<li><a href="//www.w3cschool.cn/ssdb/" title="SSDB数据库使用手册"><i class="icon-img platform-ssdb"></i>SSDB数据库使用手册</a></li>
  
<li><a href="//www.w3cschool.cn/weixinkaifawendang/" title="微信公众平台的开发者文档"><i class="icon-img platform-weixinkaifawendang"></i>微信公众平台的开发者文档</a></li>
</ul>
<h4 class="sidebar-title" id="blocktools">开发工具教程</h4>       
<ul class="menu">
  
<li><a href="//www.w3cschool.cn/ant/" title="学习 Ant"><i class="icon-img platform-ant"></i>学习 Ant</a></li>
  
<li><a href="//www.w3cschool.cn/arduino/" title="学习 Arduino"><i class="icon-img platform-arduino"></i>学习 Arduino</a></li>
  
<li><a href="//www.w3cschool.cn/atom/" title="学习 Atom"><i class="icon-img platform-atom"></i>学习 Atom</a></li>
  
<li><a href="//www.w3cschool.cn/composer/" title="学习 Composer"><i class="icon-img platform-composer"></i>学习 Composer</a></li>
  
<li><a href="//www.w3cschool.cn/codesmith/" title="学习 Codesmith"><i class="icon-img platform-codesmith"></i>学习 Codesmith</a></li>
  
<li><a href="//www.w3cschool.cn/dreamweaverjc/" title="学习 Dreamweaver"><i class="icon-img platform-dreamweaverjc"></i>学习 Dreamweaver</a></li>
  
<li><a href="//www.w3cschool.cn/eclipse/" title="学习 Eclipse"><i class="icon-img platform-eclipse"></i>学习 Eclipse</a></li>
  
<li><a href="//www.w3cschool.cn/flex/" title="学习 Flex"><i class="icon-img platform-flex"></i>学习 Flex</a></li>
  
<li><a href="//www.w3cschool.cn/firebug/" title="学习 Firebug"><i class="icon-img platform-firebug"></i>学习 Firebug</a></li>
  
<li><a href="//www.w3cschool.cn/git/" title="学习 Git"><i class="icon-img platform-git"></i>学习 Git</a></li>
  
<li><a href="//www.w3cschool.cn/gradle/" title="学习 Gradle"><i class="icon-img platform-gradle"></i>学习 Gradle</a></li>
  
<li><a href="//www.w3cschool.cn/grunt/" title="学习 Grunt"><i class="icon-img platform-grunt"></i>学习 Grunt</a></li>
  
<li><a href="//www.w3cschool.cn/bhz24q/" title="学习 HBuilder"><i class="icon-img platform-bhz24q"></i>学习 HBuilder</a></li>
  
<li><a href="//www.w3cschool.cn/maven/" title="学习 Maven"><i class="icon-img platform-maven"></i>学习 Maven</a></li>
  
<li><a href="//www.w3cschool.cn/sublimetext/" title="学习 Sublime Text"><i class="icon-img platform-sublimetext"></i>学习 Sublime Text</a></li>
  
<li><a href="//www.w3cschool.cn/svn/" title="学习 SVN"><i class="icon-img platform-svn"></i>学习 SVN</a></li>
  
<li><a href="//www.w3cschool.cn/tableau/" title="学习 Tableau"><i class="icon-img platform-tableau"></i>学习 Tableau</a></li>
  
<li><a href="//www.w3cschool.cn/vim/" title="学习 Vim"><i class="icon-img platform-vim"></i>学习 Vim</a></li>
</ul>
<h4 class="sidebar-title">字符集</h4>
<ul class="menu">   
<li><a href="//www.w3cschool.cn/htmltags/ref-charactersets.html" title="HTML 字符集"><i class="icon-img platform-htmldom"></i>HTML 字符集</a></li>
<li><a href="//www.w3cschool.cn/htmltags/html-ascii.html" title="HTML ASCII 参考手册"><i class="icon-img platform-htmldom"></i>HTML ASCII</a></li>
<li><a href="//www.w3cschool.cn/htmltags/ref-entities.html" title="HTML ISO-8859-1 参考手册"><i class="icon-img platform-htmldom"></i>HTML ISO-8859-1</a></li>
<li><a href="//www.w3cschool.cn/htmltags/html-symbols.html" title="HTML 4.01 符号实体"><i class="icon-img platform-htmldom"></i>HTML 符号</a></li>
</ul>
<h4 class="sidebar-title">测验/考试</h4>
<ul class="menu">
<li><a href="//www.w3cschool.cn/html/html-html_quiz.html" title="HTML 测验"><i class="icon-img platform-htmldom"></i>HTML 测验</a></li>
<!-- <li><a href="//www.w3cschool.cn/svg/svg-examples.html" title="XHTML 测验"><i class="icon-img platform-default"></i>XHTML 测验</a></li> -->
<li><a href="//www.w3cschool.cn/css/css-css_quiz.html" title="CSS 测验"><i class="icon-img platform-cssdom"></i>CSS 测验</a></li>
<li><a href="//www.w3cschool.cn/xml/xml-xml_quiz.html" title="XML 测验"><i class="icon-img platform-xml"></i>XML 测验</a></li>
<li><a href="//www.w3cschool.cn/javascript/javascript-js_quiz.html" title="JavaScript 测验"><i class="icon-img platform-javascript"></i>JavaScript 测验</a></li>
<li><a href="//www.w3cschool.cn/sql/sql-sql_quiz.html" title="SQL 测验"><i class="icon-img platform-sql"></i>SQL 测验</a></li>
<li><a href="//www.w3cschool.cn/asp/asp-asp_quiz.html" title="ASP 测验"><i class="icon-img platform-asp"></i>ASP 测验</a></li>
<li><a href="//www.w3cschool.cn/php/php-php_quiz.html" title="PHP 测验"><i class="icon-img platform-php"></i>PHP 测验</a></li>
</ul>
<h4 class="sidebar-title">代码验证</h4>
<ul class="menu">
<li><a href="//www.w3cschool.cn/wzjszn/web-validate.html" title="验证 HTML"><i class="icon-img platform-htmldom"></i>验证 HTML</a></li>
<li><a href="//www.w3cschool.cn/wzjszn/web-validate.html" title="验证 CSS"><i class="icon-img platform-cssdom"></i>验证 CSS</a></li>
<li><a href="//www.w3cschool.cn/wzjszn/web-validate.html" title="验证 XHTML"><i class="icon-img platform-xhtml"></i>验证 XHTML</a></li>
<li><a href="//www.w3cschool.cn/wzjszn/web-validate.html" title="验证 XML"><i class="icon-img platform-xml"></i>验证 XML</a></li>
<li><a href="//www.w3cschool.cn/wzjszn/web-validate.html" title="验证 WML"><i class="icon-img platform-wml"></i>验证 WML</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="item-coding">
<div class="index-wrapper coding-wrapper">
<h2>在线编程，一个IT人员的在线实验室</h2>
<p>在w3cschool代码实验室里，你可以使用超过80种编程语言创建、编写、执行你的程序，甚至是把它们分享到网络上，给你带来超凡的开发体验！</p>
<a href="/webide" target="_blank" class="enter-btn">立即体验</a>
</div>
</div>
<div class="item-tools">
<div class="index-wrapper">
<div class="project-title">
<h2>在线工具库</h2>
</div>      
<div class="pm-content">             
<div class="pm-box"> 
<h3 class="pm-box-title">代码工具</h3> 
<div class="pm-list">
<ul>
<li><a href="//www.w3cschool.cn/webide" title="在线IDE编辑工具">在线IDE编辑工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=Jsdecoder" title="JavaScript格式化整理工具">JavaScript格式化整理工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=csscreate" title="在线生成字体CSS样式工具">在线生成字体CSS样式工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=markdown" title="在线 Markdown 编译器">在线 Markdown 编译器</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=jsoncheck" title="JSON在线美化工具">JSON在线美化工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=lct" title="简单的在线流程工具">简单的在线流程工具</a></li>                      
</ul>
</div> 
</div>              
<div class="pm-box"> 
<h3 class="pm-box-title">格式化美化工具</h3> 
<div class="pm-list">
<ul>
<li><a href="//www.w3cschool.cn/tools/index?name=phpformat" title="PHP代码在线格式化美化工具">PHP代码在线格式化美化工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=sqlcodeformat" title="SQL代码在线格式化美化工具">SQL代码在线格式化美化工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=html_minifier" title="HTML/css/JS在线压缩工具">HTML/css/JS在线压缩工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=ccode_html_css_json" title="C语言风格/HTML/CSS/json代码格式化美化工具">C语言风格/HTML/CSS/json代码格式化美化工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=perlcodeformat" title="Perl代码在线格式化美化工具">Perl代码在线格式化美化工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=txt_paiban" title="在线文本美化排版工具">在线文本美化排版工具</a></li>               
</ul>
</div> 
</div>              
<div class="pm-box"> 
<h3 class="pm-box-title">站长辅助工具</h3> 
<div class="pm-list">
<ul>
<li><a href="//www.w3cschool.cn/tools/index?name=metacreate" title="在线Meta 标签生工具">在线Meta 标签生工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=createrobots" title="在线robots.txt文件生成工具">在线robots.txt文件生成工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=csv2tbq" title="在线CSV转HTML表格">在线CSV转HTML表格</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=removedupl" title="在线去除重复项工具">在线去除重复项工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=excel_col2json" title="Excel/csv数据转json格式工具">Excel/csv数据转json格式工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=colortext" title="在线特效文字/彩色文字生成工具">在线特效文字/彩色文字生成工具</a></li>                    
</ul>
</div>
</div>              
<div class="pm-box"> 
<h3 class="pm-box-title">CSS在线工具</h3> 
<div class="pm-list">
<ul>
<li><a href="//www.w3cschool.cn/tools/index?name=csslint" title="在线CSS Lint(CSS代码优化)工具">在线CSS Lint(CSS代码优化)工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=layerstyles" title="CSS3代码生成器">CSS3代码生成器</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=css3_textstroke" title="CSS3 Text Stroke和text-fill-color调试工具">CSS3 Text Stroke和text-fill-color调试工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=css3_borderradius" title="CSS3 border-radius(圆角)效果在线调试工具">CSS3 border-radius(圆角)效果在线调试工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=css3_textshadow" title="CSS3 Text Shadow(文本阴影)效果在线调试工具">CSS3 Text Shadow(文本阴影)效果在线调试工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=css3_boxshadow" title="CSS3 Box Shadow(阴影)效果在线调试工具">CSS3 Box Shadow(阴影)效果在线调试工具</a></li>               
</ul>
</div>
</div>              
<div class="pm-box"> 
<h3 class="pm-box-title">编码转换工具</h3> 
<div class="pm-list">
<ul>
<li><a href="//www.w3cschool.cn/tools/index?name=qrdecode" title="二维码在线解码工具">二维码在线解码工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=qrcode" title="二维码在线生成工具">二维码在线生成工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=barcode" title="在线条形码生成工具">在线条形码生成工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=unicode_chinese" title="在线Unicode/中文转换工具">在线Unicode/中文转换工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=urlencode_decode" title="URL在线编码转换工具">URL在线编码转换工具</a></li>
<li><a href="//www.w3cschool.cn/tools/index?name=native2utf8" title="Native/UTF-8在线编码转换工具">Native/UTF-8在线编码转换工具</a></li>            
</ul>
</div>
</div>  
</div>
</div>
<div id="links-wrapper">
<div class="links-title">
<h3>友情链接</h3>
</div>
<div class="links-list">
<a href="http://www.atool.org/" title="" target="view_window">在线工具</a>        
<a href="http://www.zhimiyun.com/" title="不仅仅是知识管理系统，为企业构建云端大脑和工作协同平台。" target="view_window">智米云</a>        
<a href="http://www.youj.com" title="知识共享平台,帮你找到解决工作问题的知识、工具和人" target="view_window">优聚</a>        
<a href="http://www.gn00.com/" title="技术宅社区" target="view_window">技术宅</a>        
<a href="http://www.yiibai.com/" title="易百网专注于各种程序代码" target="view_window">易百教程</a>        
<a href="http://www.mindmanager.cc/" title="Mindjet唯一授权MindManager中文官网" target="view_window">思维导图</a>        
<a href="http://www.thinksaas.cn/" title="thinksaas开源社区" target="view_window">开源社区</a>        
<a href="http://www.huishenghuiying.com.cn/" title="会声会影视频制作软件" target="view_window">视频制作软件</a>        
<a href="http://www.apppark.cn/" title="应用公园" target="view_window">app开发</a>        
<a href="http://www.moke8.com/" title="魔客吧" target="view_window">网页模版</a>        
<a href="http://www.youdaili.net" title="代理ip吧" target="view_window">代理ip</a>        
<a href="http://www.17ce.com/" title="17ce网站测速" target="view_window">网站测速</a>        
<a href="http://edu.51cto.com/" title="51CTO学院" target="view_window">51CTO学院</a>        
<a href="http://www.pageadmin.net" title="PageAdmin CMS-网站建设高效解决之道" target="view_window">网站制作</a>        
<a href="http://www.officezhushou.com/" title="office办公软件" target="view_window">office办公软件</a>        
<a href="http://www.baihui.com/" title="" target="view_window">crm</a>        
<a href="http://www.ecmoban.com" title="ecshop模板堂" target="view_window">ecshop模板堂</a>        
<a href="http://layabox.com/" title="" target="view_window">LayaBox</a>        
<a href="http://server.zzidc.com" title="景安网络" target="view_window">1元主机</a>        
</div>
</div>
</div>
<div class="register-Box" id="register-Box" style="display: none;">
<div class="register-Box-content">
<div class="register-Box-top">
<span class="register-Box-title">注册成功</span>
<span onclick="closeDialogBox(this)" class="feedback-Box-close">X</span>
</div>
<div class="register-Box-info">
<div class="register-Box-left" style="float: left;">
<img class="register-cover" src="http://img.w3cschool.cn/attachments/avatar/avatar_c383542045.jpg">
</div>
<div class="register-Box-right">
<p class="register-userinfo-title">
<i class="usertype-ico-1"></i><span>W3Cschool</span>
</p>
<p class="register-userinfo-info">恭喜您成为首批注册用户</p>
<p class="register-userinfo-info">获得88经验值奖励</p>
<button class="search-s" onclick="closeDialogBox(this)" id="registerSubmit">马上体验</button>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>