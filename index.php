 <!DOCTYPE html> 

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test tube</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include('functions.php') ?>
      


    <link rel="stylesheet" href="<?php echo $site_url ?>src/css/normalize.css" >
  
    <link href="<?php echo $site_url ?>src/css/reset.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url ?>src/css/slickQuiz.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo $site_url ?>src/css/master.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo $site_url ?>src/css/style.css" >
  </head>
  
  <body id="slickQuiz">
        <h1 class="quizName"><!-- where the quiz name goes --></h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

                <a class="button startQuiz" href="#">Get Started!</a>
            </div>

            <!-- where the quiz gets built -->
        </div>

        <div class="quizResults">
            <h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

            <h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

            <div class="quizResultsCopy">
                <!-- where the quiz result copy goes -->
            </div>
        </div>

        
        
 
    
    
    <!-- External scripts -->    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="<?php echo $site_url ?>/src/js/slickQuiz-config.js"></script>
    <script src="<?php echo $site_url ?>/src/js/slickQuiz.js"></script>
    <script src="<?php echo $site_url ?>/src/js/master.js"></script>

    <script src="<?php echo $site_url ?>/src/js/custom.js"></script>
  
  </body>
  
</html>