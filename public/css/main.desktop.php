<?php
header("Content-type: text/css");

$colors = array(
	array('#b01e2d', '#510816', '#6e161b'),
	array('#2f23c0', '#0c0d44', '#1f1471'),
	array('#ffdb0f', '#b17a00', '#dbb200'),
	array('#a935c7', '#310948', '#5a1072'),
	array('#57c632', '#24500a', '#2c7915'),
	array('#05bed7', '#004948', '#076b87'),
	array('#ac5832', '#401b13', '#67331d'),
);

$clear  = $colors[$_GET['color'] - 1][0];
$dark   = $colors[$_GET['color'] - 1][1];
$normal = $colors[$_GET['color'] - 1][2];
?>

body {
	width: 100%; height: 100%;
	overflow: hidden;
	background: black;
}

/* MAIN PAGE OBJECT */

#nav {
	top: 0; left: 0;
	background: url('src/desktop/nav/bNav.png') repeat-x black;
	border-bottom: solid 3px black;
}
#tools {
	bottom: 0; left: 0;
	background: url('src/desktop/tools/bTools.png') repeat-x black;
	border-top: solid 3px black;
}
#nav, #tools {
	position: fixed;
	width: 100%; height: 26px;
	background: url('src/desktop/tools/bTools.png') repeat-x black;
	box-shadow: 0 0 10px black;
	z-index: 1000;
	border-color: <?= $clear; ?>;
}

#container {
	position: absolute;
	top: 29px; left: 0;
	margin: 0; padding: 0;
	width: 100%;
	background: black;
	overflow: hidden;
	z-index: 0;
}

.icon, .icon-color {
	display: inline-block;
	vertical-align: bottom;
	padding: 2px;
	border-radius: 100%;
	background: <?= $clear; ?> !important;
}

/* NAV */

#nav .box {
	position: absolute;
	display: inline-block;
	height: 46px;
	padding: 0 3px;
	background: url('src/desktop/nav/bNavBox.png') repeat-x;
}
#nav .box:before {
	content: '';
	position: absolute;
	top: 0; left: -15px;
	width: 15px; height: 46px;
	background: url('src/desktop/nav/bNavBoxLeft.png') no-repeat;
}
#nav .box:after {
	content: '';
	position: absolute;
	top: 0; right: -15px;
	width: 15px; height: 46px;
	background: url('src/desktop/nav/bNavBoxRight.png') no-repeat;
}

#nav .box.left 	 { top: 0; left: 25px; }
#nav .box.left-2 { top: 0; left: 375px; }
#nav .box.left-3 { top: 0; left: 645px; }
#nav .box.right  { top: 0; right: 25px; }

#tools .box a,
#nav .box a {
	position: relative;
	display: inline-block;
	line-height: 32px;
	padding: 0 25px; margin: 5px 2px;
	font-size: 14px;
	width: 150px;
	color: white;
	text-decoration: none;
	font-variant: small-caps;
	background: url('src/desktop/button/bButtonMiddle.png') repeat-x;
}
#tools .box a:before,
#nav .box a:before {
	content: '';
	position: absolute;
	top: 0; left: 0;
	width: 20px; height: 32px;
	background: url('src/desktop/button/bButtonLeft.png') no-repeat;
}
#tools .box a:after,
#nav .box a:after {
	content: '';
	position: absolute;
	top: 0; right: 0;
	width: 20px; height: 32px;
	background: url('src/desktop/button/bButtonRight.png') no-repeat;
}
#nav .box a.current-base {
	margin-left: 56px;
}
#nav .box a.current-base img {
	position: absolute;
	top: -16px; left: -54px;
	background: black;
	border-radius: 100%;
	border: solid 2px #4F4F4F;
	width: 60px;
}

#tools .box a:hover:before, 
#tools .box a:focus:before, 
#nav .box a:hover:before, 
#nav .box a:focus.before  { background: url('src/desktop/button/bButtonLeftHover.png') repeat; }
#tools .box a:hover:after, 
#tools .box a:focus:after, 
#nav .box a:hover:after, 
#nav .box a:focus.after  { background: url('src/desktop/button/bButtonRightHover.png') repeat; }

#nav .box a.active 		  { background: url('src/desktop/button/bButtonMiddleActive.png') repeat; }
#nav .box a.active:before { background: url('src/desktop/button/bButtonLeftActive.png') repeat; }
#nav .box a.active:after  { background: url('src/desktop/button/bButtonRightActive.png') repeat; }

#tools .box a.square,
#nav .box a.square {
	position: relative;
	padding: 0 5px; margin: 5px 2px;
	height: 32px; width: 30px;
	background: url('src/desktop/button/bLittleButton.png') no-repeat;
	vertical-align: top;
}
#nav .box a.square:before, #tools .box a.square:before { display: none; }
#nav .box a.square:after, #tools .box a.square:after  { display: none; }

#tools .box a.square:hover, 
#tools .box a.square:focus, 
#nav .box a.square:hover, 
#nav .box a.square:focus  { background: url('src/desktop/button/bLittleButtonHover.png') no-repeat; }
#nav .box a.square.active { background: url('src/desktop/button/bLittleButtonActive.png') no-repeat; }

.color1 #nav .box a.square.active, .color1 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c1.png') no-repeat; }
.color2 #nav .box a.square.active, .color2 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c2.png') no-repeat; }
.color3 #nav .box a.square.active, .color3 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c3.png') no-repeat; }
.color4 #nav .box a.square.active, .color4 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c4.png') no-repeat; }
.color5 #nav .box a.square.active, .color5 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c5.png') no-repeat; }
.color6 #nav .box a.square.active, .color6 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c6.png') no-repeat; }
.color7 #nav .box a.square.active, .color7 #tools .box a.square.active { background: url('src/desktop/button/bLittleButtonActive-c7.png') no-repeat; }

#tools .box a.square img,
#nav .box a.square img {
	position: absolute;
	width: 24px;
	top: 3px; left: 8px;
}
#tools .box a.square img {
	top: 4px;
}
#nav .box a.square span.number,
#tools .box a.square span.number {
	position: absolute;
	top: -5px; right: -5px;
	width: 18px; line-height: 18px;
	text-align: center;
	font-size: 11px;
	border-radius: 100%;
	background: #202020;
	background: <?= $dark; ?>;
}
#nav .box a.square span.number {
	bottom: -5px; top: auto;
}

#tools .box a.resource-link {
	width: 110px;
	font-size: 18px;
}

#tools .box a.resource-link img.icon-color {
	position: relative;
	display: inline-block;
	width: 18px;
	vertical-align: middle;
	margin-left: 5px;
	top: -2px; padding: 1px;
}

/* overbox */
#nav .overbox .overflow,
#tools .overbox .overflow {
	max-height: 400px;
	overflow: auto;
	position: relative;
}

#nav .overbox {
	display: none;
	position: absolute;
	background: #0A0A0A;
	box-shadow: inset 0 0 2px #4F4F4F;
	border-radius: 3px;
}

#nav .overbox h2 {
	color: white;
	padding: 10px 15px; margin: 0;
	font-size: 14px;
	font-weight: normal;
	border-bottom: solid 1px #202020;
}

#nav .overbox:before {
	content: '';
	position: absolute;
	border-style: solid;
	border-width: 9px;
	border-color: transparent transparent #202020 transparent;
	top: -18px; right: 30px;
}

#nav .overbox#change-bases {
	top: 50px; left: 10px;
	width: 205px;
	padding: 0 0 8px 0;
}
#nav .overbox#change-bases:before { left: 30px; right: auto; }
#nav .overbox#change-bases a {
	display: block;
	padding: 3px 15px;
	color: #CCC; text-decoration: none;
	font-size: 12px;
	border-bottom: solid 1px #101010;
}
#nav .overbox#change-bases a:focus,
#nav .overbox#change-bases a:hover {
	background: #101010;
}
#nav .overbox#change-bases a.active {
	background: #202020;
}
#nav .overbox#change-bases strong {
	display: block;
	color: #CCC;
	font-size: 13px;
}

#nav .overbox#disconnect-box {
	top: 50px; right: 10px;
	width: 205px;
	padding: 8px 0;
}
#nav .overbox#disconnect-box hr {
	margin: 8px 0; border: none;
	background: none;
	border-top: solid 1px #202020;
}
#nav .overbox#disconnect-box a {
	display: block;
	padding: 0 15px;
	line-height: 25px;
	font-size: 13px;
	color: #CCC;
	text-decoration: none;
}
#nav .overbox#disconnect-box a:hover,
#nav .overbox#disconnect-box a:focus {
	color: white;
	background: #202020;
}

#nav .overbox#bug-tracker {
	width: 350px;
	top: 50px; right: 98px;
	padding: 0 0 8px 0;
}
#nav .overbox#bug-tracker p {
	color: #CCC;
	font-size: 12px;
	margin: 10px;
}

#nav .overbox#bug-tracker .option {
	margin: 3px 10px 10px 10px;
	display: block;
	width: 330px;
	padding: 5px;
}

#nav .overbox#bug-tracker textarea {
	display: block;
	margin: 0 10px 10px 10px;
	padding: 5px;
	width: 318px; height: 200px;
	min-width: 318px; max-width: 318px;
	border: solid 1px #202020;
	font-family: 'Trebuchet MS', sans-serif;
	font-size: 13px;
}

#nav .overbox#bug-tracker .button {
	display: block;
	margin: 0 10px 2px 10px;
}

#nav .overbox#roadmap {
	width: 350px;
	top: 50px; right: 143px;
}
#nav .overbox#roadmap .overflow {
	width: 350px;
	padding: 8px 0;
}

#nav .overbox#roadmap p {
	color: #CCC;
	font-size: 12px;
	margin: 0 10px 10px 10px;
}
#nav .overbox#roadmap p em {
	display: block;
	font-size: 11px;
	color: #4F4F4F;
}
#nav .overbox#roadmap hr {
	margin: 5px 0;
	border: none;
	border-top: solid 1px #202020;
}

#nav .overbox#new-notifications {
	top: 50px;
	left: 540px;
	width: 300px;
}

/* TOOLS */
#tools .box.left  {
	bottom: 0; right: 340px;
}
#tools .box.right {
	bottom: 0; right: 25px;
}

#tools .box {
	position: absolute;
	display: inline-block;
	height: 40px;
	padding: 1px 3px 0 3px;
	background: url('src/desktop/tools/bToolBox.png') repeat-x;
	font-size: 13px;
}
#tools .box:before {
	content: '';
	position: absolute;
	top: 0; left: -15px;
	width: 15px; height: 40px;
	background: url('src/desktop/tools/bToolBoxRight.png') no-repeat;
}
#tools .box:after {
	content: '';
	position: absolute;
	top: 0; right: -15px;
	width: 15px; height: 40px;
	background: url('src/desktop/tools/bToolBoxLeft.png') no-repeat;
}

#tools .overbox {
	display: none;
	position: absolute;
	background: #0A0A0A;
	box-shadow: inset 0 0 2px #4F4F4F;
	border-radius: 3px;
	width: 300px;
	bottom: 45px; right: 15px;
}

#tools .overbox:before {
	content: '';
	position: absolute;
	border-style: solid;
	border-width: 9px;
	border-color: #202020 transparent transparent transparent;
	bottom: -18px; right: 30px;
}
#tools .overbox.left-pic:before {
	left: 30px; right: auto;
}

.overbox a.more-link {
	display: block;
	padding: 8px;
	font-size: 12px;
	border-top: solid 1px #202020;
	text-align: center;
	text-decoration: none;
	color: #4F4F4F;
}

.overbox p.info {
	padding: 5px 15px;
	font-size: 12px;
	text-align: center;
	color: #CCC;
}

.overbox a.more-link:focus,
.overbox a.more-link:hover {
	color: #CCC;
}

#tools .overbox#tools-refinery { right: 401px; bottom: 45px; }
#tools .overbox#tools-generator { right: 237px; bottom: 45px; }
#tools .overbox#tools-technosphere { right: 193px; bottom: 45px; }

#tools .overbox#tools-credit { right: 140px; bottom: 45px; }
#tools .overbox#tools-pa { right: 10px; bottom: 45px; }

/* SUBNAV */
#subnav {
	position: fixed;
	top: 30px; left: 0; bottom: 20px;
	width: 60px;
	background: url('src/desktop/nav/subnav.png') repeat-y #0A0A0A;
	z-index: 1000;
}

#subnav .overflow {
	margin: 30px 0 20px 10px;
}

#subnav .item {
	position: relative;
	display: block;
	height: 60px; width: 60px;
	margin: 0 0 5px 0; padding: 0;
	color: white;
	text-decoration: none;
}

#subnav .item .picto {
	height: 60px; width: 60px;
	top: 0; left: 0;
}
#subnav .item .picto img {
	height: 44px; width: 44px;
	border: solid 1px #202020;
	background: #0A0A0A;
	padding: 7px;
	border-radius: 100%;
}
#subnav .item.active .picto img {
	border: solid 1px black;
	box-shadow: inset 0 0 5px black;
	background: <?= $normal; ?>;
}

#subnav .item .picto .number {
	position: absolute;
	display: block;
	width: 22px; height: 22px; line-height: 22px;
	text-align: center;
	border-radius: 100%;
	font-size: 12px;
	bottom: 0; right: 0;
	border: solid 1px black;
	background: #202020;
	background: <?= $dark; ?>;
}

#subnav .item .content {
	display: none;
	position: absolute;
	top: 0; left: 60px;
	width: 230px;
}
#subnav .item:hover > .content {
	display: block;
}

#subnav .item .content.skin-1 span {
	display: inline-block;
	margin: 15px 0 15px 16px;
	padding: 0 15px;
	line-height: 30px;

	color: white;
	background: #202020;
	border-radius: 3px;
	border: solid 1px #4F4F4F;
	box-shadow: inset 0 0 3px black;
}
#subnav .item .content.skin-1 span:before {
	content: '';
	display: block;
	position: absolute;
	border-style: solid;
	border-width: 8px;
	border-color: transparent #4F4F4F transparent transparent;
	left: 0; top: 22px;
}

