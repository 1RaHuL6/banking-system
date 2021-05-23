<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'"; //try changing users.
$result=mysqli_query($con,$q)
?>

<html>
    <head>
        <title> TRANSFER </title>
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> 
            .nav-ul 
            {
                    list-style-type: none;
                    margin:0;
                    padding: 5px;
                    overflow: hidden;
            }
            .nav-li 
            a {
                display: block;
                color:blanchedalmond;
                text-align: center;
                padding: 5px 5px;
                text-decoration: none;
                text-transform: uppercase;
              }
              body
              {
                background-color: burlywood;
                background-image: url(https://images.app.goo.gl/AAcamZh2iCRx5FPK9);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
              }
              .form 
              {
                  text-align: center;
              }
              .button 
              {
                  text-align: center;
              } 
                  button
                  {
                        border-radius: 10px;
                        background-color: whitesmoke;
                  }
                  button:hover{
                      background-color: whitesmoke;
                  }
                  table
                  {
                        background-color: sandybrown;
                        padding:  50px;
                        border: 2px ridge black;
                  }
                  .btn{
                        background-color: burlywood;
                        color:whitesmoke;
                        padding: 12px 16px;
                        font-size: 23px;
                        cursor: pointer;
                  }
                  .btn:hover{
                      background-color: whitesmoke;
                  }
                  </style>   
    </head>
    <body>
             <ul class=nav-ul>
             <a href="index.php">
             <li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
             </a>
             </ul>    
             <center>
                  <div class="view">
                    <br><br><br><h2 style="font-size:45px; color:turquoise; text-shadow: 2px 2px black;"> TRANSFER AMOUNT </h2>
                    <form action="checlcredit.php" method="post">
                    <div class="border">
                    <table>
                        <tr>
                            <td style="font-size:12pt;color:aquamarine;">
                            <lable for="sender" align="left">RECEIVER NAME</lable>
                            &nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width: 290px; ">
                            <?php while($row=$result->fetch_assoc()) {?>
                            <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"];?></option>
                            <?php } ?>
                            </td>
                        </tr><br>
                        <tr>
                                <td> 
                                <br> <lable for="transfer"> AMOUNT: </lable>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required>
                                </td>
                        </tr>
            <tr>
                <td>
                <div class="button">
                <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="c" onmouseover="this.style.color='brown'" onmouseout="this.style.color-'black'" value="Credit" style="color:black;font-size:18px;height:40px;width:100px;">TRANSFER</button>
                </div> 
                </td> 
            </tr>
                    </table>
                    </div>
                    </form>
                    </div><br>
                    <form action="user.php" method="post">
                    <div class="buttons">
                                <button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>"> BACK </button>
                      </div>          
                    </form>
             </center> 
    </body>
</html>