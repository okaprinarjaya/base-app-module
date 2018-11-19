<?php
use Migrations\AbstractSeed;

/**
 * Menus seed.
 */
class MenusSeed extends AbstractSeed
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
        'id' => '5477179c-f7f1-4c01-b6fe-24a9b5da659c',
        'parent_id' => null,
        'lft' => 1,
        'rght' => 10,
        'title' => 'Application Menu',
        'plugin' => null,
        'controller' => null,
        'action' => null
      ],
      [
        'id' => '31f23c2b-2649-41ce-9d1b-ef783695f759',
        'parent_id' => '5477179c-f7f1-4c01-b6fe-24a9b5da659c',
        'lft' => 2,
        'rght' => 9,
        'title' => 'Base Manage',
        'plugin' => null,
        'controller' => null,
        'action' => null
      ],
      [
        'id' => '89ee9fab-e393-4ff9-a9ea-8f07305a67cc',
        'parent_id' => '31f23c2b-2649-41ce-9d1b-ef783695f759',
        'lft' => 3,
        'rght' => 4,
        'title' => 'Users',
        'plugin' => 'CakeDC/Users',
        'controller' => 'Users',
        'action' => 'index'
      ],
      [
        'id' => '703f6b8d-e894-4b59-ab10-accea66fd622',
        'parent_id' => '31f23c2b-2649-41ce-9d1b-ef783695f759',
        'lft' => 5,
        'rght' => 6,
        'title' => 'Menus',
        'plugin' => 'BaseApp',
        'controller' => 'Menus',
        'action' => 'index'
      ],
      [
        'id' => '8f4aaec8-28e9-4c4d-bc02-08092727821e',
        'parent_id' => '31f23c2b-2649-41ce-9d1b-ef783695f759',
        'lft' => 7,
        'rght' => 8,
        'title' => 'Menu Distribution',
        'plugin' => 'BaseApp',
        'controller' => 'Menus',
        'action' => 'menusDistribution'
      ]
    ];

    $table = $this->table('menus');
    $table->insert($data)->save();
  }
}
