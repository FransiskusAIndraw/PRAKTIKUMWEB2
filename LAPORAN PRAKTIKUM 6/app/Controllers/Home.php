<?php namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'ini apa anjaer'
        ];
        return view('home', $data);
    }
}
