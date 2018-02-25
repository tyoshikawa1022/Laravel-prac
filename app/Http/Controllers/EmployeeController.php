<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{

    /**
     * 入力画面
     *
     * @return string
     */
    public function input()
    {
        return view('employee.input');
    }

    /**
     * 完了画面
     *
     * @return string
     */

    public function save(Request $request)
{
    // データベース登録
    $employee = new Employee;

    $employee = $request->all();
    // $employee->name = $request->name;
    // $employee->tel = $request->tel;
    // $employee->email = $request->email;
    // $employee->gender = $request->gender;
    // $employee->content = $request->content;
    $employee->save();


    // リロード等による二重送信防止
    $request->session()->regenerateToken();

    return view('employee.complete');
}

}
