<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
    $title = $_POST['title'];
    $body = $_POST['body'];
    $solution = $_POST['solution'];
		
    // checking empty fields
    if(empty($title) || empty($body) || empty($solution)) {				
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
		
        if(empty($body)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		
        if(empty($solution)) {
            echo "<font color='red'>Occupation field is empty.</font><br/>";
        }
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 			
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO Exercise(title,body,solution) VALUES('$title','$body','$solution')");
		
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
