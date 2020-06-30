<!DOCTYPE html>
<html>
    <head>
    <meta name="csrf-token">
    </head>
    <body>
       <form method="POST">
           @csrf
        <h1>Buat Account Baru!</h1>
        <h2>SIGN UP FORM</h2>
        First name  :
            <br>
            <br>
        <input type="text" name="namawal">
            <br>
        Last Name   :
            <br>
            <br>
        <input type="text" name="namakhir">
            <br>
        <label>Gender</label><br>
            <input type="radio" name="user_gender" value="0">Male<br>
            <input type="radio" name="user_gender" value="1">Female<br>
            <input type="radio" name="user_gender" value="2">Other<br>
            <br>
        <label>Nationality</label><br>
        <select>
            <option>indonesia</option>
            <option>Singapura</option>
            <option>Malaysia</option>
        </select>
            <br>
            <br>
        <label>Language Spoken</label><br>
            <input type="checkbox" name="user_language" value="0">Bahasa Indonesia<br>
            <input type="checkbox" name="user_language" value="1">English<br>
            <input type="checkbox" name="user_language" value="2">Other<br>
            <br>
            <br>
        Bio : <br><br>
        <textarea cols="60" rows="10"></textarea>
            <br>
            <br>
        <input type="submit" value="Sign Up">
        </form>





    </body>
</html>