<?php
//session_start();
//require_once("../../database/config_database.php");
require_once("database/config_database.php");
?>

<!--
  <div class="container">
  <h2>Apply For Admission</h2>
  
  <div id="accordion">
    <div class="row justify-content-md-center">
        <div class="col-11 col-lg-6  col-md-6  col-sm-9">
            <div class="card my_apply_myform">
                <div class="card-header d-flex align-items-center">
                    <h4>Adminssion Form</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                <label for="register-username" class="label-material">Username</label>
                            </div>
                            <div class="form-group-material">
                                <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                <label for="register-email" class="label-material">Email </label>
                            </div>
                            <div class="form-group-material">
                                <input id="register-password" type="password" name="registerPassword" required class="input-material">
                                <label for="register-password" class="label-material">Password</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin: auto 40%">
                            <input type="submit" value="Signin" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="border-radius: 10px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
-->

    <!--collaps-->

     <div class="container">
      <div class="row justify-content-md-center" style="margin-bottom: 20px;">
        <h2>Apply For Admission</h2>
     </div>
  <div id="accordion">
    <div class="card my_apply_myform">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Personal Information
        </a>
      </div>
      <div id="collapseOne" class="collapse show" >
        <div class="card-body">
          <div class="row">
        <div class="col-12 col-lg-12  col-md-12  col-sm-12">
            
                
                <div class="card-body">
                    <form action="pages/students/admission_form_lib.php" method="post" enctype="multipart/form-data" >
                        <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start-->
                            
                           <div class="row">
                            <div class="col-lg-6 col-md-6  col-sm-6">
                            <div class="form-group-material">
                                <input id="student_f_name" type="text" name="s_f_name" required class="input-material">
                                <label for="student_f_name" class="label-material">Student First Name</label>
                            </div>

                            </div>
                    <!--        <div class="col-lg-6 col-md-6  col-sm-4">
                            <div class="form-group-material">
                                <input id="student_m_name" type="text" name="s_m_name" required class="input-material">
                                <label for="student_m_name" class="label-material">Student middle Name</label>
                            </div>
                            </div> -->
                            <div class="col-lg-6 col-md-6  col-sm-6">
                            <div class="form-group-material">
                                <input id="student_l_name" type="text" name="s_l_name" required class="input-material">
                                <label for="student_l_name" class="label-material">Student Last Name</label>
                            </div>
                            </div>
                            </div>

                            <!--student name closs-->
                            <!--father mother name start-->
                            <div class="row">
                             <div class="col-lg-6 col-md-6  col-sm-4">
                              <div class="form-group-material">
                                <input id="father_name" type="text" name="father_name" required class="input-material">
                                <label for="father_name" class="label-material">Father Name</label>
                              </div>
                             </div>
                            <div class="col-lg-6 col-md-6  col-sm-4">
                            <div class="form-group-material">
                                <input id="mother_name" type="text" name="mother_name" required class="input-material">
                                <label for="mother_name" class="label-material">Mother Name</label>
                            </div>
                            </div>
                            </div>
                            <hr>
                            <!--father mother name closs-->

                            <!-- gender start-->
                      <div class="row">
                        <div class="col-lg-4 col-sm-4 col-mb-4">
                        <div class="form-group-material i-checks row">
                        <div class="col-lg-12 col-sm-12 col-mb-12">
                        <label class="label-material">Gender</label>
                        </div>
                        <div class="ol-lg-12 col-sm-12 col-mb-12">
                          <input id="male" type="radio" value="male" name="gender" class="form-control-custom radio-custom" checked>
                          <label for="male">Male</label>
                          <input id="female" type="radio" value="female" name="gender" class="form-control-custom radio-custom">
                          <label for="female">Female</label>
                          <input id="other" type="radio" value="other" name="gender" class="form-control-custom radio-custom">
                          <label for="other">Other</label>
                        </div>
                        </div>
                        </div>


                         <!-- gender closs-->

                         <!--birth date  start-->
                    <div class="col-lg-8 col-sm-8 col-mb-8">
                    <div class="form-group-material">
                      <div class="col-lg-12 col-sm-12 col-mb-12">
                        <label class="label-material">Date Of Birth</label>
                      </div>
                      <div class="col-sm-10">
                  <div class="row">
  <!--day strat-->  
                  <div class="col-md-4">
                   <select name="day" class="form-control">
                    <option>DD</option>
                   <?php
                      for($i=1;$i<=31;$i++){
                          
                          if(date("d")==$i){
                            echo "<option selected value='$i'>$i</option>";
                          }else{
                            echo "<option value='$i'>$i</option>";
                          }
                      }
                   ?>
                   </select>
                   
                  </div>
  <!--day closs-->                        
