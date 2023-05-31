<!DOCTYPE html>
<html lang="en">
<head>
    <title>منظمة المتطوعيين السودانيين</title>


<!--************************************start scrollbar********************************************* -->


    <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #800CCC; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #5715a2; 
}
</style>


<!--************************************end scrollbar********************************************* -->

    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  	<script type="text/javascript" src="js/camera.js"></script>
	
    <script type="text/javascript" src="js/jquery.cookie.js"></script> 
	<script type="text/javascript" src="js/jcarousellite.js"></script>	
  	<script>
        jQuery(document).ready(function(){   
                jQuery('.camera_wrap').camera();
				jQuery('.camera_prev, .camera_next, .partners a img').animate({'opacity':'.65'},10);
				jQuery('.camera_prev, .camera_next, .partners a img').hover(
						function () {
								jQuery(this).animate({'opacity':'1'},150);
						},
						function () {
								jQuery(this).animate({'opacity':'.65'},250);
						}
				);

				//	Responsive layout, resizing the items
				$('.carousel.main ul').carouFredSel({
					auto: 4000,
					responsive: true,
					width: '102.85%',		
					scroll: 1,
				    prev: '#prev',
					next: '#next',
					pagination: false,
					mousewheel: false,
					swipe: {
						onMouse: true,
						onTouch: true
					},
					items: {
					  width:270,
					  height: 'auto',	//	optionally resize item-height
						visible: {
							min: 1,
							max: 4
						}
					}
				});

          });    
  	</script>		
  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    	<!--[if lt IE 9]>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>

<body>
<!--=============  Top (Phone, Social)  ================-->

<div class="container top">
	<div class="row">	
		<div class="span12">
			<ul class="social">
				<li>
					<a href="#" class="social_1">you tube</a>
				</li>
				<li>
					<a href="#" class="social_2">twiter</a>
				</li>
				<li>
					<a href="#" class="social_3">facebook</a>
				</li>
			</ul>
			<p>
				Call Us:  <b>1 800 123 4567</b>     Follow Us: 
			</p>
		</div>
<!--==============================login=================================-->

		<div style="float:right; " align="center">
         @include('layouts.partials.navbar')
             </div> 
             
<!--==============================login=================================-->

	</div>
</div>

<div class="bg_center">
<!--==============================Header=================================-->
<header>
    <div class="container">
    	<div class="row">
        	<div class="span7">
            	<div class="clearfix">
                    <div class="clearfix header-block-pad">
                    	<!--==============================logo=================================-->
                 <a href="main"><img src="images/logo.jpg" height="50" width="350" alt=""></a>	
                       <!--==============================logo=================================-->				
                    </div>
                </div>
            </div>
			
        	<div class="span5 ">
				<!--==============================Search=========================-->
				<form id="search-form" action="search.blade.php" method="GET" accept-charset="utf-8" class="navbar-form" >
					<input type="text" name="s"  value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''"  >
					<a href="#" onClick="document.getElementById('search-form').submit()"></a>
				</form>
			</div>   
      </div>   
    </div>
    
    <!--==============================Nav=================================-->          
    <div id="nav_section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="navbar navbar_ clearfix">
              <div class="navbar-inner navbar-inner_">
                  <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                      <div class="nav-collapse nav-collapse_ collapse">
                          <ul class="nav sf-menu">
                            <li class="active menu_item_1">
                <a href="/">
                  الصفحة الرئيسية
                </a>
              </li>
                            <li class="menu_item_2">
                <a href="about">
                  عن المنظمة
                </a>
              </li>
                            <li class="sub-menu menu_item_3">
                <a href="the-news">
                  الخدمات
                </a>
                              <ul>
                                <li>
                  <a href="the-news">
                    العروض
                  </a>
                </li>
                                <li class="sub-menu">
                  <a href="/">
                    الخدمات الرئيسية
                  </a>
                    <ul>
                    <li>
                      <a href="the-news">خططنا</a>
                    </li>
                    <li>
                      <a href="donetions">الدعم</a></li>
                    
                    
                    </ul>
                </li>
                                <li>
                     <a href="the-team">
                                       فريق العمل
                                    </a>
                </li>
                              </ul>
              </li>


                         
<!--***************************************************************************************************-->

                              <li class="sub-menu menu_item_4">
                                <a href="join">
                                    الوظائف
                                </a>
                              <ul>
                                <li>
                                    <a href="join">
                                        التطوع
                                    </a>
                                </li>
                                <li>
                                    <a href="join">
                                       الاشتراك في المنظمة
                                    </a>
                                  
                                </li>
                                <li>
                                    <a href="join">
                                       الوظائف
                                    </a>
                                </li>
                              </ul>
                            </li>

