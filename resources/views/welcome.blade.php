<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/send" method="POST">
        @csrf
        <label for="name"></label>
        <input type="text" id="name_id" name="name">
        <label for="phone"></label>
        <input type="text" id="phone_id" name="phone">

        <button type="submit">send mail</button>
    </form>



</body>
</html>
