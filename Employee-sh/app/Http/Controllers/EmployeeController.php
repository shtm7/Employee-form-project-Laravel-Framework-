<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class EmployeeController extends Controller
{
    protected $employees;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        $employees = employee::all();
        return view('employees.index', compact('employees'));
        //->with(['employees'=> $employees] );
    }
    public function search(Request $request)
    {  
       $employee=$request->except('_token');
        $search_text =$_GET['search_text'];
        if (is_numeric($search_text) && $search_text != null)
        { 
            $column = 'employee_id';
            $employees = Employee::where('employee_id','LIKE','%' .$search_text.'%')->get();
           return view('employees.search',compact('employees'));
        }
        elseif (is_string($search_text) && $search_text != null) 
        {
        $column = 'employee_name';
        $employees = Employee::where('employee_name','LIKE','%' .$search_text.'%')->get();
        return view('employees.search',compact('employees'));
        }
        else {
           return'<center> <u> not match the employee id or name search  </u>'.$search_text.'</center>';
        }
        //->orWhare('employee_id','LIKE','%'. $search_text .'%');
        //$employees = Employee::where('employee_id','LIKE','%' .$search_text.'%')->get();
        //$employees = $this->employees->select('employee_name');
        //return view('employees.search',compact('employees'));
    }
    public function master()
    {
        $employees = employee::all();
        return view('employees.master',compact('employees'));
    }
    public function destroy($id)
    {
        $employee=$request->except('_token');
        $employee=Employee::find($request->id);
        echo $employee->delete();
        //$employee = Employees::table('employees')->where('id',$id)->delete();
        //$employee->delete();
        //return redirect()->route('employees.master');
        return view('employees.master',compact('employees'));
        //->with('success','Data Deleted');
    }
   // public function employeeForm(Request $employees)
    //{
     //  dd($employees->all());
    //}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //$employees = request()->all();
        return view('employees.index');
    }
    public function store(Request $request)
    {
        $employee=$request->except('_token');
        $validatedData= $request->validate([
            'employee_name'=>'required|regex:/^[a-zA-Z]+$',
           'employee_id' => 'required|employee_id',
            'phone_number' => 'required|numeric|digits:10',
            'city' => 'required|city',
             'gender'=> 'required|gender'
       ]);
        //return $request->input();
       // $employee = new Employee([
        //'employee_name' => $request->get('employee_name'),
        //'employee_id' => $request->get('employee_id'),
       //'phone_number' => $request->get('phone_number'),
       // 'city' => $request->get('city'),
        //'gender'=> $request->get('gender')]);
        //$employee->save();
        //dd($employee);
        //echo "Record inserted successfully."; 
        //echo'<a href ="/store">Click Here</a> to go back.';
        //print_r($request->input());
        //return redirect()->route("employees.employeeForm")->with('success','Data Added');
        Employee::create($employee);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
          return view('employee.show',['employees'=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    
}
