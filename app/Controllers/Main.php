<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
class Main extends BaseController
{
    var $bundesland;
    public function __construct()
    {
        $this->bundesland = new Bundesland();
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
    public function zeme($id){
        $data["bundesland"] = $this->bundesland->find($id);
        echo view("zeme", $data);
    }
}
