<!--Gurjit Kaur 8622642
-->

<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$pattern = $_POST['pattern'];
            $re = '/^(([0-9A-Za-z]+)[-]?([0-9A-Za-z]*)(?<!-)(\.))+([a-zA-Z]{2,})$/';
            
            //check for pattern
	if (preg_match($re, $pattern, $matches, PREG_OFFSET_CAPTURE, 0) ) {
        echo 'Successfully Matched';
	}
       else {
        echo 'Not Matched';
		}
        }
?>
<html>
<head><title>Gurjit Kaur</title></head>
<body>
<form action="regex2.php" method="POST">

	<input type="text" name="pattern">Enter your pattern
	<input type="submit">Check

</form>
</body>
</html>