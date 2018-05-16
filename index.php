<?php
require 'db.php';
$sql = 'SELECT * FROM profile';
$statement = $connection->prepare($sql);
$statement->execute();
$product = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Students</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
	  <th>ID</th>
          <th>name</th>
          <th>uname</th>
          <th>bio</th>
	  <th>pno</th>
          <th>addr</th>
	  <th>pass</th>  
	  <th>action</th>
	  
        </tr>
        <?php foreach($product as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->uname; ?></td>
	    <td><?= $person->bio; ?></td>
	    <td><?= $person->pno; ?></td>
   	    <td><?= $person->addr; ?></td>
	    <td><?= $person->pass; ?></td>
	    
            <td>
              <a href="edit1.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
