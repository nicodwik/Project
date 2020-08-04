<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: serif;
        }
        input, select, textarea {
            margin-bottom: 20px;
        }

        #male, #female{
            margin-bottom: 0;
        }
        #language {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="{{route('welcome')}}">
        <label for="">First Name:</label><br>
        <input type="text" name="first_name"><br>
        <label for="">Last Name:</label><br>
        <input type="text" name="last_name"><br>
        <label for="gender">Gender:</label><br>
        
            <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        
        <label for="">Nationality:</label><br>
        <select name="" id="Nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Australian">Australian</option>
        </select><br>
        <label for="">Language Spoken:</label><br>
        <input type="checkbox" name="" id="language">
        <label for="">Bahasa Indonesia</label><br>
        <input type="checkbox" name="" id="language">
        <label for="">English</label><br>
        <input type="checkbox" name="" id="">
        <label for="">Other</label><br>
        <label for="">Bio:</label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>