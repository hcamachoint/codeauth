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
										'unique'         => true,
            ],
						'email'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '50',
										'unique'         => true,
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
										'unique'         => true,
            ],
						'password'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '200',
            ],
						'status'       => [
                    'type'           => 'TINYINT',
                    'constraint'     => '1',
										'default'				 =>	0,
            ],
						'is_admin'       => [
                    'type'           => 'BOOL',
										'default'				 =>	FALSE,
            ],
						'created_at'       => [
                    'type'           => 'datetime',
            ],
						'updated_at'       => [
                    'type'           => 'datetime',
            ],
						'deleted_at'       => [
                    'type'           => 'datetime',
										'null'					 =>	TRUE,
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
