<?php namespace App\Controllers;



use App\Models\Users;

class Site extends BaseController
{
    public function index()
    {
        helper(['form', 'url', 'session']);
        $session = session();

        $login = $this->request->getPost();

        if ($login){

            if (in_array('', $login)){
                session()->setFlashdata('msg', "<div class=\"ui red message\">preencha todos os campos</div>");

            }elseif (!filter_var($login['user_email'], FILTER_VALIDATE_EMAIL)){
                session()->setFlashdata('msg', "<div class=\"ui red message\">E-mail inválido</div>");
            }else{
                $readUser = new Users();
                $readUser->getWhere(['user_email'=> $login['user_email']]);
                $email = $readUser->asObject()->first();

                $pass = password_verify($login['user_pass'], $email->user_pass);

                if (!$email || !$pass){
                    session()->setFlashdata('msg', "<div class=\"ui red message\">E-mail ou senha inválida</div>");

                }else{
                    $_SESSION['user'] = $email->user_id;
                }


            }
        }

        if (isset($_SESSION['user'])){
            return redirect()->to(base_url('/dash'));

        }

        return view('login', [
            'title' => "Faça seu login"
        ]);
    }

    //--------------------------------------------------------------------

}
