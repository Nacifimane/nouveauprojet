<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Autreproject extends Migration
{
	public function up()
	{
		$this->forge->addColumn('project', [
			'commentaire VARCHAR(255) '
		]);
	}

	//--------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('project', 'commentaire');
	}
}
