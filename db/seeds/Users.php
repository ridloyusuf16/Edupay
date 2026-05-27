<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = array(
            array(
                'username' => 'yusufridlo',
                'name' => 'Yusuf Ridlo',
                'email' => 'yusufridlo16@gmail.com',
                'role' => 'Admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT)
            ),
            array(
                'username' => 'aminah',
                'name' => 'Siti Aminah',
                'email' => 'aminah@gmail.com',
                'role' => 'Officer',
                'password' => password_hash("admin", PASSWORD_DEFAULT)
            ),
            array(
                'username' => 'anis',
                'name' => 'Anisaul Istiqomah',
                'email' => 'anis@gmail.com',
                'role' => 'Officer',
                'password' => password_hash("admin", PASSWORD_DEFAULT)
            )
            
        );

        $user = $this->table('users');
        $user->insert($data)->save();
    }
}
