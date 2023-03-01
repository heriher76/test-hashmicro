<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PercentageController extends Controller
{
    public function index()
    {
        return view('admin.percentage.index');
    }

    public function check(Request $request)
    {
        $result = 0;
        $input_1 = str_split(strtolower($request->input_1));
        $input_2 = str_split(strtolower($request->input_2));
        foreach ($input_1 as $key => $item_1) {
            foreach ($input_2 as $key2 => $item_2) {
                if ($item_1 == $item_2) {
                    $result++;
                    continue 2;
                }
            }
        }

        $percent = ($result * 100) / count($input_1) . '%';
        $result = $result.'/'.count($input_1);
        return view('admin.percentage.index', compact('result', 'percent'));
    }
}
