<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM profile WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['uname'])&& isset($_POST['bio'])&& isset($_POST['pno'])&& isset($_POST['addr'])&& isset($_POST['pass'])) {
$name = $_POST['name'];
$uname = $_POST['uname'];
$bio = $_POST['bio'];
$pno = $_POST['pno'];
$addr = $_POST['addr'];
$pass = $_POST['pass'];
$sql = 'UPDATE profile SET name=:name,uname=:uname,bio=:bio,pno=:pno,addr=:addr,pass=:pass WHERE id=:id';
$statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name,':uname'=>$uname,':bio'=>$bio, ':pno' => $pno, ':addr' => $addr,':pass'=>$pass, ':id' => $id])) {
    header("Location:index.php");
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
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
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
<div class="form-group">
          <label for="uname">user name</label>
          <input value="<?= $person->uname; ?>" type="text" name="uname" id="uname" class="form-control">
        </div>
<div class="form-group">
          <label for="bio">BIO</label>
          <input value="<?= $person->bio; ?>" type="text" name="bio" id="bio" class="form-control">
        </div>
        <div class="form-group">
          <label for="pno">phone number</label>
          <input type="text" value="<?= $person->pno; ?>" name="pno" id="pno" class="form-control">
        </div>
<div class="form-group">
          <label for="addr">Address</label>
          <input type="text" value="<?= $person->addr; ?>" name="addr" id="addr" class="form-control">
        </div>
<div class="form-group">
          <label for="pass">Password</label>
          <input type="password" value="<?= $person->pass; ?>" name="pass" id="pass" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Student</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
