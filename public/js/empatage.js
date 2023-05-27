(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


(lib.AnMovieClip = function(){
	this.actionFrames = [];
	this.ignorePause = false;
	this.gotoAndPlay = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndPlay.call(this,positionOrLabel);
	}
	this.play = function(){
		cjs.MovieClip.prototype.play.call(this);
	}
	this.gotoAndStop = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndStop.call(this,positionOrLabel);
	}
	this.stop = function(){
		cjs.MovieClip.prototype.stop.call(this);
	}
}).prototype = p = new cjs.MovieClip();
// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop, this.reversed));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Symbole1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Calque_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#479944").p("AHzB2IvpAAIAAi9QBCgaBggNQDBgZCVBAQCXBBC8gaQBegNBAgaIAAC9IAKAA");
	this.shape.setTransform(411.9971,32.2003,2.7318,2.731);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#479944").s().p("An0B2IAAi9QBCgaBhgNQDAgZCVBAQCXBBC8gaQBegNBAgaIAAC9g");
	this.shape_1.setTransform(411.3825,32.2003,2.7318,2.731);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#479944").p("AHzB2IAKAAAHzB2IvpAAIAAi9QBCgaBggNQDBgZCVBAQCXBBC8gaQBegNBAgag");
	this.shape_2.setTransform(137.5471,32.2003,2.7318,2.731);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#479944").s().p("An0B2IAAi9QBCgaBhgNQDAgZCVBAQCXBBC8gaQBegNBAgaIAAC9g");
	this.shape_3.setTransform(136.9325,32.2003,2.7318,2.731);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Symbole1, new cjs.Rectangle(-1,-1,552.9,66.4), null);


