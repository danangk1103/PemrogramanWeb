<?php

include ('config.php');
$eid = $_GET['eid'];
$approval ="Allowed";
$napproval="Not Allowed";

$view="select * from contact where id = '$eid' ";
$re = mysqli_query($koneksi,$view);
while ($row=mysqli_fetch_array($re))
{
	$id =$row['approval'];

}

if($id=="Not Allowed")
{
	$sql ="UPDATE `contact` SET `approval`= '$approval' WHERE id = '$eid' ";
	if(mysqli_query($koneksi,$sql))
	{
		echo '<script>alert("New Room Added") </script>' ;
		header("Location: messages.php");
	}
}
else {
$sql ="UPDATE `contact` SET `approval`= '$napproval' WHERE id = '$eid' ";
	if(mysqli_query($koneksi,$sql))
	{
		echo '<script>alert("New Room Added") </script>' ;
		header("Location: messages.php");
	}



}
?>