<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Project extends BaseController
{
   public function index() {
       $projet = new ProjectModel();
       $data['projets'] = $projet->findAll();
     echo view('projets', $data);
   }
   public function viewProjects($id)
	{
        $projet = new ProjectModel();
        $data['projets'] = $projet->where('id', $id)->first();
		if (!$data['projets'] ) {
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('projets_details', $data);
	}
}
