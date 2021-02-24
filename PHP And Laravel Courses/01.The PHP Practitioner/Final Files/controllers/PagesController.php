<?php 

class PagesController

{
    public function home()
    {
        # code...
        // dd('any');
        
        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('users');

        // require 'views/view.php';
        return view('index' , compact('users' , 'tasks'));
    }

    public function about()
    {
        # code...
        // require 'views/about.view.php';
        return view('about');
    }

    public function contact()
    {
        # code...
        // require 'views/contact.view.php';
        return view('contact');
    }

    public function culture()
    {
        # code...
        // require 'views/about-culture.view.php';
        return view('about-culture');
    }


}