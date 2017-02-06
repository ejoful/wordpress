<!--引入底部-->
<!--footer start-->
<div id="footer_item">
<div id="footer">
<div class="footer-box">
<div class="footer-title">网站相关</div>
<div class="footer-items">
<a href="http://www.w3cschool.cn/about/about.html">关于我们</a>
<a href="http://www.w3cschool.cn/about/join.html">加入我们</a>
<a href="http://www.w3cschool.cn/about/disclaimer.html">免责声明</a>
<a href="http://www.w3cschool.cn/sitemap/">网站地图</a>
</div>
</div>
<div class="footer-box">
<div class="footer-title">内容专区</div>
<div class="footer-items">
<a href="http://www.w3cschool.cn/tutorial" title="编程入门教程">编程入门教程</a>
<a href="http://www.w3cschool.cn/manual" title="技术文档参考手册">开源文档</a>
<a href="http://www.w3cschool.cn/examples" title="在线实例">在线实例</a>
<a href="http://www.w3cschool.cn/archives/" title="文章存档">文章存档</a>
</div>
</div>
<div class="footer-box">
<div class="footer-title">常用链接</div>
<div class="footer-items">
<a href="http://www.w3cschool.cn/tif2eq/index.html" target="_blank" title="使用帮助">使用帮助</a>
<a href="http://123.w3cschool.cn" title="技术学习极客导航">极客导航</a>
<a href="http://wiki.w3cschool.cn" target="_blank" title="编程百科">编程百科</a>
<a href="http://m.w3cschool.cn/" target="_blank" title="w3cschool手机版">w3cschool手机版</a>
</div>
</div>
<div class="footer-box">
<div class="footer-title">联系我们</div>
<div class="footer-items">
<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=d308d977f1e630212a6c5412057c1784314d5ce64a287e02b4e7eabeb28b1f0d" ref="nofollow">官方QQ群：496712525</a>
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3265790599&amp;site=qq&amp;menu=yes" ref="nofollow">商务合作QQ：3265790599</a>
<a target="_blank" href="http://www.w3cschool.cn/links" title="友情链接">友情链接QQ：3532917531</a>
</div>
</div>
<div class="footer-box">
<div class="tcode"><img src="http://statics.w3cschool.cn/images/w3c/w3cschool.png" alt="微信订阅号" width="100" height="100"></div>
<p class="tcode-txt">微信号：w3cschoolcn</p>
</div>
</div>
<div class="footer-bottom">
<p>Copyright&copy;2016 亿动科技 <a href="http://www.w3cschool.cn" title="w3cschool">w3cschool.cn </a> All Rights Reserved. 闽ICP备15016281号-3</p>
</div>
</div>
<div class="bottom-tools">
<a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
<div class="qr-tool">二维码</div>
<a id="feedback" title="建议反馈" href="javascript:;" data-module="page" onclick="showDialogBox(this)">建议反馈</a>
<div class="qr-img"><img src="http://statics.w3cschool.cn/images/w3c/w3cschool.jpg" alt="二维码"></div>
</div>
<div class="feedback-Box" style="display: none;">
<div class="feedback-Box-content" style="width: 800px;">
<div class="feedback-Box-top">
<span class="feedback-Box-title">意见反馈</span>
<span onclick="closeDialogBox(this)" class="feedback-Box-close">X</span>
</div>
<ul>
<li class="feedback-box" >
<div id="feedbackRadio" type="radio" name="feedbackType" data-value="0" style=""> 意见反馈：</div>
<textarea  name="reportInfo" id="elmaaa" class="feedback-text" rows="15" placeholder="请留下您宝贵的意见反馈吧。" style="width: 700px;height:200px;overflow:auto;" ></textarea>
<p>联系方式：</p>
<input type="text" placeholder="留个联系方式呗..." name="reportAddress" class="radio-text" id="reportAddress" style="height: 30px;width: 200px;">
</li>
</ul>
<button class="search-s" onclick="dialogSubmit(this)" id="reportSubmit">提交</button>
</div>
</div>
<!--footer end-->
 
<div class="widget-body" data-type="index">                                                
</div>
<script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="//www.w3cschool.cn/statics/js/lrtk.js" type="text/javascript"></script>
<script src="//www.w3cschool.cn/statics/js/commonfooter.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function() {
$("#menu li a").click(function(){
var hr = $(this).attr("href");
var anh = hr.split('#');
$(".sidebar-title").css('color','#000');
$('#'+anh[1]).css('color','#AE4141');
});
$.ajaxdo({
type : "POST",
url  : "/index/checkLoginByIndex",
dataType : "json", 
data : {},
success : function(data){
var html = '';
var info = data.data;
var check = $(".quick-item");
if(typeof check != 'undefined'){
if(data.statusCode == '200' && typeof info.username != 'undefined'){
html += '<div class="personino-item"><div class="personino-box"><div class="user-box"><div class="user-avatar">'
+'<img src="http://img.w3cschool.cn/attachments/avatar/'+info.avatar+'" alt="'+info.nickname+'"></div>'
+'<div class="user-info"><a href="/u/'+info.uid+'" target="_blank">'+info.nickname+'</a>'
+'<span>学号：'+info.uid+'</span></div></div><div class="user-desc"><span>经验值：'+info.exp+'</span>'
+'<span>当前等级：LV'+info.level+'</span></div></div><div class="quicklogin quick-box">'
+'<a href="/my"><i class="pop-sns icons-user"></i>个人中心</a>'
+'</div>'
+'<div class="record-box"><h3>我最近学习的教程：</h3><ul>';
var projectinfo = info.projectinfo;
for (var i = 0; i < projectinfo.length ; i++) {
html += '<li><a href="/'+projectinfo[i]['ename']+'" title="'+projectinfo[i]['bookname']+'">'+projectinfo[i]['bookname']+'</a></li>';
}
html += '</ul></div></div>';
$('.quick-item').remove();
$('#sidebar').prepend(html);
}
}
}
});
$(function(){
m_over();
m_out();
});
function m_over(){    
$(".slide-main").on("mouseover",function(){
$(".slide-next-btn-box").attr("style","display:block;");
});
}
function m_out(){       
$(".slide-main").on("mouseout",function(){
$(".slide-next-btn-box").attr("style","display:none;");
});    
}
});
</script>
</body>
</html>