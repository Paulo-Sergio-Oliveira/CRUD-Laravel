<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    protected $employee;

    public function __construct()
    {
        $this->employee = new Employee();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()){
            $response['employees'] = Employee::where('user_id', auth()->user()->id)->get();
            return view('pages.index')->with($response);
        }else{
            $response['employees'] = $this->employee->all();
            return view('pages.index')->with($response);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_name' => ['required'],
            'dob' => ['required'],
            'phone' => ['required']
        ], [
            'name.required' => 'Fill the First Name input',
            'email.required' => 'Fill the Email input',
            'password.required' => 'Fill the Password input'
        ]);

        $this->employee->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $response['emp'] = $this->employee->find($id);
        return view('pages.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'emp_name' => ['required'],
            'dob' => ['required'],
            'phone' => ['required']
        ], [
            'name.required' => 'Fill the First Name input',
            'email.required' => 'Fill the Email input',
            'password.required' => 'Fill the Password input'
        ]);

        $employee = $this->employee->find($id);
        $employee->update(array_merge($employee->toArray(), $request->toArray()));
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = $this->employee->find($id);
        $employee->delete();
        return redirect('employee');
    }
}
