<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--font family-->

    
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300&display=swap" rel="stylesheet">
<!--bootstrap cdn-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
<!--bootstrap cdn end-->
 <style>
body {
  background-color: var(--primary-color);
  color: var(--secondary-color);
}

.ion-navicon{
    color: var(--secondary-color);
}
.ion-ios-search-strong{
    color: var(--secondary-color);
}  

.logo img{
  height: 60px;
   margin-left: -30px;
}
@media only screen and (max-width:991px){
  .logo img{
      margin-left:10px;
  }
}
</style>
</head>
    <body>
   <!--header area start-->
 <header class="header_area">
        <!--header container start-->
        <div class="header_container header_container_two sticky-header">
            <div class="container-fluid">
                <div class="header_container_inner  container_position">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo.png"   alt="" id="logo1"></a>
                    </div>
                    <div class="header_container_right">
                        <div class="main_menu menu_two"> 
                            <nav>  
                                  
                            </nav> 
                        </div>
                        <div class="header_block_right block_right_two">
                            <ul>
                            <li class="search_bar" style="margin-right:-25px;font-size:23px;"><a href="javascript:void(0)"><i class="ion-ios-search-strong" ></i></a>
                                </li>
                                <!--<li class="mini_cart_wrapper"><a href="javascript:void(0)">login</a></li>-->
                                <li class="setting_container"><a href="javascript:void(0)"><i class="ion-navicon"  style="font-size:25px;"></i></a>
                                </li>
                                <img src="assets/img/logo/moon.png" style="width:25px;height:35px;" id="icon">
                            
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!--header container end-->
        </div>
    </header>
    <!--header area end-->
    
      <!--Header Sidebar-->
   <div class="setting_wrapper setting_wrapper_two">
        <div class="setting_close_btn">
            <i class="ion-android-close btn-close"> </i>
        </div>
        <!-- <div class="logo">
           <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
        </div>-->

        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <nav class="navigation__nav">
                        <ul class="navigation__list">
                            <li class="navigation__item"><a href="stories.php" class="navigation__link">Stories </a></li>
                            <li class="navigation__item"><a href="shorts.php" class="navigation__link">Shorts </a></li>
                            <!--<li class="navigation__item"><a href="#" class="navigation__link"> &nbsp;&nbsp; Art &nbsp;&nbsp;</a></li>-->
                            <li class="navigation__item dv_about">  <a class="navigation__link"    href= "about-us.php"  >About</a>
                                 <?php  
                            
                                        // if($years >= '18'){
                                        //   echo ' <a class="navigation__link"    href= "about-us.php"  >About</a> ' ;
                                        // }
                                        // else{
                                        //     echo '<a class="navigation__link"    href= "index.php"  >About</a> ';
                                        // }
                                        ?></li>               
                            <!--<li class="navigation__item"><a href="#" class="navigation__link">Coffee with us</a></li>-->
                            <li class="navigation__item dv_extra"><a href="contactus.php" class="navigation__link">Contact</a></li>
                            
                        </ul>
                    </nav>
                    
                </div>

                <div class="col-lg-3 col-sm-12">
                    <ul class="#">
                            <li class="navigation__item_social"><a href="https://instagram.com/tbs.spook?utm_medium=copy_link" class="navigation__link_social">instagram </a></li>
                            <li class="navigation__item_social"><a href="https://www.reddit.com/u/spook_baby?utm_medium=android_app&utm_source=share" class="navigation__link_social">reddit</a></li>
                            <li class="navigation__item_social"><a href="https://twitter.com/atablespoonofs1?s=09" class="navigation__link_social">Twitter</a></li>
                            <li class="navigation__item_social"><a href="https://pin.it/1exJYEM" class="navigation__link_social"> pinterest</a></li>
                        </ul>
                    
                </div>
            </div>
        </div>
        
     
    </div>
    <!--Header sidebar End-->  

    <!--search overlay-->
    
    <div class="dropdown_search dropdown_search_two">
        <div class="search_close_btn">
            <i class="ion-android-close btn-close"></i>
        </div>
        <div class="search_container ">
            <form action="#">
                <input placeholder="You're looking for...." type="text">
                <button type="submit"><i class="ion-ios-search-strong"></i></button>
            </form>
        </div>
    </div>
    
    <!--search overlay end-->
    
    <!--Offcanvas menu area start-->
    
    <div class="off_canvars_overlay">
                
    </div>
    <div class="Offcanvas_menu Offcanvas_menu_two">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="canvas_open">
                <span class="search_bar search_icon"> <a  href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a></span>

                    <img src="assets/img/logo/moon.png" id="canvas"  style="width:25px;height:25px; margin-right:20px;">

                        <!--<span><a href="#">login</a></span>-->
                        <span class="navigate_icon  navi_icon "> <a href="javascript:void(0)"><i class="ion-navicon"></i></a></span>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close ">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="header_block_right block_right_two">
                            <!-- <ul>
                                <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <div class="search_close_btn">
                                            <i class="ion-android-close btn-close"></i>
                                        </div>
                                        <div class="search_container">
                                            <form action="#">
                                                <input placeholder="I’m shopping for..." type="text">
                                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="mini_cart_wrapper"><a href="javascript:void(0)">login</a>
                                </li>
                                <li class="setting_container"><a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                                    <div class="setting_wrapper setting_wrapper_two">
                                        <div class="setting_close_btn">
                                            <i class="ion-android-close btn-close"></i>
                                        </div>
                                        
                                        
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <nav class="navigation__nav ">
                                    <ul class="navigation__list" style="margin-top:-10px;">
                                        <li class="navigation__item"><a href="stories.php" class="navigation__link">stories</a></li>
                                        <li class="navigation__item"><a href="shorts.php" class="navigation__link">shorts</a></li>
                                       <!-- <li class="navigation__item"><a href="#" class="navigation__link">&nbsp;&nbsp;Art&nbsp;&nbsp;</a></li>-->
                                
                                        <li class="navigation__item extra">  
                                        <a class="navigation__link"    href= "about-us.php"  >About</a> 
                                        <?php  
                                        // if($years >= '18'){
                                        //   echo ' <a class="navigation__link"    href= "about-us.php"  >About</a> ' ;
                                        // }
                                        // else{
                                        //     echo '<a class="navigation__link"    href= "index.php"  >About</a> ';
                                        // }
                                        ?>
                                        </li>
                                       <!-- <li class="navigation__item"><a href="#" class="navigation__link">Contact us</a></li>-->
                            <li class="navigation__item"><a href="contactus.php" class="navigation__link">Contact Us </a></li>
                                        
                                    </ul>
                                </nav>
                                
                            </ul>
                        </div>

                        

                        <div class="Offcanvas_footer">
                        <!-- <span><a href="#"><i class="fa fa-envelope-o"></i>                        info@yourdomain.com</a></span> -->
                         <ul>
                                <li class="instagram    "><a href="https://instagram.com/tbs.spook?utm_medium=copy_link">instagram</a></li>
                                <li class="pinterest"><a class= "ml-90" href="https://pin.it/1exJYEM">pintrest</a></li><br><br>
                                <li class="redit"><a href="https://www.reddit.com/u/spook_baby?utm_medium=android_app&utm_source=share">reddit</a></li>
                                <li class="twitter"><a class= "ml-90" href="https://twitter.com/atablespoonofs1?s=0">twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS ============================================ -->

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
    var icon = document.getElementById("icon");
    icon.onclick = function()
    {
        document.body.classList.toggle("dark-theme")
        if(document.body.classList.contains("dark-theme")){
            icon.src= "assets/img/logo/sun.png";
            logo1.src="assets/img/logo/White-logo.png";
			logo2.src="assets/img/logo/White-logo.png";

        } else{
            icon.src= "assets/img/logo/moon.png";
            logo1.src="assets/img/logo/logo.png";
			logo2.src="assets/img/logo/logo.png";
        }
    }
  
    var canvas = document.getElementById("canvas");
    canvas.onclick = function()
    {
        document.body.classList.toggle("dark-theme")
        if(document.body.classList.contains("dark-theme")){
            canvas.src= "assets/img/logo/sun.png";
            logo1.src="assets/img/logo/White-logo.png";
			logo2.src="assets/img/logo/White-logo.png";

        } else{
            canvas.src= "assets/img/logo/moon.png";
            logo1.src="assets/img/logo/logo.png";
			logo2.src="assets/img/logo/logo.png";
        }
    }
    </script>
    
    </body>