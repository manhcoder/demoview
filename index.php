<?php	 
	$conn = pg_connect("host=ec2-52-21-252-142.compute-1.amazonaws.com dbname=dcle2fpc522se2 user=fmneqfpwrsmfic password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432");
	if(!$conn){echo "Lost Connect";}
 ?>
<?php
						$query = "SELECT * FROM account";
						$rs = pg_query( $conn, $query);
						if( pg_num_rows( $rs ) > 0)
							while( $row = pg_fetch_assoc( $rs )){
					?>
					<tr>
						<td><?= $row['username']?></td>
						<td><?= $row['password'] . "VND"?></td>
					</tr>
?>
