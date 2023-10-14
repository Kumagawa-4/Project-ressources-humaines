<?php

namespace App\Controllers;

use App\Models\CvModel;
use CodeIgniter\Controller;

class Cv extends BaseController
{
    public function liste_views()
    {
        $cvModel = new CvModel();
        $data['cvList'] = $cvModel->getCvList();
        return view('Liste_cv', $data);
    }
}