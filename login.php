<?php 
include 'inc/db_connection.php';
session_start(); 
$msg= ""; 
   
 if(isset($_POST['submit'])){
        //echo "haba";
        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
         $password=md5(mysqli_real_escape_string($connection,$_POST['password']));

        $login_query="SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($connection,$login_query);           
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)) 
            {
                $usr=$row['username'];
                $ps=$row['password'];
                $id=$row['id'];
            } 
            
             if($username==$usr && $password==$ps)
                 {
                    $_SESSION['user'] = $usr;
                    $_SESSION['id'] = $id; 
                   
                    header('Location: index.php');
                }
            else 
                {
                    $msg= '<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Unsuccessful</strong> Login unsuccessful. Wrong Username or Password.
  </div>' ;
                }
        }
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
        <!-- Place favicon.ico in the root directory --> 
    --> 
       
        
        <script src="https://use.fontawesome.com/1eae1dea35.js"></script>
        <!--
        <link rel="stylesheet" href="css/normalize.css">
        -->
        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/search.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">

        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        
        <!--
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        -->
    </head>
    
    <body> 
        <?php include 'inc/navbar.php'; ?> 
        <br><br><br>
        <div class="container">
            <div class="col-md-12">
                <?php echo $msg; ?>
            </div>
        </div> 
        
         
             <div class="container-fluid haba"style="margin-top:60px">
                            <div class="row-fluid" >


                                 <div class="col-md-offset-4 col-md-4" id="box">
                                  <h2 id="header">Login</h2>

                                        <hr>


                                            <form class="form-horizontal" action="" method="post" id="contact_form">
                                                <fieldset>
                                                    <!-- Form Name -->


                                                    <!-- Texat input-->

                                                    <div class="form-group">

                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                <input name="username" placeholder="username" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <!-- Text input-->
                                                    <div class="form-group">

                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                                <input name="password" placeholder="Password" class="form-control" type="password">
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group">

                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-md btn-danger pull-right" name="submit">Login </button>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>
                                </div>  
            </div> 
            
        </div>
            
           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
       
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
