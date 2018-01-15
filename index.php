<?php
    include 'inc/db_connection.php';
    //include 'inc/navbar.php';
    //require_once("inc/db_connection.php");
    
  
    session_start(); 

    

    
    //searching 

 if (isset ($_POST['submitsearch']))
    {
     
            $name=mysqli_real_escape_string($connection,$_POST['name']); 
     
        $search_sql= "SELECT * FROM `users` WHERE description LIKE '%$name%' or skills LIKE '%$name%' ";

        $_SESSION['search'] = $search_sql;
        
        header("Location: search1.php");
    }

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
         Place favicon.ico in the root directory 
    -->  
      
       
        
        <script src="https://use.fontawesome.com/1eae1dea35.js"></script>
        <!--
        <link rel="stylesheet" href="css/normalize.css">
        -->
        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/search.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">

        
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="style.css">
        
        <!--
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        -->
    </head>
    <body style="height: 100%;"> 
       
<?php include 'inc/navbar.php'; ?> 
       
   
 <div class="container">
    
       <br>
          
        <img src="img/laptop-2557574_1920.jpg" width="1366px" height="768px" alt="Image" style="margin-left: -119px;">
        <div class="carousel-caption">
          <h2><strong>Clique</strong></h2>
            <p>A Connecting Site between Employer and Employee. </p> 
            <br>
        </div>      
     
 </div>  

 
  

      
    

        
<div class="flexsearch" id="search">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" action="#" method="post">
				<div class="flexsearch--input-wrapper">
					<input class="flexsearch--input" type="search" placeholder="search" name="name">
				</div>
				<input name="submitsearch" class="flexsearch--submit" type="submit" value="&#10140;"  />
			</form>
		</div>
</div>  
       
       

        
        
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="picture/la.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="picture/ny.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>’CLIQUE’ will be a connecting website for unemployed & employees where anyone can showcase his/her skills & checking the portfolios, employers can select employees.</p>
      </div>
      <div class="well">
       <p>It's a website for all kinds of people from professionals to newbies to showcase their skills and portfolios. </p>
      </div>
    </div>
  </div>
</div><br>

        
<footer class="container-fluid bg-4 text-center" id="footer">
  <p> All Rights Reserved By Mihaf 2017</p> 
</footer>
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
       

        
    </body>
</html>
