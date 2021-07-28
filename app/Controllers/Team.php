<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\TeamsModel;


class Team extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){  

     $model = new TeamsModel();
      $data['fixture'] = $model->orderBy('id', 'DESC')->findAll();
     return json_encode($data['fixture'], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT); //JSON string

    }

    

}