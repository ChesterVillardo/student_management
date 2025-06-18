<?php

namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;

class Students extends ResourceController
{
    protected $modelName = 'App\Models\StudentModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $student = $this->model->find($id);
        return $student ? $this->respond($student) : $this->failNotFound('Student not found');
    }

    public function create()
    {
        
        $data = $this->request->getJSON();

        $this->model->insert([
            'full_name'  => $data->full_name,
            'course'     => $data->course,
            'year_level' => $data->year_level,
            'gender'     => $data->gender,
        ]);

        return $this->respondCreated(['message' => 'Student added']);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();

        $this->model->update($id, [
            'full_name'  => $data->full_name,
            'course'     => $data->course,
            'year_level' => $data->year_level,
            'gender'     => $data->gender,
        ]);

        return $this->respond(['message' => 'Student updated']);
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Student deleted']);
    }
}