#subnav .item .content.skin-2 .sub-content {
	display: inline-block;
	margin: 0 0 0 16px;
	padding: 10px;
	color: white; background: #202020;
	border-radius: 3px;
	border: solid 1px #4F4F4F;
	box-shadow: inset 0 0 3px black;
}
#subnav .item .content.skin-2 .sub-content:before {
	content: '';
	display: block;
	position: absolute;
	border-style: solid;
	border-width: 8px;
	border-color: transparent #4F4F4F transparent transparent;
	left: 0; top: 22px;
}
#subnav .item .content.skin-2 .sub-content hr {
	border: none;
	border-top: solid 1px #4F4F4F;
}
#subnav .item .content.skin-2 .sub-content .ship {
	position: relative;
}
#subnav .item .content.skin-2 .sub-content .ship img {
	width: 32px; height: 32px;
}
#subnav .item .content.skin-2 .sub-content .ship img.zero { opacity: .5; }
#subnav .item .content.skin-2 .sub-content .ship .number {
	position: absolute;
	bottom: -2px; right: -2px;
	width: 18px; height: 18px; line-height: 18px;
	border-radius: 100%;
	text-align: center;
	background: red;
}

/* COMPOSANT DE LA PAGE PROFIL */
#background-paralax {
	position: absolute;
	top: 0; left: 0;
	width: 100%; height: 100%;
	background: no-repeat bottom left black;
	z-index: 100;
}

#background-paralax.profil		{ background-image: url('src/desktop/screen/profil.jpg'); }
#background-paralax.message		{ background-image: url('src/desktop/screen/message.jpg'); }
#background-paralax.fleet		{ background-image: url('src/desktop/screen/fleet.jpg'); }
#background-paralax.financial	{ background-image: url('src/desktop/screen/financial.jpg'); }
#background-paralax.technology	{ background-image: url('src/desktop/screen/profil.jpg'); }
#background-paralax.rank		{ background-image: url('src/desktop/screen/profil.jpg'); }
#background-paralax.params		{ background-image: url('src/desktop/screen/profil.jpg'); }

#background-paralax.bases		{ background-image: url('src/desktop/screen/base.jpg'); }

#movers a {
	position: absolute;
	width: 60px;
	height: 100%;
	z-index: 400;

	-webkit-transition: all linear 100ms;
	-moz-transition: all linear 100ms;
	-ms-transition: all linear 100ms;
	-o-transition: all linear 100ms;
	transition: all linear 100ms;
}

#movers a:hover, #movers a:focus { background-color: rgba(255, 255, 255, .05); }
#movers a:active { background-color: rgba(255, 255, 255, .15); }

#movers .toLeft {
	top: 0; left: 60px;
	background: url('src/desktop/mover/left.png') no-repeat center transparent;
}
#movers .toRight {
	top: 0; right: 0;
	background: url('src/desktop/mover/right.png') no-repeat center transparent;
}

/* GENERAL RULES FOR ALERT */

#alert-content {
	display: none;
}

#alert {
	position: absolute;
	bottom: 18px; left: 0;
	width: 100%;
	padding: 0;
	text-align: left;
	list-style: inset none;
}

#alert li {
	display: inline-block;
	margin: 0 0 0 5px
}

#alert li img {
	display: block;
	height: 50px;
	border: solid 1px #202020;
	padding: 5px;
	background: #0A0A0A;
	border-radius: 100%;
}

.alert-bull {
	display: block;
	position: absolute;
	z-index: 1200;
	width: 200px;
	padding: 6px 8px;
	color: white;
	background: #202020;
	border-radius: 3px;
	border: solid 1px #4F4F4F;
	box-shadow: inset 0 0 3px black;
}

.alert-bull .title {
	display: block;
	padding: 0 0 5px 0; margin: 0 0 5px 0;
	border-bottom: solid 1px #4F4F4F;
}

.alert-bull:before {
	content: '';
	display: block;
	position: absolute;
	border-style: solid;
	border-width: 7px;
	bottom: -14px; left: 24px;
	border-color: #4F4F4F transparent transparent transparent;
}

/* GENERAL RULES FOR COMPONENTS */

#content {
	position: absolute;
	width: 6000px; /* a modifier */
	height: 100%;
	top: 0; left: 300px;
	z-index: 200;
	border-left: solid 1px #202020;
}

#content .component {
	position: relative;
	display: table-cell;
	overflow: hidden;
	width: 300px;
	background: rgba(0, 0, 0, .92);
}
#content .component.size2 { width: 600px; }
#content .component.size3 { width: 900px; }
#content .component:nth-child(1) { background: rgba(0, 0, 0, .60); }
#content .component:nth-child(2) { background: rgba(0, 0, 0, .75); }
#content .component:nth-child(3) { background: rgba(0, 0, 0, .85); }
#content .component:nth-child(4) { background: rgba(0, 0, 0, .90); }

#content .component .head {
	position: relative;
	display: inline-block;
	height: 120px; width: 100%;
	vertical-align: top;
	color: white;
	background: url('src/desktop/component/bHead.jpg') repeat-x center black;
	border-bottom: solid 1px #202020;
}

#content .component .head h1 {
	position: absolute;
	top: 10px; left: 10px;
	font-size: 38px; line-height: 50px;
	height: 50px;
	display: inline-block;
	padding: 0 10px;
	background: black;
	overflow: hidden;
}

#content .component .fix-body {
	position: relative;
	overflow: auto;
	color: white;
	border-right: solid 1px #202020;
}

#content .component .fix-body .body { position: relative; }

.no-scrolling #content .component .fix-body { overflow: hidden; }
.no-scrolling #content .component .fix-body > a {
	position: absolute;
	width: 100%; height: 40px;
	left: 0;
	opacity: 0;
}

.no-scrolling #content .component .fix-body.hover > a {
	opacity: 1;
	background-position: center;
	background-repeat: no-repeat;
}

.no-scrolling #content .component .fix-body .toTop {
	top: 0;
	background-image: url('src/desktop/component/top.png'), linear-gradient(black, rgba(0, 0, 0, .8), transparent);
	background-image: url('src/desktop/component/top.png'), -moz-linear-gradient(black, rgba(0, 0, 0, .8), transparent);
	background-image: url('src/desktop/component/top.png'), -webkit-gradient(linear, black, rgba(0, 0, 0, .8), transparent);
	background-image: url('src/desktop/component/top.png'), -o-linear-gradient(black, rgba(0, 0, 0, .8), transparent);
	background-image: url('src/desktop/component/top.png'), -ms-linear-gradient(black, rgba(0, 0, 0, .8), transparent);
}
.no-scrolling #content .component .fix-body .toBottom {
	bottom: 0;
	background-image: url('src/desktop/component/bottom.png'), linear-gradient(transparent, rgba(0, 0, 0, .8), black);
	background-image: url('src/desktop/component/bottom.png'), -moz-linear-gradient(transparent, rgba(0, 0, 0, .8), black);
	background-image: url('src/desktop/component/bottom.png'), -webkit-gradient(linear, transparent, rgba(0, 0, 0, .8), black);
	background-image: url('src/desktop/component/bottom.png'), -o-linear-gradient(transparent, rgba(0, 0, 0, .8), black);
	background-image: url('src/desktop/component/bottom.png'), -ms-linear-gradient(transparent, rgba(0, 0, 0, .8), black);
}

/* GENERAL ELEMENTS FOR COMPONENTS */

/*
.component .tool > span {
	display: table-cell;
	width: 28px;
	border: solid 6px transparent;
	border-left: none;
}
.component .tool > span a {
	position: relative;
	display: block;
	padding: 0;
	width: 40px;
	line-height: 32px;
	font-size: 14px;
	color: white;
	text-decoration: none;
	font-variant: small-caps;
	text-align: center;
	background: url('src/desktop/button/bLittleButton.png') no-repeat;
}

.component .tool > span:first-child {
	border: solid 5px transparent;
	width: auto;
}
.component .tool > span:first-child a {
	background: url('src/desktop/button/bButtonMiddle.png') repeat-x;
	width: auto;
}
.component .tool > span:first-child a:before {
	content: '';
	position: absolute;
	top: 0; left: 0;
	width: 20px; height: 32px;
	background: url('src/desktop/button/bButtonLeft.png') no-repeat;
}
.component .tool > span:first-child a:after {
	content: '';
	position: absolute;
	top: 0; right: 0;
	width: 20px; height: 32px;
	background: url('src/desktop/button/bButtonRight.png') no-repeat;
}
.component .tool > span:first-child a:focus,
.component .tool > span:first-child a:hover {
	background: url('src/desktop/button/bButtonMiddle.png') repeat-x;
}
.component .tool > span a:focus,
.component .tool > span a:hover {
	background: url('src/desktop/button/bLittleButtonHover.png') no-repeat;
}
*/

.component .tool {
	display: table;
	width: 100%;
	height: 44px;
	margin: 0;
	overflow: hidden;
	background: black;
}

.component .tool > span {
	display: table-cell;
	width: 28px;
	border: solid 6px transparent;
	border-left: none;
}
.component .tool > span a {
	position: relative;
	display: block;
	padding: 0;
	width: 30px;
	line-height: 30px;
	font-size: 14px;
	color: white;
	text-decoration: none;
	font-variant: small-caps;
	text-align: center;
	background: #202020;
	border: solid 1px #4F4F4F;
}

.component .tool > span:first-child {
	border: solid 5px transparent;
	width: auto;
}
.component .tool > span:first-child a { width: auto; }
.component .tool > span a:focus,
.component .tool > span a:hover {
	background: #4F4F4F;
}

.component h3 {
	width: 100%;
	margin: 0;
	background: black;
	text-align: center;
	padding: 0 2px;
	line-height: 44px;
	font-size: 14px;
	color: white;
	text-decoration: none;
	font-variant: small-caps;
}

