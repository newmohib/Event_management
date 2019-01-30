
  
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

