<?php
/*
foreach($users->result_array() as $row){   

		    $_id=$row["id"];
		    $_username=$row["username"];
		    $_password=$row["password"];
		    //redirect("login/UserController/location");
		    echo "$_id $_username $_password";
		    echo "<br>";
		    

		}
*/

/*

		foreach($myuser->result_array() as $row){   
    
         echo $row["username"]."<br/>";

     
       }

       foreach($myclient->result_array() as $row){   
    
         echo $row["name"]."<br/>";

     
       }
*/



foreach($result['newclient']->result_array() as $row){   
    
         echo $row["name"]."<br/>";

     
       }

       foreach($result['newuser']->result_array() as $row){   
    
         echo $row["username"]."<br/>";

     
       }

?>
