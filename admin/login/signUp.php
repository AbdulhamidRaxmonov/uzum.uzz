<?php
include 'connect.php';
if(isset($_GET['btn'])){
    $name = $_GET['firstname'];
    $lastname =$_GET['lastname'];
    $email=$_GET['email'];
    $pass=$_GET['password'];
    $add = "INSERT INTO alisher(firstname, lastname, email, password) VALUES  ('$name','$lastname','$email','$pass')";
    $sql = mysqli_query($conn,$add) ;
   if($sql){
    echo  'yozildi';
   }
}
?>
 <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Firstname</label>
    <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="lastname" id="exampleInputPassword2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword3" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword3">
  </div>  <div class="mb-3">
    <label for="exampleInputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword4">
  </div>
  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
  <a name="btn btn-primary" href="edit.php" class="btn btn-primary">edit</a>
  
</form>