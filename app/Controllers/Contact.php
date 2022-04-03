<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;

class Contact extends Controller
{
    public function contact() {
        helper(['form']);
        $data = [];
        echo view('contact', $data);
    }

    public function save() {

        helper(['form']);

        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[4]|max_length[50]',
            'message' => 'required|min_length[3]|max_length[200]',
        ];
        if ($this->validate($rules)) {
            $model = new ContactModel();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'message' => $this->request->getVar('message'),
            ];
            $model->save($data);
            return redirect()->to('/index');
        } else {
            $data['validation'] = $this->validator;
            echo view('contact', $data);
        }
    } 
} 