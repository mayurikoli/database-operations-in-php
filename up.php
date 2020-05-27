<?php
$conn=mysqli_connect("localhost","root","","phn_student");
$id=$_GET['update'];
echo $id;
if($conn)
{
    $query="SELECT * FROM st WHERE user='$id'";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
}
?>
<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
    <body>
    <form action="up.php" method="post">
    <div class="container">
    <h4>usename:</h4>
    <input type="text" name="user" placeholder="Enter Username" class="form-control" value="<?php echo $data["user"] ;?>" >    
    </div>
    <div class="container">
    <h4>password:</h4>
    <input type="text" name="pass" placeholder="Enter password" class="form-control" value="<?php echo $data["pass"] ;?>" >    
    </div>
    <div class="container">
        <br>
        <input type="submit" name="btn" class="btn btn-info"  > 
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
$pass1=$_POST["pass"];
    echo "$user,$pass1";
    $query="UPDATE st SET pass='$pass1' WHERE user='$user'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "<script>window.alert('data inserted');window.location.href='insert.php'</script>";
    }
}
    mysqli_close($conn);
}
?>