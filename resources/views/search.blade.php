<!DOCTYPE html>
<html lang="en">
<head>
    <title>  البحث  </title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	
    <script type="text/javascript" src="js/jquery.cookie.js"></script> 
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

		<div style="float:right;" align="center">
        <p>&nbsp;</p>
         @include('layouts.partials.navbar')
             </div> 
             
<!--==============================login=================================-->

		
	</div>
</div>

<div class="bg_center">
<!--==============================Header=================================-->

    <div class="container">
    	<div class="row">
        	<div class="span7">
            	<div class="clearfix">
                    <div class="clearfix header-block-pad">
                       <a href="index.html"><img src="images/logo.png" alt=""></a>					
                    </div>
                </div>
            </div>
			
        	<div class="span5 ">
				<!--==============================Search=========================-->
				<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
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

<!--==============================Content=================================--> 
<section id="content" >
  <div class="container divider">
    <div class="row  clearfix">
    	<div class="span12">
            <h1><span>Search result: </span></h1>
            <div id="search-results">
			
			</div>
			
			<div class="padcontent"></div>



        </div>
    </div> 


  </div>
  
</section>

</div>


<!-- {%   Footer Menu   %} -->





<!-- {%   Copyright   %} -->
<div class="container copyright">
	<div class="row">	
		<div class="span12">
				 Copyright SVO Group.&copy;  2023. All rights reserved.
		</div>
	</div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>