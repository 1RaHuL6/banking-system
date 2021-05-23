<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select  from users"; //try changing users.
$result=mysqli_query($con,$q)
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SELECT USER</title>
        <link rel="stylesheet" href="button.css">
        <style> 
        body
        {
            background-color: darkgray;
            background-image: url("https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/wp-content/uploads/2020/12/getty_1digital-banking-2021_122220.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            object-fit:cover;   
        }
        html,body
        {
            height:100%;
            width:100%;

        }
        html
        {
            display: table;
            margin: auto;
        }
        body
        {
            display:table-cell;
            vertical-align:middle;
        }
        .cenetr{
                display:inline-block;
                background-image:url("https://blog.prezi.com/wp-content/uploads/2019/03/jason-leung-479251-unsplash.jpg");
                padding: 50px;
                border: 2px ridge red;
        }
        .ho
        {
            padding-top: 50px;
        }
        .butto1
        {
            background-color: darksalmon;

        }
        </style>
        <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Shivam"){
				 var arr=["Yash","Kushal","Shivanshu","Badshah","Matish","Rahul","Meera","Ali","Arvind"];
				 }
				 else if(a==="Yash"){
					var arr=["Shivam","Kushal","Shivanshu","Badshah","Matish","Rahul","Meera","Ali","Arvind"];
				}
				else if(a==="Kushal"){
					var arr=["Shivam","Yash","Shivanshu","Badshah","Matish","Rahul","Meera","Ali","Arvind"];
				}
				else if(a==="Shivanshu"){
					var arr=["Shivam","Yash","Kushal","Badshah","Matish","Rahul","Meera","Ali","Arvind"];
				 }
				 else if(a==="Badshah"){
					var arr=["Shivam","Yash","kushal","Shivanshu","Matish","Rahul","Meera","Ali","Arvind"];
				 }
				 else if(a==="Matish"){
					var arr=["Shivam","Yash","kushal","Shivanshu","Badshah","Rahul","Meera","Ali","Arvind"];
				 }
				 else if(a==="Rahul"){
					var arr=["Shivam","Yash","kushal","Shivanshu","Badshah","Matish","Meera","Ali","Arvind"];
				 }
				 else if(a==="Meera"){
					var arr=["Shivam","Yash","kushal","Shivanshu","Badshah","Matish","Rahul","Ali","Arvind"];
				 }
				 else if(a==="Ali"){
					var arr=["Shivam","Yash","kushal","Shivanshu","Badshah","Matish","Rahul","Meera","Arvind"];
				 }
				 else if(a==="Arvind"){
				 var arr=["Shivam","Yash","kushal","Shivanshu","Badshah","Matish","Rahul","Meera","Ali"];
				 }

            var string="";
            for(i=0;i<arr.length;i++)
            {
                string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
            }
            documennt.getElementById("output").innerHTML=string; 
            }
        </script>
    </head>
    <body>
            <h1 style="font-size:45px;color:white; font-family:red serif; text-shadow: 1.5px 1.5px black;">--TRANSFER MONEY-- </h1><br>
            <div class="center">
            <form action="updatecredit.php" method="post">
                <label for="sender" align="center">Sender's Name: &nbsp;</label>
                <select id="input" name="sender" style="font-size: 12pt; font-family:serif;height:28px;width:290px;"align="middle" onchange="random_function()">
                <option selected> SELECT NAME </option>
                <option value="Shivam"> Shivam </option>
                <option value="Yash"> Yash </option>
                <option value="Kushal"> Kushal </option>
                <option value="Shivanshu"> Shivanshu </option>
                <option value="Badshah"> Badshah </option>
                <option value="Matish"> Matish </option>
                <option value="Rahul"> Rahul </option>
                <option value="Meera"> Meera </option>
                <option value="Ali"> Ali </option>
                <option value="Aravind"> Aravind </option>
                </select><br><br>
                <label for="receiver" align="left">RECEIVER NAME:&nbsp; </label> 
                <select id="output" name="receiver" style="font-size: 12pt; font-family: serif; height:28px; width: 290px;" align="middle" onchange="random_function()">
                <option> SELECT NAME</option>
                </select><br> <br>
                <label for="trasnfer" align="left"> AMOUNT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
                <input type="number" name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br> 
                <div class="button1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
                </div>          
                </form> 
            </div><br><br><br>
            <div class="button1">
            <a href="index.php">
            <button class="glow-on-hover">HOME</button>
            </a>
            </div>
    </body>
</html>