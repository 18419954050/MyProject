<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <title>这个周末，一起来一场冰雪奇幻之旅</title>
    <link rel="stylesheet" type="text/css" href="/workspace/20171219/Public/css/home/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/workspace/20171219/Public/css/home/default.css">
    <link rel="stylesheet" href="/workspace/20171219/Public/css/home/animate.min.css" type="text/css">
    <link rel="stylesheet" href="/workspace/20171219/Public/css/home/Myanimate.css" type="text/css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件(一般不用引入) -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <!-- jQuery文件，在bootstrap.min.js之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- Bootstrap核心JavaScript文件 -->
    <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/workspace/20171219/Public/js/jquery.js"></script>
    <script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script type="text/javascript" src="http://lee.cddfcb.com/weixin.share.heyi.php?t=1"></script>
    <script type="text/javascript" src="/workspace/20171219/Public/js/swiper.min.js"></script>
    <style>
    html,body{margin: 0;padding: 0;width: 100%;height: 100%;position: relative;background:white;}
    #imgs{position:absolute;top:0;width:100%;height:100%;margin:0;border-radius:0;}
    #imgs div{width: 100%;height: 100%;overflow:hidden;}
    .page{margin: 0;padding: 0;width: 100%;height: 100%;position: relative;}
    .case{display: none;}
    </style>
    
</head>

