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
     
        $search_sql= "SELECT `id`, `first_name`, `last_name`, `instituition`, `description` FROM `users` WHERE description LIKE '%$name%'";
        
        echo $search_sql;
        
        $res= mysqli_query($connection,$search_sql);
    }

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
  ` 
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
       <nav class="navbar navbar-inverse" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Clique</a>
            </div>
            <ul class="nav navbar-nav">
                    <li><a href="indexx1.php">Home</a></li>
                    <li><a href="profile1.php">Profile</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    
            </ul>
            
           
            
            
           <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                
                <li><a href="#"> <?php echo $_SESSION['user']?></a></li>
          </ul>
            
            
        </div>
    </nav> 
       
       
        <div class="flexsearch" id="search">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" action="#" method="post">
				<div class="flexsearch--input-wrapper">
					<input class="flexsearch--input" type="search" placeholder="search" name="name">
				</div>
				<input class="flexsearch--submit" type="submit" value="&#10140;" name="submitsearch" />
			</form>
		</div>
    
    <div class="container">
<?php if (isset($res)){ if (mysqli_num_rows($res) > 0) { ?>		
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
            
<?php            while($row = mysqli_fetch_assoc($res)){        ?>    
            <tbody>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><a href="userprofile.php".php?id=<?php echo $row['id']; ?>"><?php echo $row["first_name"]; ?></a></td>
                    <td><?php echo $row["last_name"]; ?></td>
                    <td><?php echo $row["instituition"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                </tr>
            </tbody> <?php } ?>
        </table>
<?php } else {
    echo "no data found!\n";
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
