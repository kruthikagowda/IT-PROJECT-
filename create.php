<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['uname'])&& isset($_POST['bio'])&& isset($_POST['pno'])&& isset($_POST['addr'])&& isset($_POST['pass'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$bio = $_POST['bio'];
$pno = $_POST['pno'];
$addr = $_POST['addr'];
$pass = $_POST['pass'];
  $sql = 'INSERT INTO profile(name,uname,bio,pno,addr,pass) VALUES(:name,:uname,:bio,:pno,:addr,:pass)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name,':uname' => $uname,':bio' => $bio, ':pno' => $pno, ':addr' => $addr, ':pass'=>$pass])) {
    $message = 'data inserted successfully';
  }
}

 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Add Student</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
<div class="form-group">
          <label for="uname">User name</label>
          <input type="text" name="uname" id="uname" class="form-control">
        </div>
<div class="form-group">
          <label for="bio">BIO</label>
          <input type="text" name="bio" id="bio" class="form-control">
        </div>
        <div class="form-group">
          <label for="pno">Phone number</label>
          <input type="text" name="pno" id="pno" class="form-control">
        </div>
<div class="form-group">
          <label for="addr">Address</label>
          <input type="text" name="addr" id="addr" class="form-control">
        </div>
<div class="form-group">
          <label for="pass">Password</label>
          <input type="password" name="pass" id="pass" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Submit entry</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
