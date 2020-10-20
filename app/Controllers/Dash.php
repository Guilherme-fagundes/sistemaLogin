<?php


namespace App\Controllers;


class Dash extends BaseController
{
    public function index()
    {
        $session = session();
        if (!isset($_SESSION['user'])) {
            return redirect()->to(base_url('/'));

        }
        var_dump($session->get());

        return view('dash/painel');

    }

    public function logout()
    {
        $session = session();
        if ($session->has('user')){
            unset($_SESSION['user']);
            return redirect()->to(base_url());

        }
    }
}