<body>
<div id="imgs">

    <div class="showpagelee">
        <img src="/workspace/20171219/Public/images/home/p1/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img class="animated rotateIn"  id="p11" src="/workspace/20171219/Public/images/home/p1/1.png"  style="position: absolute;left: 35%;top: 16%;width: 30%;">
        <img  id="p12" src="/workspace/20171219/Public/images/home/p1/2.png"  style="position: absolute;left: 10%;top: 22%;width:80%;opacity: 0;-webkit-animation: wz_out 1s ease-out 1s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p1/3.png"  style="position: absolute;left: 33.3%;top: 30%;width:33%;opacity: 0;-webkit-animation: wz_out 1s ease-out 1.8s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p1/4.png"  style="position: absolute;left: 32%;top: 40%;width:36%;opacity: 0;-webkit-animation: wz_out 1s ease-out 3s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p1/5.png"  style="position: absolute;left: 24%;top: 62%;width:48%;opacity: 0;-webkit-animation: lr_out 2s ease-out 2.4s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p1/6.png"  style="position: absolute;left: 24%;top: 92.6%;width:52%;opacity: 0;-webkit-animation: ly_out 2s ease-out 2.4s 1 both">
    </div>
	<div class="nonediv">
        <img src="/workspace/20171219/Public/images/home/p2/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img src="/workspace/20171219/Public/images/home/p2/1.png"  style="position: absolute;left: 32%;top: 10%;width: 36%;opacity: 0;-webkit-animation:  MyrollIn  1s ease-out 0s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p2/2.png"  style="position: absolute;left: 32%;top: 16%;width:36%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p2/3.png"  style="position: absolute;left: 12%;top: 28%;width:76%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 1s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p2/4.png"  style="position: absolute;left: 30%;top: 34%;width:40%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 1.5s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p2/5.png"  style="position: absolute;left: 35%;top: 48%;width:30%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 2s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p2/6.png"  style="position: absolute;left: 10%;top: 60%;width:52%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 1s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p2/7.png"  style="position: absolute;left: 56%;top: 70%;width:44%;opacity: 0;-webkit-animation:  jump  1.5s ease-out 1s 1 both">
    </div>
	<div>
        <img src="/workspace/20171219/Public/images/home/p3/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img class="animated bounce" src="/workspace/20171219/Public/images/home/p3/1.png"  style="position: absolute;left: 28%;top: 14%;width: 44%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 0s 1 both">
        <img class="animated bounce" src="/workspace/20171219/Public/images/home/p3/2.png"  style="position: absolute;left: 28%;top: 22%;width:44%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
        <img class="animated bounce" src="/workspace/20171219/Public/images/home/p3/3.png"  style="position: absolute;left: 16%;top: 28%;width:68%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 1s 1 both">
        <img class="animated bounce" src="/workspace/20171219/Public/images/home/p3/4.png"  style="position: absolute;left: 16%;top: 34%;width:68%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 1.5s 1 both">
        <img class="animated bounce"   src="/workspace/20171219/Public/images/home/p3/5.png"  style="position: absolute;left: 20%;top: 52%;width:52%;opacity: 0;-webkit-animation:  MyrotateIn   1s ease-out 1.5s 1 both">
    </div>
	<div>
        <img src="/workspace/20171219/Public/images/home/p4/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img src="/workspace/20171219/Public/images/home/p5/1.png"  style="position: absolute;left: 18%;top: 14%;width: 61%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 0s 1 both">
        <img src="/workspace/20171219/Public/images/home/p5/2.png"  style="position: absolute;left: 17%;top: 24%;width:66%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
        <img src="/workspace/20171219/Public/images/home/p4/11.png"  style="position: absolute;left: 6%;top: 26%;width:90%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
         <div id="jl_p4" style="position: absolute;left: 34%;top: 30%;width:30%;opacity: 0;-webkit-animation:  flay 7s 0s infinite ;">
            <img src="/workspace/20171219/Public/images/home/p4/3.png"  style="position: absolute;left: 35%;top: 32%;width:30%;">
            <img class="animated flash" id="p4_jl_flay1" src="/workspace/20171219/Public/images/home/p4/4.png"  style="position: absolute;left: 10%;top: 30%;width:30%;">
            <img class="animated flash" id="p4_jl_flay2"src="/workspace/20171219/Public/images/home/p4/5.png"  style="position: absolute;left: 10%;top: 34%;width:30%;">
        </div>
        <img src="/workspace/20171219/Public/images/home/p4/8.png"  style="position: absolute;left: 0%;top: 52%;width:100%;opacity: 0;-webkit-animation:  wz_out  ease-out 1.5s .5s 1 both">

    </div>
    <div>
        <img src="/workspace/20171219/Public/images/home/p5/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img src="/workspace/20171219/Public/images/home/p5/1.png"  style="position: absolute;left: 20%;top: 14%;width: 60%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 0s 1 both">
        <img src="/workspace/20171219/Public/images/home/p5/2.png"  style="position: absolute;left: 18%;top: 24%;width:64%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
        <div id="jl_p5" style="position: absolute;left: 34%;top: 30%;width:30%;opacity: 0;-webkit-animation:  flay 7s 0s infinite ;">
            <img  src="/workspace/20171219/Public/images/home/p4/3.png"  style="position: absolute;left: 35%;top: 38%;width:30%;">
            <img class="animated flash" id="p5_jl_flay1"  src="/workspace/20171219/Public/images/home/p4/4.png"  style="position: absolute;left: 10%;top: 37%;width:30%;">
            <img class="animated flash" id="p5_jl_flay2"  src="/workspace/20171219/Public/images/home/p4/5.png"  style="position: absolute;left: 10%;top: 40%;width:30%;">
        </div>
        <img src="/workspace/20171219/Public/images/home/p5/5.png"  style="position: absolute;left: 23%;top: 32%;width:54%;opacity: 0;-webkit-animation: wz_out  1.5s ease-out 1.5s 1 both">
        <img src="/workspace/20171219/Public/images/home/p5/6.png"  style="position: absolute;left: 37%;top: 36%;width:26%;opacity: 0;-webkit-animation:  wz_out  1.5s ease-out 2s 1 both">
        <img src="/workspace/20171219/Public/images/home/p5/7.png"  style="position: absolute;left: 23%;top: 52%;width:54%;opacity: 0;-webkit-animation:  wz_out  2s ease-out 2s 1 both">
        <img src="/workspace/20171219/Public/images/home/p5/8.png"  style="position: absolute;left: 10%;top: 64%;width:30%;opacity: 0;-webkit-animation: wz_out  2s ease-out 2s 1 both">
        <img  src="/workspace/20171219/Public/images/home/p5/9.png"  style="position: absolute;left: 64%;top: 78%;width:18%;opacity: 0;-webkit-animation:  wz_out  2s ease-out 2s 1 both">
    </div>
    <div>
        <img src="/workspace/20171219/Public/images/home/p6/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img src="/workspace/20171219/Public/images/home/p6/1.png"  style="position: absolute;left: 0%;top: 20%;width: 100%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 0s 1 both">
        <img src="/workspace/20171219/Public/images/home/p6/2.png"  style="position: absolute;left: 25%;top: 32%;width:50%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
        <img src="/workspace/20171219/Public/images/home/p6/3.png"  style="position: absolute;left: 32%;top: 50%;width: 36%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 1s 1 both">
    </div>
    <div>
        <img src="/workspace/20171219/Public/images/home/p7/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img src="/workspace/20171219/Public/images/home/p7/2.png"  style="position: absolute;left: 14%;top: 52%;width: 72%;opacity: 0;-webkit-animation:  wz_out  1s ease-out 0s 1 both">
        <img src="/workspace/20171219/Public/images/home/p7/3.png"  style="position: absolute;left: 35%;top: 60%;width:30%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both">
    </div>
    <div>
        <img src="/workspace/20171219/Public/images/home/p8/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;box-shadow: 10px 10px 5px #888888;"/>
        <img src="/workspace/20171219/Public/images/home/p8/11.png"style="position: absolute;left: 25%;top: 34%;width:50%;opacity: 0;-webkit-animation:  wz_out  1s ease-out .5s 1 both" >
        <div style="position:absolute;left: 20%;top: 44%;width: 60%;height: 2.8rem;background-color: darkgray;opacity: .8;">
            <span style="position:absolute;left: 0%;;width: 20%;height: 2.8rem;text-align: center;color: black;line-height:2.8rem ">姓名:</span>
            <input id="name" type="text"  value="" style="position:absolute;left: 20%;width: 80%;height: 2.8rem;background-color: darkgray;border: none;">
        </div>
        <div style="position:absolute;left: 20%;top: 50%;width: 60%;height: 2.8rem;background-color: darkgray;opacity: .8;">
            <span style="position:absolute;left: 0%;;width: 20%;height: 2.8rem;text-align: center;color: black;line-height:2.8rem ">电话:</span>
            <input id="phone" type="text"  value="" style="position:absolute;left: 20%;width: 80%;height: 2.8rem;background-color: darkgray;border: none;">
        </div>
        <img  id="submit" type="button" class="btn btn-default" src="/workspace/20171219/Public/images/home/p8/1.jpg"  style="position: absolute;left: 34%;top: 58%;width: 30%;">
    </div>
    <div>
        <img src="/workspace/20171219/Public/images/home/p9/backimg.jpg" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;"/>
        <img  src="/workspace/20171219/Public/images/home/p9/1.png"  style="position: absolute;left: 20%;top: 10%;width: 60%;opacity: 0;-webkit-animation:wz_out  1s ease-out .5s 1 both">
    </div>
