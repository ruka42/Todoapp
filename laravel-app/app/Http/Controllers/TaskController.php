<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = Task::all();
        return view("task.index",compact("tasks"));
    }

    public function create()
    {
        return view("task.create");
    }

    public function store(Request $request)
    {
        Task::create([
            "name" => $request["name"],
            "content" => $request["content"],

        ]);
        return redirect()->route("task.index");

    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view("task.edit", compact("task"));
    }

    public function update(Request $request,$id)
    {
        $task = Task::find($id);
        $task->update([
            "name" => $request->name,
            "content" =>$request->content,
        ]);

        return redirect()->route("task.index");
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route("task.index");
    }

    public function ht()
    {
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = $_POST['to'];
        $title = $_POST['title'];
        $message = $_POST['message'];
        $headers = "From: yamasakiruka0808@gmail.com";

        if(mb_send_mail($to, $title, $message, $headers))
        {
            $mai = "メール送信成功です";
        }
        else
        {
            $mai = "メール送信失敗です";

        return view("task.mail", compact("mai"));
        }
    }
}