<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
    public function userlist() {
        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('user_id', 'ASC')->findAll();
        return view('/admin/admin', $data);
    }

    public function update($user_id = null) {
        $user = new UserModel();
        $user_id = $this->request->getVar('user_id');
        $data = [
            'name' => $this->request->getPost('user_name'),
            'email' => $this->request->getPost('user_email'),
            'mobile' => $this->request->getPost('user_mobile')
        ];
        $user->update($user_id, $data);
        return $this->response->redirect(site_url('/admin'));
    }

    public function delete($user_id = null) {
        $UserModel = new UserModel();
        $data['users'] = $UserModel->where('user_id', $user_id)->delete($user_id);
        return $this->response->redirect(site_url)('/admin');
    }
}