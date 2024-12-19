<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Station;

class Main extends BaseController
{
    var $bundesland;
    var $station;
    public function __construct()
    {
        $this->bundesland = new Bundesland();
        $this->station = new Station();
    }
    public function index()
    {
        return view("index");
    }
    public function tabulka()
    {
        $data["bundesland"] = $this->bundesland->orderBy("name", "asc")->findAll();

        echo view("tabulka", $data);
    }
    public function zeme($bundesland){
        $data["station"] = $this->station->where('bundesland', $bundesland)->findAll();
        $data["bundesland"] = $this->bundesland->where('id', $bundesland)->findAll();
        echo view("zeme", $data);
    }
    public function mereni($bundesland){
        $data["station"] = $this->station->where('bundesland', $bundesland)->findAll();
        $data["bundesland"] = $this->bundesland->where('id', $bundesland)->findAll();
        echo view("mereni", $data);
    }
}
