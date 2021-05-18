<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Worker;
use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
    public function showhome() {
        $comments = Comment::all();
        return view('home', compact('comments'));
    }

    public function showservice() {
        return view('service');
    }

    public function showcontacts() {
        return view('contacts');
    }

    public function showportfolio() {
        $masters = Worker::all()->where('position', 'like', 'тату-мастер');
        return view('portfolio', compact('masters'));
    }

    public function submit(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        Mail::to('nastyapolyakova02@gmail.com')->send(new MailClass($name, $email, $phone));

        $client = new Client();
        $client->name = request('name');
        $client->email = request('email');
        $client->phone = request('phone');
        $client->save();

        return redirect('/');
    }


}
