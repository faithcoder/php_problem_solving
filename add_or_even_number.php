<?php   
    if($_POST){  
        $number = $_POST['number'];   
        //divide entered number by 2   
        //if the reminder is 0 then the number is even otherwise the number is odd  
        if(($number % 2) == 0){  
            echo "<h3>$number is an Even number</h3>";  
        }else{  
            echo "<h3>$number is Odd number</h3>";  
        }  
    }  
?>  

<html>  
<body>  
<form method="post" action="">  
    Enter a number:  
    <br>
    <input type="number" name="number">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
