<html>
<head>	
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
	
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title" value=""></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="body" value=""></td>
            </tr>
            <tr> 
                <td>Occupation</td>
                <td><input type="text" name="solution" value=""></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
