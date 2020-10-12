<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHESS BOARD</title>
</head>
<body>

<table border ='1px' cellspacing='0px' cellpadding='0px'>
    <?php

        $counter = 0;
        for($row=1;$row<=8;$row++){
            echo "<tr>";
            for($col=1;$col<=8;$col++){
                $num=$row+$col;
                if ($num%2==0){
                    echo "<td height=70px width=70px bgcolor=green></td>";
                }else{
                    echo "<td height=70px width=70px bgcolor=white></td>";
                }        
        }
        echo "</tr>";
    }

    ?>
    </table>  
</body>
</html