<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="CSS/style2.css">
<h2>EDIT CUSTOMER RECORD</h2>
	<form method="post">
			<span>Name: </span> <input type="text" name="name" value="<?php echo $row['fullname']; ?>" required><br>
			<span>Telephone: </span> <input type="text" name="telephone" value="<?php echo $row['telephone']; ?>"  required><br>
			<span>Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
			<span>gender: <input type="text" name="gender" value="<?php echo $row['gender']; ?>" required><br>
			<span>breed: </span> <input type="text" name="breed" value="<?php echo $row['breed']; ?>" required><br>
			<span>Appointment_time: </span> <input type="text" name="time" value="<?php echo $row['appointment_time']; ?>" required><br>
			<span>Appointment_date: <input type="date" name="date" value="<?php echo $row['date']; ?>" required><br>
			<span>PetName: <input type="text" name="petName" value="<?php echo $row['petName']; ?>" required><br>
			<input type="submit" name="submit" value="Save" id="save">
		</form>
		<?php 
			if (isset($_POST['submit'])) {
				$name =  $_POST['name'];
                $telephone =  $_POST['telephone'];
                $email =  $_POST['email'];
                $gender =  $_POST['gender'];
                $breed =  $_POST['breed'];
                $appointment_time = $_POST['time'];
                $appointment_date = $_POST['date'];
                $pet_name =  $_POST['petName'];
				
				include 'Config\database_conn.php';
				$sql = "INSERT INTO `customer`(`name`, `telephone`, `email`, `gender`, `breed`, `appointment_time`, `appointment_date`, `pet_name`) VALUES ('$name', '$telephone', '$email', '$gender', '$breed', '$appointment_time', '$appointment_date', '$pet_name')";

				if(mysqli_query($this->db, $sql)){
					header("Location: show.php?RecordAddedSuccessfully");
				}
			}
		 ?>
</body>
</html>