<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div>
        <form method="POST" action="{{ route("task.update", ["id" => $task["id"]]) }}">
            @method("PUT")
            @csrf
            <label>タスク名</label>
            <input name="name" value="{{$task["name"]}}">
            <label>内容</label>
            <textarea  name="content" id="" cols="30" rows="10">{{$task["content"]}}</textarea>

            <button type="submit">キャンセル</button>
            <button type="submit">編集</button>
        </form>
    </div>
    
</body>
</html>