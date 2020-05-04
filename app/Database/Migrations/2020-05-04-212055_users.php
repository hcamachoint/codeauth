<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
						'uuid'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '50',
            ],
						'email'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '50',
            ],
            'firstname'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '30',
            ],
						'lastname'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '30',
            ],
						'username'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '30',
            ],
						'password'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '200',
            ],
						'status'       => [
                    'type'           => 'INT',
                    'constraint'     => '1',
            ],
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
