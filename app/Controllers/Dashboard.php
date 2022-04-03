<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller {
    public function dashboard() {
        echo view('dashboard');
    }
}