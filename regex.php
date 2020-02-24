<!--Gurjit Kaur 8622642
-->
<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$firstName = $_POST['firstname'];
			$surName = $_POST['surname'];
			 $re = '/\b[0-9A-Fa-f]+\b/m';
            
            
	if (preg_match($re, $firstName, $matches, PREG_OFFSET_CAPTURE, 0) ) {
		if (preg_match($re, $surName, $matches, PREG_OFFSET_CAPTURE, 0) )
        {
            echo '<p>Successful</p>';
        }
		else
        {
            echo '<p>SurName must be hexadecimal</p>';
        }
	}
    
            else {
        
        if (preg_match($re, $surName, $matches, PREG_OFFSET_CAPTURE, 0) )
        {
            echo '<p>FirstName must be hexadecimal</p>';
        }
		else
        {
            echo '<p>SurName must be hexadecimal</p>';
            echo '<p>FirstName must be hexadecimal</p>';
        }
	}
}

?>
<html>
<head><title>Gurjit Kaur</title></head>
<body>
<form action="regex.php" method="POST">

	<input type="text" name="firstname">Enter your First Name
	<input type="text" name="surname">Enter your Sur Name
	<input type="submit">Login

</form>
</body>
</html>