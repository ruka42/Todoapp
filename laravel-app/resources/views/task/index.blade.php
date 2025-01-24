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
    <table>
        @foreach($tasks as $task)
        <tr>
            <td class="p-1 border">{{$task["name"]}}</td>
            <td class="p-1 border">{{$task["content"]}}</td>
            <td class="p-1 border">
                <a href="{{route("task.edit", ["id" => $task["id"]])}}">編集</a>
            </td>
            <td class="p-1 border">
                <form method="POST" action="{{route("task.destroy", ["id" => $task["id"]])}}">
                    @method("DELETE")
                    @csrf
                    <button type="submit">
                        削除
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{route("task.create")}}">ボタン</a>


</body>
</html>