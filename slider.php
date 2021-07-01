<!DOCTYPE html>
		<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Slider-Tryout - Slider Revolution</title>
			<meta name="description" content="Slider Revolution Example" />
			<meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
			<meta name="author" content="ThemePunch" />
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<!-- LOAD JQUERY LIBRARY -->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
			
			<!-- LOADING FONTS AND ICONS -->
			
			
			<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
			
			<!-- REVOLUTION STYLE SHEETS -->
			<link rel="stylesheet" type="text/css" href="css/rs6.css">
			<!-- REVOLUTION LAYERS STYLES -->
						<!-- REVOLUTION JS FILES -->
			<script type="text/javascript" src="js/rbtools.min.js"></script>
			<script type="text/javascript" src="js/rs6.min.js"></script>
			
			<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
		</head>
		
		

			<!-- START SliderTryout REVOLUTION SLIDER 6.5.2 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_162_1_wrapper" data-alias="showcase-carousel" data-source="gallery" style="visibility:hidden;background:#111111;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;background-image:url(https://interaktiv.kleinezeitung.at/wp-content/uploads/revslider/webproduct_darkbg3.jpg);background-repeat:no-repeat;background-size:cover;background-position:center center;">
				<rs-module id="rev_slider_162_1" style="" data-version="6.5.2">
					<rs-slides>
						<rs-slide data-key="rs-547" data-title="Number One" data-thumb="assets/phone1-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone1.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-548" data-title="Number Two" data-thumb="assets/phone2-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone2.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-549" data-title="Number Three" data-thumb="assets/phone3-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone3.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-550" data-title="Number Four" data-thumb="assets/phone4-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone4.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-551" data-title="Number Five" data-thumb="assets/phone5-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone5.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-552" data-title="Number Six" data-thumb="assets/phone6-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone6.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-553" data-title="Number Seven" data-thumb="assets/phone7-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone7.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-554" data-title="Number Eight" data-thumb="assets/phone8-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone8.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-555" data-title="Number Nine" data-thumb="assets/phone9-100x50.png" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
							<img src="assets/phone9.png" title="Weiz Gemeinderäte" class="rev-slidebg tp-rs-img" data-bg="f:contain;" data-no-retina>
<!---->						</rs-slide>
					</rs-slides>
				</rs-module>
				<script type="text/javascript">
					
				</script>
<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->

				<script type="text/javascript">
					var	tpj = jQuery;
					var	revapi162;
					if(window.RS_MODULES === undefined) window.RS_MODULES = {};
					if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
					RS_MODULES.modules["revslider1621"] = {init:function() {
						revapi162 = jQuery("#rev_slider_162_1");
						if(revapi162==undefined || revapi162.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_162_1"); return;}
						revapi162.revolutionInit({
								sliderType:"carousel",
								sliderLayout:"fullwidth",
								visibilityLevels:"1240,1024,778,480",
								gridwidth:600,
								gridheight:600,
								perspectiveType:"local",
								responsiveLevels:"1240,1024,778,480",
								carousel: {
									space:-150,
									maxVisibleItems:5,
									maxRotation:65,
									vary_rotation:true,
									minScale:45,
									vary_fade:true
								},
								progressBar:{disableProgressBar:true},
								navigation: {
									mouseScrollNavigation:false,
									onHoverStop:false,
									arrows: {
										enable:true,
										tmp:"<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div>    <div class=\"tp-arr-img-over\"></div>	<span class=\"tp-arr-titleholder\">{{title}}</span> </div>",
										style:"erinyen",
										left: {
											h_offset:30
										},
										right: {
											h_offset:30
										}
									},
									thumbnails: {
										enable:true,
										tmp:"<span class=\"tp-thumb-img-wrap\">  <span class=\"tp-thumb-image\"></span></span>",
										style:"gyges",
										v_offset:0,
										space:10,
										width:60,
										height:60,
										min_width:60,
										wrapper_padding:20,
										wrapper_color:"rgba(0,0,0,0.15)",
										visibleAmount:9,
										span:true,
										position:"outer-horizontal"
									}
								},
								viewPort: {
									global:false,
									globalDist:"-200px",
									enable:false,
									visible_area:"20%"
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
						});
						
					}} // End of RevInitScript
					if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
				</script>


		<body>
					</body>
		
		</html>
		