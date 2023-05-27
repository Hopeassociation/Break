<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="authoring-tool" content="Adobe_Animate_CC">
    <style>
        @import url('https://fonts.cdnfonts.com/css/ts-block');
        @import url('https://fonts.cdnfonts.com/css/franklin-gothic');
    </style>
    <link rel="stylesheet" href= <?= $css ?> >
    <title><?=$page_title?></title>
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="public/js/empatage.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("A6F4597EA1D337438D7C45637C43A09E");
	var lib=comp.getLibrary();
	handleComplete({},comp);
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var preloaderDiv = document.getElementById("_preload_div_");
	preloaderDiv.style.display = 'none';
	canvas.style.display = 'block';
	exportRoot = new lib.Sansnom1();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.framerate = lib.properties.fps;
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	AdobeAn.makeResponsive(true,'both',false,1,[canvas,preloaderDiv,anim_container,dom_overlay_container]);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>
<!-- write your code here -->
</head>
</head>

    <header class="header">
        <?php include "app/view/common/navigation.php" ?>
    </header>
     