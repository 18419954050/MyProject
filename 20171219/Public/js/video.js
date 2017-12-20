var myVideo;
var W = 640;
var H = 1000;
myVideo = document.querySelector("#myVideo");
reSize();
window.addEventListener("resize", reSize);
document.addEventListener('touchstart', touchstart);
myVideo.play();
myVideo.addEventListener("canplay", loaded, false);
myVideo.addEventListener("ended", ended, false);
document.addEventListener("WeixinJSBridgeReady", function () {
        myVideo.play();
        myVideo.addEventListener("canplay", loaded, false);
}, );

function touchstart(event) {
    event.preventDefault();
}
function ended(event) {
    slide.gotoPage(3);
    $("#musicPic").show();
    myVideo.pause();
    myVideo.currentTime=0.000001;
    slide.musicPlay();
}
function loaded(event) {
    myVideo.pause();
}
function reSize(event) {
    var IH = innerHeight;
    var IW=innerWidth;
    myVideo.style = 'position: absolute;width: 640px;height: 1000px;top: 0px;left: 0px;-webkit-transform-origin: 0px 0px;-webkit-transform: scale('+IW/W+',' + IH / H + ')';
}




