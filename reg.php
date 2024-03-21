<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrations</title>
</head>
<style>
body{
    background-image: url("img/n.jpg");
    background-size: cover;
}

.hi{
            background-color: none;
            text-align: right;
            overflow: auto;
            white-space: nowrap;
        }

        .hi a{
            display: inline-block;
            padding: 10px;
            padding-left: 20px;
            font-size: 20px;
            font-family: timezone_offset_get;
            font-weight: bold;
            color: black;
            
        }

        .hi a:hover{
            background-color: peachpuff;
            color: black;
        }

.nav{
    justify-content: center;
    place-items: center;
    font-family: Calibri;
    font-weight: bold;
    max-width: 600px;
    background-color: peachpuff;
    padding: 2px 30px;
    border-radius: 18px;
    color: black;
    border: 1px solid;
    box-shadow: 5px 10px 8px skyblue;
    opacity: 0.8;
    position: absolute;
    top:15%;
    left:38%;


}

.nav h1{
    text-align: center;
    font-family: Calibri;
    font-weight: bold;
    font-size: 40px;

}

.nav input{
        font-size:20px;
        margin-left: 2rem;
        margin-bottom: 1.5rem;
        text-align:center;
        color: chocolate;
        border-radius: 12%;
        border-color: whitesmoke;

        }

.janin1{
    text-align: center;
font-family: Calibri;
font-weight: bold;
font-size: 20px;
border-radius: 12%;



    

    
    

}
    </style>
<body>

<div class="hi">
<a href="index.php" class="text-white">Click to Login</a> |
<a href="reg.php" class="text-white">Click to Register</a>

</div>

<div class="nav">
        <h1>Registration Form</h1>

<form action="process.php" method="POST">

<labe> Email </label></br>
<input type="email" name="email" required> </p>


<labe> password </label></br>
<input type="password" name="pass" required> </p>


<labe> Name </label></br>
<input type="name" name="nm" required> </p>

<div class="janin1">

<input type="Submit" name="reg" value="REGISTER"> 
    
</div>
</form>
    
</body>
</html>




