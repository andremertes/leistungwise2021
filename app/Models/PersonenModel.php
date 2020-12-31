<?php namespace App\Models;
use CodeIgniter\Model;

class PersonenModel extends Model
{

    public function login()
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('mitglieder.password');
        $this->personen->where('mitglieder.username', $_POST['username']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function getpers()
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('mitglieder.name');
        $this->personen->where('mitglieder.username', $_SESSION['username']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function getPersonenselect($person_id = NULL)
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');
        if ($person_id != NULL){
            $this->personen->where('mitglieder.name', $person_id);
        }
        $this->personen->orderBy('username');
        $result = $this->personen->get();

        if ($person_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function getPersonen($person_id = NULL)
    {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');

        if ($person_id != NULL){
            $this->personen->where('mitglieder.id', $person_id);
        }

        $this->personen->orderBy('username');
        $result = $this->personen->get();

        if ($person_id != NULL){
            return $result->getRowArray();
        } else{
            return $result->getResultArray();
        }
    }





    public function getData()
    {
        $result = $this->db->query('SELECT * FROM mitglieder');
        return $result->getResultArray();
    }

}
