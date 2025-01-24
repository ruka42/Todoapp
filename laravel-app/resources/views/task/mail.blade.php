<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
<body>
    <h1>mouu</h1>

    <form action="{{route("task.index")}}" method="post">
        <p>送り先</p><input type="text" name="to">
        <p>件名</p><input type="text" name="title">
        <p>メッセージ</p><textarea name="content" cols="60" rows="10"></textarea>
        <p><input type="submit" name="send" value="送信"></p>
    </form>

</body>
</html>