<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'user_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			
			'user_email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],

			'user_password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200'
			],

			'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP'
			
		]);

		
		$this->forge->addKey('user_id', TRUE);

	
		$this->forge->createTable('users', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
