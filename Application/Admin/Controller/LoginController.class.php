<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function helloworld()
    {
        echo("hello world!")
    }

    public function check()
    {
        echo("check success");
    }
}
