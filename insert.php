<html>
    <head>
        <title>insert into database</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
     <h1 class="bg-info" style="text-align:center;height:50px">Insert Value</h1> 
    </div>
    <form method="post" action="insert.php">
    <div class="container">
        <h4>usename:</h4>
    <input type="text" name="user" placeholder="Enter Username" class="form-control"  >  
    </div>
    <div class="container">
    <h4>password:</h4>
    <input type="password" name="pass" placeholder="Enter Password" class="form-control"  >  
    </div>
    <div class="container"><br>
    
    <input type="submit" name="btn" class="btn btn-info"  > 
        <div class="container">
     <a href="./show.php" class="btn btn-info" style="margin-left:300px;margin-top:-30px" >View STudent List</a>
    </div>
    </div>
    </form>
</body>
    </html>
<?php
$conn=mysqli_connect("localhost","root","","phn_student");
if($conn)
{
if(isset($_POST["btn"]))
{
    $user=$_POST["user"];
$pass=$_POST["pass"];
    #echo "$user,$pass";
    $query="INSERT INTO st(user,pass)VALUES('$user','$pass')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "<script>window.alert('data inserted');window.location.href='insert.php'</script>";
    }
}
    mysqli_close($conn);
}
?>