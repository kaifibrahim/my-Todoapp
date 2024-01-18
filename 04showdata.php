
<?php

require "01connection.php";

$query = "select * from info";


$res = mysqli_query($con, $query);



if ($res) {

   $kaif=0;
   while ($item = mysqli_fetch_assoc($res)) {
      $kaif++;
      echo "<tr> <td>" . $kaif . "</td>";
      echo " <td>" . $item["name"] . "</td>";
      echo " <td>" . $item["title"] . "</td>";
      echo " <td>" . $item["Description"] . "</td>";
      echo " <td>" . $item["Date"] . "</td>";
      echo " <td><button type='button' data-bs-toggle='modal' data-bs-target='#updateModal' class='btn btn-success update' id=". $item["ID"].">Update</button>
    <button type='button' class='btn btn-danger delete'  id=d". $item["ID"].">Delete</button></td></tr>";
   }
}







?>
