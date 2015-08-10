<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Forms homework 1</title>
</head>
<body>
	<form action="response.php" method = "POST" >
        Име: <input type="text" name="userName" />
    <br />
        Стара парола: <input type="password" name="oldPass" />
    <br />
        Нова парола:
        <input type="password" name="pass1" />
    <br />
        Въведи отново новата парола:
        <input type="password" name="pass2" />
    <br />
        <input type="submit" value="Изпрати" />
       
</form>

</body>
</html>