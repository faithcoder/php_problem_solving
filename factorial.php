<html>  
<head>  
<title>Factorial using PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<br>
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "<h3> Factorial of $number:</h3>";  
        //starting loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo "<h2> $fact </h2>";  
    }  
?>  
</body>  
</html> 