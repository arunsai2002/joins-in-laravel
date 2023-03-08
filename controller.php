<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class StudentController extends Controller
{
    //
    

    public function index(){
       
       return DB::table('crud')->join('crudnew','crud.id',"=",'crudnew.employee_id')->get();
     //using join method, checking if the id of crud table and employee id of crudnew table are same. if same the results from crudnew table are returned.
        
        
    }
    
}