</div>
<img src="/workspace/20171219/Public/images/shupin.jpg" id="shuimg" style="display: none;height: 100%;height: 100%;z-index: 50;position: absolute;top: 0;left: 0;"/>
<audio src="/workspace/20171219/Public/medias/1.mp3?v=6" id="music" style="visibility: hidden;" loop="loop"  preload="auto"></audio>
<img src="/workspace/20171219/Public/images/music.png" style="position: fixed;left:6%;bottom: 3%;z-index: 7;width: 8%;" class="musicPic"/>
<script type="text/javascript" src="/workspace/20171219/Public/js/pageSwitch.js"></script>
<script type="text/javascript">
var reg=location.search.match(/ts=([^&]*)/),
		ts=reg&&reg[1]||'scroll',
		a=new pageSwitch('imgs',{
		duration:1000,
		start:0,
		direction:1,
		loop:true,
		ease:/flip(?!Paper)/.test(ts)?'bounce':'ease',
		transition:ts,
		mouse:true,
		mousewheel:true,
		arrowkey:true
	}),
	navs=document.getElementById('navs').getElementsByTagName('a');

	a.on('before',function(m,n){
		navs[m].className='';
		navs[n].className='active';
	});

	if(/^(?:scroll3d|flip)/.test(ts)){
		document.getElementById('imgs').className='visible';
	}

	document.getElementById('tssel').onchange=function(){
		location.href='?ts='+this.value;
	}


	var options=document.getElementById('tssel').options,
		i=0,op;
	while(op=options[i++]){
		if(op.value===ts){
			op.selected=true;
			break;
		}
	}

	i=0;
	for(;i<navs.length;i++){
		!function(i){
			navs[i].onclick=function(){
				a.slide(i);
			}
		}(i);
	}




     
     window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", function() {
        if (window.orientation === 180 || window.orientation === 0) { 
            $('#shuimg').hide();
        } 
        if (window.orientation === 90 || window.orientation === -90 ){ 
            $('#shuimg').show();
        }  
    }, false);
