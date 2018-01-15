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
         <div class="container" style="padding-top: 60px;">
              <h1 class="page-header">Profile</h1>
              <div class="row">
                <!-- left column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="text-center">
                    <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
                   
                  </div>
                </div>
                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                 
                  <h3>Personal info</h3>
                  
                      <label class="col-lg-3 control-label">First name: <?php echo $_SESSION['username'];?></label>
                     
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Last name:</label>
                      <div class="col-lg-8">
                         <input type="text" class="form-control"  placeholder="Last Name" name="lastname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-3 control-label">Instituition</label>
                      <div class="col-lg-8">
                         <input type="text" class="form-control"  placeholder="instituition" name="instituition">
                      </div>
                    </div>
                    
                    
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
                
                   <div class="form-group">
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
                       </div>
                        
                    </div> 
                    <div class="form-group">
                      <label for="comment">Write something about yourself</label>
                      <textarea class="form-control" rows="5" id="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Password:</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control"  placeholder="password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Confirm password:</label>
                      <div class="col-md-8">
                       <input type="text" class="form-control"  placeholder="Confirm Password" name="password1">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-4">
                         <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"></span>Update</button>
                        <span></span>
                        <input class="btn btn-default" value="Cancel" type="reset">
                      </div>
                    </div>
                  </form>
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
