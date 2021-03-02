<?php namespace App\Controllers;

use \App\Models\ProjectModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PrjAdmin extends BaseController
{

    public function index() {
        $projets = new ProjectModel();
        $data['projets'] = $projets->findAll();
        
      echo view('admin_list_projets', $data);
    }

    //--------------------------------------------------------------------------
    
    public function preview($id)
	{
        $projets = new ProjectModel();

        $data['projets'] = $projets->where('id', $id)->first();

		if (!$data['projets'] ) {

			throw PageNotFoundException::forPageNotFound();
		}

		echo view('projets_detail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {     
        // faire la validation
        $validation =  \Config\Services::validation();
        $validation->setRules(['titre' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        $db = \Config\Database::connect();
        $builder = $db->table('project');

       $validated = $this->validate([
           'file' => [
               'uploaded[file]',
               'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
               'max_size[file,4096]',
           ],
       ]);
        
        //si les données sont valides, enregistrez-les dans la base de données
        if($isDataValid){
            $session = session();
            $projets = new ProjectModel();
            $projets->insert([
                "titre" => $this->request->getPost('titre'),
                "technologie" => $this->request->getPost('technologie'),
                "commentaire" => $this->request->getPost('commentaire'),
                "slug" => url_title($this->request->getPost('titre'), '-', TRUE),
                "image" => $this->request->getFile('image')->store(),
            ]);
         
               if ($validated) {
                   $image = $this->request->getFile('image');
                   $image->move('./public/uploads/');
        
               }
        
            $session->setFlashdata('msg', 'Project is created succefuly');
            return redirect()->to('http://localhost:8080/PrjAdmin');
            
        }
       
        
        // afficher le formulaire de création
        echo view('admin_create_projets');
    }
    //-------------------------------------------------------------------------
    public function storeImg()
    {  
  
      helper(['form', 'url']);
          
      $db = \Config\Database::connect();
          $builder = $db->table('project');
  
         $validated = $this->validate([
             'file' => [
                 'uploaded[file]',
                 'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                 'max_size[file,4096]',
             ],
         ]);
   
         if ($validated) {
             $image = $this->request->getFile('image');
             $image->move('./public/uploads');
  
           $data = [
  
             'name' =>  $image->getClientName(),
             'type'  => $image->getClientMimeType()
           ];
  
           $save = $builder->insert($data);
        
         }
  
        return redirect()->to('http://localhost:8080/PrjAdmin');
  
     }
     //------------------------------------------------------------------------

    public function edit($id)
    {
        //récupérer l'article à éditer

        $projets = new ProjectModel();
        $data['projets'] = $projets->where('id', $id)->first();
        
        // faire la validation des données d'article

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'titre' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        $database = \Config\Database::connect();
        $db = $database->table('project');
    
        $input = $this->validate([
            'image' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png,image/jfif]',
                'max_size[file,1024]',
            ]
        ]);
        // si les données sont valides, enregistrez-les dans la base de données
        if($isDataValid){
            $session = session();
            $projets->update($id, [
                "titre" => $this->request->getPost('titre'),
                "technologie" => $this->request->getPost('technologie'),
                "commentaire" => $this->request->getPost('commentaire'),
            
            ]);
            
            $session->setFlashdata('msgs', 'Project is edited succefuly');
            return redirect()->to('http://localhost:8080/PrjAdmin');
        }

        // afficher le formulaire d'édition
        echo view('admin_edit_projets', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $projets = new ProjectModel();
        $session = session();
        $projets->delete($id);
        $session->setFlashdata('msgss', 'Project is deleted succefuly');
        return redirect()->to('http://localhost:8080/PrjAdmin');
    }
}