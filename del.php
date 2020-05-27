<?php
$conn=mysqli_connect("localhost","root","","phn_student");
$id=$_GET['delete'];
echo $id;
if($conn)
{
    $query="DELETE FROM st WHERE user='$id'";
    $result=mysqli_query($conn,$query);
    #$data=mysqli_fetch_assoc($result);
    if(result)
    {
       echo "<script>window.alert('data deleted');window.location.href='show.php'</script>";
    }
}
    mysqli_close($conn);
 
    

?>