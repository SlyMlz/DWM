
<?php
require('Database.php');
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class DbFunction
{

	function login($loginid, $password)
	{

		if (!ctype_alpha($loginid) || !ctype_alpha($password)) {

			echo "<script>alert('Either LoginId or Password is Missing')</script>";
		} else {
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
			$stmt = $mysqli->prepare($query);
			if (false === $stmt) {

				trigger_error("Error: " . mysqli_connect_error(), E_USER_ERROR);
			} else {

				$stmt->bind_param('ss', $loginid, $password);
				$stmt->execute();
				$stmt->bind_result($loginid, $password);
				$rs = $stmt->fetch();
				if (!$rs) {
					echo "<script>alert('Invalid Details')</script>";
					header('location:login.php');
				} else {

					header('location:add-proyecto.php');
				}
			}
		}
	}

	function create_proyecto($cshort, $cfull, $cdate, $ruta, $nombre)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "insert into tbl_proyecto(cshort, cfull, cdate, ruta, nombre)values(?,?,?,?,?)";
		$stmt = $mysqli->prepare($query);
		if (false === $stmt) {
			trigger_error("Error: " . mysqli_connect_error(), E_USER_ERROR);
		} else {

			$stmt->bind_param('sssss', $cshort, $cfull, $cdate, $ruta, $nombre);
			$stmt->execute();
			echo "<script>alert('proyecto añadido exitosamente')</script>";
			//header('location:login.php');

		}
	}

	function create_autores($cshort, $cfull, $dat1, $dat2, $dat3, $dat4)
	{

		if ($cshort == "") {

			echo "<script>alert('Select  Course Short Name')</script>";
		} else if ($cfull == "") {

			echo "<script>alert('Select  Course Full Name')</script>";
		} else {


			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into autores(cshort,cfull,dat1,dat2,dat3,dat4)values(?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			if (false === $stmt) {

				trigger_error("Error in query: " . mysqli_connect_error(), E_USER_ERROR);
			} else {

				$stmt->bind_param('ssssss', $cshort, $cfull, $dat1, $dat2, $dat3, $dat4);
				$stmt->execute();
				echo "<script>alert('Autor añadido correctamente')</script>";
			}
		}
	}

	function showproyecto()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM tbl_proyecto ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showproyecto1($cid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM tbl_proyecto  where cid='" . $cid . "'";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showcontenido()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM contenido ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}


	function showSession()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM session  ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showcontenido1($sid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM contenido where subid='$sid' ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}


	function create_contenido($cshort, $cfull, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7)
	{

		if ($cshort == "") {

			echo "<script>alert('Select  proyecto Short Name')</script>";
		} else if ($cfull == "") {

			echo "<script>alert('Select  proyecto Full Name')</script>";
		} else {


			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into contenido(cshort,cfull,sub1,sub2,sub3,sub4,sub5,sub6,sub7)values(?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			if (false === $stmt) {

				trigger_error("Error: " . mysqli_connect_error(), E_USER_ERROR);
			} else {

				$stmt->bind_param('sssssssss', $cshort, $cfull, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7);
				$stmt->execute();
				echo "<script>alert('Contenido guardado exitosamente')</script>";
			}
		}
	}

	function create_calificacion($cshort, $cfull, $cal1, $cal2, $cal3, $cal4, $cal5, $cal6, $cal7, $cal8, $cal9, $cal10, $cal11)
	{

		if ($cshort == "") {

			echo "<script>alert('Select  proyecto Short Name')</script>";
		} else if ($cfull == "") {

			echo "<script>alert('Select  proyecto Full Name')</script>";
		} else {


			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into calificacion (cshort,cfull,cal1,cal2,cal3,cal4,cal5,cal6,cal7,cal8,cal9,cal10,cal11)values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			if (false === $stmt) {

				trigger_error("Error in query: " . mysqli_connect_error(), E_USER_ERROR);
			} else {

				$stmt->bind_param('sssssssssssss', $cshort, $cfull, $cal1, $cal2, $cal3, $cal4, $cal5, $cal6, $cal7, $cal8, $cal9, $cal10, $cal11);
				$stmt->execute();
				echo "<script>alert('Calificación agregada exitosamente')</script>";
			}
		}
	}


	function showCountry()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM countries ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}
	function showStudents()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM registration ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showStudents1($id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM registration  where id='" . $id . "'";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function register(
		$cshort,
		$cfull,
		$fname,
		$mname,
		$lname,
		$gender,
		$gname,
		$ocp,
		$income,
		$category,
		$ph,
		$nation,
		$mobno,
		$email,
		$country,
		$state,
		$city,
		$padd,
		$cadd,
		$board1,
		$board2,
		$roll1,
		$roll2,
		$pyear1,
		$pyear2,
		$sub1,
		$sub2,
		$marks1,
		$marks2,
		$fmarks1,
		$fmarks2,
		$session
	) {

		$db = Database::getInstance();
		$mysqli = $db->getConnection();

		//	echo $session;exit;
		$query = "INSERT INTO `registration` (`proyecto`, `contenido`, `fname`, `mname`, `lname`, `gender`, `gname`, `ocp`,
			`income`, `category`, `pchal`, `nationality`, `mobno`, `emailid`, `country`, `state`, `dist`, 
			`padd`, `cadd`, `board`, `board1`,`roll`,`roll1`,`pyear`,`yop1`,`sub`,`sub1`,`marks`,`marks1`,
			`fmarks`,`fmarks1`,`session`,regno) 
			VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$reg = rand();
		$stmt = $mysqli->prepare($query);
		if (false === $stmt) {

			trigger_error("Error in query: " . mysqli_connect_error(), E_USER_ERROR);
		} else {

			$stmt->bind_param(
				'sssssssssssssssssssssssssssssssss',
				$cshort,
				$cfull,
				$fname,
				$mname,
				$lname,
				$gender,
				$gname,
				$ocp,
				$income,
				$category,
				$ph,
				$nation,
				$mobno,
				$email,
				$country,
				$state,
				$city,
				$padd,
				$cadd,
				$board1,
				$board2,
				$roll1,
				$roll2,
				$pyear1,
				$pyear2,
				$sub1,
				$sub2,
				$marks1,
				$marks2,
				$fmarks1,
				$fmarks2,
				$session,
				$reg
			);
			$stmt->execute();
			echo "<script>alert('Successfully Registered , your registration number is $reg')</script>";
			//header('location:login.php');

		}
	}


	function edit_proyecto($cshort, $cfull, $udate, $id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//echo $cshort.$cfull.$udate.$id;exit;
		$query = "update tbl_proyecto set cshort=?,cfull=? ,update_date=? where cid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('sssi', $cshort, $cfull, $udate, $id);
		$stmt->execute();
		echo '<script>';
		echo 'alert("proyecto Updated Successfully")';
		echo '</script>';
	}


	function edit_contenido($sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $udate, $id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "update contenido set sub1=?,sub2=? ,sub3=?,sub4=?,sub5=?,sub6=?,sub7=?,update_date=? where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('ssssssi', $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $udate, $id);
		$stmt->execute();
		echo '<script>';
		echo 'alert("contenido Updated Successfully")';
		echo '</script>';
	}

	function edit_std(
		$cshort,
		$cfull,
		$fname,
		$mname,
		$lname,
		$gender,
		$gname,
		$ocp,
		$income,
		$category,
		$ph,
		$nation,
		$mobno,
		$email,
		$country,
		$state,
		$city,
		$padd,
		$cadd,
		$board1,
		$board2,
		$roll1,
		$roll2,
		$pyear1,
		$pyear2,
		$sub1,
		$sub2,
		$marks1,
		$marks2,
		$fmarks1,
		$fmarks2,
		$id
	) {
		// echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "update registration set proyecto=?,contenido=?,fname=?,mname=?,lname=?,gender=?,gname=?,ocp=?
		, income=?,category=?,pchal=?,nationality=?,mobno=?,emailid=?,country=?,state=?,dist=?
		,padd=?,cadd=?,board=?,roll=?,pyear=?,sub=?,marks=?,fmarks=?,board1=?,roll1=?,yop1=?,sub1=?
		,marks1=?,fmarks1=? where id=?";
		//echo $query;
		$stmt = $mysqli->prepare($query);
		if (false === $stmt) {

			trigger_error("Error in query: " . mysqli_connect_error(), E_USER_ERROR);
		}

		$rc = $stmt->bind_param(
			'sssssssssssssssssssssssssssssssi',
			$cshort,
			$cfull,
			$fname,
			$mname,
			$lname,
			$gender,
			$gname,
			$ocp,
			$income,
			$category,
			$ph,
			$nation,
			$mobno,
			$email,
			$country,
			$state,
			$city,
			$padd,
			$cadd,
			$board1,
			$board2,
			$roll1,
			$roll2,
			$pyear1,
			$pyear2,
			$sub1,
			$sub2,
			$marks1,
			$marks2,
			$fmarks1,
			$fmarks2,
			$id
		);

		//echo $rc;
		if (false === $rc) {

			die('bind_param() failed: ' . htmlspecialchars($stmt->error));
		}
		$rc = $stmt->execute();

		if (false == $rc) {
			die('execute() failed: ' . htmlspecialchars($stmt->error));
		} else {
			echo '<script>';
			echo 'alert(" Successfully Updated")';
			echo '</script>';
		}
	}


	function del_proyecto($id)
	{

		//  echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from tbl_proyecto where cid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('s', $id);
		$stmt->execute();
		echo "<script>alert('proyecto has been deleted')</script>";
		echo "<script>window.location.href='view-proyecto.php'</script>";
	}

	function del_std($id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from registration where id=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "<script>alert('One record has been deleted')</script>";
		echo "<script>window.location.href='view-proyecto.php'</script>";
	}

	function del_contenido($id)
	{

		//echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from contenido where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "<script>alert('contenido has been deleted')</script>";
		// echo "<script>window.location.href='view-proyecto.php'</script>";
	}
}

?>
		
		
		
				