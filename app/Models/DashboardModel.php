<?php namespace App\Models;
use CodeIgniter\Model;

class DashboardModel extends Model
{

    public function getklausuren()
    {
        $this->klausuren = $this->db->table('klausuren');
        $this->klausuren->select('*');
        $this->klausuren->join('klausurenmitglieder', 'klausuren.id = klausurenmitglieder.klausurID');
        $result = $this->klausuren->get();

        return $result->getResultArray();

    }


    public function klausadd($usern, $klausurn){

        $user = $usern;
        $klausur = $klausurn;

        $this->neuekl = $this->db->table('klausurenmitglieder');
        //$this->neuekl->insert($are);
        $this->neuekl->insert(array('mitgliedID' => $user, 'klausurID' => $klausur));

        $this->dladd = $this->db->table('klausuren');
        $this->dladd->select('downloads');
        $this->dladd->where('id', $klausur);
        $ergebnis = $this->dladd->get();

        $ergebnisneu = $ergebnis+'1';

        $this->dlmehr = $this->db->table('klausuren');
        $this->dlmehr->where('id', $klausur);
        $this->dlmehr->update(array('downloads' => $ergebnisneu));

    }


    public function getneueklausur()
    {

        $this->download = $this->db->table('klausurenmitglieder');
        $this->download->join('klausuren', 'klausurenmitglieder.klausurID = klausuren.id');
        $this->download->select('*');
        $this->download->where('klausurenmitglieder.mitgliedID !=', $userid);
        $this->download->selectMin('klausuren.downloads');

        $ergebnis = $this->download->get();
        $kleinstezahl = $ergebnis->getResultArray();

        $klein = $kleinstezahl[0]['downloads'];

        $min = $klein;
        //return $min;

        // Klausuren mit dieser Downloadzahl wählen
        $this->klausuren = $this->db->table('klausurenmitglieder');
        $this->klausuren->join('klausuren', 'klausurenmitglieder.klausurID = klausuren.id');
        $this->klausuren->select('*');
        $this->klausuren->where('klausuren.downloads', $min);
        $this->klausuren->where('klausurenmitglieder.mitgliedID !=', $userid);
        $result = $this->klausuren->get();
        return $result->getResultArray();

    }

}