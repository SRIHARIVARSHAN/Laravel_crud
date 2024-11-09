<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function display(){
        $data=Student::all();
        return view('index',compact('data'));
    }

    public function add(Request $request){
        Student::create([
            'name'=>$request->name,
            'dept'=>$request->dept,
            'cgpa'=>$request->CGPA
        ]);
        return response()->json(data:[
            "status"=>200,
            "message"=>"successfully added"
        ]);
    }

    public function del($id){
        $user=Student::findOrFail(id:$id);
        $user->delete();

        return response()->json(data:[
            "status"=>200,
            "message"=>"removed successfully"
        ]);
    }

    public function getedit($id){
        $user=Student::findOrFail(id:$id);
        return response()->json(data:[
            'status'=>200,
            'data'=>[
                'id'=>$user->id,
                'name'=>$user->name,
                'dept'=>$user->dept,
                'cgpa'=>$user->cgpa
            ]
        ]);
    }

    public function upd(Request $request,$id){
        $user=Student::findOrFail(id:$id);
        $user->update([
            'name'=>$request->name,
            'dept'=>$request->dept,
            'cgpa'=>$request->CGPA      
        ]);
        return response()->json(data:[
            'status'=>200,
            "message"=>"updated successfully"
        ]);
    }
}
