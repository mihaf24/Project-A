<?php
    include 'inc/db_connection.php';
    session_start(); 
    $msg= "" ;

    if (!isset($_SESSION['id']))
        header("Location: index.php");

        $test = $_SESSION['id'];
        $sql= "SELECT * FROM users WHERE id = '$test'";
        //echo $sql;
        $res= mysqli_query ($connection,$sql);
        $row = mysqli_fetch_assoc($res);

    if (mysqli_num_rows($res) == 0)
    {
        $first_name = $last_name = $instituition = $description = $occupation= $skills= $aboutmywork = $school= $college = $university = $degree = $fbid=$githubid = $stackoverflowid = $otherid= $contact1= $contact2 =$address1=$address2= "" ;
    }
    else 
    {
        $first_name = $row["first_name"];
        $last_name = $row["last_name"]; 
        $instituition = $row["instituition"];
        $description = $row["description"];
        $image= $row["image"];
        $skills= $row['skills'];
        $aboutmywork= $row['aboutmywork'];
        $occupation= $row["occupation"];
        $school= $row["school"];
        $college= $row["college"];
        $university= $row["university"];
        $degree= $row["degree"];
        $fbid= $row["fbid"];
        $githubid= $row["githubid"];
        $stackoverflowid= $row["stackoverflowid"];
        $otherid= $row["otherid"];
        $contact1= $row["contact1"];
        $contact2= $row["contact2"];
        $address1= $row["address1"];
        $address2= $row["address2"];
        
        
        
    }


    //take input from the form
    if (isset($_POST['submit']))
    {
        //echo 'submit clicked';
        
        $id= $_SESSION['id'];
        $first_name= $_POST['firstname'];
        $last_name= $_POST['lastname'];
        $instituition= $_POST['instituition'];
        $password = md5($_POST['password']);
        $password1= md5($_POST['password1']);
        $description = $_POST['description'];
        $skills = $_POST['skills'];
        $aboutmywork = $_POST['aboutmywork'];
        $occupation = $_POST['occupation'];
        $school = $_POST['school'];
        $college = $_POST['college'];
        $university = $_POST['university'];
        $degree = $_POST['degree'];
        $fbid = $_POST['fbid'];
        $githubid = $_POST['githubid'];
        $stackoverflowid = $_POST['stackoverflowid'];
        $otherid = $_POST['otherid'];
        $contact1 = $_POST['contact1'];
        $contact2 = $_POST['contact2'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        
        
        //$occupation = $_POST['occupation'];
//        $skillset= implode(" ",$_POST['skillset']);
        
        //image Upload
        move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        
        if (!empty($_FILES['file']['name'])) 
        {
            $q= "UPDATE `users` SET `image`= '".$_FILES['file']['name']."' WHERE id= '".$_SESSION['id']."'";
            $res = mysqli_query ($connection,$q);
        
        } 
        
        
       // $q= "UPDATE `users` SET `image`= '".$_FILES['file']['name']."' WHERE id= '".$_SESSION['id']."'";
        
       
  //      print_r($skillset);
        
        if ($password1== $password and !empty($password) and !empty($password1))
        {
            $update_query= "UPDATE `login` SET `password`='$password' WHERE `id`='$id'" ;
            mysqli_query($connection,$update_query);
        } 
        else 
        {   
            $msg= "password didn't match";
            //echo $msg;
        }
        
        $test = $_SESSION['id'];
        $sql= "SELECT id FROM users WHERE id = '$test'";
        //echo $sql;
        $res= mysqli_query ($connection,$sql);
        $count = mysqli_num_rows($res);
        
        if ($count == 0) 
        {
            // $update_query= "INSERT INTO `users`(`id`, `first_name`, `last_name`, `instituition` , `description`) VALUES ('$id','$first_name','$last_name','$instituition', '$description')";
           // $update_query= "INSERT INTO `users`(`id`, `first_name`, `last_name`, `instituition`, `description`, `aboutmywork`, `skills`, `occupation`) VALUES ('$id','$first_name','$last_name','$instituition', '$description','$aboutmywork','$skills','$occupation')";
            
            $update_query= "INSERT INTO `users`(`first_name`, `last_name`, `instituition`, `description`, `aboutmywork`, `skills`, `occupation`, `school`, `college`, `university`, `degree`, `fbid`, `githubid`, `stackoverflowid`, `otherid`, `contact1`, `contact2`, `address1`, `address2`) VALUES ('$first_name','$last_name','$instituition','$description','$aboutmywork','$skills','$occupation','$school','$college','$university','$degree','$fbid','$githubid','$stackoverflowid','$otherid','$contact1','$contact2','$address1','$address2')";
            
           // echo $update_query;
            
        }
        else 
        { 
            //echo 'else e dhukse';
            /*if (!empty($description)) 
            {
                $update_query= "UPDATE `users` SET `description`='$description' WHERE `id`='$test'";
            }
            if (!empty($first_name)) 
            {
                $update_query= "UPDATE `users` SET `first_name`= '$first_name' WHERE `id`='$test'";
            }  
            if (!empty($last_name)) 
            {
                $update_query= "UPDATE `users` SET `last_name`= '$last_name' WHERE `id`='$test'";
            } 
            if (!empty($instituition)) 
            {
                $update_query= "UPDATE `users` SET `instituition`= '$instituition' WHERE `id`='$test'";
            } */
            
           // if (!empty($description)) 
            {
                //$update_query= "UPDATE `users` SET `description`='$description' WHERE `id`='$test'";
            }
            //if (!empty($aboutmywork)) 
            {
              //  $update_query= "UPDATE `users` SET `aboutmywork`='$aboutmywork' WHERE `id`='$test'";
            }
            //if (!empty($skills)) 
            {
                //$update_query= "UPDATE `users` SET `skills`='$skills' WHERE `id`='$test'";
            }
            
               // $update_query= "UPDATE `users` SET `first_name`= '$first_name',`last_name`='$last_name',`instituition`='$instituition' WHERE `id`='$test'"; 
            
                //$update_query= "UPDATE `users` SET `first_name`= '$first_name',`last_name`= '$last_name',`instituition`='$instituition',`description`='$description',`aboutmywork`='$aboutmywork',`skills`='$skills',`occupation`='$occupation' WHERE `id` = '$test'"; 
            
                $update_query= "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`instituition`='$instituition',`description`='$description',`aboutmywork`='$aboutmywork',`skills`='$skills',`occupation`='$occupation',`school`='$school',`college`='$college',`university`='$university',`degree`='$degree',`fbid`='$fbid',`githubid`='$githubid',`stackoverflowid`='$stackoverflowid',`otherid`='$otherid',`contact1`='$contact1',`contact2`='$contact2',`address1`='$address1',`address2`='$address2' WHERE `id`= '$test'";
            
                //echo $update_query;
            mysqli_query($connection,$update_query);
            //$update_query= "UPDATE `users` SET `first_name`= '$first_name',`last_name`='$last_name',`instituition`='$instituition' , `description`='$description' WHERE `id`='$test'";
                
            
             
        }
       
            
        if (mysqli_query($connection,$update_query)==TRUE)
        {
            $msg='<div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Successful!</strong> Profile has been updated successfully.
                  </div>';
           /* echo '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> Update Succefull.
                      </div>' ;
            //echo $_SESSION['id']; */
        } 
        else {
            die('unsuccessful' .mysqli_error($connection));
        }
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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/slicknav.scss">

        <link rel="stylesheet" href="css/font-awesome.min.css">

        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    
    <body>
        <?php include 'inc/navbar.php'; ?>  
        
        <div class="container">
            <div class="col-md-12">
                <?php echo 'haba'; ?>
            </div>
        </div>
        
        
         <div class="container" style="padding-top: 60px;"> 
             <div class="col-md-12">
                <?php echo $msg ; ?>
            </div>
              <h1 class="page-header">Edit Profile</h1>
              <div class="row">
                <!-- left column --> 
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="text-center">
                    <!--<img src="picture/<?php echo $row['image']; ?>" alt="avatar">  -->
                   <?php echo "<img width='150' height='150' src='picture/".$row['image']."' alt='dp'>"; ?> 
                    
                    <h6>Upload a different photo...</h6>
                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" class="text-center center-block well well-sm" >
                  </div>
                </div>
                
                <div class="container">
                   <div class="col=md-8 col-sm-6 col-xs-12">
                      <h3>Update Profile</h3> 
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#info1" data-toggle= 'tab'>Personal Info</a></li>
                        <li><a href="#info2" data-toggle= 'tab'>Education</a></li>
                        <li><a href="#info3" data-toggle= 'tab'>Socials& Contacts</a></li>
                        <li><a href="#password" data-toggle='tab'>Change Password</a></li>
                    </ul>
                    <div class="tab-content"> 
                        <!-- change basic info tab tab -->
                        <div id="info1" class="tab-pane active">
                            <h3>basic info</h3>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">First name:</label>
                              <div class="col-lg-8">
                                 <input type="text" class="form-control" value="<?php echo $first_name ?>" name="firstname"  >
                              </div>
                            </div>   
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Last name:</label>
                              <div class="col-lg-8">
                                 <input type="text" class="form-control" value="<?php echo $last_name?>" name="lastname">
                              </div>
                            </div>
                             <div class="form-group">
                                  <label class="col-lg-3 control-label">Instituition</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value="<?php echo $instituition ?>" name="instituition">
                                  </div>
                            </div> 
                            <div class="form-group">
                              <label class="col-lg-3 control-label">About Me:</label>
                              <div class="col-lg-8">
                                 <textarea class="form-control" rows="5" id="description" name="description" placeholder="Tell Something About Yourself"  ><?php echo $description;?></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">About My Work:</label>
                              <div class="col-lg-8">
                                 <textarea class="form-control" rows="5" id="aboutmywork" name="aboutmywork" placeholder="Tell Something About Your Work"><?php echo $aboutmywork;?></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Occupation:</label>
                              <div class="col-lg-8">
                                 <input type="text" class="form-control" value="<?php echo $occupation ?>" name="occupation"  >
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Skills:</label>
                              <div class="col-lg-8">
                                 <textarea class="form-control" rows="5" id="skills" name="skills" value="Tell us about your skills" ><?php echo $skills;?></textarea>
                              </div>
                            </div>
                        </div>
                        
                         <div id="info2" class="tab-pane">
                            <div class="form-group">
                              <label class="col-lg-3 control-label">School:</label>
                              <div class="col-lg-8">
                                 <input type="text" class="form-control" value="<?php echo $school ?>" name="school"  >
                              </div>
                            </div>   
                            <div class="form-group">
                              <label class="col-lg-3 control-label">College:</label>
                              <div class="col-lg-8">
                                 <input type="text" class="form-control" value="<?php echo $college ?>" name="college" >
                              </div>
                            </div>
                             <div class="form-group">
                                  <label class="col-lg-3 control-label">University</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value="<?php echo $university ?>" name="university" >
                                  </div>
                            </div> 
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Degree</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value="<?php echo $degree ?>" name="degree" >
                                  </div>
                            </div> 
                             
                             
                         </div> 
                         
                         <div id=info3 class="tab-pane"> 
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Fb Id</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $fbid ?>" name="fbid">
                                  </div>
                            </div> 
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Git-hub</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $githubid ?>" name="githubid">
                                  </div>
                            </div>
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Stackoverflow</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $stackoverflowid ?>" name="stackoverflowid">
                                  </div>
                            </div>
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Others</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $otherid ?>" name="otherid">
                                  </div>
                            </div>
                            <!--
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Others2</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $otherid2 ?>" name="otherid2">
                                  </div>
                            </div>
                            -->
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Mobile No</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $contact1 ?>" name="contact1">
                                  </div>
                            </div> 
                            <div class="form-group">
                                  <label class="col-lg-3 control-label">Telephone No</label>
                                  <div class="col-lg-8">
                                     <input type="text" class="form-control" value= "<?php echo $contact2 ?>" name="contact2">
                                  </div>
                            </div> 
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Mailing Address:</label>
                              <div class="col-lg-8">
                                 <textarea class="form-control" rows="3" id="address1" name="address1" value="Mailing Address" ><?php echo $address1;?></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Permanent Address:</label>
                              <div class="col-lg-8">
                                 <textarea class="form-control" rows="3" id="address2" name="address2" value="Permanent Address" ><?php echo $address2;?></textarea>
                              </div>
                            </div>
                             
                         </div>
                        
                        <!-- change password tab -->
                        <div id="password" class="tab-pane">
                           <div class="form-group">
                              <label class="col-md-3 control-label">Password:</label>
                              <div class="col-md-8">
                                <input type="password" class="form-control"  placeholder="password" name="password">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Confirm password:</label>
                              <div class="col-md-8">
                               <input type="password" class="form-control"  placeholder="Confirm Password" name="password1"> 
                              </div>
                            </div>
                            
                        </div>   
                    </div> 
                    
                    <div class="button">
                     <div class="col-md-3">
                         
                     </div>
                      <div class="col-md-8">
                       <button type="submit" class="btn btn-info btn-block" name="submit">Submit</button>
                    </div>
                       
                        
                    </div>
                    
                      
                     
                    
                      
                       
                   </div>
                    
                    
                    
                </div>
                <!-- edit form column -->
                
                  
                    
                    
                   
                    
                    
                   <!-- <div class="form-group">
                      <label class="col-lg-3 control-label">Skillset</label>
                      <div class="col-lg-8">
                        <div class="ui-select">
                          <select id="user_skillset" class="form-control">
                            <option value="acc/fin">Accounting/Finance</option>
                            <option value="edu">Education/Training</option>
                            <option value="garments/texttile">Garments/Textile</option>
                            <option value="design">Design</option>
                            <option value="engineer">Engineer/Architects</option>
                            <option value="hr" >HR/Org. Development</option>
                            
                            <option value="travel">Hospitality/ Travel/ Tourism</option>
                            <option value="electrician"> Electrician/ Construction/ Repair</option>
                            <option value="it">IT & Telecommunication</option>
                            <option value="marketing">Marketing/Sales</option>
                            <option value="dataentry">Data Entry/Operator</option>
                            <option value="driving" >Driving/Motor Technician </option>
                            <option value="law">Law/Legal</option>
                            <option value="photography">Photography</option>
                            <option value="tuition">Tuition</option>
                          </select>
                        </div>
                      </div>
                    </div> 
                    -->
                
                  <!-- <div class="form-group">
                     <label class="col-lg-3 control-label">Skillset</label>
                        <br> <br>
                        <div class="col-lg-8">
                            <div class="checkbox-inline">
                              <label><input type="checkbox" value="" name="skillset[]">Accounting/Finance</label>
                             </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Education/Training</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Garments/Textile</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Design</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Engineer/Architects</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Hospitality/ Travel/ Tourism</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Electrician/ Construction/ Repair</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">IT & Telecommunication</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Marketing/Sales</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Data Entry/Operator</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Driving/Motor Technician </label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Law/Legal</label>
                        </div>
                         <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Photography</label>
                        </div>
                        <div class="checkbox-inline">
                          <label><input type="checkbox" value="" name="skillset[]">Tuition</label>
                        </div>
                       </div> -->
                        
                    </div> 
                </div>
                    
                    
                   
                    
                    
                    <!--<div class="form-group">
                      <label for="occupation">Occupation</label>
                      <textarea class="form-control" rows="5" id="occupation" name="occupation" value="<?php //echo $occupation;?>"  ></textarea>
                    </div> --> 
                    
                    
                    
                    
                  
                
              
            

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
