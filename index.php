<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

    <?php 
    // Set base URL for CSS and JS paths 
    $baseURL = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
    ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo $baseURL;?>css/paper_bootstrap.css">
        <link rel="stylesheet" href="<?php echo $baseURL;?>css/winkje_custom_css.css">
        <link rel="stylesheet" href="<?php echo $baseURL;?>css/font-awesome.css">
 

        <script src="<?php echo $baseURL;?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    
  
    
    <body>
        

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="mainJumbo" class="jumbotron main_jumbo">
                    <h3 class="text-center">Mobile Interaction experiment <i class="icon-eye-open"> </i></h3>
                    <p class="text-center">Welcome to this experiment!<br>
                    In this experiment, we will conduct a usability test of eye tracking and blinking for simple interfaces. Thank you for participating!</p>
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col_centered">
                            
                            <div class="  text-center">
                                    <h4>Session one: eye gazing</h4>
                                    <p></p>
                                <a href="/experiments/gazing.php" class="btn btn-primary btn-lg experiment_button">Start experiment 1</a>
                                    <h4>Session two: eye blinking</h4>

                                <a href="/experiments/blinking.php" class="btn btn-primary btn-lg experiment_button">Start experiment 2</a>

                                 <a id="hbutton" href="/experiments/blinking.php" class="btn btn-primary btn-lg experiment_button transparant">Hidden button</a>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
            





   
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
            
       
       </script>
    </body>
</html>
