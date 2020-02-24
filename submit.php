<!--Gurjit Kaur 8622642
-->
<html>

<head>
    <title>Gurjit Kaur 8622642</title>
</head>

<body>
    <form action="submit.php" method="POST">

        Enter your Name <input type="text" name="name" value="<?php if (isset($name)) echo $name; ?>"><br>
        Enter your Age<input type="text" name="age" value="<?php if (isset($age)) echo $age; ?>"><br>
        Enter your City <input type="text" name="city" value="<?php if (isset($city)) echo $city; ?>"><br>
        Enter your Country<input type="text" name="country" value="<?php if (isset($country)) echo $country; ?>"><br>
        Enter your Password<input type="text" name="password" value="<?php if (isset($password)) echo $password; ?>"><br>

        <input type="submit">

    </form>
</body>

</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$errorArray=array();

//check for empty fields
           if(empty($_POST['name']))
           {
           	array_push($errorArray, "Enter the name");
           }
           if(empty($_POST['age']))
           {
              	array_push($errorArray, "Enter the age");
            }
            if(empty($_POST['city']))
            {
                
             	array_push($errorArray, "Enter the city");
            }
        if(empty($_POST['country']))
            {
           array_push($errorArray, "Enter the city");

            }
            if(empty($_POST['password']))
            {
                         array_push($errorArray, "Enter the password");
  
            }
else{
$minimum=18;
$maximum=120;
    
$names=($_POST['name']);
$ages= ($_POST['age']);
$citys= ($_POST['city']);
$countrys=($_POST['country']);
$passwords= ($_POST['password']);
    
    //filtering the script tags
$newname= filter_var($names, FILTER_SANITIZE_STRING);
$newage= filter_var($ages, FILTER_SANITIZE_STRING);
$newcity= filter_var($citys, FILTER_SANITIZE_STRING);
$newcountry= filter_var($countrys, FILTER_SANITIZE_STRING);

    
if(!(filter_var($newage, FILTER_VALIDATE_INT, array("min_range"=>$minimum, "max_range"=>$maximum))))
{
	array_push($errorArray, "Age must between 18 and 120");
}
    
    
    $regex = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z*@$]{6,}$/';
	if (!(preg_match($regex, $passwords, $matches, PREG_OFFSET_CAPTURE, 0))) 
	{
		array_push($errorArray,'Password must be minimum 6 in length');
	} 
}

if(count($errorArray) > 0){
    foreach($errorArray as $error){
        echo $error . "<br />";
    }

}
}
?>
