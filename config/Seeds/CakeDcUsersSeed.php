<?php
use Migrations\AbstractSeed;

/**
 * CakeDcUsers seed.
 */
class CakeDcUsersSeed extends AbstractSeed
{
  /**
   * Run Method.
   *
   * Write your database seeder using this method.
   *
   * More information on writing seeds is available here:
   * http://docs.phinx.org/en/latest/seeding.html
   *
   * @return void
   */
  public function run()
  {
    $data = [
      [
        'id' => '8b16d313-9804-473c-8e68-88b6b5122c2a',
        'username' => 'mimin',
        'email' => 'mimin@mailer.com',
        'password' => '$2y$10$zZeMzxG.sWIH9L18oW.7bebUvUZK4hw0X77Gvii/S4FCfPD2bFTTO',
        'first_name' => 'Agan',
        'last_name' => 'Mimin',
        'token' => null,
        'token_expires' => null,
        'api_token' => null,
        'activation_date' => null,
        'secret' => null,
        'secret_verified' => null,
        'tos_date' => null,
        'active' => 1,
        'is_superuser' => 0,
        'role' => 'admin',
        'created' => '2018-11-11 12:00:20',
        'modified' => '2018-11-11 12:00:20'
      ],
      [
        'id' => '129d799a-d06d-471c-adb7-6e7b7d44dc0a',
        'username' => 'usertesting',
        'email' => 'usertesting@mailer.com',
        'password' => '$2y$10$xvwXP7MQzEB52AO.z76Bz.TJnyqy9umA9P5jAjkslR9vAA58lRNci',
        'first_name' => 'User',
        'last_name' => 'Testing',
        'token' => null,
        'token_expires' => null,
        'api_token' => null,
        'activation_date' => null,
        'secret' => null,
        'secret_verified' => null,
        'tos_date' => null,
        'active' => 1,
        'is_superuser' => 0,
        'role' => 'user',
        'created' => '2018-11-11 12:00:20',
        'modified' => '2018-11-11 12:00:20'
      ]
    ];

    $table = $this->table('users');
    $table->insert($data)->save();
  }
}