</script>
<script type="text/javascript">
$('.musicPic').click(function(){  
    var audio = document.getElementById('music');
    if(audio.paused){
        audio.play()
        $(this).addClass('musicPic');
    }else if(audio.play){
        audio.pause();
        $(this).removeClass();
    }
})
</script>

</body>
<script>
    $('body').height($('body')[0].clientHeight);
    var i=1;
      $('#submit').click(function () {
          if(i<2){
                var submit = $(this);
                var name = $('#name').val();
                var phone = $('#phone').val();
                var reg1 = /^[\u4e00-\u9fa5]{2,6}$/;
                var reg2 = /^[1][3,5,7,8][0-9]{9}$/;
               if (name == '') {
                  alert("请输入姓名!");
                 //$('#name').focus();
                 return;
               }
           if (phone == '') {
               alert("请输入电话号码!");
               //$('#phone').focus();
               return;
           }
           if (reg1.test(name) == false) {
               alert("姓名格式错误!（2-6位汉字字符）");
               return;
           } else if (reg2.test(phone) == false) {
               alert("请输入正确的电话号码！");
               return;
           }
           $.ajax({
               url: '<?php echo U("Home/Index/updateName");?>',
               type: 'post',
               dataType: 'JSON',
               data: {
                   name: name,
                   phone: phone
               },
               success: function (data) {
                   if (data == 1) {
                       alert('恭喜您，提交成功');
                       $('#name').val("");
                       $('#phone').val("");
                       i++;
                   }else if(data == 2){
                       alert('出错啦！');
                   }else if(data == 3){
                       alert('操作错误');
                   }
               },
               error: function (data) {
                   alert('网络错误，请重试');
               }
           })}else {
                alert('请勿重复提交！');
            }
      });

</script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () { //监听音乐播放。自动播放
    function audioAutoPlay() {
        var audio = document.getElementById('music');
            audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
            audio.play();
        }, false);
    }
    audioAutoPlay();    
});
</script>
<script type="text/javascript">
 $.weixinShare({
            debug: false,
            title: '这个周末，一起来一场冰雪奇幻之旅', // 分享标题
            desc: ' 初雪，将落在哪？', // 分享描述
            link: "http://lee.cddfcb.com/H5/luneng/20171219",
			imgUrl: "http://lee.cddfcb.com/H5/luneng/20171219/Public/images/fenxiangx.jpg",
        });
