<?php

foreach($students->result_array() as $row){   

    echo $row["id"]."<br/>";
    echo $row["name"]."<br/>";
    echo $row["phone"]."<br/>";
    echo $row["address"]."<br/>";

}

echo 'Total Results: ' . $students->num_rows()."<br/>";



//echo "Hello";
?>