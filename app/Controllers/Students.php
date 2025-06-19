<?php
namespace App\Controllers;
use App\Models\StudentModel;

class Students extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $search = $this->request->getGet('search');

        if ($search) {
            $students = $model->like('full_name', $search)
                              ->orLike('course', $search)
                              ->orLike('year_level', $search)
                              ->orLike('gender', $search)
                              ->findAll();
        } else {
            $students = $model->findAll();
        }

        $data = [
            'students' => $students,
            'search' => $search,
        ];

        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $file = $this->request->getFile('profileimg');
        $imgName = null;
    
        // Handle file upload if valid
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imgName = $file->getRandomName();
            $file->move('uploads', $imgName);
        }
    
        $model = new \App\Models\StudentModel();
        $model->save([
            'full_name'   => $this->request->getPost('full_name'),
            'course'      => $this->request->getPost('course'),
            'year_level'  => $this->request->getPost('year_level'),
            'gender'      => $this->request->getPost('gender'),
            'profileimg'  => $imgName, // Save image name to DB
        ]);
    
        return redirect()->to('/students')->with('success', 'Student added successfully!');
    }
    public function edit($id)
    {
        $model = new StudentModel();
        $data['student'] = $model->find($id);

        if (!$data['student']) {
            return redirect()->to('/students')->with('error', 'Student not found.');
        }

        return view('students/edit', $data);
    }

    public function update($id)
{
    $model = new StudentModel();
    $student = $model->find($id);

    $file = $this->request->getFile('profileimg');
    $imgName = $student['profileimg']; // default to current image

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $imgName = $file->getRandomName();
        $file->move('uploads', $imgName);
    }

    $model->update($id, [
        'full_name'   => $this->request->getPost('full_name'),
        'course'      => $this->request->getPost('course'),
        'year_level'  => $this->request->getPost('year_level'),
        'gender'      => $this->request->getPost('gender'),
        'profileimg'  => $imgName,
    ]);

    return redirect()->to('/students')->with('success', 'Student updated successfully.');
}


    public function delete($id)
    {
        $model = new StudentModel();
        $student = $model->find($id);

        // Delete profile image if exists
        if ($student && !empty($student['profileimg']) && file_exists('uploads/' . $student['profileimg'])) {
            unlink('uploads/' . $student['profileimg']);
        }

        $model->delete($id);
        return redirect()->to('/students')->with('success', 'Student deleted successfully.');
    }
}
