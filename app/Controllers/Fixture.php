<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\FixtureModel;


class Fixture extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){  

      $model = new FixtureModel();
      $data['fixture'] = $model->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
      // return $this->setResponseFormat('xml')->respond($data); 
    
    //string formate
   /* $model = new FixtureModel();
      $data['fixture'] = $model->orderBy('id', 'DESC')->findAll();
     return json_encode($data['fixture'], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT); //JSON string 
     
     */

    }

    // create
    public function create() {
        $model = new FixtureModel();
        $data = [
            'referee' => $this->request->getVar('referee'),
            'timezone'  => $this->request->getVar('timezone'),
            'date' => $this->request->getVar('date'),
            'timestamp'  => $this->request->getVar('timestamp'),
            'periods_id' => $this->request->getVar('periods_id'),
            'venue_id'  => $this->request->getVar('venue_id'),
            'status_id'  => $this->request->getVar('status_id')
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }

    // single user
    public function show($id = null){
        $model = new FixtureModel();
        $data = $model->where('id', $id)->first();
        if($data){
           // return $this->respond($data);
            return $this->setResponseFormat('xml')->respond($data);
        }else{
            return $this->failNotFound('Not found');
        }
    }

    // update
    public function update($id = null){
        $model = new FixtureModel();
        $id = $this->request->getVar('id');
        $data = [
            'referee' => $this->request->getVar('referee'),
            'timezone'  => $this->request->getVar('timezone'),
            'date' => $this->request->getVar('date'),
            'timestamp'  => $this->request->getVar('timestamp'),
            'periods_id' => $this->request->getVar('periods_id'),
            'venue_id'  => $this->request->getVar('venue_id'),
            'status_id'  => $this->request->getVar('status_id')
        ];
        $model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'updated successfully'
          ]
      ];
      return $this->respond($response);
    }

    // delete
    public function delete($id = null){
        $model = new FixtureModel();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No found');
        }
    }

}