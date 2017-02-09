
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
<div class="bottom-tools" style="bottom: 40px;">
<a id="scrollUp" href="javascript:;" title="飞回顶部"></a>
<a class="onlinenote" style="display: none;" title="在线笔记" href="javascript:;" data-module="page">在线笔记</a>
<div class="qr-tool">二维码</div>
<a id="feedback" class="webjy" title="建议反馈" href="javascript:;" data-module="page" onclick="showDialogBox(this)">建议反馈</a>
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

<div id="note-start" style="display: none"></div>

<div id="detail" style="display:none;">
<div id="note-Dialog" class="note-Dialog" >

<div class="note-Box-content" >
<div class="ntitlebox">
<input type="text" placeholder="" name="ntitle" class="ntitle" id="ntitle" >
</div>
<div id="editorarea">
<textarea  name="ncontent" id="ncontent" class="ncontent" rows="15" placeholder="" style="width: 700px;height:200px;overflow:auto;" ></textarea>
</div>
<p></p>
<a class="closenote" href="/my/note" target="_blank" >查看完整版笔记</a>
<button class="notebtn pull-right closenote" style="margin:20px 0" >关闭</button>
<button class="notesubmit"  id="notesubmit">保存</button>
</div>
</div>
</div>
<!--footer end-->
<div class="widget-body" data-type="project">
</div>
<script src="//www.w3cschool.cn/plugins/ueditor/third-party/SyntaxHighlighter/shCore.js" type="text/javascript"></script>
<script src="//www.w3cschool.cn/statics/js/commonfooter.js" type="text/javascript"></script>
<script src="//www.w3cschool.cn/statics/core/ajaxdo.core.js" type="text/javascript"></script>
<script>
var kn = {
ismenu:'',
pename:'javascript',
kename:'',
};
$(function(){

$(".onlinenote").show();

var kename = kn.kename;
var fid    = "";
var uid = '0';
// SyntaxHighlighter.config.clipboardSwf = '/plugins/ueditor/third-party/zeroclipboard/ZeroClipboard.swf';
// SyntaxHighlighter.all();//代码高亮
/*开启计时 准备记录积分*/
var vcreditfull = $.cookie('ypre_vcreditfull');
//console.log(vcreditfull);
if(vcreditfull == undefined && uid != '0' && uid != ''){
setTimeout(function(){
$.ajax({
url:"/project/setViewCredit",
type:"post",
data:{kename:kename},
dataType:"json",
success:function(msg){
var statusCode = {
'200':'success',
'400':'warning',
};
var toastrType = statusCode[msg.statusCode];
if(msg.statusCode == 300 || msg.statusCode == 400){
return;
}
toastr[toastrType](msg.message);
}
});
},30000);
}
hljs.initHighlightingOnLoad();//高亮代码
// // 上一篇 下一篇
// if(fid == "-1"){
// $(".prenext").parent().remove();
// }else{
var el = $(".dd-item[data-id="+kename+"]");
// var prevel = el.prev();
// var nextel = el.next();
   //  var prev = prevel.find('a')[0];
   //  var next = nextel.find('a')[0];
//  if(prev == undefined){
   //     prev = el.parents(".dd-list").prev().find('a')[0];
   //  }
   //  if(next == undefined){
   //     next = el.parents(".dd-item").next().find('a')[0];
   //  }
//  if(prevel.attr("ismenu") == 1){
   //  prev = prevel.find
   //  }
//  if($(prev).length < 1){
   //    $(".previous-link").hide();
   //  }else{
   //    //$(prev).clone().appendTo(".previous-link");
   //    $(".previous-link > a").attr("href",$(prev).attr("href")).attr("title",$(prev).attr("title"));
   //    $(".previous-link").show();
//  }
//  if($(next).length < 1){
   //    $(".next-link").hide();
   //  }else{
   //    $('.next-link > a').attr("href",$(next).attr("href")).attr("title",$(next).attr("title"));
   //    $(".next-link").show();
   //  }
// }
//当文章为文件夹的时候 并且内容为空的时候显示文件夹内部文章列表
if($(".view-box").html() == "" && kn.ismenu == 1){
$(el).clone().appendTo(".view-box");
$(".view-box").find(".dd-content").removeClass("folder-open").removeClass("folder-close").css({"background-color":"#fff"});
}
// $(".dd-content[class*=folder-]").click(function(){
//     var obj = $(this);
//     if(obj.hasClass("folder-open")){
//         obj.removeClass("folder-open");
//         obj.addClass("folder-close");
//         obj.next().hide();
//     }else{
//         obj.removeClass("folder-close");
//         obj.addClass("folder-open");
//         obj.next().show();
//     }
// });
});


function getviewkn(){
var usernamestr ='';
$.ajax({
url:"/my/knowledge/getViewkn?pename="+kn.pename,
dataType:"json",
success:function(msg){
var objli,objtt;
for(var p in msg){
objli = $("#nestable_handbook").find(".dd-item[data-id='"+msg[p]['kename']+"']");
if(objli.attr("ismenu") != 1){
objli.addClass("readed").find("a").attr("title","上次浏览时间:("+msg[p]['lasttime']+")");
}
}
}
}); 

}

// 新|旧版预览 切换
function newversion(){

var isNewVersion = $.cookie("newversion");
if(isNewVersion == 1){
$.cookie("newversion",0,{path:'/'});
}else{
$.cookie("newversion",1,{path:'/'});
}

window.location.reload();

}

function islike(){
$.ajaxdo({
url: "/project/islikeKn",
type: "post",
dataType: 'json',
data: {"pename":'',"kename": ''},
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

function isstar(){
var type = $('#hbstar').attr('data-type');
$.ajaxdo({
url: "/project/tempStar",
type: "post",
dataType: 'json',
data: {
kename:'',
pename:'',
ktype:'',
},
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
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
</body>
</html>