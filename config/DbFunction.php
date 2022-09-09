
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
			echo "proyecto añadido exitosamente";
			//header('location:login.php');

		}
	}

	function create_autores($cshort, $cfull, $dat1, $dat2, $dat3, $dat4)
	{

		if ($cshort == "") {

			echo "Título no puede estar vacio";
		} else if ($cfull == "") {

			echo "Modalidad no puede estar vacio";
		} else if ($dat1 == "") {

			echo "No puede estar vacio";
		} else if ($dat2 == "") {

			echo "No puede estar vacio";
		} else if ($dat3 == "") {

			echo "No puede estar vacio";
		} else if ($dat4 == "") {

			echo "No puede estar vacio";
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
				echo 'Autor añadido correctamente';
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

	function showaut($subid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM autores  where subid='" . $subid . "'";
		$stmt = $mysqli->query($query);
		return $stmt;
	}
	

	function showcalificacion()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM calificacion";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showcalificacion1($sid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM calificacion where subid='" . $sid . "'";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showregistro1($cid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM usuario where idusuario='" . $cid . "'";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showautores()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM autores ";
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

	function showcont($sid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM contenido where subid='$sid' ";
		$stmt = $mysqli->query($query);
		return $stmt;
	}

	function showregistro()
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM usuario ";
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

	function showCourse1($cid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT * FROM tbl_proyecto  where cid='" . $cid . "'";
		$stmt = $mysqli->query($query);
		return $stmt;
	}




	function create_contenido($cshort, $cfull, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7)
	{

		if ($cshort == "") {

			echo "Título no puede estar vacio";
		} else if ($cfull == "") {

			echo "Modalidad no puede estar vacio";
		} else if ($sub1 == "") {

			echo "No puede estar vacio";
		} else if ($sub2 == "") {

			echo "No puede estar vacio";
		} else if ($sub3 == "") {

			echo "No puede estar vacio";
		} else if ($sub4 == "") {

			echo "No puede estar vacio";
		} else if ($sub5 == "") {

			echo "No puede estar vacio";
		} else if ($sub6 == "") {

			echo "No puede estar vacio";
		} else if ($sub7 == "") {

			echo "No puede estar vacio";
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
				echo 'Contenido guardado exitosamente';
			}
		}
	}

	function create_calificacion($cshort, $cfull, $cal1, $cal2, $cal3, $cal4, $cal5, $cal6, $cal7, $cal8, $cal9, $cal10, $cal11)
	{

		if ($cshort == "") {

			echo "Título no puede estar vacio";
		} else if ($cfull == "") {

			echo "Modalidad no puede estar vacio";
		} else if ($cal1 == "") {

			echo "Introducción no puede estar vacio";
		} else if ($cal2 == "") {

			echo "Plantemaiento no puede estar vacio";
		} else if ($cal3 == "") {

			echo "Objetivos no puede estar vacio";
		} else if ($cal4 == "") {

			echo "Referentes no puede estar vacio";
		} else if ($cal5 == "") {

			echo "Metodología no puede estar vacio";
		} else if ($cal6 == "") {

			echo "Resultados no puede estar vacio";
		} else if ($cal7 == "") {

			echo "Conclusiones no puede estar vacio";
		} else if ($cal8 == "") {

			echo "Bibliografía no puede estar vacio";
		} else if ($cal9 == "") {

			echo "Nota no puede estar vacio";
		} else if ($cal10 == "") {

			echo "Aprobado no puede estar vacio";
		} else if ($cal11 == "") {

			echo "Laureada o puede estar vacio";
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
				echo 'Calificación agregada exitosamente';
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


	function edit_proyecto($cshort, $cfull, $cdate, $ruta, $nombre, $cid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//echo $cshort.$cfull.$udate.$id;exit;
		$query = "UPDATE tbl_proyecto set cshort=?,cfull=? ,cdate=? ,ruta=? ,nombre=? where cid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('sssssi', $cshort, $cfull, $cdate, $ruta, $nombre, $cid);
		$stmt->execute();
		echo '<script>';
		echo 'alert("Proyecto actualizado con exito")';
		echo '</script>';
	}

    function edit_actores($dat1, $dat2, $dat3, $dat4, $subid)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//echo $cshort.$cfull.$udate.$id;exit;
		$query = "update autores set dat1=? ,dat2=? , dat3=?, dat4=?  where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('ssssi', $dat1, $dat2, $dat3, $dat4, $subid);
		$stmt->execute();
		echo '<script>';
		echo 'alert("Autor actualizado con exito")';
		echo '</script>';
	} 
	function edit_contenido($sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7,  $id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "update contenido set sub1=?,sub2=? ,sub3=?,sub4=?,sub5=?,sub6=?,sub7=? where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('sssssssi', $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7,  $id);
		$stmt->execute();
		echo '<script>';
		echo 'alert("Contenido actualizado con exito")';
		echo '</script>';
	}

	function edit_calificacion($cal1, $cal2, $cal3, $cal4, $cal5, $cal6, $cal7, $cal8, $cal9, $cal10, $cal11, $subid)
	{
		if ($cal1 == "") {
			echo '<script>';
			echo 'alert("Introduccion no puede estar vacia")';
			echo '</script>';
		} else if ($cal2 == "") {
			echo '<script>';
			echo 'alert("Plantemaiento no puede estar vacio")';
			echo '</script>';
		} else if ($cal3 == "") {
			echo '<script>';
			echo 'alert("Objetivos no puede estar vacio")';
			echo '</script>';
		} else if ($cal4 == "") {
			echo '<script>';
			echo 'alert("Referentes no puede estar vacio")';
			echo '</script>';
		} else if ($cal5 == "") {
			echo '<script>';
			echo 'alert("Metodología no puede estar vacia")';
			echo '</script>';
		} else if ($cal6 == "") {
			echo '<script>';
			echo 'alert("Resultados no puede estar vacio")';
			echo '</script>';
		} else if ($cal7 == "") {
			echo '<script>';
			echo 'alert("Conclusiones no puede estar vacio")';
			echo '</script>';
		} else if ($cal8 == "") {
			echo '<script>';
			echo 'alert("Bibliografía no puede estar vacio")';
			echo '</script>';
		} else if ($cal9 == "") {
			echo '<script>';
			echo 'alert("Nota no puede estar vacio")';
			echo '</script>';
		} else if ($cal10 == "") {
			echo '<script>';
			echo 'alert("Aprobado no puede estar vacio")';
			echo '</script>';
		} else if ($cal11 == "") {
			echo '<script>';
			echo 'alert("Laureada o puede estar vacio")';
			echo '</script>';
		} else{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "update calificacion set cal1=?,cal2=? ,cal3=?,cal4=?,cal5=?,cal6=?,cal7=?, cal8=?, cal9=?, cal10=?, cal11=?  where subid=?";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param('sssssssssssi', $cal1, $cal2, $cal3, $cal4, $cal5, $cal6, $cal7, $cal8, $cal9, $cal10, $cal11, $subid);
			$stmt->execute();
			echo '<script>';
			echo 'alert("Calificacion Actualizada exitosamente")';
			echo '</script>';
		}
	}

	function edit_registro($nom1, $nom2, $ape1, $ape2, $dir, $barrio, $tel, $email,  $idusuario)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "update usuario set nombre1=?, nombre2=?, apellido1=?, apellido2=?, direccion=?, barrio=?, telefonono=?, correo=? where idusuario=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('ssssssssi', $nom1, $nom2, $ape1, $ape2, $dir, $barrio, $tel, $email, $idusuario);
		$stmt->execute();
		echo '<script>';
		echo 'alert("Registro Actualizado exitosamente")';
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
		echo "<script>alert('Eliminando información básica del proyecto')</script>";
		echo "<script>window.location.href='view-proyecto.php'</script>";
	}

	function del_registro($id)
	{

		//  echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from usuario where idusuario=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo '<script>';
		echo 'alert("Registro Eliminado exitosamente")';
		echo '</script>';
	}

	function del_std($id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from registration where id=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "Proyecto eliminado exitosamente";
		//////////////
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from contenido where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "<script>alert('contenido has been deleted')</script>";
	}

	function del_contenido($id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from contenido where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "<script>alert('Eliminando contenido del proyecto')</script>";
		echo "<script>window.location.href='view-proyecto.php'</script>";
	}

	function del_calificacion($id)
	{

		//echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from calificacion where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "Calificacion eliminado exitosamente";
		echo "<script>window.location.href='view-calificacion.php'</script>";
	}

	function del_autores($id)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "delete from autores where subid=?";
		$stmt = $mysqli->prepare($query);
		$stmt->bind_param('i', $id);
		$stmt->execute();
		echo "<script>alert('Eliminando autor con exito')</script>";
		echo "<script>window.location.href='view-autores.php'</script>";
	}
}

?>
		
		
		
				