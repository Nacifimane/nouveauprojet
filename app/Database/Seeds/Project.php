<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Project extends Seeder
{
	public function run()
	{
		
		$news_data = [
			[
				'titre' => 'Selamat datang di Codeigntier',
				'slug'  => 'codeigniter-intro',
				'technologie' => 'Pengenalan Codeigniter untuk Pemula.',
				'commentaire' => 'CodeIgniter est un framework de développement d applications - une boîte à outils - pour les personnes qui créent des sites Web en utilisant PHP. Son objectif est de vous permettre de développer des projets beaucoup plus rapidement que vous ne le pourriez si vous écriviez du code à partir de zéro, en fournissant un riche ensemble de bibliothèques pour les tâches couramment nécessaires, ainsi qu une interface simple et une structure logique pour accéder à ces bibliothèques. CodeIgniter vous permet de vous concentrer de manière créative sur votre projet en minimisant la quantité de code nécessaire pour une tâche donnée..'
			],
			[
				'titre' => 'Hello World',
				'slug' => 'hello-world',
				'technologie' => 'Hello World, ini contoh artikel',
				'commentaire' => 'CodeIgniter est un framework de développement d applications - une boîte à outils - pour les personnes qui créent des sites Web en utilisant PHP. Son objectif est de vous permettre de développer des projets beaucoup plus rapidement que vous ne le pourriez si vous écriviez du code à partir de zéro, en fournissant un riche ensemble de bibliothèques pour les tâches couramment nécessaires, ainsi qu une interface simple et une structure logique pour accéder à ces bibliothèques. CodeIgniter vous permet de vous concentrer de manière créative sur votre projet en minimisant la quantité de code nécessaire pour une tâche donnée...'
			],
			[
				'titre' => 'Meetup komunitas Codeigniter Indonesia',
				'slug'	=> 'codeigniter-meetup',
				'technologie' => 'Seru sekali meetup perdana komunitas codeigniter..',
				'commentaire' => 'CodeIgniter est un framework de développement d applications - une boîte à outils - pour les personnes qui créent des sites Web en utilisant PHP. Son objectif est de vous permettre de développer des projets beaucoup plus rapidement que vous ne le pourriez si vous écriviez du code à partir de zéro, en fournissant un riche ensemble de bibliothèques pour les tâches couramment nécessaires, ainsi qu une interface simple et une structure logique pour accéder à ces bibliothèques. CodeIgniter vous permet de vous concentrer de manière créative sur votre projet en minimisant la quantité de code nécessaire pour une tâche donnée...'
			]
		];

		foreach($news_data as $data){
			
			$this->db->table('project')->insert($data);
		}
	}
}
