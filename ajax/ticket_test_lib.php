
<?php
///require_once("../../database/config_database.php");
	$db = new mysqli("localhost","root","","event_2");
	
	if(isset($_POST["event_id"])){
		$event_id=$_POST["event_id"];
		//$event_id=1;
		$event=$db->query("select a.id avialable_id, a.event_id, a.type_id, a.total_qty,t.id t_id,t.name, t.price, t.qty from taicket_available a,ticket_type t where a.event_id='$event_id' and t.id=a.type_id");
      
      //$event2=$db->query("select a.*,t.* from taicket_available a ,ticket_type t");
           $not_available=0;
           echo "<option>Available</option>";
			while( $rows = mysqli_fetch_assoc($event) ) {
				
	           if ($rows['total_qty'] >0) {
	           	echo "<option value=".$rows['t_id'].">".$rows['name']."</option>";
	           }else{

	           	$not_available+=1;
	           	if ($not_available>=5) {
	           		$not='Not Available';
	           		echo "<option>".$not."</option>";
	           	}
	           }
			   

				//echo "$id";
				// echo $rows['name']."<br>";
				// echo $rows['t_id']."<br>";
			}	
		
        

  //       while( $rows = mysqli_fetch_assoc($event) ) {

		//    echo "<option value=".$rows['t_id'].">".$rows['name']."</option>";

		// 	//echo "$id";
		// 	// echo $rows['name']."<br>";
		// 	// echo $rows['t_id']."<br>";
		// }








     //    while ($row = mysqli_fetch_assoc ($event2)) {
	    //    echo  $row["id"];
	    // }	

    // while ($row = mysqli_fetch_assoc ($event)) {
    //    echo  $row["avialable_id"];
    // }




	}


	if(isset($_POST["ticket_type"])){
		$ticket_type_id=$_POST["ticket_type"];
		//$event_id=1;
		//$event=$db->query("select a.id avialable_id, a.event_id, a.type_id, a.total_qty,t.id t_id,t.name, t.price, t.qty from taicket_available a,ticket_type t where a.event_id='$event_id' and t.id=a.type_id");
      
     // $event2=$db->query("select a.*,t.* from taicket_available a ,ticket_type t");
	      $event2=$db->query("select * from ticket_type where id='$ticket_type_id'");
	           $not_available=0;
	           
				while( $rows = mysqli_fetch_assoc($event2) ) {
					
		          // if ($rows['price'] >0) {
		           	echo "<option value=".$rows['price'].">".$rows['price']."</option>";
		         //  }
				   

				}	
		
	}


	// if(isset($_POST["district"])){
	// 	$district_id= $_POST["district"];
	// 	$police_stations=$db->query("select id,name from police_stations where districts_id='$district_id'");
	// 	while(list($id,$name)=$police_stations->fetch_row()){
	// 		echo "<option value='$id'>$name</option>";
	// 		//echo "$id";
	// 	}		
	// }

	
	// if(isset($_POST["police_station"])){
	// 	$police_station_id= $_POST["police_station"];
 //  //   $police_station_id=1;
	// 	$police_stations=$db->query("select id,name from post_offices where police_stations_id='$police_station_id'");
	// 	while(list($id,$name)=$police_stations->fetch_row()){
	// 		echo "<option value='$id'>$name</option>";
	// 		//echo "$id $name<br>";
	// 	}		
	// }


?>