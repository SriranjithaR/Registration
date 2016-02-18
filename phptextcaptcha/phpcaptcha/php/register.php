<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Matx - Material Design Agency Template</title>
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
        <link rel="stylesheet" href="../assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../assets/libs/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/libs/mdl/material.min.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/libs/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../assets/libs/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="../assets/libs/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="../assets/libs/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="../assets/libs/sweetalert/sweet-alert.min.css">
        <link rel="stylesheet" href="../assets/libs/sweetalert/ie9.css">
        <link rel="stylesheet" href="../assets/css/common.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">

        <link rel="stylesheet" type="text/css" href="../assets/libs/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="../assets/libs/revolution/fonts/font-awesome/css/font-awesome.min.css">
        
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="../assets/libs/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="../assets/libs/revolution/css/layers.css">
            
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="../assets/libs/revolution/css/navigation.css">

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    




        <!-- Header Scripts -->
        <!--[if lt IE 9]>
            <script src="../assets/js/vendor/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
  

      <div class="col-sm-12 contact-form-start">
            <div class="section-common-space">
                <center>
                <form id="contactForm" method="post" class="matx-form-valid contact-form" style="border:1px solid black;border-radius:5px;padding:10px;text-align:center;margin:auto;">
                
                    
                    <div class="form-group">
                        
                            

<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ins_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
  


    $randid = rand(11111,99999);
    $strid = "INS".strval($randid);
  
   
    $stmt2 = "select * from ins_reg where id = '".$strid."'";
    $res = $conn->query($stmt2);
  
    
    while($res->num_rows)
    {
        $randid = rand(11111,99999);
        $strid = "INS".strval($randid);
     /*   $stmt2 = $conn->prepare("select * from ins_reg where id = '".$strid."'");
        $stmt2->execute();
        $res = $stmt2->get_result(); */
        $stmt2 = "select * from ins_reg where id = '".$strid."'";
        $res = $conn->query($stmt2);
    }
  
    
    #print $strid;    
    /* New random id found. Insert into table */
    $stmt = $conn->prepare("INSERT INTO ins_reg (id, name, phone, email, college) VALUES (?,?,?,?,?)");
  
    
    $stmt->bind_param("ssiss", $id,$name,$phone,$email,$college);
  

    /* Set parameters */
    $id = $strid;
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $phone = $_POST['contactPhone'];
    $college = $_POST['contactCollege'];
   
    echo "<br><br>";
    if($stmt->execute() === FALSE)
    {
        echo "<p class='text-center' style='font-size:20px'> ** Email ID already registered! **</p>";
    }
    
    else        
        echo "<p class='text-center' style='font-size:20px'>Registration successful. Your INSTINCTS id is : ".$strid."</p>";
    $stmt->close();

  #  $conn->close(); 
?>                   
                            
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center ">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" type="submit" formaction="../register.html">BACK</button>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center ">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" type="submit" formaction="../index.html">HOME</button>
                            </div>
                        </div>
                    </div>
                
                    
                </form>
                </center>
            </div>
        </div>    
   
    </body>
</html>