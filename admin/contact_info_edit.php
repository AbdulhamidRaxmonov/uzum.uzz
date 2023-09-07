<?php




include '../connect.php';
include 'inCode/in_code.php';
include 'includes/headerAdmin.php'; 

include 'inCode/edit.php';


?>

<main id="main" class="main">

         <form action="inCode/in_code.php">
    <h1>Create Category</h1>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CONTACT INFO </label>
   <textarea name="contact_info" class="form-control"  id="" cols="30" rows="10"><?php  echo $contact_info ?> </textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>
    <input name="address" type="text" class="form-control" value="<?php  echo $address ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>
    <input name="email" type="email" class="form-control"  value="<?php  echo $email ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category name </label>
    <input name="phone" type="text" class="form-control"  value="<?php  echo $phone ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <input name="id" type="hidden" class="form-control"  value="<?php  echo $id ?>" id="exampleInputEmail1" aria-describedby="emailHelp">

<button type="submit" name="edit" class="btn btn-primary">Create User</button>




</form>


  </main><!-- End #main -->

  <?php
include 'includes/footer.php';
?>