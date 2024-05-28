<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employ;
class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index');
    }
    public function show()
    {
        $employees=employ::get();
        return view('employee.show', compact('employees'));
    }
    public function destroy(int $id)
    {
        $emps=employ::findOrFail($id);
        $emps->delete();
        return redirect('employee');
       
    }
    public function update(Request $request, int $id)
    {
        $empdata=[
            'fname'=>$request->input('fname'),
            'mname'=>$request->input('mname'), 
            'lname'=>$request->input('lname'),
            'address'=>$request->input('address'),
            'country'=>$request->input('country'),
            'state'=>$request->input('state'),
            'city'=>$request->input('city'),
            'zip'=>$request->input('zip'),
            'age'=>$request->input('age'),
            'bdate'=>$request->input('bdate'),
            'dhired'=>$request->input('dhired'),
            'dept'=>$request->input('dept'),
            'div'=>$request->input('div')
           ];
           employ::findOrFail($id)->update($empdata);
           return redirect('employee');
    }
    public function edit(int $id)
    {
        $emp=employ::findOrFail($id);
    //    return $emp;
    return view('employee.edit', compact('emp'));
    }


    public function store (Request $request)
    {
        
        $request->validate([
           'fname'=>'required|max:255',
           'mname'=>'required|max:255',
            'lname'=>'required|max:255',
            'address'=>'required|max:255',
            'country'=>'required|max:255',
            'state'=>'required|max:255',
            'city'=>'required|max:255',
            'zip'=>'required|max:255',
            'age'=>'required|max:255',
            'bdate'=>'required|date',
            'dhired'=>'required|date',
            'dept'=>'required|max:255',
            'div'=>'required|max:255'
        ]);
        $empdata=[
            'fname'=>$request->input('fname'),
            'mname'=>$request->input('mname'), 
            'lname'=>$request->input('lname'),
            'address'=>$request->input('address'),
            'country'=>$request->input('country'),
            'state'=>$request->input('state'),
            'city'=>$request->input('city'),
            'zip'=>$request->input('zip'),
            'age'=>$request->input('age'),
            'bdate'=>$request->input('bdate'),
            'dhired'=>$request->input('dhired'),
            'dept'=>$request->input('dept'),
            'div'=>$request->input('div')
           ];
       employ::create($empdata);
       return redirect('employee');
       
    }

   
}
