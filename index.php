<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone 1</title>
</head>
<body>
    <form action="index.php" method="post">
    <center>
        <h1>
            Bill Calculation
        </h1>
    <?php
        //testing if user have send somme data
        if(isset($_POST['consumtionValue']))
        {
            if ($_POST['consumtionValue']<=50) {
                echo "Bill Amount : ".$_POST['consumtionValue']*3.5;
            } elseif
            ($_POST['consumtionValue']<=100) {
                echo "Bill Amount : ".$_POST['consumtionValue']*4;
            }elseif
             ($_POST['consumtionValue']<100) {
                echo "Bill Amount : ".$_POST['consumtionValue']*5.20;
            }
            else{
                echo"Bill Amount : ".$_POST['consumtionValue']*6.5;
            }
        }
    ?> <br> <br>
        <input type="number" name="consumtionValue"> <br> <br>
        <input type="submit">
    </center>
    </form>

<div class="seadboard" style="margin: 150px;">
<center>
    <h1>chessboard</h1>
<table>
    <?php
    $k = 0;
        for ($i=0; $i < 8; $i++) { 
            echo "<tr>";
            // if ($i%2==1) {
            //     $k=1;
            // }else{
            //     $k=2;
            // }
                for ($j=0; $j < 8; $j++) { 
                    $k = $i + $j;
                    if (($k%2)==0) {
                        echo "<td class=\"tab\">";
                        echo $i.$j;
                    echo "</td>";
                    }else
                    {
                    echo "<td>";
                        echo $i.$j;
                    echo "</td>";
                    }
                }
            echo "</tr>";
        }
    ?>
    </table>
</center>
</div>
<style>
    td{
        width: 30px;
    }
    .tab{
        background-color: black;
        color: white;
    }
    table{
        border: 2px solid black;
    }
</style>
</body>
</html>