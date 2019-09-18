<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){

    if(request()->has('empty')){
        $users = [];
    }else{
        $users = [
            'nector',
            'santi',
            'jeffer',
            'alex',
            'Miguel',
        ];
    }
  
    $title = 'Listado de Ususarios';

    //var_dump(compact('title', 'users')); die();
    //dd(compact('title', 'users'));

    // return view('users', [ 
    //     'users' => $users,
    //     'title' => $title
    // ]);

    // return view('users')
    // ->with('users', $users)
    // ->with('title', $title);

    return view('users', compact('title', 'users'));

   }

   public function show($id){
    return view('users-show', compact('id'));
   }

   public function create(){
       return 'Crear nuevo usuario';
   }
}
