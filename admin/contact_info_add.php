<?php


include 'includes/headerAdmin.php'; 


?>

<main id="main" class="main">
  
         <form action='inCode/in_code.php'>
    <h1>Create Category</h1>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CONTACT INFO </label>
   <textarea name="contact_info" class="form-control"  id="" cols="30" rows="10"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>
    <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<button type="submit" name="btn" class="btn btn-primary">Create User</button>




</form>


  </main><!-- End #main -->

  <?php
include 'includes/footer.php';
?>