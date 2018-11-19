<?php
use Migrations\AbstractMigration;

class CreateMenus extends AbstractMigration
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
        $table = $this->table('menus', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid');
        $table->addColumn('parent_id', 'char', ['default' => null, 'length' => 36, 'null' => true]);
        $table->addColumn('lft', 'integer');
        $table->addColumn('rght', 'integer');
        $table->addColumn('title', 'string', ['length' => 32, 'null' => false]);
        $table->addColumn('plugin', 'string', ['length' => 64, 'default' => null, 'null' => true]);
        $table->addColumn('controller', 'string', ['length' => 64, 'default' => null, 'null' => true]);
        $table->addColumn('action', 'string', ['length' => 64, 'default' => null, 'null' => true]);
        $table->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'null' => false]);
        $table->create();
    }
}
