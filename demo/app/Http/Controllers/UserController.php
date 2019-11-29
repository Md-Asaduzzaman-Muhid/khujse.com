<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Services\UserService;

class UserController extends Controller
{
    private $Service;
    public function __construct()
    {
        $this->middleware('auth');
        $this->Service = new UserService();
    }

    public function list(){
        $users = $this->Service->getUserList();
        return view('user.list')->with('users',$users);
    }

    public function create(){
        return view('user.create');
    }

    public function detail($id){
        $user = $this->Service->getDetail($id);
        return view('user.detail')->with('user',$user);
    }

    public function store(Request $request){
        $data = $request->all();
        $this->Service->save($data);
        return redirect()->route('user.list');
    }

    public function delete($id){
        $this->Service->delete($id);
        return redirect()->back();
    }

    public function makeAdmin($id){
        $this->Service->makeAdmin($id);
        return redirect()->back();
    }

    public function makeUser($id){
        $this->Service->makeUser($id);
        return redirect()->back();
    }
}























