<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transaction</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="styleshtte" href="button.css">
            <style> 
                .nav-ul {
                        list-style-type:none;
                        margin: 0;
                        padding:5px;
                        overflow:hidden;
                        }
                .nav-li {
                        float:left;
                        }
                .nav-li a{
                         display:block;
                         color:cornsilk;
                         text-align: center;
                         padding: 8px 10px;
                         text-transform: uppercase;
                         }        
                        body{
                                background-image: url("https://images.app.goo.gl/uEWMoXrhgvYBeMDe7");
                                background-repeat: no-repeat;
                                background-size: cover;
                        }
                        th{
                                color:black;
                                background-color:whitesmoke;
                                font-size:26px;
                                padding:16px;
                        }
                        td{
                            font-size:23px;
                            color:whitesmoke;
                            padding: 10px 20px 10px 22px;
                          }
                          tr{
                               transition: background 0.3s,box-shadow 0.3s; 
                            }
                          th,td{
                                border-collapse: collapse;
                                border: 2px groove gray;
                               }  
                           h2 
                           {
                            padding: 20px;
                            font-size: 35px;
                            color: whitesmoke;
                            text-shadow: 1px 1px black;
                            text-align: center;
                           }
                           .btn
                           {
                               background-color: burlywood;
                               border:none;
                               color: whitesmoke;
                               padding: 12px 16px;
                               font-size: 23px;
                               cursor: pointer;
                           }
                           .buttons
                           {
                               right:42%;
                               text-align: center;
                           }
                           .btn:hover
                           {
                               background-color: cyan;
                           }
            </style>
    </head>
    <body>
        <ul class="nav-ul">
            <a href="index.php">
            <li class="nav-li"> <button class="btn"> <i class="fa fa-home"> </i> </button> </li>
            </a>
        </ul><br><br><br><br><br>
        <table class="flat-table-1">
            <tr>
                <th> SENDER</th>
                <th> RECEIVER</th>
                <th> AMOUNT</th>
            </tr>
            <tr>
                <?php while($row=$result->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row["SENDER"];?></td>
                    <td><?php echo $row["RECEIVER"];?></td>
                    <td><?php echo $row["AMOUNT"];?></td>
                </tr>
                <?php } ?>
            </tr>
        </table> 
        <br><br>
        <form action="index.php" method="post">
            <div class="buttons"><button class="glow-on-hover" type="submit" name="name"> BACK </button>
         </div>
        </form>
    </body>
</html>