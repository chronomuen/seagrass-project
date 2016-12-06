@extends('layouts.app')

@section('content')
<html lang="en">
    <head>
	
		<script language="Javascript" type="text/javascript">
			$(window).on('load', function() {
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");
			});
			window.onload = function() {

				!function(a){function b(b,d){function e(){if(w){$canvas=a('<canvas class="pg-canvas"></canvas>'),v.prepend($canvas),p=$canvas[0],q=p.getContext("2d"),f();for(var b=Math.round(p.width*p.height/d.density),c=0;b>c;c++){var e=new l;e.setStackPos(c),x.push(e)}a(window).on("resize",function(){h()}),a(document).on("mousemove",function(a){y=a.pageX,z=a.pageY}),B&&!A&&window.addEventListener("deviceorientation",function(){D=Math.min(Math.max(-event.beta,-30),30),C=Math.min(Math.max(-event.gamma,-30),30)},!0),g(),o("onInit")}}function f(){p.width=v.width(),p.height=v.height(),q.fillStyle=d.dotColor,q.strokeStyle=d.lineColor,q.lineWidth=d.lineWidth}function g(){if(w){s=a(window).width(),t=a(window).height(),q.clearRect(0,0,p.width,p.height);for(var b=0;b<x.length;b++)x[b].updatePosition();for(var b=0;b<x.length;b++)x[b].draw();E||(r=requestAnimationFrame(g))}}function h(){for(f(),i=x.length-1;i>=0;i--)(x[i].position.x>v.width()||x[i].position.y>v.height())&&x.splice(i,1);var a=Math.round(p.width*p.height/d.density);if(a>x.length)for(;a>x.length;){var b=new l;x.push(b)}else a<x.length&&x.splice(a);for(i=x.length-1;i>=0;i--)x[i].setStackPos(i)}function j(){E=!0}function k(){E=!1,g()}function l(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*p.width),y:Math.ceil(Math.random()*p.height)},this.speed={},d.directionX){case"left":this.speed.x=+(-d.maxSpeedX+Math.random()*d.maxSpeedX-d.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*d.maxSpeedX+d.minSpeedX).toFixed(2);break;default:this.speed.x=+(-d.maxSpeedX/2+Math.random()*d.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?d.minSpeedX:-d.minSpeedX}switch(d.directionY){case"up":this.speed.y=+(-d.maxSpeedY+Math.random()*d.maxSpeedY-d.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*d.maxSpeedY+d.minSpeedY).toFixed(2);break;default:this.speed.y=+(-d.maxSpeedY/2+Math.random()*d.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?d.minSpeedY:-d.minSpeedY}}function m(a,b){return b?void(d[a]=b):d[a]}function n(){v.find(".pg-canvas").remove(),o("onDestroy"),v.removeData("plugin_"+c)}function o(a){void 0!==d[a]&&d[a].call(u)}var p,q,r,s,t,u=b,v=a(b),w=!!document.createElement("canvas").getContext,x=[],y=0,z=0,A=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),B=!!window.DeviceOrientationEvent,C=0,D=0,E=!1;return d=a.extend({},a.fn[c].defaults,d),l.prototype.draw=function(){q.beginPath(),q.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,d.particleRadius/2,0,2*Math.PI,!0),q.closePath(),q.fill(),q.beginPath();for(var a=x.length-1;a>this.stackPos;a--){var b=x[a],c=this.position.x-b.position.x,e=this.position.y-b.position.y,f=Math.sqrt(c*c+e*e).toFixed(2);f<d.proximity&&(q.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),d.curvedLines?q.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):q.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}q.stroke(),q.closePath()},l.prototype.updatePosition=function(){if(d.parallax){if(B&&!A){var a=(s-0)/60;pointerX=(C- -30)*a+0;var b=(t-0)/60;pointerY=(D- -30)*b+0}else pointerX=y,pointerY=z;this.parallaxTargX=(pointerX-s/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(pointerY-t/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}switch(d.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=v.width()-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>v.width()&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>v.width()||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(d.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=v.height()-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>v.height()&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>v.height()||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},l.prototype.setStackPos=function(a){this.stackPos=a},e(),{option:m,destroy:n,start:k,pause:j}}var c="particleground";a.fn[c]=function(d){if("string"==typeof arguments[0]){var e,f=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){a.data(this,"plugin_"+c)&&"function"==typeof a.data(this,"plugin_"+c)[f]&&(e=a.data(this,"plugin_"+c)[f].apply(this,g))}),void 0!==e?e:this}return"object"!=typeof d&&d?void 0:this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})},a.fn[c].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}}}(jQuery),/**
				 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
				 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
				 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
				 * @license: MIT license
				 */
				function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();
				
				!function(a){function b(b,d){function e(){if(w){$canvas=a('<canvas class="pg-canvas"></canvas>'),v.prepend($canvas),p=$canvas[0],q=p.getContext("2d"),f();for(var b=Math.round(p.width*p.height/d.density),c=0;b>c;c++){var e=new l;e.setStackPos(c),x.push(e)}a(window).on("resize",function(){h()}),a(document).on("mousemove",function(a){y=a.pageX,z=a.pageY}),B&&!A&&window.addEventListener("deviceorientation",function(){D=Math.min(Math.max(-event.beta,-30),30),C=Math.min(Math.max(-event.gamma,-30),30)},!0),g(),o("onInit")}}function f(){p.width=v.width(),p.height=v.height(),q.fillStyle=d.dotColor,q.strokeStyle=d.lineColor,q.lineWidth=d.lineWidth}function g(){if(w){s=a(window).width(),t=a(window).height(),q.clearRect(0,0,p.width,p.height);for(var b=0;b<x.length;b++)x[b].updatePosition();for(var b=0;b<x.length;b++)x[b].draw();E||(r=requestAnimationFrame(g))}}function h(){for(f(),i=x.length-1;i>=0;i--)(x[i].position.x>v.width()||x[i].position.y>v.height())&&x.splice(i,1);var a=Math.round(p.width*p.height/d.density);if(a>x.length)for(;a>x.length;){var b=new l;x.push(b)}else a<x.length&&x.splice(a);for(i=x.length-1;i>=0;i--)x[i].setStackPos(i)}function j(){E=!0}function k(){E=!1,g()}function l(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*p.width),y:Math.ceil(Math.random()*p.height)},this.speed={},d.directionX){case"left":this.speed.x=+(-d.maxSpeedX+Math.random()*d.maxSpeedX-d.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*d.maxSpeedX+d.minSpeedX).toFixed(2);break;default:this.speed.x=+(-d.maxSpeedX/2+Math.random()*d.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?d.minSpeedX:-d.minSpeedX}switch(d.directionY){case"up":this.speed.y=+(-d.maxSpeedY+Math.random()*d.maxSpeedY-d.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*d.maxSpeedY+d.minSpeedY).toFixed(2);break;default:this.speed.y=+(-d.maxSpeedY/2+Math.random()*d.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?d.minSpeedY:-d.minSpeedY}}function m(a,b){return b?void(d[a]=b):d[a]}function n(){v.find(".pg-canvas").remove(),o("onDestroy"),v.removeData("plugin_"+c)}function o(a){void 0!==d[a]&&d[a].call(u)}var p,q,r,s,t,u=b,v=a(b),w=!!document.createElement("canvas").getContext,x=[],y=0,z=0,A=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),B=!!window.DeviceOrientationEvent,C=0,D=0,E=!1;return d=a.extend({},a.fn[c].defaults,d),l.prototype.draw=function(){q.beginPath(),q.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,d.particleRadius/2,0,2*Math.PI,!0),q.closePath(),q.fill(),q.beginPath();for(var a=x.length-1;a>this.stackPos;a--){var b=x[a],c=this.position.x-b.position.x,e=this.position.y-b.position.y,f=Math.sqrt(c*c+e*e).toFixed(2);f<d.proximity&&(q.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),d.curvedLines?q.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):q.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}q.stroke(),q.closePath()},l.prototype.updatePosition=function(){if(d.parallax){if(B&&!A){var a=(s-0)/60;pointerX=(C- -30)*a+0;var b=(t-0)/60;pointerY=(D- -30)*b+0}else pointerX=y,pointerY=z;this.parallaxTargX=(pointerX-s/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(pointerY-t/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}switch(d.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=v.width()-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>v.width()&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>v.width()||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(d.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=v.height()-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>v.height()&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>v.height()||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},l.prototype.setStackPos=function(a){this.stackPos=a},e(),{option:m,destroy:n,start:k,pause:j}}var c="particleground";a.fn[c]=function(d){if("string"==typeof arguments[0]){var e,f=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){a.data(this,"plugin_"+c)&&"function"==typeof a.data(this,"plugin_"+c)[f]&&(e=a.data(this,"plugin_"+c)[f].apply(this,g))}),void 0!==e?e:this}return"object"!=typeof d&&d?void 0:this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})},a.fn[c].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}}}(jQuery),/**
				 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
				 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
				 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
				 * @license: MIT license
				 */
				function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();


				/*MAIN JS*/

				/**
				 * Particleground demo
				 * @author Jonathan Nicol - @mrjnicol
				 */

				$(document).ready(function() {
				  $('#particles').particleground({
					dotColor: 'rgba(0, 153, 51, 0.5)',
					lineColor: 'rgba(0, 153, 51, 0.5)',
					density: 17000
				  });
				  $('.intro').css({
					'margin-top': -($('.intro').height() / 2)
				  });
				});
			}
		</script>


		<style>
			.thumbnail {
				padding:0;
			}
			#infoi{
				top:30px;
			}
			#particles{height:2750px;!important}
			.fa{
				font-size: 0.5em;
				
			}
			.fa-ul{
				margin:5px;
			}

        </style>
    </head>
    <body>
		<div class="se-pre-con"></div>
		<div class="container">
			<div id="navi">
				<div id="particles" >
				
					<section class="intro">
					
					</section>
				</div>
			</div>
			<div id="infoi" style="z-index:0;">
				<hr>
				<div class="container">
					  <div class="row">
					  
						<div class="row">
							<div class="col-md-12 ">
								<div class="panel panel-login">
									<div class="panel-heading">
										<h1> What are seagrasses?</h1>
										<div class="row" style="text-align:left; margin-left:150px;  margin-right:150px;">
											
											<hr>
											<img style="display:block;margin: 0 auto;" src={{asset('images/others/seagrasses.png')}}>
											<br>
											<p>
												Seagrasses are underwater flowering plants that live in shallow marine or brackish environments.  They are called such due to the long green, grass-like leaves among most species. 


	They actually evolved from terrestrial plants and have similar plant parts: roots, leaves and veins, roots, flowers and seeds. They are found in protected shallow waters that  allow light to penetrate and to be used by  seagrasses for photosynthesis. 


	Although they are often confused with the algae or "seaweeds", segrasses are distinctly different organisms with features similar to land plants.  Seaweeds are attached to the substrate through a holdfast and absorb nutrients from the water through diffusion.


	Seagrasses have a root system to anchor the plant and have an internal transport system going through the roots and the leaf veins.  Unlike seaweeds, the seagrasses develop flowers.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					  <h2> Know your seagrass!</h2>
					  <hr>
					  <div class="container">
						<div class="row">
							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/1.png')}}>
								  <div class="caption">
									<h4><i>Enhalus acoroides</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Very long leaves  <i>> 30 cm</i></li>
									  <li><i class="fa fa-circle"></i>Ribbon-like leaves with inrolled leaf margins</li>
									  <li><i class="fa fa-circle"></i>Thick rhizome with long black bristles and cord-like roots</li>
									  <li><i class="fa fa-circle"></i>Found in shallow sandy/muddy areas; often near mangrove</li>
									</ul>
								</div>
							  </div>
							</div>
							
							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/2.png')}}>
								  <div class="caption">
									<h4><i>Thalassia hemprichii</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Hooked or curved leaves <i>10-40 cm</i> long</li>
									  <li><i class="fa fa-circle"></i>Leaf tip rounded, slightly serrated</li>
									  <li><i class="fa fa-circle"></i>Shot black tannin cells, <i>1-2 mm</i> long in the leaf blade</li>
									  <li><i class="fa fa-circle"></i>Thick rhizome with scars between shoots</li>
									  <li><i class="fa fa-circle"></i>Common in shallow reef flats</li>
									</ul>
								</div>
							  </div>
							</div>

							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/3.png')}}>
								  <div class="caption">
									<h4><i>Cymodocea rotundata</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Flat, strap-like narrow leaf blades (<i>2-4 mm</i> wide)</li>
									  <li><i class="fa fa-circle"></i>Leaves <i>7-15 cm</i> long</li>
									  <li><i class="fa fa-circle"></i>Rounded leaf tip</li>
									  <li><i class="fa fa-circle"></i>Smooth rhizome</li>
									  <li><i class="fa fa-circle"></i>Scars form a continuous ring around the stem</li>
									  <li><i class="fa fa-circle"></i>Found in shallow reef flats</li>
									</ul>
								</div>
							  </div>
							</div>						

							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/4.png')}}>
								  <div class="caption">
									<h4><i>Cymodocea serrulata</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Linear strap-like leaf blades (<i>5-9 mm</i> wide)</li>
									  <li><i class="fa fa-circle"></i>Leaves <i>6-15 cm</i> long</li>
									  <li><i class="fa fa-circle"></i>Serrated leaf tip</li>
									  <li><i class="fa fa-circle"></i>Robust/strong rhizome</li>
									  <li><i class="fa fa-circle"></i>Found in shallow subtidal reef flats</li>
									</ul>
								</div>
							  </div>
							</div>
						</div><!--/row-->
						<div class="row">
							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/5.png')}}>
								  <div class="caption">
									<h4><i>Halodule pinifolia</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Fine, delicate leaves up to <i>20 cm</i> long</li>
									  <li><i class="fa fa-circle"></i><i>1</i> central vein</li>
									  <li><i class="fa fa-circle"></i>Black central vein splits into two at the rounded leaf tip</li>
									  <li><i class="fa fa-circle"></i>Usually pale rhizome, with clean black leaf scars</li>
									  <li><i class="fa fa-circle"></i>Found in intertidal sandy areas</li>
									</ul>
								</div>
							  </div>
							</div>	

							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/6.png')}}>
								  <div class="caption">
									<h4><i>Halodule uninervis</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Usually larger than H. pinifolia</li>
									  <li><i class="fa fa-circle"></i>Narrow leaf blades <i>0.25-5 mm</i> wide</li>
									  <li><i class="fa fa-circle"></i>Trident leaf tip (has <i>3</i> pointed tips)</li>
									  <li><i class="fa fa-circle"></i><i>1</i> central vein</li>
									  <li><i class="fa fa-circle"></i>Rhizome usually pale, with small black fibers at the nodes</li>
									  <li><i class="fa fa-circle"></i>Preferred food of dugong</li>
									</ul>
								</div>
							  </div>
							</div>	
							
							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/7.png')}}>
								  <div class="caption">
									<h4><i>Syringodium isoetifolium</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Narrow spaghetti-like leaves</li>
									  <li><i class="fa fa-circle"></i>Cylindrical in cross section, <i>1-2mm</i> diameter</li>
									  <li><i class="fa fa-circle"></i>Leaf tip tapers to a point</li>
									  <li><i class="fa fa-circle"></i>Leaves <i>7-30 cm</i> long</li>
									  <li><i class="fa fa-circle"></i>Leaves contain air cavities</li>
									  <li><i class="fa fa-circle"></i>Found in shallow subtidal reef flats</li>
									</ul>
								</div>
							  </div>
							</div>	
							
							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/8.png')}}>
								  <div class="caption">
									<h4><i>Halophila ovalis</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Oval shaped leaves in pair</li>
									  <li><i class="fa fa-circle"></i><i>8</i> or more cross veins</li>
									  <li><i class="fa fa-circle"></i>No hairs on leaf surface</li>
									  <li><i class="fa fa-circle"></i>Preferred food of dugong</li>
									  <li><i class="fa fa-circle"></i>Found within intertidal to subtidal depths</li>
									</ul>
								</div>
							  </div>
							</div>	
							
						</div>
						<div class="row">
							<div class="col-xs-18 col-sm-6 col-md-3">
							  <div class="thumbnail">
								<img src={{asset('images/seagrass/9.png')}}>
								  <div class="caption">
									<h4><i>Halophila minor</i></h4>
									<ul class="fa-ul">
									  <li><i class="fa fa-circle"></i>Smaller oval leaves occurring in pairs</li>
									  <li><i class="fa fa-circle"></i>Less than <i>8</i> pairs of cross veins</li>
									  <li><i class="fa fa-circle"></i>Wedge-shaped leaf sheath</li>
									  <li><i class="fa fa-circle"></i>Found in shallow or intertidal sandy areas</li>
									</ul>
								</div>
							  </div>
							</div>	
						</div>
					</div><!--/container -->
				</div>
				<!-- First Grid -->
				<div class="col-md-12 ">
					<div class="panel panel-login" style="background-image: url('{{ asset('images/carousel/4.png') }}');background-size: 100%;">
						<center><h1 style="color:#fff;text-shadow: 0 1px 2px rgba(0, 0, 0, .6);">Why seagrass?</h1></center>
						<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
						  <div class="w3-content">
							<div class="w3-third w3-center">
								<i class="fa fa-cutlery w3-padding-64 w3-text-green w3-margin-right" style="font-size:150px;"></i>
							</div>
							<div class="w3-twothird">
							  <h1>Food</h1>
							  <h5 class="w3-padding-32">In a single year, a seagrass meadow of one acre can produce as much as 10 tons of leaves, and can support as many as 40,000 fish and 50 million invertebrates. This high level of biomass makes it an ideal feeding area for many kinds of sea creatures, from the majestic green sea turtle to the sea cucumbers and clams.</h5>

							</div>
						  </div>
						</div>
						<br>
						<br>
						<br>
						<!-- Second Grid -->
						<div class="w3-row-padding w3-blue-grey w3-padding-64 w3-container">
						  <div class="w3-content">
							<div class="w3-twothird">
							  <h1>Nursery Area and Habitat</h1>
							  <h5 class="w3-padding-32">The seagrasses are an important nursery for juvenile fish and invertebrates as these habitats provide food and  protection among the seagrass blades.  Young fish spend their time in the meadow, until they are large enough  to migrate to either the mangrove or reef, or deeper waters.  In addition, the meadow also dampens the action of strong waves or currents providing refuge for a range of marine fauna. </h5>
							</div>

							<div class="w3-third w3-center">
							  <i class="fa fa-home w3-padding-64 w3-text-light-blue" style="font-size:150px;"></i>
							</div>
						  </div>
						</div>
						<br>
						<br>
						<br>
						<!-- Third Grid -->
						<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
						  <div class="w3-content">
							<div class="w3-third w3-center">
							  <i class="fa fa-balance-scale w3-padding-64 w3-text-green w3-margin-right" style="font-size:150px;"></i>
							</div>

							<div class="w3-twothird">
							  <h1>Stabilize Environmental Condition</h1>
							  <h5 class="w3-padding-32">As seagrass blades slow water flow, nutrients  and sediments in run-off from land settle onto the seagrass beds.  The trapping capacity of seagrass roots not only improves water clarity but also prevents coastal erosion. Nutrients are absorbed by the roots and the plant but are recycled when other organisms feed directly on the plant or its dead leaves.   </h5>

							</div>
						  </div>
						</div>
						<br>
						<br>
						<br>
						<!-- Fourth Grid -->
						<div class="w3-row-padding w3-blue-grey w3-padding-64 w3-container">
						  <div class="w3-content">
							<div class="w3-twothird">
							  <h1>Carbon Sinks</h1>
							  <h5 class="w3-padding-32">As plants, they absorb carbon dioxide, a greenhouse gas, and produce oxygen through photosynthesis. The magnitude of this gas converting function is significant such that seagrass meadows are called the "lungs of the sea". In fact, 10 liters of oxygen is produced by a one square meter of seagrass everyday! </h5>

							</div>

							<div class="w3-third w3-center">
							  <i class="fa fa-anchor w3-padding-64 w3-text-light-blue" style="font-size:150px;"></i>
							</div>
						  </div>
						</div>
					</div>
				  </div>
				</div>
			</div>
		
		</header>
    </body>
</html>
@endsection