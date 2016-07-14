var d = document;
var isNS = (d.layers)?true:false;
var isIE = (d.all)?true:false;
var isDom = (!isIE&&d.getElementById)?true:false;
var isOpera=navigator.userAgent.indexOf("Opera")!=-1;

numItems=6 //no of menuitems
circleXstart=200 //the tri start and end, x position
YYY=40 //the tri start and end, y position
circlePXspeed=5 //pixels the circle moves per timeout
circleTspeed=10
circleStay=1


function setPos() {
	if (isNS) {
		var width = window.innerWidth;
		d['newsCont'].left =  width - 175;
	}
}


function brwcheck() {
	this.ver=navigator.appVersion
	this.agent=navigator.userAgent
	this.dom=document.getElementById?1:0
	this.opera5=this.agent.indexOf("Opera 5")>-1
	this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0; 
	this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
	this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
	this.ie=this.ie4||this.ie5||this.ie6
	this.mac=this.agent.indexOf("Mac")>-1
	this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
	this.ns4=(document.layers && !this.dom)?1:0;
	this.bw=(this.ie6 || this.ie5 || this.ie4 || this.ns4 || this.ns6 || this.opera5)
	return this
}

var bw=new brwcheck()


/***************************
Cross-browser object part...
***************************/
function makeObj(obj,nest,x,y){nest=(!nest) ? "":'document.'+nest+'.'
this.css=bw.dom?document.getElementById(obj).style:bw.ie4?document.all[obj].style:bw.ns4?eval(nest+'document.'+obj):0;
this.evnt=bw.dom?document.getElementById(obj):bw.ie4?document.all[obj]:bw.ns4?this.css:0;
this.showIt=b_showIt; this.moveIt=b_moveIt; this.slide=b_slide; this.slideIt=b_slideIt;
this.obj = obj + "Object"; 	eval(this.obj + "=this"); return this}
function b_showIt(){this.css.visibility="visible"}
function b_moveIt(x,y){this.x=x; this.y=y; this.css.left=this.x;this.css.top=this.y}
function b_slideIt(endx,endy,inc,speed,fn,wh) {
if (!this.slideactive) {var distx = endx - this.x;var disty = endy - this.y
var num = Math.sqrt(Math.pow(distx,2) + Math.pow(disty,2))/inc
var dx = distx/num;var dy = disty/num; this.slideactive = 1; this.slide(dx,dy,endx,endy,speed,fn,wh)}}
function b_slide(dx,dy,endx,endy,speed,fn,wh) { if (!fn) fn = null; if(!wh) wh=null
if (this.slideactive && (Math.floor(Math.abs(dx))<Math.floor(Math.abs(endx-this.x)) ||  Math.floor(Math.abs(dy))<Math.floor(Math.abs(endy-this.y)))) { this.moveIt(this.x+dx,this.y+dy); eval(wh)
slidTim=setTimeout(this.obj+".slide("+dx+","+dy+","+endx+","+endy+","+speed+",'"+fn+"','"+wh+"')",speed)
}else{this.slideactive = 0;this.moveIt(endx,endy);eval(fn)}}

/*********************************************************************
The init function. This is where you set the placement of the Buttons.
*********************************************************************/
function slideball_init(){
	oBut=new Array()
	for(i=0;i<=numItems;i++){ oBut[i]=new makeObj('divButton'+i) }
	oCircle=new makeObj('divCircle')
	oBut[0].moveIt(200,YYY)
	oBut[1].moveIt(300,YYY)
	oBut[2].moveIt(420,YYY)
	oBut[3].moveIt(490,YYY)
	oBut[4].moveIt(565,YYY)
	oBut[5].moveIt(660,YYY)
	oBut[6].moveIt(780,YYY)
	oCircle.moveIt(circleXstart,YYY)
	for(i=0;i<=numItems;i++){ oBut[i].showIt() }
}

var slidTim=100;
var active=-1
function sbmover(num){
	clearTimeout(slidTim)
	oCircle.slideactive=false
	oCircle.slideIt(oBut[num].x,oBut[num].y,circlePXspeed,circleTspeed)
}
function sbmout(num){
	clearTimeout(slidTim)
	oCircle.slideactive=false
	if(active>-1 && circleStay)oCircle.slideIt(oBut[active].x,oBut[active].y,circlePXspeed,circleTspeed)
	else oCircle.slideIt(circleXstart,YYY,circlePXspeed,circleTspeed)
}

function changeListing(num){ active=num }
