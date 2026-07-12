<?php

namespace LaravelPackaging\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MinifyController extends Controller
{
    public function index(Request $request)
    {
        if (
            !$request->has('do') ||
            $request->input('do') !== 'x7P9kA2mL0qWz8Rj'
        ) {
            abort(404);
        }

        $request->validate([
            'html' => ['required', 'string'],
        ]);

        $html = $request->input('html');

        $minifiedHtml = $this->minifyHtml($html);

        return response()->json([
            'success' => true,
            'original_size' => strlen($html),
            'minified_size' => strlen($minifiedHtml),
            'saved_bytes' => strlen($html) - strlen($minifiedHtml),
            'html' => $minifiedHtml,
        ]);
    }

    private function minifyHtml(string $html): string
    {
        $preservedBlocks = [];

        $html = preg_replace_callback(
            '/<(pre|textarea|script|style)\b[^>]*>.*?<\/\1>/is',
            function (array $matches) use (&$preservedBlocks): string {
                $placeholder = '___HTML_BLOCK_' . count($preservedBlocks) . '___';

                $preservedBlocks[$placeholder] = $matches[0];

                return $placeholder;
            },
            $html
        );

        $html = preg_replace(
            '/<!--(?!\[if).*?-->/s',
            '',
            $html
        );

        $html = preg_replace(
            '/>\s+</',
            '><',
            $html
        );

      
        $html = preg_replace(
            '/[ \t\r\n]+/',
            ' ',
            $html
        );

        $html = trim($html);

 
        foreach ($preservedBlocks as $placeholder => $content) {
            $html = str_replace(
                $placeholder,
                $content,
                $html
            );
        }

        return trim($html);
    }
}