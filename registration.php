<?php session_start();

    if(!isset($_GET['contactName'])){
        $_GET['contactName']="";
    }
    if(!isset($_GET['contactPhone'])){
        $_GET['contactPhone']="";
    }
    if(!isset($_GET['contactEmail'])){
        $_GET['contactEmail']="";
    }
    if(!isset($_GET['contactCollege'])){
        $_GET['contactCollege']="";
    }

    if(isset($_GET['Submit'])){
	// code for check server side validation

	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_GET['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		 	
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";
        header("Location: php/entry.php?".$_SERVER['QUERY_STRING']);
	}
  
}	
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="matx no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration</title>
        <meta name="description" content="Material Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- matx favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="matx-icon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="matx-icon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="matx-icon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="matx-icon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="matx-icon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="matx-icon/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="matx-icon/favicon-32x32.png" sizes="32x32"/>
        <link rel="icon" type="image/png" href="matx-icon/favicon-16x16.png" sizes="16x16"/>
        <meta name="application-name" content="&nbsp;" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="matx-icon/mstile-144x144.png"/>
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700italic,700,500italic,900' rel='stylesheet' type='text/css'>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/mdl/material.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="assets/libs/sweetalert/sweet-alert.min.css">
        <link rel="stylesheet" href="assets/libs/sweetalert/ie9.css">
        <link rel="stylesheet" href="assets/css/common.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <link rel="stylesheet" type="text/css" href="assets/libs/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="assets/libs/revolution/fonts/font-awesome/css/font-awesome.min.css">
        
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/layers.css">
            
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/navigation.css">

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    




        <!-- Header Scripts -->
        <!--[if lt IE 9]>
            <script src="assets/js/vendor/html5shiv.js"></script>
        <![endif]-->
        <script type='text/javascript'>
        function refreshCaptcha(){
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
        </script>
    </head>
    <body>
        <!-- start right contact portion /contact form-->
        <div class="col-sm-6 contact-form-start">
            <div class="section-common-space">
               
                <h1>REGISTER</h1> 
              
                <form id="contactForm" method="get" class="matx-form-valid contact-form">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactName" id="name" onblur="checkName()" value="<?php echo $_GET['contactName'] ?>"/>
                                 <span style="color:red;font-family:'Roboto'" id="nameSpan"></span>
                               
                                <label class="mdl-textfield__label" for="name">Name</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactEmail" id="email" onblur="checkEmail()" value="<?php echo $_GET['contactEmail'] ?>"/>
                                 <span style="color:red;font-family:'Roboto'" id="emailSpan"></span>
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactCollege" id="college" onblur="checkCollege()" value="<?php echo $_GET['contactCollege'] ?>"/>
                                <span style="color:red;font-family:'Roboto'" id="collegeSpan"></span>
                               
                                <label class="mdl-textfield__label" for="college">College</label>
                            </div>
                        </div>
                    </div>
                     
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" name="contactPhone" id="phone" onblur="checkPhone()" value="<?php echo $_GET['contactPhone'] ?>" />
                                <span style="color:red;font-family:'Roboto'" id="phoneSpan"></span>

                                <label class="mdl-textfield__label" for="phone">Phone number</label>
                            </div>
                        </div>
                    </div>
                    
                    <table width="400" border="0"  cellpadding="5" cellspacing="1" class="table">
                    <?php if(isset($msg)){?>
                    <tr>
                      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td align="right" valign="top"> Validation code:</td>
                      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
                        <label for='message'>Enter the code above here :</label>
                        <br>
                        <input id="captcha_code" name="captcha_code" type="text">
                        <br>
                        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    </table>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-left ">
                               <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" type="submit" onclick="return checkAll()" name="Submit">SUBMIT</button> -->
                                <input name="Submit" type="submit" onclick="return validate();" value="Submit" onclick="return checkAll()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit">
   
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- end right contact portion -->


        <!-- footer script start  -->
        <script>
            function checkName()
            {
               
                var userName = document.getElementById("name").value;
               
                if(userName.length==0)
                {
                    document.getElementById("nameSpan").innerHTML="This field cannot be empty";
                 //   document.getElementById("name").focus();
                    return false;
                }
                else
                {
                     document.getElementById("nameSpan").innerHTML="";
                    return true;
                }
            }
            
            function checkEmail()
            {
                var userEmail = document.getElementById("email").value;
    
                var emailRegEx = /^((\w)+(\.(\w)+)*(@[a-zA-Z]+)(\.[a-zA-Z]+)+)$/;
                
                if(!emailRegEx.test(userEmail)){
                    //Error
                    document.getElementById("emailSpan").innerHTML="Enter a valid email ID";
                  //  document.getElementById("email").focus();
                    return false;
                }
                else
                {
                     document.getElementById("emailSpan").innerHTML="";
                     return true;
                   
                   //  document.getElementById("emailSpan").innerHTML="";
                }
            }
            
            function checkCollege()
            {
                var userCollege = document.getElementById("college").value;
    
                if(userCollege.length==0)
                {
                    document.getElementById("collegeSpan").innerHTML="This field cannot be empty";
                  //  document.getElementById("college").focus();
                    return false;
                }
                else
                {
                     document.getElementById("collegeSpan").innerHTML="";
                    return true;
                }
            }
            
            function checkPhone()
            {
                var userPhone = document.getElementById("phone").value;
    
                var phoneRegEx = /^\d{10}$/;
                
                if(!phoneRegEx.test(userPhone))
                {
                    document.getElementById("phoneSpan").innerHTML="Enter a valid mobile number";
                  //  document.getElementById("phone").focus();        
                    return false;
                }
                else
                {
                     document.getElementById("phoneSpan").innerHTML="";
                    return true;
                }
            }
            
            
            function checkAll()
            {
                return checkCollege() && checkEmail() && checkName() && checkPhone(); 
            }
            
        </script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        <script type="text/javascript" src="assets/libs/mdl/material.min.js"></script>
        <script type="text/javascript" src="assets/js/all-plugins.js"></script>
        <script type="text/javascript" src="assets/js/common-plugins.js"></script>
        <script type="text/javascript" src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/libs/sweetalert/sweet-alert.min.js"></script>
        <script type="text/javascript" src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/libs/jwplayer/jwplayer.js"></script>


                    <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/libs/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="assets/js/common.js"></script>
        <script type="text/javascript" src="assets/js/all-components.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
   
    </body>
</html>