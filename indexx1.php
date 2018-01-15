<?php

session_start();
//secho $_SESSION['user'];
include 'inc/db_connection.php';

 //searching 

 

?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>THis is a title</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <script src="https://use.fontawesome.com/1eae1dea35.js"></script>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/slicknav.scss">
        <link rel="stylesheet" href="css/search.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">

        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <?php include 'navber.php'; ?>    
    
        
        
        
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/1.png" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/2.png" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

        
<div class="flexsearch" id="search">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" action="" method="post">
				<div class="flexsearch--input-wrapper">
					<input class="flexsearch--input" type="search" name="name" placeholder="search">
				</div>
				
				<input class="flexsearch--submit" type="submit" value="&#10140" name="submitsearch"/>
			</form>
		</div>
</div>  
       
<div class="container">
<?php
 if (isset ($_POST['submitsearch']))
    {
     
     echo "haga";
            $name=mysqli_real_escape_string($connection,$_POST['name']); 
     
        $search_sql= "SELECT * FROM users WHERE first_name LIKE '%$name%' OR last_name LIKE '%$name%' OR description LIKE '%$name%';"; 
        
        $search_run=mysqli_query($connection, $search_sql);
        
       if(mysqli_num_rows($search_run)>0){
?>
            <table class = "table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Institution</td>
                    <td>Description</td>
                </tr>
            </thead>
<?php        
            while($row=mysqli_fetch_array($search_run)){
?> 
            <tbody>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["last_name"]; ?></td>
                    <td><?php echo $row["instituition"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                </tr>
            </tbody>
                           
<?php
                
            }
           
        }
    
?>
    </table>
<?php
     
        

        $_SESSION['search'] = $search_sql;
        
        header("Location: search.php");
    }



?>
</div>	
        
        
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

        
<footer class="container-fluid bg-4 text-center" id="footer">
  <p>All Rights Reserved by Mihaf 2017</a></p> 
</footer>
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
                  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
        </script>
        
    </body>
</html>
