<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
    <tittle>viewUser</tittle>
    <link rel ="stylesheet" href="button.css">

        <style>
            body{
                    text-align:center;
                }
                .flat-table-1 {
                        background: #00008b;
                }
                .flat-table-1 tr:hover 
                {
                        background: rgba(0,0,0,0.19);
                }
                h1{
                        font-family: Arial, Times,serif;

                }
                table{
                        text-align:center;
                        margin-left:auto;
                        margin-right:auto;
                        border:4px solid grey;
                        border-collapse:collapse;
                     }

                     td{
                         text-align:center;
                         font-size:22px;
                         background-image:url("https://www.google.com/search?q=background+image+for+customer++details&tbm=isch&ved=2ahUKEwjco57qxMHwAhWbkUsFHReABYgQ2-cCegQIABAA&oq=background+image+for+customer++details&gs_lcp=CgNpbWcQA1C9oAFYl7IBYLC0AWgAcAB4AIABmAGIAYEEkgEDMC40mAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=L2yaYJzQHZujrtoPl4CWwAg&bih=694&biw=1517#imgrc=YCaMlDX-7iI2bM");
                        color: black;
                        padding: 0px 20px 0px 20px;
                       }
                      tr{
                         transition: background 0.3s,box-shadow 0.3s;
                        }
                        th,td{
                                border-collapse:collapse;
                                border:2px groove gray;
                                text-shadow: 1px 1px black;
                            }
                            .css-button{
                                 margin-left:auto;
                                 margin-right:auto;
                            }
                            .button1{
                                    background-color: aqua;
                                border-radius:50%;
                                    text-align:cenetr;
                                    padding-top:2px;
                                    }
                                    .button1:hover{
                                            background-color: white;

                                    }
                                    .view{
                                        top:50%;
                                        padding-top:20px;
                                        text-align:center;

                                    }
                                    .ho{
			                            padding-top:50px;
			                            padding-bottom:100px;
		                                }
		body{
		background-image:url("https://www.google.com/search?q=background+image&tbm=isch&ved=2ahUKEwjgy4qGysHwAhVHxXMBHQ1uABcQ2-cCegQIABAA&oq=background+image&gs_lcp=CgNpbWcQAzIKCAAQsQMQgwEQQzIICAAQsQMQgwEyBQgAELEDMgUIABCxAzIFCAAQsQMyBQgAELEDMgoIABCxAxCDARBDMgIIADIFCAAQsQMyBwgAELEDEEM6BAgAEB5QjYACWLWBAmDKhQJoAHAAeACAAX6IAfYBkgEDMC4ymAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=qHGaYODXA8eKz7sPjdyBuAE&bih=694&biw=1517#imgrc=RJiDQf46QER4pM");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	
</head>
<body>
        <h1 style="color:blanchedalmond;text-shadow: 2px 2px black;"> User detail's </h1>
       <table class="flat-table-1">

       <thead>
                <th> Sr NO. </th>
                <th> Name </th>
                <th> Email </th>
                <th> Credit's </th>
                <th> </th>
        
       </thead>
       <tbody>
        <tr>
                <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 1 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Shivam">View</button>
                        </from>   
                </td>
        </tr>
        <tr> 
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 2 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Yash">View</button>
                        </from>   
                </td>
        <tr>    <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 3 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Kushal">View</button>
                        </from>   
                </td>
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 4 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Shivanshu">View</button>
                        </from>   
                </td>       
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 5 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Badshah">View</button>
                        </from>   
                </td>
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 6 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Matish">View</button>
                        </from>   
                </td>
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 7 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Rahul">View</button>
                        </from>   
                </td>
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 8 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Meera">View</button>
                        </from>   
                </td>    
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 9 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Ali">View</button>
                        </from>   
                </td>
        </tr>
        <tr>
        <?php   
                        $row=mysqli_fetch_array($result);
                 ?>
                 <td> 10 </td>
                 <td> <?php echo $row["name"]; ?> </td>
                 <td> <?php echo $row["Email"]; ?> </td>
                 <td> <?php echo $row["Amount"]; ?> </td>
                 <td>
                        <from action="user.php" method="post" class="view">
                                <button class="button1" type="submit" name="name" value="Arvind">View</button>
                        </from>   
                </td>    
        </tr>
        </tbody>

       </table> <br> <br>


       <div class="buttons">
       <a href="index.php">
       <button class="glow-on-hover"> HOME </button>
       </a>
       </div>
</body>
</html>