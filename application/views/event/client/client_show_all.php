<?php

   foreach($client_show_all->result_array() as $row){   

      //  $row["id"];
     //  $row["name"];
     //   $row["email"];
     //   $row["phone"];
     //   $row["address"];
    //    $row["username"];
      //  $row["password"];
     //   $row["create_date"];
    }

?>

<div class="row justify-content-md-center">
  <header> 
  <h1 class="h3 display">Show All Client</h1>
  </header>

  <div class="col-lg-12">
                <div class="card my_apply_myform">
                  <div class="card-header">
                    <h4>Client</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
<?php
   foreach($client_show_all->result_array() as $row){   

        echo '<tbody><tr class="table-light">';

        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["email"].'</td>';
        echo '<td>'.$row["phone"].'</td>';
        echo '<td>'.$row["address"].'</td>';
        echo '<td>'.$row["username"].'</td>';
        echo '<td>'.$row["password"].'</td>';
        echo '<td>'.$row["create_date"].'</td>';
        echo '<td><a href='.base_url().'index.php/event/client/Client_controller/client_update_controller/'.$row["id"].'>Edit</a></td>';
        echo '<td><a href='.base_url().'index.php/event/client/Client_controller/client_delete_controller/'.$row["id"].'>Delete</a></td>';

        echo '</tbody></tr>';

      //  $row["id"];
      //  $row["name"];
       // $row["email"];
      //  $row["phone"];
      //  $row["address"];
       // $row["username"];
       // $row["password"];
      //  $row["create_date"];


    }

?>
                      </table>
                    </div>
                  </div>
                </div>
  </div>
</div>