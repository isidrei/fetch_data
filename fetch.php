<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017/");
$collection = $client->local->students;
$result = $collection->find();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Class Record</title>
</head>
<body>
<div class="card-body">
<h1 style="text-align:center;">Class Record</h1>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Address</th>
      <th scope="col">Program</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Emergency Contact</th>
    </tr>
    </thead>
    <?php
        foreach ($result as $student) {
            ?>
 
                <tbody>
                    <tr>
                  <th scope="row"><?php echo $student ['_id']; ?></th>
                  <td><?php echo $student['studentID']; ?></td>
                 <td><?php echo $student['firstName']; ?></td>
                 <td><?php echo $student['lastName']; ?></td>
                  <td><?php echo $student['birthdate']; ?></td>
                 <td><?php echo $student['address']; ?></td>
                <td><?php echo $student['program']; ?></td>
                 <td><?php echo $student['contactNumber']; ?></td>
                  <td><?php echo $student['emergencyContact']; ?></td>
                   
                    </tr>
                </tbody>
        
                <?php
         }
        ?>
</table>
    </div>
    </div>