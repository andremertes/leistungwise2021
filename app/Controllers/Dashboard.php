<?php namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{


    public function __construct(){
        $this->PersonenModel = new PersonenModel();
    }

    public function dash_dyn()
    {
        if (!$this->session->get('loggedin')){
            return redirect()->to(base_url().'/login/index');
        }else{

            //$persname = $_SESSION['username'];

            $person_id = $_SESSION['username'];

            $persmodel = new PersonenModel();

            $data['name'] = $persmodel->getPersonenselect();




            $data['title'] = "Login";

            echo view('templates/head', $data);
            echo view('templates/navigation', $data);
            echo view('pages/dashboard', $data);
            //echo view('pages/pwhasher');
            echo view('templates/foot', $data);
        }

    }

    //--------------------------------------------------------------------

}
