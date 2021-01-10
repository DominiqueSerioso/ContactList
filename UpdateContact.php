<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="main.css" rel="stylesheet"/>
</head>
<body>
    <h1>Update Contact</h1>
    <button><a href="index.php">BACK</a></button><br>
    <center>
        <form action="" method="POST">
            <br>
            <input type="text " name="contact" placeholder="Enter Phone Number to Search"/><br><br>
            <button type="submit" name="search"> SEARCH</button>  
            <button ><a href="UpdateContact.php">CLEAR</a> </button>  
            
        </form>
        <?php 
            $conn = mysqli_connect('localhost','root','','contactlist');
                    if(isset($_POST['search']))
                    {
                        $cont = $_POST['contact'];

                            $query = "SELECT * FROM person where ContactNo ='".$cont."'";
                            $result = mysqli_query($conn,$query);
                        
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <form actions="" method="POST">
                                            <p>ID: <input type="text" name="ID" value="<?php echo $row['ID'] ?>"/></p>
                                            <p>Name: <input type="text" name="Name" value="<?php echo $row['Name'] ?>"/></p>
                                            <p>Contact No: <input type="text" name="ContactNo" value="<?php echo $row['ContactNo'] ?>"/></p>
                                            <p>Email: <input type="text" name="Email" value="<?php echo $row['Email'] ?>"/></p>

                                            <button input type="submit" name="update"> UPDATE DATA </button>
                                            
                                        </form>
                                    <?php
                                }
                    }
        ?>
    </center>
</body>
</html>

<?php 
     $conn = mysqli_connect('localhost','root','','contactlist');
            
     if(isset($_POST['update']))
     {
         $id =$_POST['ID'];
         $Name =$_POST['Name'];
         $ContactNo =$_POST['ContactNo'];
         $Email =$_POST['Email'];

         $query = "UPDATE person SET Name ='".$Name."', ContactNo = '".$ContactNo."', Email = '".$Email."' WHERE ID = '".$id."'";
         $result = mysqli_query($conn,$query);

        if($conn -> query($query) === TRUE)
        {
            echo '<script> alert("Data Updated") </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated") </script>';
        }

     }

     
?>


