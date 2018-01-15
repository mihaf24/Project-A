<?php 
    include 'inc/db_connection.php';
     session_start(); 
    if (isset($_GET['userid'])) 
    {
        $id=$_GET['userid'];
    }
        
    else{
        $id= $_SESSION['id'];
    }
    //$id= $_SESSION['id'];
    $query= "SELECT * FROM `users` WHERE id= '$id' "; 
    $result= mysqli_query($connection,$query);
    //$user= $row['id']; 
    $row= mysqli_fetch_assoc($result);

    $first_name= $row['first_name'];
    $last_name= $row['last_name'];
    $instituition = $row['instituition'];
    $description = $row['description'];
    $image= $row['image'];
    $description = $row['description'];
    $aboutmywork = $row['aboutmywork'];
    $skills = $row['skills'];
    $occupation = $row['occupation'];
    $school = $row['school'];
    $college = $row['college'];
    $university = $row['university'];
    $degree = $row['degree'];
    $degree = $row['degree'];
    $fbid = $row['fbid'];
    $githubid = $row['githubid'];
    $stackoverflowid = $row['stackoverflowid'];
    $otherid = $row['otherid'];
    $contact1 = $row['contact1'];
    $contact2 = $row['contact2'];
    $address1 = $row['address1'];
    $address2 = $row['address2'];
    
    
    //echo $query;



?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <script src="https://use.fontawesome.com/1eae1dea35.js"></script>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/userprofile.css">
        <link rel="stylesheet" href="css/userprofile1.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">

        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        
        
    </head>
    <body> 
      
      <?php include 'inc/navbar.php';?> 
      <br><br>
     
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
       
        <div class="container-fluid">
          <div class="row">
            <div class="fb-profile">
                <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="picture/<?php echo $row['image'] ?>" alt="Profile image example"/>
                <div class="fb-profile-text" id="h1" >
                    <h2><?php echo $first_name." ".$last_name ?></h2>
                    <h5><?php echo $skills; ?></h5>

                </div>
            </div>
          </div>
        </div> <!-- /container fluid-->  
        <div class="container">
          <div class="col-sm-12"> 
              <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Me </a>
                    </li>
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                     Education </a>
                    </li>
                    <li>
                      <a href="#tab_default_3" data-toggle="tab">
                     Socials& contacts </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                      <p>
                        <?php echo $description; ?>
                      </p>
                      <h4><strong>About My Work</strong></h4>
                      <p>
                        <?php echo $aboutmywork; ?> 
                      </p>
                      <!--
                      <h4><strong>Skills</strong></h4>
                      <p><?php echo $skills; ?></p>
                      -->
                      <h4><strong>Occupation</strong></h4>
                      <p><?php echo $occupation; ?></p>

                    </div>
                    <div class="tab-pane" id="tab_default_2">
                      <div class="row">
                      <div class="col-sm-10">
                       <!--
                        <div class="form-group">
                             <label for="education1">Highest Education:</label>
                              <p> MBA/PGDM</p>
                         </div>
                         -->
                          <div class="form-group">
                             <label for="education2">School:</label>
                              <p> <?php echo $school; ?></p>
                         </div>
                          <div class="form-group">
                             <label for="education3">College:</label>
                              <p><?php echo $college; ?> </p>
                         </div>
                          <div class="form-group">
                             <label for="education3">University:</label>
                              <p><?php echo $university; ?></p>
                         </div>
                         <div class="form-group">
                             <label for="education4">Degree:</label>
                              <p><?php echo $degree; ?></p>
                         </div>
                      </div>
                      </div>
                    </div> 
                      
                       <div class="tab-pane" id="tab_default_3">
                      
                      <div class="row">
                      <div class="col-sm-10">
                        <div class="form-group">
                             <label for="email">Email ID </label>
                              <p> iafbd24@gmail.com</p>
                         </div>
                          <div class="form-group">
                             <label for="fb id">Socials</label>
                              <p> <a href="<?php echo $fbid; ?>">facebook</a></p>
                              
                              
                              <p> <a href="<?php echo $githubid; ?>">GitHub</a></p>
                              <p> <a href="<?php echo $stackoverflowid; ?>">Stack Overflow</a></p>
                         </div>
                          <div class="form-group">
                             <label for="contact">Contact No</label>
                              <p><?php echo $contact1; ?> </p>
                         </div>
                          <div class="form-group">
                             <label for="contact2">Telephone No</label>
                              <p><?php echo $contact2; ?></p>
                         </div>
                          <div class="form-group">
                             <label for="address1">Mailing Address</label>
                              <p><?php echo $address1; ?></p>
                         </div>
                         <div class="form-group">
                             <label for="address2">Permanent Address </label>
                              <p><?php echo $address2; ?></p>
                         </div>
                          
                      </div>
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </div>
    
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
