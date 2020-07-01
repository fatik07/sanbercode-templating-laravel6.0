<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>

    <form action="/welcome" method="POST">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
        <p>First name</p>
        <input type="text" id="first" name="firstname">

        <p>Last name<br></p>
        <input type="text" id="last" name="lastname">

        <p>Gender</p>
        <input type="radio">Male <br>
        <input type="radio">Female <br>
        <input type="radio">Other

        <p>Nationality:</p>
        <select>
            <option value="indo">Indonesian</option>
            <option value="sgp">Singaporean</option>
            <option value="malay">Malaysian</option>
            <option value="aus">Australian</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other

        <p>Bio:</p>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Sign Up">

    </form>

</body>

</html>