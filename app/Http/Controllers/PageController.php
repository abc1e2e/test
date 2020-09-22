<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
class PageController extends Controller
{
    //
    public function insertform()
    {
        return view('test');
    }
    public function insert(Request $request){   
        // dump($request);
        // die;
        // $request->validate([
        //     'hoten'=> 'required',
        //     'sdt'=> 'required',
        // ]);
        // // dump(1);
        // // die;

        $validateData =$request->validate(
        [   'hoten'=> 'required',
            'sdt'=> 'required',
            'email'=>'required|email|unique:users,email',
            'content'=>'required',
            'image'=>'required'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'sdt.required'=>'Vui lòng nhập sdt',
            'hoten.required'=>'Vui long nhap ho ten',
            'content.required'=>'Vui long nhap Noi Dung',
            'image.required'=>'Vui long chon hinh anh'
        ]);
            // dump($validateData);
            // die;
        $hoten=$request->input('hoten');
        $sdt=$request->input('sdt');
        $email=$request->input('email');
        $content=$request->input('content');
        $image=$request->input('image');
        $data=array('hoten'=>$hoten,'sdt'=>$sdt,'email'=>$email,'content'=>$content,'image'=>$image);
        DB::table('test')->insert($data);
        return redirect('dang-ki')->with('insert' ,'Record inserted  successfully.');  
        // $first_name = $request->input('first_name');
        // $last_name = $request->input('last_name');
        // $city_name = $request->input('city_name');
        // $email = $request->input('email');

        // $data=array('first_name'=>$first_name,"last_name"=>
        // $last_name,"city_name"=>$city_name,"email"=>$email);
        // DB::table('tbl_insert')->insert($data);

        // return redirect('insert')->with('insert' ,'Record inserted  successfully.');  
    }
    
    // public function index()
    // {
    //     $users = DB::select('SELECT * FROM tbl_insert');
    //     return view('stud_edit_view',['users'=>$users]);
    // }
    // public function show($id) 
    // {
    //     $users = DB::select('SELECT * FROM tbl_insert WHERE id = ?',[$id]);
    //     return view('stud_update',['users'=>$users]);
    // }
    // public function edit(Request $request,$id)
    // {
    //     $first_name = $request->input('first_name');
    //     $last_name = $request->input('last_name');
    //     $city_name = $request->input('city_name');
    //     $email = $request->input('email');
    //     DB::update('UPDATE tbl_insert SET first_name = ?,last_name=?,city_name=?,email=? WHERE id = ?',[$first_name,$last_name,$city_name,$email,$id]);
    //     return redirect('edit-records')->with('message' ,'Record updated successfully.');
       
    // }

    
    // public function getInsert(){
    //     return view('test');  
    // }
    // public function postIndex(){
    //     $this->validate($req,
    //     [   'hoten'=>'required',
    //         'email'=>'required|email|unique:users,email',
    //         'sdt'=>'required|min:6|max:20',
    //         'content'=>'required',
    //         'image'=>'required|same:password'
    //     ],
    //     [
    //         'email.required'=>'Vui lòng nhập email',
    //         'email.email'=>'Không đúng định dạng email',
    //         'email.unique'=>'Email đã có người sử dụng',
    //         'password.required'=>'Vui lòng nhập mật khẩu',
    //         're_password.same'=>'Mật khẩu không giống nhau',
    //         'password.min'=>'Mật khẩu ít nhất 6 kí tự'
    //     ]);
    // $user = new User();
    // $user->full_name = $req->fullname;
    // $user->email = $req->email;
    // $user->password = Hash::make($req->password);
    // $user->phone = $req->phone;
    // $user->position='0';
    // $user->address = $req->address;
    // $user->save();
    // return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    // }

}
