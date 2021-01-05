<?php namespace App\Controllers;

use App\Models\DashboardModel;
use App\Models\PersonenModel;
use CodeIgniter\Controller;

class Dashboard extends BaseController
{


    public function __construct(){
        $this->PersonenModel = new PersonenModel();
        $this->DashboardModel = new DashboardModel();
    }

    public function dash_dyn()
    {
        if (!$this->session->get('loggedin')){
            return redirect()->to(base_url().'/login/index');
        }else{

            $data['userid'] = $this->session->get('id');
            $data['name'] = $this->session->get('name');
            //$data['klausuren'] = $this->session->get('klausuren');

            $data['klausuren'] = $this->DashboardModel->getklausuren($data);

            $data['title'] = "Login";

            echo view('templates/head', $data);
            echo view('templates/navigation', $data);
            echo view('pages/dashboard', $data);
            //echo view('pages/pwhasher');
            echo view('templates/foot');
        }

    }

    public function anfordern()
    {
            $userid = $this->session->get('id');

            if (isset($_POST['btnanfordern'])){

                $min = $this->DashboardModel->getneueklausur($userid);

                // Alle von mir schon bearbeiteten Klausuren werden rausgeholt
                $klausuren = array();
                foreach ($min as $klausur) {
                    if ($klausur['mitgliedID'] != $userid){
                        $klausuren[] = $klausur;
                    } else { }
                }
                //var_dump($klausuren);

                // Zufällige Klausur wird ausgewählt
                $anzahl = count ( $klausuren);
                $zufall = rand(0,$anzahl);
                $neuekorr = $klausuren[$zufall];
                //var_dump($neuekorr);
                $neueid = $neuekorr['id'];

                $ars = array();

                if ($neuekorr != null) {

                    if (!$this->session->get('loggedin')){
                        return redirect()->to(base_url().'/login/index');
                    }else{

                        //var_dump($neuekorr);

                        $usern = $userid;
                        $klausurn = $neueid;

                        //var_dump($user);
                        //var_dump($klausur);

                        $this->DashboardModel->klausadd($usern, $klausurn);

                        return redirect()->to(base_url().'/dashboard/dash_dyn');

                    }

                } else {

                    if (!$this->session->get('loggedin')){
                        return redirect()->to(base_url().'/login/index');
                    }else{

                        $data['userid'] = $this->session->get('id');
                        $data['name'] = $this->session->get('name');
                        //$data['klausuren'] = $this->session->get('klausuren');

                        $data['klausuren'] = $this->DashboardModel->getklausuren($data);

                        $data['title'] = "Login";

                        echo view('templates/head', $data);
                        echo view('templates/navigation', $data);
                        echo view('pages/dashboard', $data);
                        //echo view('pages/pwhasher');
                        echo view('templates/foot');
                    }

                }

            }
    }

    //--------------------------------------------------------------------

}