</script>
<script type="text/javascript">
    // Cross-browser-compliant
    requestAnimationFrame = window.requestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        function(callback) { setTimeout(callback, 1000 / 60); };

    /**
     * Snow Class
     * @param {int}   x
     * @param {int}   y
     * @param {int}   radius
     * @param {Function} fn     Formular to calculate x pos and y pos
     */
    function Snow (x, y, radius, fn) {
        this.x = x;
        this.y = y;
        this.r = radius;
        this.fn = fn;
    }
    Snow.prototype.update = function () {
        this.x = this.fn.x (this.x, this.y);
        this.y = this.fn.y (this.y, this.y);

        if (this.x > window.innerWidth ||
            this.x < 0 ||
            this.y > window.innerHeight ||
            this.y < 0
        ){
            this.x = getRandom('x');
            this.y = 0;
        }
    }
    Snow.prototype.draw = function (cxt) {
        var grd = cxt.createRadialGradient (this.x, this.y, 0, this.x, this.y, this.r);
        grd.addColorStop(0, "rgba(255, 255, 255, 0.9)");
        grd.addColorStop(.5, "rgba(255, 255, 255, 0.5)");
        grd.addColorStop(1, "rgba(255, 255, 255, 0)");
        cxt.fillStyle = grd;
        cxt.fillRect (this.x - this.r, this.y - this.r, this.r * 2, this.r * 2);
    }

    /**
     * Snowlist class
     * Container to hold snow objects
     */
    SnowList = function () {
        this.list = [];
    }
    SnowList.prototype.push = function (snow) {
        this.list.push (snow);
    }
    SnowList.prototype.update = function () {
        for (var i = 0, len = this.list.length; i < len; i++) {
            this.list[i].update();
        }
    }
    SnowList.prototype.draw = function (cxt) {
        for (var i = 0, len = this.list.length; i < len; i++) {
            this.list[i].draw (cxt);
        }
    }
    SnowList.prototype.get = function (i) {
        return this.list[i];
    }
    SnowList.prototype.size = function () {
        return this.list.length;
    }

    /**
     * Generate random x-pos, y-pos or fn functions
     * @param  {string} option x|y|fnx|fny
     * @return {int|Function}
     */
    function getRandom (option) {
        var ret, random;
        switch (option) {
            case 'x':
                ret = Math.random () * window.innerWidth;
                break;
            case 'y':
                ret = Math.random () * window.innerHeight;
                break;
            case 'r':
                ret = 2 + (Math.random () * 6);
                break;
            case 'fnx':
                random = 27 + Math.random () * 100;
                ret = function (x, y) {
                    return x +  0.5 * Math.sin (y / random);
                };
                break;
            case 'fny':
                random = 0.4 + Math.random () * 1.4
                ret = function (x, y) {
                    return y + random;
                };
                break;
        }
        return ret;
    }

    // Start snow
    function startSnow () {
        // Create canvas
        var canvas = document.createElement ('canvas'), cxt;
        canvas.height = window.innerHeight;
        canvas.width = window.innerWidth;
        canvas.setAttribute ('style', 'position: fixed;left: 0;top: 0;pointer-events: none;');
        canvas.setAttribute ('id', 'canvas_snow');
        document.getElementsByTagName ('body')[0].appendChild (canvas);
        cxt = canvas.getContext ('2d');
        // Create snow objects
        var snowList = new SnowList();
        for(var i = 0; i < 200; i++){
            var snow, randomX, randomY, randomR, randomFnx, randomFny;
            randomX = getRandom ('x');
            randomY = getRandom ('y');
            randomR = getRandom ('r');
            randomFnx = getRandom('fnx');
            randomFny = getRandom('fny');
            snow = new Snow (randomX, randomY, randomR, {
                x: randomFnx,
                y: randomFny
            });
            snow.draw (cxt);
            snowList.push (snow);
        }
        // Update snow position data, and redraw them in each frame
        requestAnimationFrame (function(){
            cxt.clearRect (0, 0, canvas.width, canvas.height);
            snowList.update ();
            snowList.draw (cxt);
            requestAnimationFrame (arguments.callee);
        })
    }

    // Handle window resize
    window.onresize = function () {
        var canvasSnow = document.getElementById('canvas_snow');
        canvasSnow.width = window.innerWidth;
        canvasSnow.height = window.innerHeight;
    }

    // Let it snow O(∩_∩)0
    startSnow ();
</script>
</html>