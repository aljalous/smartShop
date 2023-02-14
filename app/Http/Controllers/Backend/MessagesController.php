<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = message::all();
        return view('backend.pages.messages.index', compact('messages'));
    }

    /* public function show(Message $message)
    {
        return view('backend.messages.index', compact('message'));
    }*/



    public function store(Request $request)
    { 
        $request->validate([
            'content' => 'required',
            'message_subject' => 'required',
        ]);
        auth()->user();

        Message::create([
            'sender_id' =>$request->admin_id,
            'content' => $request->content,
            'message_subject' => $request->message_subject,
        ]);

        return redirect()->route('message.show') //
            ->with('success', 'تم إضافة الرسالة بنجاح.');
    }
    



    public function create()
    {
        return view('backend.pages.messages.create');
    }


    public function showSingle($id)
    {
        $messages = Message::findOrFail($id);
        return view('backend.pages.messages.Viewmessage', compact('messages'));
    }

    public function delete($id)
    {
        $message = message::find($id);
        if (!is_null($message)) {
            $message->delete();
        }


        session()->flash('success', 'تم الحذف بنجاح');
        return back();
    }
}
