<?php namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\DashboardModel;
use CodeIgniter\Controller;

class Login extends BaseController
{


    public function __construct(){
        $this->PersonenModel = new PersonenModel();
        $this->DashboardModel = new DashboardModel();
    }

    public function index()
    {
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            if ($this->PersonenModel->login() != NULL)
            {
                $password = $this->PersonenModel->login()['password'];
                if (password_verify($_POST['password'], $password))
                {
                    $name = $this->PersonenModel->login()['name'];
                    $userid = $this->PersonenModel->login()['id'];

                    $userdata = array(
                        'id' => $userid,
                        'name' => $name,
                        'loggedin' => TRUE,
                    );

                    $this->session->set($userdata);

                    return redirect()->to(base_url().'/dashboard/dash_dyn');
                }
            }
        }

        $data['title'] = "Login";

        echo view('templates/headalt', $data);
        echo view('login', $data);
        //echo view('pages/pwhasher');
        echo view('templates/foot', $data);

    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url().'/login');
    }

    //--------------------------------------------------------------------

}
