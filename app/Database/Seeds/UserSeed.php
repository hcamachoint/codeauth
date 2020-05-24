<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                helper('kit');
                $data = [
                        'firstname' => 'Admin',
                        'lastname'    => 'System',
                        'username'  =>  'admin',
                        'email' =>  'admin@local.dev',
                        'password'  =>  password_hash('asd123', PASSWORD_BCRYPT),
                        'uuid' => uuid(),
          							'status' => 1,
                        'is_admin'  =>  TRUE
                ];
                $this->db->table('users')->insert($data);
        }
}
