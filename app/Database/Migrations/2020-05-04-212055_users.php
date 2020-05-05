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
                    'type'           => 'TINYINT',
                    'constraint'     => '1',
            ],
						'created_at datetime default current_timestamp',
						'updated_at datetime default current_timestamp on update current_timestamp',
						'deleted_at datetime default null',
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