// stage content:
(lib.Sansnom1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Calque_2_copy
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#FFFFFF").p("AIeiyIAADlQAAA1gmAmQglAlg2AAIs6AAQg1AAglglQgmglAAg2IAAjlIAkAAIAADtQAAAcAVAVQAUAUAcAAINlAAQAcAAAVgUQAUgVAAgcIAAjtg");
	this.shape.setTransform(334.7021,238.0366,5.5199,5.5183);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AmdCzQg1AAglglQgmgmAAg1IAAjlIAkAAIAADsQAAAdAVAVQAUATAcAAINlAAQAcAAAVgTQAUgVAAgdIAAjsIAoAAIAADlQAAA1gmAmQglAlg2AAg");
	this.shape_1.setTransform(334.7021,238.0366,5.5199,5.5183);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(69));

	// Calque_2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("EggxAaDQkjAAjPkaQjOkXAAmTIAA7FIDGAAIDkGFQAACxBsgPQBBgMDEgtMA8zAEAQFHAABdgPQEIgxAAi4IFun2IDcAAIAAbFQAAGPjOEbQjPEakmAAg");
	mask.setTransform(315.4713,166.722);

	// Calque_3
	this.instance = new lib.Symbole1();
	this.instance.setTransform(701.2,243.85,2.3507,2.3507,0,0,0,275.4,32.2);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({regX:274.8,x:690.35,y:243.75},0).wait(1).to({x:681,y:243.7},0).wait(1).to({x:671.65,y:243.6},0).wait(1).to({x:662.25,y:243.55},0).wait(1).to({x:652.9,y:243.45},0).wait(1).to({x:643.6,y:243.4},0).wait(1).to({x:634.25,y:243.3},0).wait(1).to({x:624.85,y:243.25},0).wait(1).to({x:615.5,y:243.15},0).wait(1).to({x:606.15,y:243.1},0).wait(1).to({x:596.8,y:243},0).wait(1).to({x:587.4,y:242.95},0).wait(1).to({x:578.05,y:242.85},0).wait(1).to({x:568.7,y:242.8},0).wait(1).to({x:559.3,y:242.7},0).wait(1).to({x:549.95,y:242.65},0).wait(1).to({x:540.6,y:242.55},0).wait(1).to({x:531.25,y:242.5},0).wait(1).to({x:521.85,y:242.45},0).wait(1).to({x:512.5,y:242.35},0).wait(1).to({x:503.15,y:242.3},0).wait(1).to({x:493.8,y:242.2},0).wait(1).to({x:484.4,y:242.15},0).wait(1).to({x:475.05,y:242.05},0).wait(1).to({x:465.7,y:242},0).wait(1).to({x:456.35,y:241.9},0).wait(1).to({x:446.95,y:241.85},0).wait(1).to({x:437.6,y:241.75},0).wait(1).to({x:428.25,y:241.7},0).wait(1).to({x:418.85,y:241.6},0).wait(1).to({x:409.5,y:241.55},0).wait(1).to({x:400.15,y:241.45},0).wait(1).to({x:390.8,y:241.4},0).wait(1).to({x:381.4,y:241.3},0).wait(1).to({x:372.05,y:241.25},0).wait(1).to({x:362.7,y:241.2},0).wait(1).to({x:353.35,y:241.1},0).wait(1).to({x:343.95,y:241.05},0).wait(1).to({x:334.6,y:240.95},0).wait(1).to({x:325.25,y:240.9},0).wait(1).to({x:315.9,y:240.8},0).wait(1).to({x:306.5,y:240.75},0).wait(1).to({x:297.15,y:240.65},0).wait(1).to({x:287.8,y:240.6},0).wait(1).to({x:278.45,y:240.5},0).wait(1).to({x:269.05,y:240.45},0).wait(1).to({x:259.7,y:240.35},0).wait(1).to({x:250.35,y:240.3},0).wait(1).to({x:240.95,y:240.2},0).wait(1).to({x:231.6,y:240.15},0).wait(1).to({x:222.25,y:240.05},0).wait(1).to({x:212.9,y:240},0).wait(1).to({x:203.5,y:239.95},0).wait(1).to({x:194.15,y:239.85},0).wait(1).to({x:184.8,y:239.8},0).wait(1).to({x:175.45,y:239.7},0).wait(1).to({x:166.05,y:239.65},0).wait(1).to({x:156.7,y:239.55},0).wait(1).to({x:147.35,y:239.5},0).wait(1).to({x:138,y:239.4},0).wait(1).to({x:128.6,y:239.35},0).wait(1).to({x:119.25,y:239.25},0).wait(1).to({x:109.9,y:239.2},0).wait(1).to({x:100.5,y:239.1},0).wait(1).to({x:91.15,y:239.05},0).wait(1).to({x:81.8,y:238.95},0).wait(1).to({x:72.45,y:238.9},0).wait(1).to({x:63.05,y:238.8},0).wait(1));

	// Calque_2_copy_copy
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#FFFFFF").p("AIeiyIAADlQAAA1gmAmQglAlg2AAIs6AAQg1AAglglQgmglAAg2IAAjlIAkAAIAADtQAAAcAVAVQAUAUAcAAINlAAQAcAAAVgUQAUgVAAgcIAAjtg");
	this.shape_2.setTransform(334.7021,238.0366,5.5199,5.5183);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AmdCzQg1AAglglQgmgmAAg1IAAjlIAkAAIAADsQAAAdAVAVQAUATAcAAINlAAQAcAAAVgTQAUgVAAgdIAAjsIAoAAIAADlQAAA1gmAmQglAlg2AAg");
	this.shape_3.setTransform(334.7021,238.0366,5.5199,5.5183);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2}]}).wait(69));

	this._renderFirstFrame();

}).prototype = p = new lib.AnMovieClip();
p.nominalBounds = new cjs.Rectangle(354.7,378.3,280.09999999999997,-40.5);
// library properties:
lib.properties = {
	id: 'A6F4597EA1D337438D7C45637C43A09E',
	width: 640,
	height: 480,
	fps: 24,
	color: "#000033",
	opacity: 0.00,
	manifest: [],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['A6F4597EA1D337438D7C45637C43A09E'] = {
	getStage: function() { return exportRoot.stage; },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}
an.handleSoundStreamOnTick = function(event) {
	if(!event.paused){
		var stageChild = stage.getChildAt(0);
		if(!stageChild.paused || stageChild.ignorePause){
			stageChild.syncStreamSounds();
		}
	}
}
an.handleFilterCache = function(event) {
	if(!event.paused){
		var target = event.target;
		if(target){
			if(target.filterCacheList){
				for(var index = 0; index < target.filterCacheList.length ; index++){
					var cacheInst = target.filterCacheList[index];
					if((cacheInst.startFrame <= target.currentFrame) && (target.currentFrame <= cacheInst.endFrame)){
						cacheInst.instance.cache(cacheInst.x, cacheInst.y, cacheInst.w, cacheInst.h);
					}
				}
			}
		}
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;