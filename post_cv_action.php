<?php 
    $n_m = $_POST['num'];
	$a_wrd = $_POST['awrd'];
	$l_ink = $_POST['link'];
	$v_olun = $_POST['volun'];
	$i_nter = $_POST['inter'];
	$r_fer=$_POST['refer'];
	$emp =  $_POST['employ'];
	$e_ducation =  $_POST['edu'];
	$s_kill =  $_POST['skill'];
	$langu =  $_POST['lang'];
	$certif = $_POST['certi'];
	
	
    
	
	require_once('db_config.php');

	$sql="Insert into cv VALUES('','$n_m','$a_wrd','$l_ink','$v_olun','$i_nter','$r_fer','$emp','$e_ducation','$s_kill','$langu','$certif')";
	
	//echo $sql;

	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$result = $conn->query($sql);
	
    

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "<script>
				window.alert('Successfully added CV.');
			</script>";
		//header("Location: ../index.php");
		echo "<script>window.location.assign('homepage.php');</script>";
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 


?>