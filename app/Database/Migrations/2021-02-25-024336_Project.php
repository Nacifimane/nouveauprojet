<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'titre'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

			'image'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

			'technologie'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP'
			
		]);

		
		$this->forge->addKey('id', TRUE);

	
		$this->forge->createTable('project', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('project');
	}
}
