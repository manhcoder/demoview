<?php	 
	$conn = pg_connect("host=ec2-52-21-252-142.compute-1.amazonaws.com dbname=dcle2fpc522se2 user=fmneqfpwrsmfic password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432");
	if(!$conn){echo "Lost Connect";}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
		$sql = "INSERT INTO account(username, password) VALUES ('$username', '$password')";
	if(pg_query($conn, $sql)){
		echo "Add successfuly <br>";
	}else{
		echo"error: " . pg_error($conn);
	}
}
?>
<form method="post">
	<input type="text" name="username" placeholder="enter username" style="width: 80%; height: 5%;">
	<input type="text" name="password" placeholder="enter password" style="width: 80%; height: 5%; float: left;">
	<br><br>
	<input type="submit" name="submit" value="Add" style="width: 40%; height: 5%">
</form>
