<?php

namespace App\Controllers;

use App\Core\App;

class UsersController{

    public function index()
    {
        # code...
        $users = App::get('database')->selectAll('users');

        return view('users' , compact('users'));

    }

    public function store()
    {
        # code...
        App::get('database')->insert('users' , [
            'name' => $_POST['name']
            ]);

            return redirect('users');
            

    }
}