<?php
include ('inc/db_connection.php');
    
    session_start(); 
    $msg= "" ;

$username1=$email=$password1= "";
$msgnm=$msgpass=$msgpass1=$msgmail=$msguser=$msgmail1= "";
$msg= "";
       
//sign up
   if(isset($_POST['submit'])){ 
        
       

       $email= mysqli_real_escape_string($connection,strtolower($_POST['email'])); 
        //echo $email;
    $username1=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        //echo $username1;
        $password= md5(mysqli_real_escape_string($connection,$_POST['password']));
        echo $password1;
        $password1=md5( mysqli_real_escape_string($connection,$_POST['password1']));
      // $hash = md5(rand(0,1000));
        echo $password1;

  
        if (empty($username1)) {
              $msgnm = strtoupper("Username cant be empty"); 
        }  
       
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $msgmail=strtoupper("Invalid Email Address");
        }  
       else if (strlen($password)<8)
       {
           $msgpass= strtoupper("Password must be atleast 8 characters");
       }
        else if ($password!==$password1)
       {
           $msgpass1=strtoupper("Password dosen't match");
                    
       } 
       
        
        
        else
        { 
            //echo 'else e dhukse';
            $signup_query="INSERT INTO `login`(`id`, `email`, `username`, `password`) VALUES ('','$email','$username1','$password1')"; 
            
            $sql= "SELECT * FROM login WHERE username='$username1' or email= '$email'";
            $res1= mysqli_query($connection,$sql);
            //if ($res1==true){echo 'aio';}
            if(mysqli_num_rows($res1)>0)
            {
                $msguser= strtoupper("User already exists");
                $msgmail1= strtoupper("Email already exists");
            }
            else 
            { 
                //echo 'yoo';
                $res= mysqli_query($connection,$signup_query);
                if($res==TRUE)
                {
                    $sql= "SELECT `id` FROM login WHERE `username`='$username1'";
                    $res= mysqli_query($connection,$sql);
                    $row= mysqli_fetch_assoc ($res);
                    $id= $row['id'];
                    $sql1= "INSERT INTO `users` (`id`) VALUES ('$id')";
                    mysqli_query($connection,$sql1); 
                    
                    $msg= '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> Registration Succefull.
                      </div>';
                    
                   
                    //echo $signup_query;
                    //echo "\n";
                    
               } 
                else
                {
                    echo 'unsuccessful';
                }
            
            }
            
        
       
        }
    }
        
       /* $sql = "SELECT id, email FROM login WHERE username='$username1'";
        //echo $sql;
        $res = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($res);
        
        $id = $row['id'];
        
        echo "$id ".$row['email']."\n";
        
        $signup_query1="INSERT INTO `users`(`id`) VALUES ('$id')";
        
        mysqli_query($connection,$signup_query1); */
    
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

        <link rel="stylesheet" href="css/font-awesome.min.css">

        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <?php include ('inc/navbar.php')?> 
        
       
         
             <div class="container" style="margin-top:60px"> 
                            <div class="row" > 
                                <div class="col-md-12">
                                   <?php echo $msg; ?>
                                </div>


                                 <div class="col-md-offset-4 col-md-4" id="box">
                                  <h2>Sign Up</h2>

                                        <hr>


                                            <form class="form-horizontal" action="" method="post" id="contact_form">
                                                <fieldset>
                                                    <!-- Form Name -->


                                                    <!-- Texat input--> 
                                                    
                                                    <div class="form-group">

                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                <input name="email" placeholder="Email" class="form-control" type="email">
                                                            </div>
                                                            <div>
                                                                <p><span style="color:red" font size="16px";><?php echo $msgmail ?></span></p>
								                            </div>
                                                           <div>
                                                                <p><span style="color:red" font size="16px";><?php echo $msgmail1 ?></span></p>
								                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">

                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                <input name="username" placeholder="Username" class="form-control" type="text">
                                                            </div>
                                                            <div>
								                                <p><span style="color:red" font size="16px";><?php echo $msgnm ?></span></p>
								                            </div>
                                                           <div>
								                                <p><span style="color:red" font size="16px";><?php echo $msguser ?></span></p>
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
                                                             <div>
								                                <p><span style="color:red" font size="16px";><?php echo $msgpass1 ?></span></p>
								                            </div>
                                                        </div>
                                                    </div> 
                                                    
                                                     <div class="form-group">

                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                                <input name="password1" placeholder="Confirm Password" class="form-control" type="password">
                                                            </div>
                                                            <div>
								                                <p><span style="color:red" font size="16px";><?php echo $msgpass ?></span></p>
								                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="form-group">

                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-md btn-danger pull-right" name="submit">Sign Up </button>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </form>
                                </div> 
            </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>   
    </body>
</html> 