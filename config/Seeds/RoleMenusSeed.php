<?php
use Migrations\AbstractSeed;

/**
 * RoleMenus seed.
 */
class RoleMenusSeed extends AbstractSeed
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
        'role' => 'user',
        'menu_id' => '31f23c2b-2649-41ce-9d1b-ef783695f759'
      ],
      [
        'role' => 'user',
        'menu_id' => '703f6b8d-e894-4b59-ab10-accea66fd622'
      ],
      [
        'role' => 'user',
        'menu_id' => '89ee9fab-e393-4ff9-a9ea-8f07305a67cc'
      ],
      [
        'role' => 'user',
        'menu_id' => '8f4aaec8-28e9-4c4d-bc02-08092727821e'
      ]
    ];

    $table = $this->table('role_menus');
    $table->insert($data)->save();
  }
}
