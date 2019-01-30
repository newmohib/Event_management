 <?php //echo base_url() index.php/event/client/Client_controller ;?>
 <?php 
  // foreach($event_create['category']->result_array() as $row){   
    
  //       // echo $row["name"]."<br/>";

     
  //      }


 ?>

 <div class="container">
  <h2>Ticket</h2><br>
  <br>
  <div id="accordion">
    <div class="row justify-content-md-center">
      <div class="col-12 col-lg-10  col-md-12  col-sm-12">

    <div class="card my_apply_myform">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          <h3>Event Ticket Form</h3> 
        </a>
      </div>
      
          
           <div class="col-12 col-lg-12  col-md-12  col-sm-12">
                <div class="card-body">
                   <?php echo form_open("event/ticket/Ticket_controller/purchase_save_contr"); ?>
                    
                      <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start -->


                           <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Event Name</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="event" class="form-control" id="event_id">
                                      <option >Select</option>
                                   <?php
                                    foreach($event_create['event']->result_array() as $row){   

            								        echo "<option value=".$row["id"].">".$row["e_name"]."</option>";
            								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Ticket Type</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="ticket_type" class="form-control" id="ticket_type_id">
                                      <option>Select</option>
                               </select>
                               </div>
                            </div>
                         </div>
                         
                         <div class="row" style="margin-top: 10px;">
                               <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Ticket Price</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="price" class="form-control" id="price">
                                      <option >Select</option>
                                   <?php
                           //          foreach($event_create['transport_name']->result_array() as $row){   

                                   //  echo "<option value=".$row["id"].">".$row["t_name"]."</option>";
                                   // }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Discount</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="discount" class="form-control" id="discount">
                                      <option value="0">0 %</option>
                                      <option value="10">10 %</option>
                                      <option value="15">15 %</option>
                                      <option value="20">20 %</option>
                                      <option value="25">25 %</option>
                                      <option value="50">50 %</option>
                                      <option value="75">75 %</option>
                               </select>
                               </div>
                            </div>
                         </div>
                         

                      <div class="row" style="margin-top: 30px;">
                               <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                  <input id="ticket_qty" type="text" name="ticket_qty" class="form-control input-material">
                                  <label for="ticket_qty" class="label-material">Ticket Quantity</label>
                                </div>
                               </div>
                            <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="password" type="text" name="password" class="form-control input-material" value="<?php echo set_value('password'); ?>" required>
                                    <label for="password" class="label-material">User Password</label>
                               </div>
                           </div>
                      </div>
                   <hr>
                     <div class="row justify-content-md-center">
                          <div class="col-lg-6 col-sm-6 col-mb-6">
                                <div class="form-group-material i-checks ">
                                    <input id="client_signup" type="submit" name="btn_tranport_submit" class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="PURCHASE">
                                </div>
                          </div>
                    </div>  
                  </div>
             </form>
            </div>
       </div>
    <!--card body closs-->  
   </div>
   </div>
  <!--2nd card -->
        
  </div> <!--row closs-->
 </div><!--according closs-->
</div>













