<?php
include 'includes/headerAdmin.php'; 
include '../connect.php';
include 'inCode/in_code.php';



?>
<main id="main" class="main">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Contact_info</th>  
      <th scope="col">Address</th>  
      <th scope="col">Email</th>  
      <th scope="col">Phone</th>  
      <th scope="col">created_at</th>
      <th scope="col" class="me-4">action</th>

    </tr>
  </thead>
  <tbody>
     <?php
        $show = "SELECT * FROM contact_info";
        $query = mysqli_query($conn, $show) or die(mysqli_error($conn));
        

        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        echo "<tr>";
        echo   "<td>".$row['id']. "</td>";  
        echo   "<td>".$row['contact_info']. "</td>";  
        echo   "<td>".$row['address']. "</td>";  
        echo   "<td>".$row['email']. "</td>";  
        echo   "<td>".$row['phone']. "</td>";  
        echo   "<td>".$row['create_at']. "</td>";  
        echo   "<td class=\"d-flex \">
                  <a class=\"btn btn-primary me-2\" href=\"contact_info_edit.php?id=$row[id]\">Edit</a> 
                  <a class=\"btn btn-danger\" href=\"inCode/del.php?id=$row[id]\">Del</a> 
               </td>";  
        echo "</tr>";

        }
     ?>
  </tbody>
</table>
   

  </main><!-- End #main -->

  <?php
include 'includes/footer.php';
?>