<div class="col-md-4">
 <select name="month" class="form-control">
 <!--month start-->
<option>MM</option>
 <?php
    
    $months=array(1=>"January",2=>"February",3=>"March",4=>"April",5=>"May",6=>"June",7=>"July",8=>"August",9=>"September",10=>"October",11=>"November",12=>"December");
   foreach($months as $key=>$value){
        if(date("m")==$key){
          echo "<option value='$key' selected>$value</option>";
        }else{
          echo "<option value='$key'>$value</option>";
        }
    }
 ?>
<!--start closs-->
 </select>
</div>

<div class="col-md-4">
<select name="year" class="form-control">
 <!--month-->
 <option>YYYY</option>
    <?php
    for($i=date("Y")-50;$i<=date("Y")+1;$i++){
        
        if(date("Y")==$i){
          echo "<option selected value='$i'>$i</option>";
        }else{
          echo "<option value='$i'>$i</option>";
        }
    }
   ?>
 <!--month  closs-->
</select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

                         <!--birth date  closs-->
                         <!--phone and married  start-->
                    <hr>
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="email" type="text" name="s_email" required class="input-material">
                                <label for="s_email" class="label-material">Email</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="phone" type="text" name="s_phone" required class="input-material">
                                <label for="phone" class="label-material">Phone </label>
                            </div>
                      </div>
                    </div>
                        <hr>
                        <!--phone and married  closs-->

                        <!--national id and quota  start-->
              <div class="row">

                 <div class="col-lg-6 col-sm-6 col-mb-6">
                    <div class="form-group-material row">
                       <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <label class="label-material">Quota</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="quota" class="form-control" id="quota">
                                  <option>Quota</option>
                     <?php
                    // $db = new mysqli("localhost","root","","test");
                     $quota = $db->query("select id,name from quota");
                     while(list($id,$name)=$quota->fetch_row()){
                     echo "<option value='$name'>$name</option>";
                     
                   }
                 ?>

                               </select>
                              </div> 
                            </div>                       
                            <div class="col-md-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Nationality</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="country" class="form-control">
                                      <option>country</option>

                   <?php
                    // $db = new mysqli("localhost","root","","test");
                     $add_countries = $db->query("select id,name from country");
                     while(list($id,$name)=$add_countries->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
                               </select>
                               </div>
                            </div>
                        </div>
                       </div>
                            
                    </div>
                 </div>

                        
                        

                        <div class="col-lg-6 col-sm-6 col-mb-6">
                          <div class="form-group-material i-checks row">
                            <div class="col-lg-12 col-sm-12 col-mb-12">
                            <label class="label-material">Marital Status</label>
                            </div>
                            <div class="ol-lg-12 col-sm-12 col-mb-12">
                              <input id="married" type="radio" value="married" name="marital_status" class="form-control-custom radio-custom" checked>
                              <label for="married">Married</label>
                              <input id="unmarried" type="radio" value="unmarried" name="marital_status" class="form-control-custom radio-custom">
                              <label for="unmarried">Unmarried</label>
                              <input id="divorce" type="radio" value="divorce" name="marital_status" class="form-control-custom radio-custom">
                              <label for="divorce">Divorce</label>
                              <input id="Marital_other" type="radio" value="other" name="marital_status" class="form-control-custom radio-custom">
                              <label for="Marital_other">Other</label>
                            </div>
                          </div>
                        </div>
                   </div>
                        <hr>

                        <!--national id and quota   start-->
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="nid_number" type="text" name="nid_number" required class="input-material">
                                <label for="nid_number" class="label-material">National ID Number</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="religion" type="text" name="religion" required class="input-material">
                                <label for="religion" class="label-material">Religion </label>
                            </div>
                      </div>
                 </div>
                 <hr>
<!--user , password start-->
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="s_username" type="text" name="s_username" required class="input-material">
                                <label for="s_username" class="label-material">Username</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="password" type="text" name="s_password" required class="input-material">
                                <label for="password" class="label-material">Password </label>
                            </div>
                      </div>
                 </div>
                 <hr>
<!--user , password closs-->

<!-- parmenent address start-->
<h2>Parmenent Address</h2>
<hr>
 <div class="row">

<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-lg-6 col-sm-12 col-mb-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">division</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="par_division" class="form-control" id="division">
                 <option>division</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $add_division = $db->query("select id,name from divisions");
                     while(list($id,$name)=$add_division->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">district</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="par_district" class="form-control" id="district">
                     <option>district</option>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<div class="row">
<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">police_station</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="par_police_station" class="form-control" id="police_station">
                 <option>police station</option>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">post_office</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="par_post_office" class="form-control" id="post_office">
                     <option>post office</option>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="village_road" type="text" name="par_village_road" required class="input-material">
                                <label for="village_road" class="label-material">village / road</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="house" type="text" name="par_house" required class="input-material">
                                <label for="house" class="label-material">house Number</label>
                            </div>
                      </div>
                </div>
                <hr>
<!-- parmenent address closs-->

<!--present address strate-->
<h2>Present Address</h2>
<hr>
<div class="row">

<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-lg-6 col-sm-12 col-mb-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">division</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="pre_division" class="form-control" id="pre_division">
                 <option>division</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $add_division = $db->query("select id,name from divisions");
                     while(list($id,$name)=$add_division->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">district</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="pre_district" class="form-control" id="pre_district">
                     <option>district</option>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<div class="row">
<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">police_station</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="pre_police_station" class="form-control" id="pre_police_station">
                 <option>police station</option>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">post_office</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="pre_post_office" class="form-control" id="pre_post_office">
                     <option>post office</option>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="village_road" type="text" name="pre_village_road" required class="input-material">
                                <label for="village_road" class="label-material">village / road</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="house" type="text" name="pre_house" required class="input-material">
                                <label for="house" class="label-material">house Number</label>
                            </div>
                      </div>
                </div>
                <hr>

<!--present address closs-->
<!--image strate-->
                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">

                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label for="s_photo" class="label-material">photo</label>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-mb-6">
                                <input type="file" onchange="previewFile()" name="s_photo" required >
                                </div>

                            </div>
                      </div>
 <!--just privew start--> 
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <img src="default.png" height="250" width="250" alt="Image preview..." id="s_photo" class="img-fluid rounded-circle">
                            </div>
  <script>
   function previewFile(){
       var preview = document.querySelector('#s_photo'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           file.preview.src = '<img src="img/new/students/apply/default.png" />';
       }
  }

  previewFile();  //calls the function named previewFile()

  </script>

                      </div>
<!--just privew closs-->  
                </div>

                <hr>

<!--image closs-->
     
                    
                </div>
            
        </div>
    </div>
        </div>
      </div>
    </div>






<!--==================2nd card===================-->    
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Academic Information
      </a>
      </div>
      <div id="collapseTwo" class="collapse show" >
        <div class="card-body">
          <!--=============SSC start============-->

<h2>SSC or Equivalent Level</h2>
<hr>
 <div class="row">

<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-lg-6 col-sm-12 col-mb-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">Examination Name</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="ssc" class="form-control" id="ssc">
                 <option>Select Examination</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $background_exam_name = $db->query("select id,name from background_exam_name");
                     while(list($id,$name)=$background_exam_name->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">Board</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="ssc_board" class="form-control" id="ssc_board">
                     <option>Select Board</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $ac_board = $db->query("select id,name from ac_board");
                     while(list($id,$name)=$ac_board->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<div class="row">
<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">Passing Year</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="ssc_exam_year" class="form-control" id="ssc_exam_year">
                 <!--month-->
 <option>YYYY</option>
    <?php
    for($i=date("Y")-5;$i<=date("Y")+1;$i++){
        
        if(date("Y")==$i){
          echo "<option selected value='$i'>$i</option>";
        }else{
          echo "<option value='$i'>$i</option>";
        }
    }
   ?>
 <!--month  closs-->
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">Group</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="ssc_group" class="form-control" id="ssc_group">
                       <option>Select Group</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $ac_group = $db->query("select id,name from ac_group");
                     while(list($id,$name)=$ac_group->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="ssc_roll" type="text" name="ssc_roll" required class="input-material">
                                <label for="ssc_roll" class="label-material">Roll Number</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="ssc_registration" type="text" name="ssc_registration" required class="input-material">
                                <label for="ssc_registration" class="label-material">Registration Number</label>
                            </div>
                      </div>
                </div>

                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="ssc_with_optional" type="text" name="ssc_with_optional" required class="input-material">
                                <label for="ssc_with_optional" class="label-material">With Optional Gpa</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="ssc_without_optional" type="text" name="ssc_without_optional" required class="input-material">
                                <label for="ssc_without_optional" class="label-material">Without Optional Gpa</label>
                            </div>
                      </div>
                </div>
                <hr>
<!--================SSC closs==========-->

         <!--=============HSC start============-->

<h2>HSC or Equivalent Level</h2>
<hr>
 <div class="row">

<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-lg-6 col-sm-12 col-mb-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">Examination Name</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="hsc" class="form-control" id="hsc">
                 <option>Select Examination</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $background_exam_name = $db->query("select id,name from background_exam_name");
                     while(list($id,$name)=$background_exam_name->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">Board</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="hsc_board" class="form-control" id="hsc_board">
                     <option>Select Board</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $ac_board = $db->query("select id,name from ac_board");
                     while(list($id,$name)=$ac_board->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<div class="row">
<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">Passing Year</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="hsc_exam_year" class="form-control" id="hsc_exam_year">
                 <!--month-->
 <option>YYYY</option>
    <?php
    for($i=date("Y")-5;$i<=date("Y")+1;$i++){
        
        if(date("Y")==$i){
          echo "<option selected value='$i'>$i</option>";
        }else{
          echo "<option value='$i'>$i</option>";
        }
    }
   ?>
 <!--month  closs-->
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">Group</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="hsc_group" class="form-control" id="hsc_group">
                       <option>Select Group</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $ac_group = $db->query("select id,name from ac_group");
                     while(list($id,$name)=$ac_group->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="hsc_roll" type="text" name="hsc_roll" required class="input-material">
                                <label for="hsc_roll" class="label-material">Roll Number</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="hsc_registration" type="text" name="hsc_registration" required class="input-material">
                                <label for="hsc_registration" class="label-material">Registration Number</label>
                            </div>
                      </div>
                </div>

                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="hsc_with_optional" type="text" name="hsc_with_optional" required class="input-material">
                                <label for="hsc_with_optional" class="label-material">With Optional Gpa</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="hsc_without_optional" type="text" name="hsc_without_optional" required class="input-material">
                                <label for="hsc_without_optional" class="label-material">without Optional Gpa</label>
                            </div>
                      </div>
                </div>
                <hr>
<!--================HSC closs==========-->

<!--===============SUBJECT CHOICE START==========-->
<h2>SELECT YOUR SUBJECT</h2>
<hr>
 <div class="row">

<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-lg-6 col-sm-12 col-mb-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">1st Choice</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="department_1" class="form-control" id="department_1">
                 <option>Select First</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                     $department = $db->query("select id,name from department");
                     while(list($id,$name)=$department->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                     
                   }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">2nd Choice</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="department_2" class="form-control" id="department_2">
                 <option>Select</option>
                 
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<div class="row">
<div class="col-lg-12 col-sm-12 col-mb-12">
   <div class="form-group-material row">
      <div class="col-sm-10">
       <div class="row">
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <label class="label-material">3rd Choice</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="department_3" class="form-control" id="department_3">
                 <option>Select</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                   //  $department = $db->query("select id,name from department");
                   //  while(list($id,$name)=$department->fetch_row()){
                     echo "<option value='$id'>$name</option>";
                   //  
                  // }
                 ?>
              </select>
             </div> 
           </div>                       
           <div class="col-md-6">
             <div class="col-lg-12 col-sm-12 col-mb-12">
               <label class="label-material">4th Choice</label>
             </div>
             <div class="col-lg-12 col-sm-12 col-mb-12">
              <select name="department_4" class="form-control" id="department_4">
                 <option>Select</option>
                  <?php
                    // $db = new mysqli("localhost","root","","test");
                   //  $department = $db->query("select id,name from department");
                   //  while(list($id,$name)=$department->fetch_row()){
                   //  echo "<option value='$id'>$name</option>";
                     
                  // }
                 ?>
              </select>
              </div>
           </div>
       </div>
      </div>
           
   </div>
</div>
</div>


<!--================SUBJECT CHOICE closs==========-->
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          GUARDIAN INFORMATION
        </a>
      </div>
      <div id="collapseThree" class="collapse show" >
        <div class="card-body">
          <!--===========guardian start=========-->

                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_name" type="text" name="g_name" required class="input-material">
                                <label for="g_name" class="label-material">Guardian name</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_phone" type="text" name="g_phone" required class="input-material">
                                <label for="g_phone" class="label-material">Guardian Phone</label>
                            </div>
                      </div>
                </div>
                <hr>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_email" type="text" name="g_email" required class="input-material">
                                <label for="g_email" class="label-material">Guardian Email</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                      <select name="g_relation" class="form-control" id="relation">
                 
                 <option selected>Relation</option>
                <option value="mother">Mother</option>
                <option value="father">Father</option>
                <option value="spouse">Spouse</option>
                <option value="brother">Brother</option>
                <option value="sister">Sister</option>
                <option value="other">other</option>
              </select>
                      </div>
                </div>
                <hr>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_occupation" type="text" name="g_occupation" required class="input-material">
                                <label for="g_occupation" class="label-material">Guardian Occupation</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_income" type="text" name="g_income" required class="input-material">
                                <label for="g_income" class="label-material">Monthly Income</label>
                            </div>
                      </div>
                </div>
                <hr>


                <div class="row">
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_username" type="text" name="g_username" required class="input-material">
                                <label for="g_username" class="label-material">Guardian Username</label>
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-mb-6">
                            <div class="form-group-material i-checks ">
                                <input id="g_password" type="text" name="g_password" required class="input-material">
                                <label for="g_password" class="label-material">Guardian Password</label>
                            </div>
                      </div>
                </div>
                <hr>


          <!--===========guardian start=========-->

                 <div class="row justify-content-md-center">
                      <div class="col-lg-4 col-sm-4 col-mb-4">
                            <div class="form-group-material i-checks ">
                                <input id="aplly_submit" type="submit" name="aplly_submit" required class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="SUBMIT">
                                
                            </div>
                      </div>
                 </div>
        </div>
      </div>
    </div>

    </form>
  </div>
</div>

<?php
/*
date_default_timezone_set ("Asia/Dhaka");
$date=new DateTime("now") ;
echo $date->format('d-m-y h:m');
echo "<br>";
// after 10 days is set autometicaly
$date=$date->add(new DateInterval('P10D'));
echo $date->format('d-m-y ');
echo "<br>";
$date=$date->add(new DateInterval('P1Y3M5D'));
echo $date->format('m-d-y');


echo "<br>";
$date=$date->add(new DateInterval('P1Y3M5DT4H5M12S'));
echo $date->format('m-d-y h:m:s');
*/
?>
<!--
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="address_ajax.js"></script>
-->
