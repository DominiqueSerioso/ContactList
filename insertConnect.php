<?php
    $Name = $_POST['name'];
    $ContactNo = $_POST['CPnumber'];
    $Email = $_POST['Email'];
    $user = 'root';
    $pass = '';
    
    $conn = new mysqli('localhost' , $user , $pass , 'contactlist') or die("Unable to connect");
	
	if($conn-> connect_error)
	{
		die("connection failed;". $conn-> connect_error);
		
	}
   

    $sql = "INSERT INTO person (Name,ContactNo,Email)
                    Values('".$Name."', '".$ContactNo."', '".$Email."')";
    
    if($conn -> query($sql) === TRUE)
	{
        echo '<link href="main.css" rel="stylesheet"/>';
        echo '<script> alert("Data Added") </script>';
        echo '<button><a href="AddNewContact.php">BACK</a></button>';
        echo '<h1> Data Added Successfully </h1>';
	}
	else
	{
		echo '<script> alert("Data Not Added") </script>';
    }
    
    $result = mysqli_query($conn, "SELECT * FROM 'person'");
    $conn->close();
?>