<!--***************************************************************************************************-->



							
                            <li class="menu_item_5">
								<a href="the-news">
									الاخبار
								</a>
							</li>
                            <li class="menu_item_6">
								<a href="contact">
								أرقامنا
								</a>
							</li>
							 <li class="menu_item_5">
								<a href="donetions">
                                  التبرع للمنظمة
								</a>
							</li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
<!--==============================End Nav=================================-->




</header>





	
	
<!--==============================Content=================================--> 
<section id="content" class="main-content">

  <div class="container">


<!--==============================Content=================================--> 
<p>&nbsp;</p>


@include('includes.aeed2')

 <p>&nbsp; </p>


	<!--==============================Content=================================--> 




	  <footer class="seee" style="background-color:#800CCC ;border:10px solid #800ccc; 
    border-width:5px 5px; border-radius: 1rem; ">

	 @include('includes.footer')
	</footer>


    </div> 

  </div>

</section>



</div>




<!--************************************ scroll top**********************************-->


<script> configObj = {"buttonD":"M8 17.333h5.333v4C13.333 22.806 14.527 24 16 24c1.473 0 2.667-1.194 2.667-2.667v-4H24L16 8l-8 9.333z","buttonT":"translate(-1088 -172) translate(832 140) translate(32 32) translate(224)","shadowSize":"0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)","roundnessSize":"16px","buttonDToBottom":"12px","buttonDToRight":"12px","selectedBackgroundColor":"#800080","selectedIconColor":"#ffffff","buttonWidth":"40px","buttonHeight":"40px","svgWidth":"32px","svgHeight":"32px"};function createButton(obj, pageSimulator) {    const body = document.querySelector("body");    backToTopButton = document.createElement("span");    backToTopButton.classList.add("softr-back-to-top-button");    backToTopButton.id = "softr-back-to-top-button";    pageSimulator      ? pageSimulator.appendChild(backToTopButton)      : body.appendChild(backToTopButton);    backToTopButton.style.width = obj.buttonWidth;    backToTopButton.style.height = obj.buttonHeight;    backToTopButton.style.marginRight = obj.buttonDToRight;    backToTopButton.style.marginBottom = obj.buttonDToBottom;    backToTopButton.style.borderRadius = obj.roundnessSize;    backToTopButton.style.boxShadow = obj.shadowSize;    backToTopButton.style.color = obj.selectedBackgroundColor;    backToTopButton.style.backgroundColor = obj.selectedBackgroundColor;    pageSimulator ? backToTopButton.style.position = "absolute" : backToTopButton.style.position = "fixed";    backToTopButton.style.outline = "none";    backToTopButton.style.bottom = "0px";    backToTopButton.style.right = "0px";    backToTopButton.style.cursor = "pointer";    backToTopButton.style.textAlign = "center";    backToTopButton.style.border = "solid 2px currentColor";    backToTopButton.innerHTML =      '<svg class="back-to-top-button-svg" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" > <g fill="none" fill-rule="evenodd"> <path d="M0 0H32V32H0z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> <path class="back-to-top-button-img" fill-rule="nonzero" d="M11.384 13.333h9.232c.638 0 .958.68.505 1.079l-4.613 4.07c-.28.246-.736.246-1.016 0l-4.613-4.07c-.453-.399-.133-1.079.505-1.079z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> </g> </svg>';    backToTopButtonSvg = document.querySelector(".back-to-top-button-svg");    backToTopButtonSvg.style.verticalAlign = "middle";    backToTopButtonSvg.style.margin = "auto";    backToTopButtonSvg.style.justifyContent = "center";    backToTopButtonSvg.style.width = obj.svgWidth;    backToTopButtonSvg.style.height = obj.svgHeight;    backToTopButton.appendChild(backToTopButtonSvg);    backToTopButtonImg = document.querySelector(".back-to-top-button-img");    backToTopButtonImg.style.fill = obj.selectedIconColor;    backToTopButtonSvg.appendChild(backToTopButtonImg);    backToTopButtonImg.setAttribute("d", obj.buttonD);    backToTopButtonImg.setAttribute("transform", obj.buttonT);        if(!pageSimulator) {      backToTopButton.style.display = "none";      window.onscroll = function() {        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {          backToTopButton.style.display = "block";        } else {          backToTopButton.style.display = "none";        }      };        backToTopButton.onclick = function() {        document.body.scrollTop = 0;        document.documentElement.scrollTop = 0;      };    }  };document.addEventListener("DOMContentLoaded", function() { createButton(configObj, null); });</script>


<!--************************************end scroll top**********************************-->

</body>
</html>