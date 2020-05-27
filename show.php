<?php
$conn=mysqli_connect("localhost","root","","phn_student");
if($conn)
{
    $query="SELECT * FROM st";
    $result=mysqli_query($conn,$query);
    
}
?>
<html>
<head>
<title>show</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
     <div class="container">
     <h1 class="bg-info" style="text-align:center;height:50px">Insert Value</h1> 
    </div>
     <div class="container">
     <a href="./insert.php" class="btn btn-primary" >Add Student</a>
    </div><br>
    <div class="container">
<table class="table">
    <tr class="danger">
    <th>username</th>
    <th>password</th>
       <th>Edit Record</th>
        <th>Remove</th>
        
    </tr>
    <?php while($data=mysqli_fetch_assoc($result)){?>
    <tr class="success">
    
    <td><?php echo $data["user"];?></td>
    <td><?php echo $data["pass"]; ?></td>
    <td><a href="./up.php?update=<?php echo $data["user"]; ?>" class="btn btn-success">Update</a></td>
       <td><a href="./del.php?delete=<?php echo $data["user"]; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php } ?>
</table>
        </div>
</body>
</html>