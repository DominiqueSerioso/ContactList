<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Contact Information</title>
    <link href="main.css" rel="stylesheet"/>
</head>
<body>
    <h1>Add Contact Information</h1>
    <button><a href="index.php">BACK</a></button>
    <form action="insertConnect.php" method="post" class="add">
        <p>Name</p>
        <input type="text" name="name" autocomplete="off" required><br>
        <p>Contact</p>
        <input type="text" name="CPnumber" required><br>
        <p>Email</p>
        <input type="email" name="Email" required><br><br><br>
        <button class="btn" onclick = "Submit()" class="btnSubmit" href="AddNewContact.php">ADD</button> <button type="reset">Clear</button><br>
    </form>
</body>
</html>