<?php
   
    include 'inc/db_connection.php';
    session_start();

    if(isset($_SESSION['search']) AND $_SESSION['search'] != "")
    {
        $res= mysqli_query($connection,$_SESSION['search']);        
        $_SESSION['search'] = "";
    }

    if (isset ($_POST['submitsearch']))
    {
     
            $name=mysqli_real_escape_string($connection,$_POST['name']); 
     
        $search_sql= "SELECT * FROM `users` WHERE description LIKE '%$name%' or skills LIKE '%$name%'";
        
        //echo $search_sql;
        
        $res= mysqli_query($connection,$search_sql);
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
    
    <body> 
      <?php include 'inc/navbar.php'; ?>
      <br><br>
       
       
        <div class="flexsearch" id="search" style="margin-top: 24px;">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" action="#" method="post">
				<div class="flexsearch--input-wrapper">
					<input class="flexsearch--input" type="search" placeholder="search" name="name">
				</div>
				<input class="flexsearch--submit" type="submit" value="&#10140;" name="submitsearch" />
			</form>
		</div> 
   
       <br>
    
    <div class="container">
<?php if (isset($res)){ if (mysqli_num_rows($res)>0) { ?>		
        <table class = "table"> 
           <thead>
               <th>Profile Picture</th>
               <th>Name</th>
               <th>Skills</th>
           </thead>
            
            
<?php            while($row = mysqli_fetch_assoc($res)){        ?>    
            <tbody>
                <tr>
                  <td><img height="100px" width="100px" src="picture/<?php echo $row["image"]; ?>" alt="dp"></td> 
                   
                    <td><a href="userprofile.php?userid=<?php echo $row["id"]; ?>"> <?php echo $row["first_name"]." ".  $row["last_name"]; ?></a></td> 
                
                     <td><p><?php echo $row['skills']; ?></p></td>
                    
                    
                    
                </tr>
            </tbody> <?php } ?>
        </table> 
        
<?php } else {
    echo '<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
    No data found.
  </div>';
}
                      } ?>
    </div>		
</div> 

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
