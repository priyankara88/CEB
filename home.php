<?php require_once 'connection.php'?>
<?php

mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Error Connection failed: " . $conn->connect_error);
}

// $uid= $conn -> real_escape_string($_POST['uid']);
// $pw= $conn -> real_escape_string($_POST['pw']);

$sql3 = "SELECT accNo,lastMonthUnit,thisMonthUnit,numberOfUnits,totalBill FROM `details` ";

 $result3= mysqli_query($conn,$sql3);
//$row3 =mysqli_fetch_array($result3);
//  $stateid=$row3['accNo'];

// echo $stateid; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>CEB-Home</title>
</head>
<nav id="main">
    <img src="./images/mainlogo5.png" style="height: 4rem;">
    <ol>
        <a href="#">Calculate Bill</a>
        <a href="#">Service</a>
        <a href="#">Contact Us</a>
    </ol>
    <div class="element">
        <input type="text" class="search" placeholder="Search">
        <button class="btnsearch">Search</button>
    </div>

</nav>
<div class="hero">
    <div class="row">
        <div class="col">
            <div class="sidecal">
                <form action="save.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Account Number</label>
                        <input type="number" name="accNumber" class="form-control" id="number" aria-describedby="number" placeholder="Enter Account Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Last Month Unit</label>
                        <input type="number" name="LMUnit" class="form-control" id="LMUnit" placeholder="Last Month Unit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Today Unit</label>
                        <input type="number" name="TUnit" class="form-control" id="LMUnit" placeholder="Today Unit">
                    </div>

                    <button type="submit" class="btnsave">එක් කරන්න</button>
                </form>

            </div>
        </div>
        <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Last Month</th>
                        <th scope="col">This Month</th>
                        <th scope="col">Units</th>
                        <th scope="col">Bill</th>
                    </tr>
                </thead>
                <?php
                // LOOP TILL END OF DATA
                while($rows=$result3->fetch_assoc())
                {
                    ?>
                <tbody>
                
                    <tr>
                        <th scope="row"><?php echo $rows['accNo']??''; ?></th>
                        <td><?php echo $rows['lastMonthUnit']??''; ?></td>
                        <td><?php echo $rows['thisMonthUnit']??''; ?></td>
                        <td><?php echo $rows['numberOfUnits']??''; ?></td>
                        <td><?php echo $rows['totalBill']??''; ?></td>
                    </tr>
                  
                </tbody>
                <?php
                }
            ?>
            </table>
        </div>
    </div>
</div>
<div class="footer">

</div>

<body>

</body>

</html>