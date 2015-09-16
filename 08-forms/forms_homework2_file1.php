<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Forms homework 1</title>
</head>
<body>
	<form action="forms_homework2_file2.php" method = "POST" >
        Потребителско име: <input type="text" name="userName" />
    <br />
        Въведи парола:
        <input type="password" name="pass1" />
    <br />
        Въведи отново паролата:
        <input type="password" name="pass2" />
    <br />
        Таен въпрос:
        <input type="text" name="taenVupr" />
    <br />
        Таен отговор:
        <input type="password" name="taenOtg" />
    <br />
         Email: 
         <input type="text" name="mail" />
    <br />
        Име: 
         <input type="text" name="fName" />
    <br />
         Фамилия: 
         <input type="text" name="lName" />
    <br />
         Пол:
                <input type="radio" name="gender" value="Male" /> Мъж
                <input type="radio" name="gender" value="Famale" /> Жена
    <br />
     Рожденна дата (ДД/ММ/ГГГГ): 
         <input type="text" name="day" maxlength="2" size="1" />
         <input type="text" name="month" maxlength="2" size="1"/>
         <input type="text" name="year" maxlength="4" size="4"/>
    
    <br />
        <input type="submit" value="Изпрати" />
       
</form>

</body>
</html>