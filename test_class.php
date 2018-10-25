<?php
require "database.php"
/* Execute a prepared statement by binding a variable and value */
$sql = $con->prepare("INSERT INTO tbl_posts(title,description)
VALUE ('$title', '$description')");
$sth->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | Insert data into Table using OOPS in PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<br /><br />
<div class="container" style="width:700px;">
    <form method="post">
        <label>Post Title</label>
        <input type="text" name="title" class="form-control" />
        <br />
        <label>Post Description</label>
        <textarea name="description" class="form-control"></textarea>
        <br />
        <input type="submit" name="submit" class="btn btn-info" value="Submit" />
        <span class="text-success">
                     <?php
                     if(isset($success_message))
                     {
                         echo $success_message;
                     }
                     ?>
                     </span>
    </form>
</div>
</body>
</html>