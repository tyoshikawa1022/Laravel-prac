<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee; //Employeeモデルを呼び出す

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
    $employee->fill($request->all())->save();

    return view('employee.complete');
    }

    //一覧表示
    public function list()
    {

        $employees = Employee::all();
        return view('employee.list')->with('employees',$employees);
    }


}
