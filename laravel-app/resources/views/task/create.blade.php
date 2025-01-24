<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form  method="POST" action="{{route("task.store")}}">
            @csrf
            <label>タスク</label>
            <input name="name" />
            <label>内容</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <button type="submit">追加</button>
        </form>

    </div>
</body>
</html>