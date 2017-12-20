/**
 * Created by tangwenwu on 2016-08-17.
 */
(function(){
    var canvas=document.createElement('canvas');
    canvas.style.position="absolute";
    canvas.style.width="100%";
    canvas.style.height="auto";
    canvas.style.top=0;
    canvas.style.left=0;
    canvas.style.border="0px";
    canvas.width=innerWidth;
    canvas.height=innerHeight;
    document.body.appendChild(canvas);
    var context=canvas.getContext("2d");
    context.fillStyle="#078dc4";
    context.strokeStyle="#078dc4";
    var liziArr=[];
    function Rect(x,y,r,alpha,speedX,speedY){
        this.x=x;
        this.y=y;
        this.r=r;
        this.alpha=alpha;
        this.speedX=speedX;
        this.speedY=speedY;
        if(Rect.prototype.draw==undefined)
        {
            Rect.prototype.draw=function(){
                context.beginPath();
                context.arc(this.x,this.y,this.r,0,Math.PI*2,false);
                context.stroke();
                context.shadowColor = "#ffffff";
                context.shadowOffsetX = 0;
                context.shadowOffsetY = 0;
                context.shadowBlur = 10;
                context.fill();
                //context.globalAlpha=this.alpha;
            }
        }
    }
    for(var i=0;i<30;i++)
    {
        var rect=new Rect(Math.random()*innerWidth,Math.random()*innerHeight,Math.random()*0.5,Math.random()*0.5+0.2,Math.random()*2-1,Math.random()*1+2);
        liziArr.push(rect);
    }
    drawRect();
    function drawRect(){
        context.clearRect(0,0,innerWidth,innerHeight);
        for(var i= 0,len=liziArr.length;i<len;i++)
        {
            liziArr[i].y-=liziArr[i].speedY;
            liziArr[i].x+=liziArr[i].speedX;
            if(liziArr[i].y<-100)
            {
                liziArr[i].y=innerHeight;
                liziArr[i].speedX=Math.random()*2-1;
                liziArr[i].speedY=Math.random()*1+2;
                liziArr[i].x=Math.random()*640;
            }
            liziArr[i].draw();
        }
        window.requestAnimationFrame(drawRect);
    }
    resize();
    window.addEventListener("resize",resize)
    function resize(){
        var pr=640/1040;
        if(innerWidth/innerHeight>pr)
        {
            canvas.style.width=innerWidth+"px";
            canvas.style.height=(innerWidth/pr)+"px";
            canvas.style.left="0px";
            canvas.style.top=((innerHeight-(innerWidth/pr))/2)+"px";
        }
        else
        {
            canvas.style.height=innerHeight+"px";
            canvas.style.width=(innerHeight*pr)+"px";
            canvas.style.top="0px";
            canvas.style.left=((innerWidth-(innerHeight*pr))/2)+"px";

        }
    }
})()
