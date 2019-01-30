
     <div class="container">
      <div class="row justify-content-md-center" style="margin-bottom: 20px;">
        <h2>Apply For Admission</h2>
     </div>
  <div id="accordion">




<!--==================2nd card===================-->    
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




    </form>
  </div>
</div>

