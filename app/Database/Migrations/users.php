<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration {
	public function up () {
		$this->forge->addField ([
			'id'        => [
				'type'              =>  'INT',
				'constraint'        =>  9,
				'auto_increment'    =>  true,
			],
			'username'  => [
				'type'          =>  'VARCHAR',
				'constraint'    =>  50,
				'null'          =>  false
			],
			'email'     => [
				'type'          =>  'VARCHAR',
				'constraint'    =>  50,
				'null'          => false
			],
			'password'  => [
				'type'  =>  'TEXT',
				'null'  =>  false
			],
			'create_at'  => [
				'type'      =>  'TIMESTAMP',
				'null'      => false
			],
			'updated_at'  => [
				'type'      =>  'TIMESTAMP',
				'null'      => true,
				'default'   => ''
			],
		]);
		$this->forge->addKey ('id', true);
		$this->forge->createTable ('ci_sessions', true);
	}
	public function down () {
		$this->forge->dropTable ('ci_sessions', true);
	}
}