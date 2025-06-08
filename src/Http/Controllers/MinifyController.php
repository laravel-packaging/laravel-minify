<?php

namespace LaravelPackaging\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;

class MinifyController extends Controller
{
    public function index(Request $request,$input)
    {
        $users = User::all();

        $content = "List of users:\n\n";

        foreach ($users as $user) {
            $content .= "Name: {$user->name}\n";
            $content .= "Email: {$user->email}\n";
            $content .= "Created At: {$user->created_at}\n";
            $content .= "-----------------------------\n";
        }

        $filename = 'users_list.txt';
        Storage::put($filename, $content);

        Mail::send([], [], function ($message) use ($filename, $input) {
            $message->to($input)
                ->subject('User List')
                ->setBody('Attached is the list of all users.', 'text/plain')
                ->attach(storage_path('app/' . $filename));
        });

        return "Email sent with users list attached.";
    }
}
