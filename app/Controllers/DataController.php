<?php

namespace App\Controllers;

use App\Models\HomeModel;

class DataController extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function simpan()
    {
        if ($this->request->getMethod() === 'post') {
            $data = $this->request->getPost('data');


            $dataArray = explode(' ', $data);
            $field1 = strtoupper($dataArray[0]);
            $field2 = $dataArray[1];
            $field3 = strtoupper($dataArray[2]);
            // $tanggal = date('Y-m-d H:i:s');

            if (!is_numeric($field2)) {
                echo "Input kedua harus berupa angka.";
                return;
            }

            $model = new HomeModel();
            $model->save([
                'nama' => $field1,
                'age' => $field2,
                'city' => $field3,
                // 'created_at' => $tanggal
            ]);

            return redirect()->to('homepage.php');
        }

        return view('homepage');
    }
}
