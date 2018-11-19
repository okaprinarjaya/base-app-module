<?php
use Migrations\AbstractMigration;

class CreateRoleMenus extends AbstractMigration
{
  /**
   * Change Method.
   *
   * More information on this method is available here:
   * http://docs.phinx.org/en/latest/migrations.html#the-change-method
   * @return void
   */
  public function change()
  {
    $table = $this->table('role_menus');
    $table->addColumn('role', 'string', ['length' => 16, 'null' => false]);
    $table->addColumn('menu_id', 'char', ['length' => 36, 'null' => false]);
    $table->addColumn('deleted', 'char', ['length' => 1, 'null' => false, 'default' => 'N']);
    $table->create();
  }
}
