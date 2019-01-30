 <?php //echo base_url() index.php/event/client/Client_controller ;?>
 <?php 
  // foreach($event_create['category']->result_array() as $row){   
    
  //       // echo $row["name"]."<br/>";

     
  //      }
   


 // id, ticket_type, event_id, s_qty, s_amount, s_date, user_id, discount

            foreach($purchase_ticket_view['ticket_event']->result_array() as $ticket_event_row){
               
                 // echo  $ticket_event["ticket_type"];
                }
  //id, e_name, start_date_time, end_date_time, vanue_id, decorator_id, client_id, user_id, e_type, employee_id, c_date, up_date, price_type_id, e_title, e_category, location, total_attendance

                foreach($purchase_ticket_view['event']->result_array() as $event_row){
               
                 // echo  $ticket_event["e_name"];
                }

                foreach($purchase_ticket_view['venue_client']->result_array() as $venue_client_row){
               
                 // echo  $venue_client_row["vanue_name"];
                 // echo  $venue_client_row["client_name"];
                }
//id, name, price, qty
                foreach($purchase_ticket_view['ticket_type_obj']->result_array() as $ticket_type_row){
                }


 ?>

 <div class="container">
  <br>
  <div id="accordion">
    <div class="row">
      
  <!--Show event tables -->

      <div class="col-12 col-lg-12  col-md-12  col-sm-12">
         <div class="col-lg-12">
                <div class="card my_apply_myform">
                  <div class="container">
                    <div class="row justify-content-center">
                      
                        <div class="card-header row ">
                          <h3><?php echo $event_row["e_name"]; ?></h3>
                        </div>
                      
                    </div>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr class="table-primary">
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Author</th>
                            <th>Venue</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                          </tr>
                        </thead>
                            <?php
                              echo '<tbody> <tr class="table-light">';

                                  echo  '<td>'.$event_row["id"].'</td>';
                                  echo  '<td>'.$event_row["e_name"].'</td>';
                                  echo  '<td>'.$venue_client_row["client_name"].'</td>';
                                  echo  '<td>'.$venue_client_row["vanue_name"].'</td>';
                                  echo  '<td>'.$event_row["e_title"].'</td>';
                                  echo  '<td>'.$event_row["start_date_time"].'</td>';
                                  echo  '<td>'.$event_row["end_date_time"].'</td>';
                               
                              echo '</tr></tbody>'; 

                            ?>
                        
                      </table>
                    </div>
                    <!-- container start -->
                      <div class="container">
                        <div class="row">
                          <div class="col-6">
                                <div class="container">
                                <div class="row rounded border" style="padding: 5px;box-sizing: border-box;">
                                  <div class="col-6">
                                    <strong>Ticket Type :</strong>
                                  </div>
                                  <div class="col-6">
                                    <p><?php echo $ticket_type_row["name"]; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <strong>Ticket Price :</strong>
                                  </div>
                                  <div class="col-6">
                                    <p><?php echo $ticket_type_row["price"]; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <strong>Ticket Quantity :</strong>
                                  </div>
                                  <div class="col-6">
                                    <p><?php echo $ticket_event_row["s_qty"]; ?></p>
                                  </div>

                                </div>
                              </div>
                          </div>
                          <div class="col-6">
                                <div class="container">
                                  <div class="row rounded border" style="padding: 5px;box-sizing: border-box;">
                                    <div class="col-6">
                                      <strong>Totol Amount :</strong>
                                    </div>
                                    <div class="col-6">
                                      <p><?php echo $ticket_event_row["s_amount"]; ?></p>
                                    </div>

                                    <div class="col-6">
                                      <strong>Purchese Date :</strong>
                                    </div>
                                    <div class="col-6">
                                      <p><?php echo $event_row["location"]; ?></p>
                                    </div>

                                    <div class="col-6">
                                      <strong>Discount Amount :</strong>
                                    </div>
                                    <div class="col-6">
                                      <p><?php echo $ticket_event_row["discount"]; ?></p>
                                    </div>

                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    <!-- container closs -->
                  </div>
                </div>
         </div>
        <!-- card class closs -->
     </div>
    <!--2nd card  closs-->


        
  </div> <!--row closs-->
 </div><!--according closs-->
</div>













