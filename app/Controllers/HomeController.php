<?php

namespace App\Controllers;

use App\Models\HomeModel;

class HomeController extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function simpan()
    {
        $data = $this->request->getPost('data');

        // Pisahkan data menjadi tiga bagian
        $dataArray = explode(' ', $data);
        $name = $dataArray[0];
        $age = $dataArray[1];
        $city = $dataArray[2];

        // Simpan data ke database
        $model = new HomeModel();
        $model->insert([
            'name' => $name,
            'age' => $age,
            'city' => $city
        ]);

        return redirect()->to('index');
    }
}
