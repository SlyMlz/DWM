<?php
	include('dbcontroller.php');
	if(!empty($_POST["id"])) 
	{
		$id=intval($_POST['id']);
		$stmt = $DB_con->prepare("SELECT * FROM states WHERE country_id = :id");
		$stmt->execute(array(':id' => $id));
		?><option selected="selected">Select State</option><?php
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
		<option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['name']); ?></option>
		<?php
		}
		
		
		
	}
	
	if(!empty($_POST["did"])) 
	{
		$id=intval($_POST['did']);
		$stmt = $DB_con->prepare("SELECT * FROM cities WHERE state_id = :id");
		$stmt->execute(array(':id' => $id));
		?><option value="">Select City</option><?php
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
		<option value="<?php echo htmlentities($row['name']); ?>"><?php echo htmlentities($row['name']); ?></option>
		<?php
		}
		
	}
	
	
	if(!empty($_POST["cid"])) 
	{
		$id=intval($_POST['cid']);
		$stmt = $DB_con->prepare("SELECT * FROM calificacion WHERE cshort = :id");
	$stmt->execute(array(':id' => $id));
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	
	echo strtoupper($row['cal1']."+".$row['cal2']."+ ".$row['cal3']."+ ".$row['cal4']."+ ".$row['cal5']."+ ".$row['cal6']."+ ".$row['cal7']."+ ".$row['cal8']."+ ".$row['cal9']."+ ".$row['cal10']."+ ".$row['cal11']); 
	
	}
	
	}
	
	?>		