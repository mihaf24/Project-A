<!-- navbar -->
<?php if (isset ($_SESSION['user']) == false) {  ?>
<nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
               <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Clique</a>
            </div>
             
              <ul  class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                
                <li><a href="about.php">About</a></li> 
                <!--
                <li><a href="#">Contact</a></li>
                -->
            
                
            </ul>
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="login.php"> login</a></li>
                <li><a href="signup.php"> signup</a></li>
                
            </ul>
               
        
            
            
        </div>
    </div>
</nav>
<?php  }  else {  ?>  
   
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
               <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Clique</a>
            </div>
             
              <ul  class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                
                <li class="dropdown"><a class="dropdown-toggle" data-toggle=
                    "dropdown" href="#">Profile <span class="caret"></span></a> 
              
                      <ul class="dropdown-menu">
                          <li><a href="userprofile.php?userid=<?php echo $_SESSION['id']; ?>">See Profile</a></li>
                          <li><a href="profile1.php">Update Profile</a></li>

                     </ul>
              
              
              </li>
               
                <li><a href="about.php">About</a></li> 
                <!--
                <li><a href="#">Contact</a></li>
                -->   
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                
                <li><a href="#">Welcome <?php echo $_SESSION['user']?></a></li>
          </ul>
               
        
            
            
        </div>
    </div>
</nav>
   
<?php  }  ?> 
  
  
  

