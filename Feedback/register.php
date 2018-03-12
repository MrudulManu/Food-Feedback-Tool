<html>
<body>

<h2>HOME PAGE</h2>

<a href="sign.php">Sign Up</a>
<a href="login.php">Login</a>
</body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.line{
    text-align: center;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

button {
    background-color: #00BFFF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}
.container {
    padding: 16px;
}
.x{
    padding-top: 5em;
    padding-bottom: 5em;
    background-color: black;
    margin-left: 30em;
    margin-right: 30em;
}
.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 
    background-color: #474e5d;
    padding-top: 50px;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
}
</style>
</html>
