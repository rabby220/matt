<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
<?php

    $result = "";
    if(isset($_POST['operator']))
    {

        $fnumber = $_POST['fnumber'];
        $lnumber = $_POST['lnumber'];
        $operator = $_POST['operator'];
        
        if(is_numeric($fnumber) && is_numeric($lnumber))//check number
        {

            if($operator == "Addition")

            {
                $result =  $fnumber +  $lnumber;
                //echo $result;
            }
            else if($operator == "Substraction")
            {
                 $result =  $fnumber -  $lnumber;
                 //echo $result;
            }
            else if($operator == "Multiply")
            {
                $result =  $fnumber *  $lnumber;
                //echo $result;
            }
            else 
            {
                $result =  $fnumber / $lnumber;
                // echo $result; 
            }   

        }
        
    }
    

?>
    <form method = "POST">

        <label><b>First number:</b></label>   <!--   -->
        <input type="number" name = "fnumber" placeholder = "Enter your First Number" value = "<?php echo $fnumber;?>" ><br><br>
        
        
        <label><b>Second number:</b></label>
        <input type="number" name = "lnumber" placeholder = "Enter your Second Number" value = "<?php echo $lnumber;?>"><br><br>
        
        <label><b>  Result </b></label>
        <input name = "result" placeholder = "Result" value = "<?php echo $result; ?>" ><br><br>
        

        <input type="Submit" value = "Addition" name = "operator">
        <input type="Submit" value = "Substraction" name = "operator">
        <input type="Submit" value = "Multiply" name = "operator">
        <input type="Submit" value = "Division" name = "operator">


    </form>















</body>
</html>