.color1 .component .tool, .color1 .component h3 { border-bottom: solid 1px #b01e2d; }
.color2 .component .tool, .color2 .component h3 { border-bottom: solid 1px #2f23c0; }
.color3 .component .tool, .color3 .component h3 { border-bottom: solid 1px #ffdb0f; }
.color4 .component .tool, .color4 .component h3 { border-bottom: solid 1px #a935c7; }
.color5 .component .tool, .color5 .component h3 { border-bottom: solid 1px #57c632; }
.color6 .component .tool, .color6 .component h3 { border-bottom: solid 1px #05bed7; }
.color7 .component .tool, .color7 .component h3 { border-bottom: solid 1px #ac5832; }

.component h4 {
	margin: 10px;
}

.component .body p {
	margin: 10px;
	font-size: 13px;
	text-align: justify;
}

.component .body p.info {
	position: relative;
	border-top: solid 1px #202020;
	padding: 10px;
	margin: 10px;
	line-height: 140%;
	background: rgba(0, 0, 0, .8);
}

.component .body p.info a {
	color: white;
}

.component .body p.long-info {
	padding: 10px;
	line-height: 150%;
	background: black;
}

.component .body p .alone-button {
	display: block;
	text-align: center;
	color: white;
	line-height: 40px;
	border-radius: 3px;
	text-decoration: none;
	background: #4F4F4F;
	box-shadow: inset 0 0 2px black;
	padding: 0 10px;
}
.color1 .component .body p .alone-button { background: #510816; }
.color2 .component .body p .alone-button { background: #0c0d44; }
.color3 .component .body p .alone-button { background: #b17a00; }
.color4 .component .body p .alone-button { background: #310948; }
.color5 .component .body p .alone-button { background: #24500a; }
.color6 .component .body p .alone-button { background: #004948; }
.color7 .component .body p .alone-button { background: #401b13; }
.color1 .component .body p .alone-button:hover { background: #6e161b; }
.color2 .component .body p .alone-button:hover { background: #1f1471; }
.color3 .component .body p .alone-button:hover { background: #dbb200; }
.color4 .component .body p .alone-button:hover { background: #5a1072; }
.color5 .component .body p .alone-button:hover { background: #2c7915; }
.color6 .component .body p .alone-button:hover { background: #076b87; }
.color7 .component .body p .alone-button:hover { background: #67331d; }

.component .head.skin-1 img {
	position: absolute;
	top: 22px; left: 20px;
	padding: 8px;
	width: 60px;
	border: solid 1px #202020;
	border-radius: 100%;
	background: black;
}

.component .head.skin-1 img:before {
	content: '';
	width: 100px; height: 100px;
}

.component .head.skin-1 h2 {
	position: absolute;
	bottom: 66px; left: 105px;
	font-size: 22px;
	line-height: 22px;
	margin: 0; padding: 0;
}

.component .head.skin-1 em {
	position: absolute;
	top: 62px; left: 105px;
	font-size: 13px;
	line-height: 16px;
}

.component .head.skin-2 h2 {
	position: absolute;
	display: inline-block;
	top: 45px; left: 10px;
	font-size: 22px;
	line-height: 30px;
	margin: 0; padding: 0 10px;
	background: black;
}

.component .head.skin-3 img {
	position: absolute;
	width: 50px; padding: 8px;
	background: black;
	border: solid 1px #202020;
	border-radius: 100%;
	top: 27px;
}
.component .head.skin-3 img.left { left: 40px;}
.component .head.skin-3 img.right { right: 40px;}

.component .head.skin-4 img.main {
	position: absolute;
	width: 30px; height: 30px; padding: 8px;
	background: black;
	border: solid 1px #202020;
	border-radius: 100%;
	top: 37px;
}

.component .head.skin-4 h2 {
	position: absolute;
	top: 35px; left: 60px;
	font-size: 18px;
	line-height: 22px;
	margin: 0; padding: 0;
}

.component .head.skin-4 em {
	position: absolute;
	top: 65px; left: 60px;
	font-size: 13px;
	line-height: 16px;
}

.component .head.skin-5 h2 {
	position: absolute;
	top: 50px; left: 10px;
	font-size: 16px;
	font-weight: normal;
	margin: 0; padding: 0 20px;
	background: black;
}

.component .head.skin-5 h2:before {
	content: '';
	position: absolute; display: block;
	top: 5px; left: 0;
	width: 8px; height: 8px;
	border: solid 1px #202020;
	background: black;
	border-radius: 100%;
}

.color1 .component .border-bottom { border-bottom: solid 3px #b01e2d; }
.color2 .component .border-bottom { border-bottom: solid 3px #2f23c0; }
.color3 .component .border-bottom { border-bottom: solid 3px #ffdb0f; }
.color4 .component .border-bottom { border-bottom: solid 3px #a935c7; }
.color5 .component .border-bottom { border-bottom: solid 3px #57c632; }
.color6 .component .border-bottom { border-bottom: solid 3px #05bed7; }
.color7 .component .border-bottom { border-bottom: solid 3px #ac5832; }

.component .list-type-1 {
	margin: 10px; padding: 0;
	list-style: none;
}

.component .list-type-1 li {
	position: relative;
	padding: 5px 10px;
	text-align: right;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	background: rgba(0, 0, 0, .8);
	color: #989898;
}
.component .list-type-1 li.strong {
	border-top: double 3px #4F4F4F;
	background: #111111;
	color: white;
}

.component .list-type-1 li.empty {
	background: none;
	border: none;
	height: 48px;
}

.component .list-type-1 li ul li {
	height: auto;
}

.component .list-type-1 .label {
	display: block;
	font-size: 13px;
}

.component .list-type-1 .value {
	display: inline-block;
	font-size: 22px; line-height: 30px;
	font-weight: bold;
}

.component .list-type-1 .value .icon,
.component .list-type-1 .value .icon-color {
	height: 18px;
	margin-left: 8px;
	position: relative;
	top: -3px;
}

.component .list-type-1 .hide { color: #4F4F4F; }
.component .list-type-1 .buttons {
	position: absolute;
	top: 28px; left: 5px;
}

.component .list-type-1 .buttons a {
	display: inline-block;
	margin: 0 4px;
	width: 18px; line-height: 18px;
	text-align: center;
	text-decoration: none;
	font-style: 14px;
	color: white;
	border-radius: 3px;
	background: black;
}
.color1 .component .list-type-1 .buttons a { background: #6e161b; }
.color2 .component .list-type-1 .buttons a { background: #1f1471; }
.color3 .component .list-type-1 .buttons a { background: #dbb200; }
.color4 .component .list-type-1 .buttons a { background: #5a1072; }
.color5 .component .list-type-1 .buttons a { background: #2c7915; }
.color6 .component .list-type-1 .buttons a { background: #076b87; }
.color7 .component .list-type-1 .buttons a { background: #67331d; }

.component .sub-list-type-1 {
	display: none;
	margin: 0; padding: 0;
	list-style: none;
}

.component .sub-list-type-1 li {
	position: relative;
	padding: 2px 0;
	text-align: left;
	border: none;
	border-top: solid 1px #0A0A0A;
}

.component .sub-list-type-1 .label {
	display: inline-block;
	width: 60%;
}

.component .sub-list-type-1 .value {
	text-align: right;
	line-height: 25px;
	font-size: 18px;
	width: 40%;
}

.component .sub-list-type-1 .button {
	display: inline-block;
	width: 18px; line-height: 18px;
	text-align: center;
	text-decoration: none;
	font-size: 14px; font-weight: normal;
	color: white;
	background: white;
	border-radius: 3px;
}
.component .sub-list-type-1 .label .button {
	position: relative; left: -4px;
	margin: 0 0 0 3px;
}
.component .sub-list-type-1 .value .button {
	margin: 0 2px 0 6px;
}
.color1 .component .sub-list-type-1 .button { background: #b01e2d; }
.color2 .component .sub-list-type-1 .button { background: #2f23c0; }
.color3 .component .sub-list-type-1 .button { background: #ffdb0f; }
.color4 .component .sub-list-type-1 .button { background: #a935c7; }
.color5 .component .sub-list-type-1 .button { background: #57c632; }
.color6 .component .sub-list-type-1 .button { background: #05bed7; }
.color7 .component .sub-list-type-1 .button { background: #ac5832; }

.component .list-type-1 form {
	z-index: 1;
	position: absolute;
	display: none;
	bottom: -40px; right: 3px;
}

.component .sub-list-type-1 form {
	right: -6px;
}

.component .list-type-1 form p {
	position: relative;
	background: white;
	border-radius: 3px;
	padding: 0; margin: 0;
	width: 200px; height: 35px;
}

.component .list-type-1 form p:before {
	content: '';
	position: absolute;
	top: -12px; right: 12px;
	border-style: solid;
	border-width: 6px;
	border-color: transparent transparent white transparent;
}

.component .list-type-1 form input {
	border: none; background: none;
	line-height: 35px; height: 35px;
	padding: 0 10px;
}
.component .list-type-1 form input[type='text']		{ width: 140px; }
.component .list-type-1 form input[type='submit']	{ width: 40px; }

/* NUMBER BOX */
.number-box {
	position: relative;
	margin: 10px; padding: 5px 10px;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	background: black;
	color: white;
}
.number-box.grey {
	border-left: solid 10px #4F4F4F !important;
}
.color1 .number-box { border-left: solid 10px #6e161b; }
.color2 .number-box { border-left: solid 10px #1f1471; }
.color3 .number-box { border-left: solid 10px #dbb200; }
.color4 .number-box { border-left: solid 10px #5a1072; }
.color5 .number-box { border-left: solid 10px #2c7915; }
.color6 .number-box { border-left: solid 10px #076b87; }
.color7 .number-box { border-left: solid 10px #67331d; }

.number-box .label { display: block; }
.number-box .value {
	display: block;
	font-size: 26px;
	font-weight: bold;
	margin: 4px 0 0 0;
}

.number-box .progress-bar {
	margin: 5px 0;
}

.number-box .group-link {
	position: absolute;
	top: 5px; right: 5px;
}

.number-box .group-link a {
	display: inline-block;
	line-height: 18px; width: 18px;
	text-align: center;
	color: white; text-decoration: none;
	border-radius: 3px;
	margin-left: 5px;
	background: black;
}
.color1 .number-box .group-link a { background: #6e161b; }
.color2 .number-box .group-link a { background: #1f1471; }
.color3 .number-box .group-link a { background: #dbb200; }
.color4 .number-box .group-link a { background: #5a1072; }
.color5 .number-box .group-link a { background: #2c7915; }
.color6 .number-box .group-link a { background: #076b87; }
.color7 .number-box .group-link a { background: #67331d; }

/* PROGRESS BAR */
.progress-bar {
	position: relative;
	display: block;
	width: 100%; height: 3px;
	background: #4F4F4F;
	overflow: hidden;
}

.progress-bar .content {
	position: relative;
	top: -9px;
	display: inline-block;
	height: 5px;
}
.color1 .progress-bar .content:nth-child(n)  { background: #b01e2d; }
.color2 .progress-bar .content:nth-child(n)  { background: #2f23c0; }
.color3 .progress-bar .content:nth-child(n)  { background: #ffdb0f; }
.color4 .progress-bar .content:nth-child(n)  { background: #a935c7; }
.color5 .progress-bar .content:nth-child(n)  { background: #57c632; }
.color6 .progress-bar .content:nth-child(n)  { background: #05bed7; }
.color7 .progress-bar .content:nth-child(n)  { background: #ac5832; }
.color1 .progress-bar .content:nth-child(2n) { background: #510816; }
.color2 .progress-bar .content:nth-child(2n) { background: #0c0d44; }
.color3 .progress-bar .content:nth-child(2n) { background: #b17a00; }
.color4 .progress-bar .content:nth-child(2n) { background: #310948; }
.color5 .progress-bar .content:nth-child(2n) { background: #24500a; }
.color6 .progress-bar .content:nth-child(2n) { background: #004948; }
.color7 .progress-bar .content:nth-child(2n) { background: #401b13; }

/* BONUS */
.bonus {
	vertical-align: top;
	display: inline-block;
	font-size: 55%;
	line-height: 100%;
	padding: 3px;
	margin: 2px 0 0 8px;
	border-radius: 3px;
	font-weight: normal;
	background: black;
}
.color1 .bonus { background: #510816; }
.color2 .bonus { background: #0c0d44; }
.color3 .bonus { background: #b17a00; }
.color4 .bonus { background: #310948; }
.color5 .bonus { background: #24500a; }
.color6 .bonus { background: #004948; }
.color7 .bonus { background: #401b13; }

/* RULES FOR COMPONENTS */

/* profil */
.component.profil .main-avatar,
.component.profil .diary-avatar {
	display: block;
	background: black;
	border: solid 1px #202020;
	padding: 10px;
	border-radius: 100%;
	margin: 20px auto;
}

.color1 .component.profil .main-avatar { box-shadow: 0 0 0 4px #6e161b, 0 0 20px black; }
.color2 .component.profil .main-avatar { box-shadow: 0 0 0 4px #1f1471, 0 0 20px black; }
.color3 .component.profil .main-avatar { box-shadow: 0 0 0 4px #dbb200, 0 0 20px black; }
.color4 .component.profil .main-avatar { box-shadow: 0 0 0 4px #5a1072, 0 0 20px black; }
.color5 .component.profil .main-avatar { box-shadow: 0 0 0 4px #2c7915, 0 0 20px black; }
.color6 .component.profil .main-avatar { box-shadow: 0 0 0 4px #076b87, 0 0 20px black; }
.color7 .component.profil .main-avatar { box-shadow: 0 0 0 4px #67331d, 0 0 20px black; }

.component.profil .diary-avatar.color1 { box-shadow: 0 0 0 4px #6e161b, 0 0 20px black; }
.component.profil .diary-avatar.color2 { box-shadow: 0 0 0 4px #1f1471, 0 0 20px black; }
.component.profil .diary-avatar.color3 { box-shadow: 0 0 0 4px #dbb200, 0 0 20px black; }
.component.profil .diary-avatar.color4 { box-shadow: 0 0 0 4px #5a1072, 0 0 20px black; }
.component.profil .diary-avatar.color5 { box-shadow: 0 0 0 4px #2c7915, 0 0 20px black; }
.component.profil .diary-avatar.color6 { box-shadow: 0 0 0 4px #076b87, 0 0 20px black; }
.component.profil .diary-avatar.color7 { box-shadow: 0 0 0 4px #67331d, 0 0 20px black; }

.component.profil form {
	display: block !important;
}

.component.profil p.input:before {
	left: 130px !important;
	top:  -20px !important;
	border-width: 10px !important;
}

.component.profil textarea {
	height: 100px !important;
}

.component.profil .diary-content {
	margin: 10px; padding: 0;
	background: #0A0A0A;
	border-radius: 3px;
	border-top: solid 10px white;
}
.component.profil .diary-content h4 {
	border-bottom: solid 1px #4F4F4F;
	padding: 10px 0; margin: 0 10px;
}
.component.profil .diary-content h4 strong {
	display: block;
	font-size: 22px;
	line-height: 28px;
}
.component.profil .diary-content p {
	font-size: #CCC;
}
.component.profil .diary-content form {
	background: white;
	border-radius: 0 0 3px 3px;
	padding: 0 0 1px 0;
}
.component.profil .diary-content form textarea {
	display: block;
	border: none; padding: 5px 0;
	width: 258px;
	max-width: 500px;
}

/* thread */
.component.thread .message {
	position: relative;
	margin: 20px 10px 10px 10px; padding: 6px 8px;
	background: black;
	line-height: 140%;
	text-align: justify;
	color: #efefef;
	border-top: solid 1px #4F4F4F;
	border-right: solid 1px #202020;
	border-left: solid 1px #202020;
	border-bottom: solid 3px #4F4F4F;
}
.component.thread .message:before {
	content: '';
	position: absolute;
	width: 0; height: 0; top: -12px;
	border-style: solid;
	border-width: 6px;
	border-color: transparent transparent #4F4F4F transparent;
}
.component.thread .message.left:before { left: 20px; }
.component.thread .message.right:before { right: 20px; }
.component.thread .message.color1 { border-bottom: solid 3px #b01e2d; }
.component.thread .message.color2 { border-bottom: solid 3px #2f23c0; }
.component.thread .message.color3 { border-bottom: solid 3px #ffdb0f; }
.component.thread .message.color4 { border-bottom: solid 3px #a935c7; }
.component.thread .message.color5 { border-bottom: solid 3px #57c632; }
.component.thread .message.color6 { border-bottom: solid 3px #05bed7; }
.component.thread .message.color7 { border-bottom: solid 3px #ac5832; }

.component.thread .message em.name   {
	padding: 0 0 5px 0;
	display: block;
	color: #CCC;
}
.component.thread .message em.option {
	padding: 5px 0 0 0;
	text-align: right;
	display: block;
	color: #CCC;
}

.component.thread .message .icon-color {
	width: 15px;
}

.component.thread .message a {
	color: #EFEFEF;
}

.component.thread .message a.color1 { color: #b01e2d; }
.component.thread .message a.color2 { color: #2f23c0; }
.component.thread .message a.color3 { color: #ffdb0f; }
.component.thread .message a.color4 { color: #a935c7; }
.component.thread .message a.color5 { color: #57c632; }
.component.thread .message a.color6 { color: #05bed7; }
.component.thread .message a.color7 { color: #ac5832; }

.component.thread form {
	display: none;
}

.component.thread p.input {
	position: relative;
	background: white;
	padding: 10px;
	border-radius: 3px;
}

.component.thread p.input:before {
	content: '';
	position: absolute;
	width: 0; height: 0; top: -12px;
	border-style: solid;
	border-width: 6px;
	border-color: transparent transparent white transparent;
	left: 20px;
}

.component.thread textarea {
	display: block;
	width: 100%;
	padding: 0; margin: 0;
	border-radius: 0;
	border: none;
	font-family: 'Trebuchet MS';
	font-size: 13px;
	max-width: 100%; min-width: 100%;
	height: 120px;
}

.component.thread .more-message {
	display: block;
	margin: 10px;
	line-height: 34px;
	padding: 0 12px;
	background: #0A0A0A;
	color: #4F4F4F;
	text-decoration: none;
	border: solid 1px #202020;
	border-radius: 3px;
}

.component.thread .more-message:hover,
.component.thread .more-message:focus,
.component.thread .more-message:active {
	color: #CCC;
	box-shadow: inset 0 0 5px black;
}

/* new-message */
.component.new-message p.input {
	position: relative;
	background: white;
	padding: 10px;
	border-radius: 3px;
}

.component.new-message p.input:before {
	content: '';
	position: absolute;
	width: 0; height: 0; top: -12px;
	border-style: solid;
	border-width: 6px;
	border-color: transparent transparent white transparent;
	left: 20px;
}

.component.new-message label {
	display: block;
	font-size: 13px;
}

.component.new-message .input-text input {
	display: block;
	width: 100%;
	padding: 0; margin: 0;
	border-radius: 0;
	border: none;
	font-family: 'Trebuchet MS';
	font-size: 13px;
}

.component.new-message .input-area textarea {
	display: block;
	width: 100%;
	padding: 0; margin: 0;
	border-radius: 0;
	border: none;
	font-family: 'Trebuchet MS';
	font-size: 13px;
	max-width: 100%; min-width: 100%;
	height: 200px;
}

/* last-notif */
.notif {
	position: relative;
	margin: 10px;
	background: black;
	border-top: solid 1px #4F4F4F;
	border-right: solid 1px #202020;
	border-left: solid 1px #202020;
}

.notif h4 {
	position: relative;
	overflow: hidden;
	margin: 0;
	padding: 0 10px;
	font-size: 14px;
	line-height: 30px;
	border-bottom: solid 1px #202020;
	background: #0A0A0A;
	font-weight: normal;
	cursor: pointer;
	color: white;
}

.notif.unreaded h4:before {
	position: absolute;
	content: '';
	width: 40px; height: 40px;
	background: white;
	top: -5px; right: -15px;

	-webkit-transform: rotate(100deg);
	-moz-transform: rotate(100deg);
	-ms-transform: rotate(100deg);
	-o-transform: rotate(100deg);
	transform: rotate(100deg);
}

.color1 .notif.unreaded h4:before { background: #b01e2d; }
.color2 .notif.unreaded h4:before { background: #2f23c0; }
.color3 .notif.unreaded h4:before { background: #ffdb0f; }
.color4 .notif.unreaded h4:before { background: #a935c7; }
.color5 .notif.unreaded h4:before { background: #57c632; }
.color6 .notif.unreaded h4:before { background: #05bed7; }
.color7 .notif.unreaded h4:before { background: #ac5832; }

.notif .content {
	display: none;
	padding: 6px 8px;
	line-height: 140%;
	text-align: justify;
	color: #efefef;
}

.notif .content p { margin: 0; }
.notif .content hr {
	border: none; background: none;
	border-bottom: dashed 1px #202020;
	margin: 5px 0;
}

.notif .content a {
	color: white;
}

.notif .footer {
	display: none;
	margin: 0;
	padding: 0 10px;
	line-height: 18px;
	padding: 5px 5px;
	border-top: solid 1px #202020;
	font-style: italic;
	text-align: right;
	color: #CCC;
}

.notif .footer a { color: #CCC; }
.notif.open .content { display: block; }
.notif.open .footer  { display: block; }

/* finance */
.component.financial table {
	border-collapse: collapse;
	width: 100%;
}
.component.financial td {
	vertical-align: top;
	width: 50%;
}

/* uni */
.component.uni .build-item {
	height: 60px;
	margin: 20px;
}

/* techno */
.component.techno .build-item .name strong { font-size: 16px; }

/* school */
.component.school .build-item .name strong { font-size: 18px; }

/* nav */
.component .nav-element {
	position: relative;
	display: block;
	margin: 10px; height: 70px;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	background: black;
	color: white;
}

.component .nav-element img {
	position: absolute;
	top: 5px; left: 5px;
	padding: 8px;
	height: 40px;
	border: solid 1px #202020;
	background: #0A0A0A;
	border-radius: 100%;
}

.color1 .component .nav-element.active { background: #6e161b; }
.color2 .component .nav-element.active { background: #1f1471; }
.color3 .component .nav-element.active { background: #dbb200; }
.color4 .component .nav-element.active { background: #5a1072; }
.color5 .component .nav-element.active { background: #2c7915; }
.color6 .component .nav-element.active { background: #076b87; }
.color7 .component .nav-element.active { background: #67331d; }
.component .nav-element.active img 	{ background: black; }

.component .nav-element strong {
	position: absolute;
	top: 8px; left: 70px;
	color: white;
	font-weight: bold;
	font-size: 17px;
}

.component .nav-element em {
	position: absolute;
	top: 32px; left: 70px;
	color: white;
	font-weight: bold;
	font-size: 12px;
	font-style: normal;
	color: #efefef;
}

.component hr {
	border: none;
	border-bottom: dashed 1px #202020;
	margin: 0 10px;
}

.component.rc .rc {
	position: relative;
	margin: 20px 10px 20px 30px;
	border-left: solid 1px #CCC;
	padding: 0 10px;
	height: 380px;
	color: #CCC;
}

.component.rc .rc.no-tax {
	margin: 20px 10px 20px 30px;
	border-left: dashed 1px #4F4F4F;
	padding: 0 10px;
	color: #CCC;
}

.component.rc .rc a, .component.rc .rc strong {
	color: white;
}


.component.rc .rc .icon-color {
	width: 20px;
}
.component.rc .rc .base {
	position: relative;
	padding: 15px 0 15px 40px;
	height: 50px;
}

.component.rc .rc .base:last-child {
	position: absolute;
	bottom: 0px;
}

.component.rc .rc .place {
	position: absolute;
	top: 0px; left: -50px;
	width: 78px; height: 78px;
	border: solid 1px #202020;
	background: black;
	border-radius: 100%;
}

.component.rc .rc .general {
	list-style: none inset;
	margin: 10px 0; padding: 0;
}

.component.rc .rc .general li {
	margin: 10px 0;
	list-style-type: none;
}

.component.rc .rc .general li strong {
	display: block;
	font-size: 20px;
	font-weight: bold;
}

/* list-fleet */
.component.list-fleet hr {
	margin: 10px 0;
	border: none;
	border-top: solid 1px #202020;
}

.component.list-fleet .fleet-element {
	position: relative;
	margin: 10px 10px 0 10px;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	height: 45px;
	background: black;
	line-height: 18px;
}

.component.list-fleet .fleet-element.active {
	background: #0A0A0A;
	border: solid 1px #202020;
}

.component.list-fleet .fleet-element strong {
	display: block;
}

.component.list-fleet .fleet-element .status {
	position: absolute;
	display: block;
	top: 7px; left: 7px;
	width: 29px; height: 29px;
	padding: 1px;
	background: red;
	border-radius: 3px;
}

.color1 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color1 .status { background: #6e161b; }
.color2 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color2 .status { background: #1f1471; }
.color3 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color3 .status { background: #dbb200; }
.color4 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color4 .status { background: #5a1072; }
.color5 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color5 .status { background: #2c7915; }
.color6 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color6 .status { background: #076b87; }
.color7 .component.list-fleet .fleet-element .status, .component.list-fleet .fleet-element.color7 .status { background: #67331d; }

.component.list-fleet .fleet-element .name {
	position: absolute;
	display: block;
	top: 0; left: 45px;
	width: 80px; height: 35px;
	padding: 5px;
}

.component.list-fleet .fleet-element .pev {
	position: absolute;
	display: block;
	top: 14px; left: 135px;
	width: 80px; height: 20px;
	font-size: 18px;
	text-align: right;
}
.component.list-fleet .fleet-element .pev img { width: 15px; }

.component.list-fleet .fleet-element .location {
	position: absolute;
	display: block;
	top: 0; left: 235px;
	width: 290px; height: 35px;
	padding: 5px;
}
.component.list-fleet .fleet-element .location a { color: white; }

.component.list-fleet .fleet-element .duration {
	position: absolute;
	display: block;
	bottom: 1px; right: 5px;
}

.component.list-fleet .fleet-element .button {
	position: absolute;
	display: block;
	top: 5px; right: 5px;
	padding: 3px;
	width: 14px; height: 14px;
	background: #4F4F4F;
	border: none;
	color: white;
	text-decoration: none;
	line-height: 14px; text-align: center;
	font-size: 20px;
}
.color1 .component.list-fleet .fleet-element .button { background: #510816; }
.color2 .component.list-fleet .fleet-element .button { background: #0c0d44; }
.color3 .component.list-fleet .fleet-element .button { background: #b17a00; }
.color4 .component.list-fleet .fleet-element .button { background: #310948; }
.color5 .component.list-fleet .fleet-element .button { background: #24500a; }
.color6 .component.list-fleet .fleet-element .button { background: #004948; }
.color7 .component.list-fleet .fleet-element .button { background: #401b13; }
.component.list-fleet .fleet-element .button img {
	width: 14px; height: 14px;
	border: none;
}

.component.list-fleet .fleet-element .progress-bar {
	position: absolute;
	bottom: -3px; left: 0;
}

/* squadron */
.component.commander-fleet .fleet {
	vertical-align: top;
	display: inline-block;
}

.component.commander-fleet .list-ship { 
	vertical-align: top;
	display: inline-block;
	width: 148px;
}
.component.commander-fleet .list-ship:first-child { 
	border-right: dashed 1px #4F4F4F;
}

.component.commander-fleet .list-ship a { 
	display: block;
	position: relative;
	margin: 6px;
	height: 40px;
	background: #202020;
	border: solid 1px #4F4F4F;
	border-radius: 3px;
}
.component.commander-fleet .list-ship a.empty { 
	opacity: 0.4;
}

.component.commander-fleet .list-ship img {
	position: absolute;
	display: inline-block;
	width: 40px;
}
.component.commander-fleet .list-ship .text { 
	position: absolute;
	left: 45px;
	display: inline-block;
	width: 88px;
	color: white;
}
.component.commander-fleet .list-ship .text .quantity { 
	display: block;
	font-weight: bold;
	font-size: 18px;
}

.component.commander-fleet .army {
	margin: 10px;
	border-collapse: collapse;
	width: 578px;
}
.component.commander-fleet .army td {
	width: 65px; padding: 5px;
	border-right: dashed 1px #4F4F4F;
	vertical-align: center;
}
.component.commander-fleet .army tr:first-child td {
	text-align: center;
	padding: 10px 5px;
	font-size: 18px;
	font-weight: bold;
}
.component.commander-fleet .army td:first-child {
	width: auto;
	vertical-align: top;
}
.component.commander-fleet .army tr:first-child td:first-child {
	text-align: left;
	font-weight: normal;
}

.component.commander-fleet .army .block {
	display: block;
	width: 54px; height: 54px;
	margin: 0 0 5px 0; padding: 5px;
	vertical-align: top;
	border-radius: 5px;
	background: #0A0A0A;
	text-align: right;
	border: solid 1px #202020;
	color: #4F4F4F;
}

.component.commander-fleet .army .block strong {
	display: block;
	font-size: 15px;
	height: 38px;
	font-weight: bold;
}

.component.commander-fleet .army .block em {
	display: block;
	padding: 2px;
	font-size: 11px;
	background: black;
	text-align: center;
	border-radius: 3px;
}

.component.commander-fleet .army .block.squadron {
	border: solid 1px #4F4F4F;
	color: white;
	cursor: pointer;<
}
.component.commander-fleet .army .block.squadron.full0 { background: url('src/desktop/squadron/squadron0.png') no-repeat 4px 2px; }
.component.commander-fleet .army .block.squadron.full1 { background: url('src/desktop/squadron/squadron1.png') no-repeat 4px 2px; }
.component.commander-fleet .army .block.squadron.full2 { background: url('src/desktop/squadron/squadron2.png') no-repeat 4px 2px; }
.component.commander-fleet .army .block.squadron.full3 { background: url('src/desktop/squadron/squadron3.png') no-repeat 4px 2px; }
.color1 .component.commander-fleet .army .block.squadron { background-color: #6e161b; }
.color2 .component.commander-fleet .army .block.squadron { background-color: #1f1471; }
.color3 .component.commander-fleet .army .block.squadron { background-color: #dbb200; }
.color4 .component.commander-fleet .army .block.squadron { background-color: #5a1072; }
.color5 .component.commander-fleet .army .block.squadron { background-color: #2c7915; }
.color6 .component.commander-fleet .army .block.squadron { background-color: #076b87; }
.color7 .component.commander-fleet .army .block.squadron { background-color: #67331d; }

.component.commander-fleet .army .block.squadron.active {
	box-shadow: 
		inset 0 0 6px black,
		0 0 2px 0 white;
	border: dashed 1px white;
}


/* generator */
.component.generator table {
	width: 100%;
	border-collapse: collapse;
}

/* dock1 */
.component.dock1 table { 
	width: 100%;
	border-collapse: collapse;
}

.component .build-item {
	position: relative;
	margin: 10px;
	background: black;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	width: 278px;
}

.component .build-item.large {
	width: 578px;
}

.component .build-item .name {
	position: relative;
	height: 40px;
	padding: 5px 5px 5px 90px;
}
.component .build-item .name img {
	z-index: 20;
	position: absolute;
	top: -10px; left: 5px;
	width: 60px; padding: 8px;
	border: solid 1px #202020;
	border-radius: 100%;
	background: black;
}
.component .build-item.disable .name img { opacity: .50; }

.component .build-item .name strong {
	display: block;
	font-size: 20px;
}

.component .build-item.disable .name strong {
	color: #4F4F4F;
}

.component .build-item .level {
	display: block;
	position: absolute;
	width: 22px; line-height: 22px;
	text-align: center;
	font-size: 12px;
	border-radius: 100%;
	top: 38px; left: 58px;
	border: solid 1px white;
	z-index: 22;
	background: black;
}

.color1 .component .build-item .level { background: #6e161b; }
.color2 .component .build-item .level { background: #1f1471; }
.color3 .component .build-item .level { background: #dbb200; }
.color4 .component .build-item .level { background: #5a1072; }
.color5 .component .build-item .level { background: #2c7915; }
.color6 .component .build-item .level { background: #076b87; }
.color7 .component .build-item .level { background: #67331d; }

.component .build-item .info {
	display: none;
	position: absolute;
	width: 20px; line-height: 20px;
	text-align: center;
	font-size: 16px;
	text-decoration: none;
	border-radius: 3px;
	top: 5px; right: 5px;
	background: black;
	color: white;
}
.component .build-item.large .info {
	top: 75px; right: 25px;
}
.color1 .component .build-item .info { background: #6e161b; }
.color2 .component .build-item .info { background: #1f1471; }
.color3 .component .build-item .info { background: #dbb200; }
.color4 .component .build-item .info { background: #5a1072; }
.color5 .component .build-item .info { background: #2c7915; }
.color6 .component .build-item .info { background: #076b87; }
.color7 .component .build-item .info { background: #67331d; }

.component .build-item .button {
	display: block;
	margin: 10px; padding: 5px 10px;
	text-align: right;
	color: white;
	text-decoration: none;
	border-radius: 3px;
	line-height: 20px;
	background: #202020;
	box-shadow: inset 0 0 2px black;
}
.component .build-item.large .button {
	position: absolute;
	top: -3px; right: 0;
	width: 310px;
	line-height: 18px;
}
.component .build-item .button:hover { box-shadow: inset 0 0 6px black; }
.color1 .component .build-item .button { background: #6e161b; }
.color2 .component .build-item .button { background: #1f1471; }
.color3 .component .build-item .button { background: #dbb200; }
.color4 .component .build-item .button { background: #5a1072; }
.color5 .component .build-item .button { background: #2c7915; }
.color6 .component .build-item .button { background: #076b87; }
.color7 .component .build-item .button { background: #67331d; }
.color1 .component .build-item .button:hover { background: #b01e2d; }
.color2 .component .build-item .button:hover { background: #2f23c0; }
.color3 .component .build-item .button:hover { background: #ffdb0f; }
.color4 .component .build-item .button:hover { background: #a935c7; }
.color5 .component .build-item .button:hover { background: #57c632; }
.color6 .component .build-item .button:hover { background: #05bed7; }
.color7 .component .build-item .button:hover { background: #ac5832; }
.component .build-item .button.disable {
	background: #202020;
	cursor: default;
}
.component .build-item.disable .button.disable {
	color: #696969;
}
.component .build-item .button.disable:hover {
	background: #202020;
	box-shadow: inset 0 0 2px black;
}
.component .build-item .button .icon-color {
	width: 14px;
}

.component .build-item .ship-pack {
	z-index: 10;
	position: absolute;
	bottom: 15px; left: 15px;
	width: 60px; height: 40px;
	padding: 0; margin: 0;
	border: none;
	background: white;
	text-align: center;
	font-size: 24px;
	font-weight: bold;
	border-radius: 3px;
	box-shadow: inset 0 0 0 3px #CCC;
}

.component .build-item .ship-illu {
	width: 260px;
	margin: 5px 10px;
	overflow: hidden;
}
.component .build-item.large .ship-illu {
	width: 560px;
	margin-top: 10px;
}

.component .build-item .ship-illu img {
	width: 100%;
}

.queue {
	margin: 10px;
	color: white;
}

.queue .item {
	position: relative;
	background: black;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	min-height: 60px;
}

.queue .item a.button {
	position: absolute;
	display: block;
	top: 2px; right: 5px;
	color: white;
	text-decoration: none;
}

.queue .item .picto {
	float: left;
	width: 40px;
	margin: 5px; padding: 5px;
	background: black;
	border-radius: 100%;
	border: solid 1px #202020;
}

.queue .item strong {
	display: block;
	margin: 6px 0 2px 0;
}

.queue .item strong .level {
	font-size: 11px;
	color: #CCC;
}
.queue .item .big {
	font-size: 24px;
}
.queue .item em { display: block; }
.queue .item .progress-container {
	position: relative;
	display: block;
	clear: both;
	margin: 5px; height: 3px;
	background: #4F4F4F;
}

.queue .item .progress-bar {
	position: absolute;
	display: block;
	height: 100%;
	background: #202020;
}
.color1 .queue .item .progress-bar { background: #b01e2d; }
.color2 .queue .item .progress-bar { background: #2f23c0; }
.color3 .queue .item .progress-bar { background: #ffdb0f; }
.color4 .queue .item .progress-bar { background: #a935c7; }
.color5 .queue .item .progress-bar { background: #57c632; }
.color6 .queue .item .progress-bar { background: #05bed7; }
.color7 .queue .item .progress-bar { background: #ac5832; }

/* situation */

.component.space .fix-body {
	background: url('src/desktop/base/situation.jpg') no-repeat top left black;
}

.component .situation-content {
	display: block;
	width: 100%; height: 500px;
	border-bottom: solid 1px #0A0A0A;
}

.component .situation-content .line-help {
	position: absolute;
	display: block;
	width: 25px; height: 25px; line-height: 25px;
	text-align: center;
	background: black;
	border-radius: 100%;
}
.color1 .component .situation-content .line-help { background: #510816; }
.color2 .component .situation-content .line-help { background: #0c0d44; }
.color3 .component .situation-content .line-help { background: #b17a00; }
.color4 .component .situation-content .line-help { background: #310948; }
.color5 .component .situation-content .line-help { background: #24500a; }
.color6 .component .situation-content .line-help { background: #004948; }
.color7 .component .situation-content .line-help { background: #401b13; }

.component .situation-content .line-help.line-1 { top: 55px; left: 190px; }
.component .situation-content .line-help.line-2 { top: 145px; left: 406px; }

.component .situation-content .toolbar {
	position: absolute;
	top: 30px; right: 30px;
	box-shadow: 0 0 0 4px rgba(255, 255, 255, .1);
	border-radius: 3px;
}
.color1 .component .situation-content .toolbar { background: #6e161b; }
.color2 .component .situation-content .toolbar { background: #1f1471; }
.color3 .component .situation-content .toolbar { background: #dbb200; }
.color4 .component .situation-content .toolbar { background: #5a1072; }
.color5 .component .situation-content .toolbar { background: #2c7915; }
.color6 .component .situation-content .toolbar { background: #076b87; }
.color7 .component .situation-content .toolbar { background: #67331d; }

.component .situation-content .toolbar a {
	display: inline-block;
	line-height: 32px;
	padding: 0 15px;
	border-right: solid 1px black;
	text-decoration: none;
	color: white;
}

.component .situation-content .toolbar a:hover,
.component .situation-content .toolbar a:focus {
	background: rgba(0, 0, 0, .25);
}

.component .situation-content .toolbar form {
	display: inline-block;
}

.component .situation-content .toolbar input {
	height: 32px;
	border: none;
	background: none;
	color: white;
	padding: 0 15px;
}
.component .situation-content .toolbar input:focus {
	background: rgba(0, 0, 0, .25);
}

.component .situation-content .toolbar input.button {
	background: url('src/desktop/common/edit.png') no-repeat center;
}
.component .situation-content .toolbar input.button:focus {
	background: url('src/desktop/common/edit.png') no-repeat center rgba(0, 0, 0, .25);
}

.component .situation-content .info {
	position: absolute;
	display: block;
	width: 200px;
	font-size: 12px;
	color: #efefef;
	line-height: 18px;
}
.component .situation-content .info strong {
	color: white;
	font-size: 14px;
}

.component .situation-content .commander {
	position: absolute;
	display: block;
	text-decoration: none;
}
.component .situation-content .commander.empty {
	color: #CCC;
}
.component .situation-content .commander.position-1-1 { top: 135px; left: 127px; }
.component .situation-content .commander.position-1-2 { top: 272px; left: 100px; }
.component .situation-content .commander.position-1-3 { top: 415px; left: 127px; }

.component .situation-content .commander.position-2-1 { top: 215px; left: 352px; }
.component .situation-content .commander.position-2-2 { top: 272px; left: 345px; }
.component .situation-content .commander.position-2-3 { top: 330px; left: 352px; }

.component .situation-content .commander img {
	width: 40px; padding: 6px;
	border: solid 1px #202020;
	background: black;
	border-radius: 100%;

	-moz-transition: all linear 250ms;
	-webkit-transition: all linear 250ms;
	-o-transition: all linear 250ms;
	transition: all linear 250ms;
}
.color1 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #6e161b; }
.color2 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #1f1471; }
.color3 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #dbb200; }
.color4 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #5a1072; }
.color5 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #2c7915; }
.color6 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #076b87; }
.color7 .component .situation-content .commander.full img { box-shadow: 0 0 4px white, 0 0 0 2px #67331d; }
.color1 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #6e161b; }
.color2 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #1f1471; }
.color3 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #dbb200; }
.color4 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #5a1072; }
.color5 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #2c7915; }
.color6 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #076b87; }
.color7 .component .situation-content .commander.full img:hover { box-shadow: 0 0 10px white, 0 0 0 6px #67331d; }

.component .situation-content .commander .info {
	top: 8px; left: 65px;
	width: 160px;
}

.component .situation-content .stellar {
	position: absolute;
	display: block;
	top: 180px; left: 560px;
}
.component .situation-content .stellar img {
	width: 220px; padding: 6px;
	border: solid 1px #202020;
	background: black;
	border-radius: 100%;
}
.component .situation-content .stellar .info {
	font-size: 12px;
	border-left: solid 1px #202020;
}

.component .situation-content .stellar .info.top {
	bottom: 215px; left: 50px;
	padding: 0 0 30px 10px;
}
.component .situation-content .stellar .info.top strong {
	font-size: 20px;
}

.component .situation-content .stellar .info.bottom {
	top: 225px; left: 160px;
	padding: 10px 0 0 10px;
}

.component .situation-content .stellar .info.middle {
	top: 20px; left: 182px;
	padding: 10px 0 0 50px;
	border: none;
	border-top: solid 1px #202020;
}

.component .situation-info {
	display: table;
	width: 100%;
	border-top: solid 1px #202020;
	border-bottom: solid 1px #202020;
	background: black;
}

.component .situation-info .item {
	display: table-cell;
	padding: 10px;
	border-top: solid 8px #202020;
	border-left: solid 1px #202020;
}

.component .situation-info .item .value {
	font-size: 26px;
	font-weight: bold;
	display: block;
}

/* composant report */
.component.report .small-report {
	position: relative;
	margin: 10px;
	background: black;
	border-top: solid 1px #4F4F4F;
	border-right: solid 1px #202020;
	border-left: solid 1px #202020;
}

.component.report .small-report .open-button {
	position: absolute;
	display: block;
	top: 5px; right: 5px;
	line-height: 20px; width: 20px;
	text-align: center;
	border-radius: 3px;
	text-decoration: none;
	color: white;
	background: black;
	z-index: 1;
}

.color1 .component.report .small-report .open-button { background: #510816; }
.color2 .component.report .small-report .open-button { background: #0c0d44; }
.color3 .component.report .small-report .open-button { background: #b17a00; }
.color4 .component.report .small-report .open-button { background: #310948; }
.color5 .component.report .small-report .open-button { background: #24500a; }
.color6 .component.report .small-report .open-button { background: #004948; }
.color7 .component.report .small-report .open-button { background: #401b13; }

.component.report .small-report h4 {
	position: relative;
	overflow: hidden;
	margin: 0;
	padding: 0 10px;
	font-size: 14px;
	line-height: 30px;
	border-bottom: solid 1px #202020;
	background: #0A0A0A;
	font-weight: normal;
	cursor: pointer;
}

.component.report .small-report .content {
	display: none;
	padding: 6px 8px;
	line-height: 140%;
	text-align: justify;
	color: #efefef;
}

.component.report .small-report .content p { margin: 0; }
.component.report .small-report .content hr {
	border: none; background: none;
	border-bottom: dashed 1px #202020;
	margin: 5px 0;
}

.component.report .small-report .content a {
	color: white;
}

.component.report .small-report .footer {
	display: none;
	margin: 0;
	padding: 0 10px;
	line-height: 18px;
	padding: 5px 5px;
	border-top: solid 1px #202020;
	font-style: italic;
	text-align: right;
	color: #CCC;
}

.component.report .small-report .footer a { color: #CCC; }
.component.report .small-report.open .content { display: block; }
.component.report .small-report.open .footer  { display: block; }

.component.report .commander {
	position: relative;
	display: block;
	margin: 10px; padding: 8px 0 8px 72px;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	background: black;
	color: white;
}

.component.report .commander img {
	position: absolute;
	top: 5px; left: 5px;
	padding: 8px; width: 40px;
	border: solid 1px #202020;
	background: #0A0A0A;
	border-radius: 100%;
}

.component.report .commander strong {
	display: block;
	padding: 0 0 8px 0;
	color: white;
	font-weight: bold;
	font-size: 17px;
}

.component.report .commander em {
	display: block;
	line-height: 20px;
	color: white;
	font-style: normal;
	color: #efefef;
}

.component.report .commander em .bonus {
	font-size: 90%;
	margin: 2px 0 0 2px;
	padding: 3px 6px;
}

.component.report .dammage {
	margin: 10px;
	background: black;
}

.component.report .dammage table {
	width: 100%;
	border-collapse: collapse;
	border-left: solid 1px #202020;
	border-right: solid 1px #202020;
}

.component.report .dammage td {
	border-color: #202020;
	border-width: 1px;
	border-style: solid dashed;
	padding: 4px;
	vertical-align: center;
	text-align: center;
	color: #CCC;
	width: 28px; height: 22px;
}

.component.report .dammage td:first-child {
	text-align: left;
	padding: 4px 8px;
	width: auto;
}

.component.report .dammage td span {
	display: inline-block;
	background: red;
	line-height: 22px; width: 22px;
	border-radius: 3px;
	color: white;
}

.color1 .component.report .dammage td span { background: #510816; }
.color2 .component.report .dammage td span { background: #0c0d44; }
.color3 .component.report .dammage td span { background: #b17a00; }
.color4 .component.report .dammage td span { background: #310948; }
.color5 .component.report .dammage td span { background: #24500a; }
.color6 .component.report .dammage td span { background: #004948; }
.color7 .component.report .dammage td span { background: #401b13; }

/* composant topic */
.component.topic .topic {
	display: block;
	position: relative;
	margin: 10px;
	background: black;
	border: solid 1px #202020;
	border-left: solid 5px #4F4F4F;
	color: white;
	text-decoration: none;
}

.color1 .component.topic .topic.new { border-left: solid 5px #b01e2d; }
.color2 .component.topic .topic.new { border-left: solid 5px #2f23c0; }
.color3 .component.topic .topic.new { border-left: solid 5px #ffdb0f; }
.color4 .component.topic .topic.new { border-left: solid 5px #a935c7; }
.color5 .component.topic .topic.new { border-left: solid 5px #57c632; }
.color6 .component.topic .topic.new { border-left: solid 5px #05bed7; }
.color7 .component.topic .topic.new { border-left: solid 5px #ac5832; }

.component.topic .topic strong {
	display: inline-block;
	padding: 7px 10px;
}

.component.topic .topic .button {
	position: absolute;
	display: block;
	top: 5px; right: 5px;
	line-height: 20px;
	padding: 0 5px;
	text-align: center;
	border-radius: 3px;
}

.color1 .component.topic .topic .button { background: #510816; }
.color2 .component.topic .topic .button { background: #0c0d44; }
.color3 .component.topic .topic .button { background: #b17a00; }
.color4 .component.topic .topic .button { background: #310948; }
.color5 .component.topic .topic .button { background: #24500a; }
.color6 .component.topic .topic .button { background: #004948; }
.color7 .component.topic .topic .button { background: #401b13; }

.component.topic .message {
	position: relative;
	padding: 0 0 0 80px; margin: 10px;
	min-height: 70px;
}

.component.topic .message .avatar {
	position: absolute;
	top: 0; left: 0;
	width: 56px;
	padding: 6px;
	border: solid 1px #202020;
	border-radius: 100%;
	background: black;
}

.component.topic .message .content {
	position: relative;
	background: black;
	border: solid 1px #202020;
	border-bottom: solid 1px #0A0A0A;
}

.component.topic .message .content:before {
	position: absolute;
	content: '';
	top: 25px; left: -18px;
	border-style: solid;
	border-width: 9px;
	border-color: transparent #202020 transparent transparent;
}
.component.topic .message.write .content:before {
	left: -17px;
	border-color: transparent white transparent transparent;
}

.component.topic .message .content .text {
	margin: 0; padding: 10px 10px 12px 10px;
	border-bottom: solid 1px #0A0A0A;
	color: #efefef;
}

.component.topic .message .content .text a,
.component.topic .message .content .text strong {
	color: white;
}

.component.topic .message .content .text a.color1 { color: #b01e2d; }
.component.topic .message .content .text a.color2 { color: #2f23c0; }
.component.topic .message .content .text a.color3 { color: #ffdb0f; }
.component.topic .message .content .text a.color4 { color: #a935c7; }
.component.topic .message .content .text a.color5 { color: #57c632; }
.component.topic .message .content .text a.color6 { color: #05bed7; }
.component.topic .message .content .text a.color7 { color: #ac5832; }

.component.topic .message .content .text .icon-color {
	width: 15px;
}

.component.topic .message .content .footer {
	margin: 0; padding: 6px 10px;
	text-align: right;
	font-size: 12px;
	color: #CCC;
}

.component.topic .message .content .footer a {
	color: #CCC;
}

.component.topic .message.write .content textarea {
	border: none; padding: 5px;
	width: 487px; height: 150px;
	max-width: 487px; min-width: 487px;
	min-height: 50px;
	font-family: 'Trebuchet MS', sans-serif;
	font-size: 13px;
}

.component.topic .message.write .content input {
	margin: 6px;
}

.component.topic .message.write .content .title {
	border: none;
	margin: 12px 0 12px 0; padding: 5px;
	width: 487px; height: 30px;
	font-family: 'Trebuchet MS', sans-serif;
	font-size: 13px;
}

.component.memorial blockquote {
	font-size: 22px;
	margin: 30px 15px 0 30px;
	line-height: 160%;
	font-weight: bold;
	text-align: center;
}

/* panel-info */

.component.panel-info h4 {
	font-size: 20px;
}

.component.panel-info .remove-info {
	display: block;
	position: absolute;
	top: 2px; right: 10px;
	line-height: 20px; width: 20px;
	text-align: center;
	text-decoration: none;
	color: white;
	border-radius: 3px;
}
.color1 .component.panel-info .remove-info { background: #510816; }
.color2 .component.panel-info .remove-info { background: #0c0d44; }
.color3 .component.panel-info .remove-info { background: #b17a00; }
.color4 .component.panel-info .remove-info { background: #310948; }
.color5 .component.panel-info .remove-info { background: #24500a; }
.color6 .component.panel-info .remove-info { background: #004948; }
.color7 .component.panel-info .remove-info { background: #401b13; }

.component.panel-info .table {
	margin: 10px;
}

.component.panel-info .table table {
	width: 100%;
	text-align: right;
	border-collapse: collapse;
	background: black;
}

.component.panel-info .table td {
	border: solid 1px #202020;
	padding: 6px 8px;
}
.component.panel-info .table tr.small-grey {
	background: #0A0A0A;
}
.component.panel-info .table tr.active td {
	background: #0A0A0A;
	border-bottom: solid 1px #4F4F4F;
}

.component.panel-info .table .icon-color {
	width: 12px;
}

.component.panel-info .illu {
	margin: 0 10px;
	box-shadow: inset 0 0 5px black;
}

.component.panel-info .skill-box {
	position: relative;
	margin: 0 10px; padding: 5px 10px;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	background: black;
}
.component.panel-info .skill-box.grey {
	border-left: solid 10px #4F4F4F !important;
}

.component.panel-info .skill-box .label { display: block; }
.component.panel-info .skill-box .value {
	display: block;
	font-size: 18px;
	font-weight: bold;
	margin: 4px 0 0 0;
}
.component.panel-info .skill-box .value .icon-color {
	width: 18px;
}

.component.panel-info .skill-box .progress-bar {
	margin: 6px 0 2px 0;
}

/* player */

.component.player .player {
	position: relative;
	display: inline-block;
	margin: 10px 0 0 10px;
	width: 211px; height: 58px;
	padding: 5px 5px 5px 70px;
	border: solid 1px #0A0A0A;
	border-top: solid 1px #202020;
	background: black;
}

.component.player.rank .player {
	border-left: solid 10px red;
	width: 190px;
}
.component.player.rank .player.color1 { border-left-color: #b01e2d; }
.component.player.rank .player.color2 { border-left-color: #2f23c0; }
.component.player.rank .player.color3 { border-left-color: #ffdb0f; }
.component.player.rank .player.color4 { border-left-color: #a935c7; }
.component.player.rank .player.color5 { border-left-color: #57c632; }
.component.player.rank .player.color6 { border-left-color: #05bed7; }
.component.player.rank .player.color7 { border-left-color: #ac5832; }
.component.player.rank .player .position {
	display: block;
	position: absolute;
	top: -10px; right: -10px;
	border: solid 1px #202020;
	background: black;
	width: 30px; height: 30px; line-height: 30px;
	text-align: center;
	border-radius: 100%;
}

.component.player .player img {
	position: absolute;
	top: 5px; left: 5px;
	width: 50px; padding: 4px;
	border: solid 1px #202020;
	border-radius: 100%;
	background: black;
}

.component.player .player span,
.component.player .player strong {
	display: block;
	line-height: 20px;
}

.component.player .player strong {
	font-size: 18px;
}

.component.player .player .online,
.component.player .player .inactive {
	position: absolute;
	width: 18px; height: 18px;
	background: white;
	top: 5px; right: 5px;
	border-radius: 100%;
}
.color1 .component.player .player .online { background: #b01e2d; }
.color2 .component.player .player .online { background: #2f23c0; }
.color3 .component.player .player .online { background: #ffdb0f; }
.color4 .component.player .player .online { background: #a935c7; }
.color5 .component.player .player .online { background: #57c632; }
.color6 .component.player .player .online { background: #05bed7; }
.color7 .component.player .player .online { background: #ac5832; }

.component.player .player .inactive {
	background: #4F4F4F;
}

/* TRANSACTION */

.component.transaction .transaction {
	background: #0A0A0A;
	border: solid 1px #202020;
	margin: 10px;
}

.component.transaction .transaction .product {
	position: relative;
	height: 70px;
	padding: 5px 10px 5px 55px;
	cursor: pointer;
}

.component.transaction .transaction .product .picto {
	position: absolute;
	top: 5px; left: -20px;
	width: 60px; height: 60px;
	padding: 4px;
	background: black;
	border: solid 1px #202020;
	border-radius: 100%;
}

.component.transaction .transaction .product .rate {
	position: absolute;
	bottom: 5px; right: 8px;
}

.component.transaction .transaction .product .offer {
	overflow: hidden;
	height: 32px;
}

.component.transaction .transaction.resources .product .offer {
	font-size: 28px;
	font-weight: bold;
	line-height: 30px;
}
.component.transaction .transaction.resources .product .offer .icon-color {
	width: 20px;
	position: relative; top: -5px;
}
.component.transaction .transaction.commander .product .offer strong,
.component.transaction .transaction.ship .product .offer strong {
	display: block;
	font-size: 14px;
}
.component.transaction .transaction.commander .product .offer em,
.component.transaction .transaction.ship .product .offer em {
	display: block;
	font-size: 11px;
}

.component.transaction .transaction .product .for {
	position: relative;
	border-top: solid 1px #202020;
	margin: 8px 0 6px 0;
	color: #4F4F4F;
}

.component.transaction .transaction .product .for span {
	display: block;
	position: absolute;
	top: -10px; left: 10px;
	background: #0A0A0A;
	padding: 0 10px;
	font-size: 12px;
}

.component.transaction .transaction .product .price {
	font-size: 19px;
	font-weight: bold;
}
.component.transaction .transaction .product .price .icon-color {
	width: 14px;
	position: relative; top: -2px;
	padding: 1px;
}

.component.transaction .transaction .hidden {
	display: none;
}

.component.transaction .transaction .info {
	position: relative;
	border-top: solid 1px #202020;
	height: 72px;
}

.component.transaction .transaction .info p {
	font-size: 11px;
	margin: 5px 8px;
}

.component.transaction .transaction .info .seller {
	position: absolute;
	top: 0; width: 50%; bottom: 0;
}

.component.transaction .transaction .info .seller a {
	font-weight: bold;
	color: white;
}

.component.transaction .transaction .info .seller .color1 { color: #b01e2d; }
.component.transaction .transaction .info .seller .color2 { color: #2f23c0; }
.component.transaction .transaction .info .seller .color3 { color: #ffdb0f; }
.component.transaction .transaction .info .seller .color4 { color: #a935c7; }
.component.transaction .transaction .info .seller .color5 { color: #57c632; }
.component.transaction .transaction .info .seller .color6 { color: #05bed7; }
.component.transaction .transaction .info .seller .color7 { color: #ac5832; }


.component.transaction .transaction .info .price-detail {
	position: absolute;
	top: 0; width: 50%; bottom: 0; right: 0;
}

.component.transaction .transaction .info .price-detail p {
	text-align: right;
}

.component.transaction .transaction .info .price-detail p .icon-color {
	width: 10px;
	padding: 1px;
}

.component.transaction .transaction .info .price-detail p span {
	color: #4F4F4F;
}

.component.transaction .transaction .button {
	border-top: solid 1px #202020;
	padding: 5px;
}

.component.transaction .transaction .button a,
.component.transaction .transaction .button span {
	display: block;
	padding: 5px 10px;
	text-align: right;
	color: white;
	text-decoration: none;
	border-radius: 3px;
	line-height: 20px;
	background: #202020;
	box-shadow: inset 0 0 2px black;
}
.component.transaction .transaction .button a:hover { box-shadow: inset 0 0 6px black; }
.color1 .component.transaction .transaction .button a { background: #6e161b; }
.color2 .component.transaction .transaction .button a { background: #1f1471; }
.color3 .component.transaction .transaction .button a { background: #dbb200; }
.color4 .component.transaction .transaction .button a { background: #5a1072; }
.color5 .component.transaction .transaction .button a { background: #2c7915; }
.color6 .component.transaction .transaction .button a { background: #076b87; }
.color7 .component.transaction .transaction .button a { background: #67331d; }
.color1 .component.transaction .transaction .button a:hover { background: #b01e2d; }
.color2 .component.transaction .transaction .button a:hover { background: #2f23c0; }
.color3 .component.transaction .transaction .button a:hover { background: #ffdb0f; }
.color4 .component.transaction .transaction .button a:hover { background: #a935c7; }
.color5 .component.transaction .transaction .button a:hover { background: #57c632; }
.color6 .component.transaction .transaction .button a:hover { background: #05bed7; }
.color7 .component.transaction .transaction .button a:hover { background: #ac5832; }
.component.transaction .transaction .button span {
	background: #202020;
	cursor: default;
}
.component .build-item.disable .button span {
	color: #696969;
}
.component.transaction .transaction .button .icon-color {
	width: 14px;
}

.component.transaction .new-transaction {
	width: 279px;
	position: absolute;
	background: black;
	z-index: 1;
	padding: 10px;
}
.color1 .component.transaction .new-transaction { border-bottom: solid 1px #b01e2d; }
.color2 .component.transaction .new-transaction { border-bottom: solid 1px #2f23c0; }
.color3 .component.transaction .new-transaction { border-bottom: solid 1px #ffdb0f; }
.color4 .component.transaction .new-transaction { border-bottom: solid 1px #a935c7; }
.color5 .component.transaction .new-transaction { border-bottom: solid 1px #57c632; }
.color6 .component.transaction .new-transaction { border-bottom: solid 1px #05bed7; }
.color7 .component.transaction .new-transaction { border-bottom: solid 1px #ac5832; }

.component.transaction .new-transaction label {
	position: relative;
	display: block;
	padding: 5px 0;
}

.component.transaction .new-transaction label input {
	display: block;
	padding: 5px 10px; margin: 5px 0 0 0;
	width: 259px;
	border: none;
}

.component.transaction .new-transaction.resources label input {
	font-size: 16px;
	color: #202020;
	font-weight: bold;
}

.component.transaction .new-transaction .indicator {
	position: relative;
	display: block;
	width: 100%; height: 15px;
}

.component.transaction .new-transaction .indicator span {
	position: absolute;
	display: inline-block;
	background: #202020;
	padding: 1px 6px;
	font-size: 12px;
	color: white;
	border-radius: 3px;
	top: -5px;
}
.color1 .component.transaction .new-transaction .indicator span { background: #510816; }
.color2 .component.transaction .new-transaction .indicator span { background: #0c0d44; }
.color3 .component.transaction .new-transaction .indicator span { background: #b17a00; }
.color4 .component.transaction .new-transaction .indicator span { background: #310948; }
.color5 .component.transaction .new-transaction .indicator span { background: #24500a; }
.color6 .component.transaction .new-transaction .indicator span { background: #004948; }
.color7 .component.transaction .new-transaction .indicator span { background: #401b13; }
.component.transaction .new-transaction .indicator span.min-price { left: 5px; }
.component.transaction .new-transaction .indicator span.max-price { right: 5px;}

/***********************************/
/*********** BASES STYLE ***********/
/***********************************/

.component .info-building {
	margin: 10px; padding: 0;
	font-size: 13px;
	border-top: solid 1px #4F4F4F;
}
.component .info-building h4 { margin: 10px; }
.component .info-building p { font-size: 13px; }

/***********************************/
/*********** PARAM STYLE ***********/
/***********************************/

.component.params .checkbox {
	display: block;
	position: relative;
	padding: 10px 10px 10px 40px;
	margin: 10px;
	background: rgba(0, 0, 0, .8);
}

.component.params .checkbox input {
	position: absolute;
	top: 8px; left: 10px;
}

/****** NAV & OPTION *****/

#map-option {
	z-index: 1000;
	position: absolute;
	display: inline-block;
	height: 32px;
	padding: 3px 0;
	background: url('src/desktop/map/bOption.png') repeat-x;
	top: 30px; right: 20px;
}

#map-option:before {
	content: '';
	position: absolute;
	display: block;
	left: -10px; top: 0;
	height: 38px; width: 10px;
	background: url('src/desktop/map/bLeftOption.png');
}
#map-option:after {
	content: '';
	position: absolute;
	display: block;
	right: -10px; top: 0;
	height: 38px; width: 10px;
	background: url('src/desktop/map/bRightOption.png');
}
#map-option a {
	position: relative;
	display: inline-block;
	height: 30px; width: 30px;
	margin: 1px 0 1px 1px;
	background: #0A0A0A;
}
#map-option a img {
	position: absolute;
	top: 5px; left: 5px;
	width: 22px;
}
#map-option a.active {
	background: #004948;
}

/****** CONTENT *****/
#map-content {
	z-index: 1000;
	position: absolute;
	top: 80px; right: 20px;
	display: block;
}

#map-content .mini-map {
	position: relative; 
	width: 300px; height: 300px;
	overflow: hidden;
	border: solid 1px #202020;
	background: url('src/desktop/map/common/galaxy.jpg') no-repeat #0A0A0A;
}

#map-content .mini-map polygon {
	stroke: white;
	stroke-width: .5px;
	opacity: 0.3;
}

#map-content .mini-map polygon:focus,
#map-content .mini-map polygon:hover {
	opacity: 0.1;
	cursor: pointer;
}

#map-content .mini-map polygon.ally0 { fill: #202020; }
#map-content .mini-map polygon.ally1 { fill: #6e161b; }
#map-content .mini-map polygon.ally2 { fill: #1f1471; }
#map-content .mini-map polygon.ally3 { fill: #dbb200; }
#map-content .mini-map polygon.ally4 { fill: #5a1072; }
#map-content .mini-map polygon.ally5 { fill: #2c7915; }
#map-content .mini-map polygon.ally6 { fill: #076b87; }
#map-content .mini-map polygon.ally7 { fill: #67331d; }

#map-content .mini-map .number {
	position: absolute;
	z-index: 600;
	top: 0; left: 0;
}
#map-content .mini-map .sectors {
	z-index: 500;
	position: absolute;
	top: 0; left: 0;
}
#map-content .mini-map .bases {
	z-index: 400;
	position: absolute;
	top: 0; left: 0;
}

#map-content .mini-map .bases circle {
	fill: rgba(255, 255, 255, 0.2);
	stroke: white;
}

#map-content .mini-map .viewport {
	position: absolute;
	top: 0; left: 0;
	background: rgba(255, 255, 255, .1);
	border: solid 1px white;
	border-radius: 3px;
}

#map-content .mini-map .number span {
	position: absolute;
	color: rgba(255, 255, 255, .8);
	font-size: 11px;
}

/****** MOVERS *****/
.map-movers {
	display: block;
	position: absolute;
	z-index: 900;
	background-repeat: no-repeat;
	background-position: center;
}

.map-movers:hover, 
.map-movers:focus { background-color: rgba(255, 255, 255, .05); }
#mapToTop {
	height: 60px; width: 100%;
	top: 0; left: 0;
	background-image: url('src/desktop/mover/top.png');
}
#mapToRight {
	width: 60px; height: 100%;
	top: 0; right: 0;
	background-image: url('src/desktop/mover/right.png');
}
#mapToBottom {
	height: 60px; width: 100%;
	bottom: 0; left: 0;
	background-image: url('src/desktop/mover/bottom.png');
}
#mapToLeft {
	width: 60px; height: 100%;
	top: 0; left: 0;
	background-image: url('src/desktop/mover/left.png');
}

/****** COORDBOX *****/
#coord-box {
	z-index: 1000;
	position: absolute;
	bottom: 20px; right: 20px;
	width: 80px;
	padding: 5px 10px;
	background: rgba(0, 0, 0, .8);
	color: white;
	font-size: 20px;
	text-align: center;
}

/****** ACTION *****/
#action-box {
	display: block;
	z-index: 1100;
	position: absolute;
	width: 100%; height: 300px;
	bottom: -300px; left: 0;
	border-top: solid 1px #0A0A0A;
	background: black;
	box-shadow: 0 0 15px black;
}

#action-box .header {
	position: relative;
	background: black;
	border-bottom: solid 1px #202020;
	height: 36px;
	color: #EFEFEF;
}

#action-box .header ul {
	list-style: none inset;
	margin: 0; padding: 0;
}

#action-box .header ul li {
	display: inline-block;
	line-height: 36px;
	padding: 0 10px;
	color: #CCC;
	border-right: solid 1px #202020;
}

#action-box .header ul li a {
	display: inline-block;
	line-height: 24px;
	margin: 3px 0; padding: 0 6px;
	text-decoration: none;
	color: #CCC;
	background: #0A0A0A;
	border: solid 1px #202020;
	border-right: none;
	color: #8F8F8F;
}
#action-box .header ul li a:first-child { border-radius: 3px 0 0 3px; }
#action-box .header ul li a:last-child  {
	border-right: solid 1px #202020;
	border-radius: 0 3px 3px 0;
}

#action-box .header ul li a:hover,
#action-box .header ul li a:focus {
	background: #202020;
	color: white;
}

#action-box .header ul li a.active { 
	color: white;
	position: relative;
	z-index: 1;
}
.color1 #action-box .header ul li a.active { background: #510816; }
.color2 #action-box .header ul li a.active { background: #0c0d44; }
.color3 #action-box .header ul li a.active { background: #b17a00; }
.color4 #action-box .header ul li a.active { background: #310948; }
.color5 #action-box .header ul li a.active { background: #24500a; }
.color6 #action-box .header ul li a.active { background: #004948; }
.color7 #action-box .header ul li a.active { background: #401b13; }

#action-box .header ul li img {
	position: relative;
	top: 5px;
	width: 20px;
	border-radius: 100%;
}

#action-box .header .button {
	position: absolute;
	top: 7px; right: 10px;
	line-height: 22px; width: 22px;
	text-align: center;
	background: #202020;
	border-radius: 3px;
	text-decoration: none;
	text-transform: uppercase;
	color: white;
}

#action-box .header .button:focus,
#action-box .header .button:hover {
	background: #4F4F4F;
}


#action-box .body {
	position: relative;
	overflow: hidden;
	width: 100%; height: 263px;
	background: url('src/desktop/map/common/bLine.jpg') repeat-x center #080808;
}

#action-box .actbox-movers {
	position: absolute;
	display: block;
	width: 60px;
	height: 263px;
	z-index: 1103;

	-moz-transition: all linear 100ms;
	-webkit-transition: all linear 100ms;
	-ms-transition: all linear 100ms;
	-o-transition: all linear 100ms;
	transition: all linear 100ms;
}

#action-box .actbox-movers:hover, #action-box .actbox-movers:focus { background-color: rgba(255, 255, 255, .05); }
#action-box .actbox-movers:active { background-color: rgba(255, 255, 255, .15); }

#action-box .actbox-movers#actboxToLeft { background: url('src/desktop/mover/left.png') no-repeat center; }
#action-box .actbox-movers#actboxToRight {
	top: 0; right: 0;
	background: url('src/desktop/mover/right.png') no-repeat center;
}

#action-box .body .system {
	position: absolute;
	top: 0; left: 0;
	height: 263px;
	width: 3000px;
}

#action-box .body .system ul {
	display: inline-block;
	list-style: none inset;
	margin: 0; padding: 0;
}

#action-box .body .system ul li {
	display: inline-block;
}
#action-box .body .system ul li.place a,
#action-box .body .system ul li.action {
	width: 100px; height: 260px;
	border-top: solid 3px white;
	position: relative;
}
#action-box .body .system ul li.place.color1 a, #action-box .body .system ul li.action.color1 { border-top-color: #b01e2d; }
#action-box .body .system ul li.place.color2 a, #action-box .body .system ul li.action.color2 { border-top-color: #2f23c0; }
#action-box .body .system ul li.place.color3 a, #action-box .body .system ul li.action.color3 { border-top-color: #ffdb0f; }
#action-box .body .system ul li.place.color4 a, #action-box .body .system ul li.action.color4 { border-top-color: #a935c7; }
#action-box .body .system ul li.place.color5 a, #action-box .body .system ul li.action.color5 { border-top-color: #57c632; }
#action-box .body .system ul li.place.color6 a, #action-box .body .system ul li.action.color6 { border-top-color: #05bed7; }
#action-box .body .system ul li.place.color7 a, #action-box .body .system ul li.action.color7 { border-top-color: #ac5832; }

#action-box .body .system ul li.star {
	width: 300px; height: 263px;
	border-left: solid 1px #0F0F0F;
	background: url('src/desktop/map/systems/default.png') no-repeat center center;
}

#action-box .body .system ul li.place a {
	display: block;
	border-left: solid 1px #0F0F0F;
	text-align: center;
}
#action-box .body .system ul li.place a strong {
	position: absolute;
	bottom: 8px; left: 10px;
	font-size: 18px;
	font-weight: bold;
	color: white;
}
#action-box .body .system ul li.place a .land {
	position: absolute;
	z-index: 1102;
	top: 88px; left: 10px;
	width: 80px;
	border-radius: 100%;
}
#action-box .body .system ul li.place.active a .land {
	box-shadow: 0 0 0 1px #202020;
	background: #080808;
}
#action-box .body .system ul li.place a .avatar {
	position: absolute;
	z-index: 1101;
	top: 10px; left: 20px;
	padding: 7px;
	border: solid 1px #0F0F0F;
	background: black;
	width: 47px;
	border-radius: 100%;
}

#action-box .body .system ul li.action {
	width: 0px; overflow: hidden;
}
#action-box .body .system ul li.action .content {
	position: absolute;
	top: 9px; left: 12px;
	height: 240px; width: 600px;
	background: #111111;
	border: solid 1px #202020;
	box-shadow: inset 0 0 5px black;
	border-radius: 3px;
}
#action-box .body .system ul li.action .content:before {
	content: '';
	position: absolute;
	top: 107px; left: -24px;
	border-width: 12px;
	border-style: solid;
	border-color: transparent #202020 transparent transparent;
}

#action-box .body .system ul li.action .content .column {
	display: inline-block; 
	vertical-align: top;
	height: 240px;
	border-right: solid 1px #202020;
	color: white;
}

#action-box .body .system ul li.action .content .column.info  { width: 199px; }
#action-box .body .system ul li.action .content .column.fleet  {
	width:  84px;
	text-align: center;
}
#action-box .body .system ul li.action .content .column.act {
	width: 299px;
	border-right: none;
}

#action-box .body .system ul li.action .content .column p { margin: 2px 10px; }
#action-box .body .system ul li.action .content .column a { color: white; }
#action-box .body .system ul li.action .content .column hr {
	margin: 8px 10px;
	border: none; background: none;
	border-bottom: solid 1px #202020;
}
#action-box .body .system ul li.action .content .column strong {
	line-height: 30px;
}
#action-box .body .system ul li.action .content .column.info strong {
	line-height: 28px;
	font-size: 18px;
}

#action-box .body .system ul li.action .content .column .label {
	display: inline-block;
	width: 120px;
	font-size: 12px;
}
#action-box .body .system ul li.action .content .column .value {
	display: inline-block;
	width: 59px; text-align: right;
}
#action-box .body .system ul li.action .content .column.act img,
#action-box .body .system ul li.action .content .column.fleet img {
	width: 45px;
	padding: 8px;
	margin: 0 0 2px 0;
	border: solid 1px #202020;
	background: #0A0A0A;
	border-radius: 100%;
}
#action-box .body .system ul li.action .content .column .left {
	float: left; width: 63px;
	margin: 2px 10px;
}
#action-box .body .system ul li.action .content .column .right {
	margin: 2px 0 2px 80px;
}
#action-box .body .system ul li.action .content .column.act img { position: relative; top: -2px; }

#action-box .body .system ul li.action .content .column .act-bull {
	position: relative;
	height: 200px;
	background: black;
	border-radius: 3px;
}
#action-box .body .system ul li.action .content .column .act-bull:before {
	content: '';
	position: absolute;
	left: -22px;
	border-style: solid;
	border-width: 12px;
	border-color: transparent black transparent transparent;
}
#action-box .body .system ul li.action .content .column .act-bull:nth-child(1):before { top: 20px; }
#action-box .body .system ul li.action .content .column .act-bull:nth-child(2):before { top: 88px; }
#action-box .body .system ul li.action .content .column .act-bull:nth-child(3):before { top: 156px; }

#action-box .body .system ul li.action .act-bull h5 {
	margin: 0 10px 6px 10px; padding: 6px 0 6px 0;
	border-bottom: solid 1px #202020;
}

#action-box .body .system ul li.action .content .column .act-bull  strong {
	line-height: 16px;
	font-size: 12px;
}
#action-box .body .system ul li.action .content .column .act-bull .icon-color,
#action-box .body .system ul li.action .content .column .act-bull .icon-color {
	display: inline-block;
	position: relative;
	top: 0;
	padding: 1px; margin: 0;
	border: none;
	width: 13px; height: 13px;
}

#action-box .body .system ul li.action .content .column .act-bull .commander {
	display: block;
	position: relative;
	padding: 0; margin: 0 6px;
	height: 54px;
	text-decoration: none;
	line-height: 16px;
	font-size: 12px;
}
#action-box .body .system ul li.action .content .column .act-bull .commander:focus,
#action-box .body .system ul li.action .content .column .act-bull .commander:hover {
	background: #0A0A0A;
}

#action-box .body .system ul li.action .content .column .act-bull .commander .label {
	position: absolute;
	top: 0px; left: 55px;
	display: block;
	padding: 2px 0;
	width: 150px;
}
#action-box .body .system ul li.action .content .column .act-bull .commander .value {
	position: absolute;
	top: 0px; right: 5px;
	display: block;
	padding: 2px 0;
	text-align: right;
	width: 150px;
}

#action-box .body .system ul li.action .content .column .act-bull .commander .avatar {
	position: absolute;
	top: 3px; left: 3px;
	padding: 3px;
	border-radius: 3px;
	width: 40px; height: 40px;
}

#action-box .body .system ul li.action .content .column .act-bull .rc strong {
	display: block;
	font-size: 18px;
	line-height: 22px;
}

#action-box .body .system ul li.action .content .column .act-bull .rc .icon-color {
	width: 20px; height: 20px;
}

#action-box .body .system ul li.action .content .column .act-bull .rc .button {
	display: block;
	margin: 10px;
	line-height: 32px;
	text-align: center;
	background: #0A0A0A;
	text-decoration: none;
}
#action-box .body .system ul li.action .content .column .act-bull .rc a.button:hover,
#action-box .body .system ul li.action .content .column .act-bull .rc a.button:active {
	background: #202020;
}
#action-box .body .system ul li.action .content .column .act-bull .rc span.button {
	color: #CCC;
}

#action-box .body .system ul li.action .content .column .act-bull .rc form {
	margin: 10px 0 0 0;
	width: 100%;
}
#action-box .body .system ul li.action .content .column .act-bull .rc input[type="text"] {
	width: 175px;
	border: none;
	padding: 6px 10px;
	background: white;
	border-radius: 3px;
}

/* ranking part */

#action-box .body .rank {
	position: absolute;
	top: 0; left: 0;
	height: 263px;
	width: 10000px;
	background: #0A0A0A;
}

#action-box .body .rank ul {
	display: inline-block;
	list-style: none inset;
	margin: 0 60px; padding: 0;
}

#action-box .body .rank li {
	position: relative;
	display: inline-block;
	vertical-align: top;
	border-right: solid 1px #202020;
	color: white;
	overflow: hidden;
}

#action-box .body .rank li.title {
	width: 260px; height: 223px;
	padding: 20px;
	text-align: right;
}

#action-box .body .rank li.title h2 {
	font-size: 34px;
	padding: 0; margin: 0 0 20px 0;
	font-weight: bold;
}

#action-box .body .rank li.title p {
	margin: 5px 0; padding: 0;
}

#action-box .body .rank li.item {
	width: 129px; height: 260px;
	border-top-style: solid;
	border-top-width: 3px;
	border-top-color: transparent;
}
#action-box .body .rank li.item.active {
	background: #202020;
	box-shadow: inset 0 0 5px black
}
#action-box .body .rank li.item.color1 { border-top-color: #b01e2d; }
#action-box .body .rank li.item.color2 { border-top-color: #2f23c0; }
#action-box .body .rank li.item.color3 { border-top-color: #ffdb0f; }
#action-box .body .rank li.item.color4 { border-top-color: #a935c7; }
#action-box .body .rank li.item.color5 { border-top-color: #57c632; }
#action-box .body .rank li.item.color6 { border-top-color: #05bed7; }
#action-box .body .rank li.item.color7 { border-top-color: #ac5832; }

#action-box .body .rank li.item .avatar {
	margin: 5px 0;
	text-align: center;
}

#action-box .body .rank li.item .avatar img {
	padding: 6px;
	width: 70px; border: solid 1px #202020;
	background: black;
	border-radius: 100%;
}
#action-box .body .rank li.item.color1 .avatar.faction img { background: #510816; }
#action-box .body .rank li.item.color2 .avatar.faction img { background: #0c0d44; }
#action-box .body .rank li.item.color3 .avatar.faction img { background: #b17a00; }
#action-box .body .rank li.item.color4 .avatar.faction img { background: #310948; }
#action-box .body .rank li.item.color5 .avatar.faction img { background: #24500a; }
#action-box .body .rank li.item.color6 .avatar.faction img { background: #004948; }
#action-box .body .rank li.item.color7 .avatar.faction img { background: #401b13; }

#action-box .body .rank li.item .text {
	margin: 5px 10px 10px 10px;
}

#action-box .body .rank li.item .text span,
#action-box .body .rank li.item .text strong {
	display: block;
}

#action-box .body .rank li.item .text strong {
	font-size: 18px;
}

#action-box .body .rank .number {
	position: absolute;
	bottom: 8px; left: 10px;
	font-size: 18px;
	font-weight: bold;
	color: white;
}

/* map-commanders */

/****** MAP *****/
#map {
	position: absolute;
	z-index: 100;
	background: url('src/desktop/map/common/map.jpg') repeat black;
	padding: 0; top: 0; left: 0;
}
#map #sectors { z-index: 300; }
#map #spying { z-index: 400; }
#map #own-base { z-index: 500; }
#map #commercial-routes { z-index: 600; }
#map #fleet-movements { z-index: 700; }
#map #attacks { z-index: 800; }
#map #systems { z-index: 900; }
#map #map-info { z-index: 910; }

#map > div {
	position: absolute;
	top: 0; left: 0;
	width: 100%; height: 100%;
	overflow: hidden;
}

#map #sectors polygon {
	stroke: white;
	stroke-width: 1px;
	stroke-dasharray: 4 4;
	opacity: 0.15;
}

#map #sectors .ally1 { fill: #6e161b; }
#map #sectors .ally2 { fill: #1f1471; }
#map #sectors .ally3 { fill: #dbb200; }
#map #sectors .ally4 { fill: #5a1072; }
#map #sectors .ally5 { fill: #2c7915; }
#map #sectors .ally6 { fill: #076b87; }
#map #sectors .ally7 { fill: #67331d; }

#map #spying circle { 
	opacity: 0.08;
	stroke: white;
}

.color1 #map #spying circle { fill: #6e161b; }
.color2 #map #spying circle { fill: #1f1471; }
.color3 #map #spying circle { fill: #dbb200; }
.color4 #map #spying circle { fill: #5a1072; }
.color5 #map #spying circle { fill: #2c7915; }
.color6 #map #spying circle { fill: #076b87; }
.color7 #map #spying circle { fill: #67331d; }

#map #own-base circle {
	opacity: 0.1;
	fill: white;
}

#map #commercial-routes line {
	stroke: white;
	stroke-width: 1px;
	stroke-dasharray: 20 5 5 5 5 10;
}

#map #commercial-routes line.standBy {
	stroke: rgba(255, 255, 255, .3);
}

#map #fleet-movements line {
	stroke-width: 1px;
}
.color1 #map #fleet-movements line { stroke: #b01e2d; }
.color2 #map #fleet-movements line { stroke: #2f23c0; }
.color3 #map #fleet-movements line { stroke: #ffdb0f; }
.color4 #map #fleet-movements line { stroke: #a935c7; }
.color5 #map #fleet-movements line { stroke: #57c632; }
.color6 #map #fleet-movements line { stroke: #05bed7; }
.color7 #map #fleet-movements line { stroke: #ac5832; }

#map #attacks line {
	stroke-width: 1px;
}
#map #attacks line.color1 { stroke: #b01e2d; }
#map #attacks line.color2 { stroke: #2f23c0; }
#map #attacks line.color3 { stroke: #ffdb0f; }
#map #attacks line.color4 { stroke: #a935c7; }
#map #attacks line.color5 { stroke: #57c632; }
#map #attacks line.color6 { stroke: #05bed7; }
#map #attacks line.color7 { stroke: #ac5832; }

#map #systems a {
	display: block;
	position: absolute;
	border-radius: 100%;
}

#map #systems a.active {
	background: black;
	box-shadow: 0 0 25px 12px black;
}

#map #systems a img {
	display: block;
	width: 20px; height: 20px;
	border: none;

	border-radius: 100%;
	-moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	-ms-border-radius: 100%;
	-o-border-radius: 100%;
}

#map #systems a img.own { background: white; }

#map #systems .sector-number {
	position: absolute;
	display: block;
	font-size: 22px;
	line-height: 40px;
	width: 40px;
	text-align: center;
	border-radius: 100%;
	box-shadow: 0 0 0 5px #0A0A0A, 0 0 0 6px #4F4F4F;
	background: #202020;
	color: white;
	font-weight: bold;
	cursor: pointer;
}
#map #systems .sector-number.color1 { background: #6e161b; }
#map #systems .sector-number.color2 { background: #1f1471; }
#map #systems .sector-number.color3 { background: #dbb200; }
#map #systems .sector-number.color4 { background: #5a1072; }
#map #systems .sector-number.color5 { background: #2c7915; }
#map #systems .sector-number.color6 { background: #076b87; }
#map #systems .sector-number.color7 { background: #67331d; }

#map #systems .sector-info {
	display: none;
	position: absolute;
	color: white;
	background: black;
	background: rgba(0, 0, 0, .9);
	padding: 8px 16px;
	border-radius: 3px;
}
#map #systems .sector-info:before {
	content: '';
	position: absolute;
	left: -20px; top: 20px;
	border-style: solid;
	border-width: 10px;
	border-color: transparent black transparent transparent;
	border-color: transparent rgba(0, 0, 0, .9) transparent transparent;
}
#map #systems .sector-info h2 {
	position: relative;
	font-size: 40px;
	font-weight: bold;
	line-height: 40px;
	text-shadow: 0 0 5px black;
	margin: 0; padding: 0;
}
#map #systems .sector-info p {
	font-size: 13px;
	margin: 6px 0 0 0; padding: 0;
	font-weight: bold;
	font-variant: small-caps;
}

#map #systems .sector-info p a {
	position: static;
	display: inline-block;
	color: white;
	background: #202020;
	border-radius: 3px;
	line-height: 20px; width: 20px;
	text-align: center;
	text-decoration: none;
	border: solid 1px rgba(255, 255, 255, .5);
	margin: 0 5px 0 0;
}
#map #systems .sector-info.color1 p a { background: #6e161b; }
#map #systems .sector-info.color2 p a { background: #1f1471; }
#map #systems .sector-info.color3 p a { background: #dbb200; }
#map #systems .sector-info.color4 p a { background: #5a1072; }
#map #systems .sector-info.color5 p a { background: #2c7915; }
#map #systems .sector-info.color6 p a { background: #076b87; }
#map #systems .sector-info.color7 p a { background: #67331d; }

#map #map-info {
	display: none;
	position: absolute;
	top: 0px; right: 0px; left: auto; bottom: auto;
	height: auto; width: auto;
	margin: 40px 60px 0 0;
	color: white;
	text-align: right;
}

#map #map-info h2 {
	margin: 0; padding: 0 20px;
	font-size: 38px;
	line-height: 60px;
}

#map #map-info h3 {
	margin: 0; padding: 0 20px;
	font-size: 16px;
	font-weight: normal;
	line-height: 40px;
}

#map #map-info ul {
	margin: 10px 0; padding: 0;
	list-style: none;
}

#map #map-info ul li {
	position: relative;
	margin: 0; padding: 0 40px 0 0;
	line-height: 20px; height: 20px;
	font-style: italic;
	color: #CCC;
	font-size: 13px;
}

#map #map-info ul li img {
	position: absolute;
	right: 10px; top: 0px;
}

/* ADMIN */

.component.admin table {
	margin: 10px;
	border-collapse: collapse;
	width: 877px;
}

.component.admin table tr {
	border-bottom: solid 1px #202020;
}

.component.admin table td {
	padding: 5px 10px;
	vertical-align: top;
}

.component.admin table .button {
	display: inline-block;
	padding: 0 5px; line-height: 25px;
	min-width: 15px;
	text-align: center;
	color: white;
	border-radius: 3px;
	background : #4F4F4F;
	text-decoration: none;
}

.component.admin table td:nth-child(1) { width: 50px; }
.component.admin table td:nth-child(2) { width: 100px; }
.component.admin table td:nth-child(3) { width: auto; }
.component.admin table td:nth-child(4) { width: 80px; }