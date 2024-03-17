<?php
include "connect.php";
session_abort();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
    
<script src="sweetalert2.min.js"></script>
<script>
    alert("You clicked the button!");
</script>

<?php
header("location:login.php")

?>
</body>
</html>