<?php
namespace BaseApp\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MenusFixture
 *
 */
class MenusFixture extends TestFixture
{

  /**
   * Table name
   *
   * @var string
   */
  public $table = 'menus';

  /**
   * Fields
   *
   * @var array
   */
  // @codingStandardsIgnoreStart
  public $fields = [
    'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
    'parent_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
    'lft' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
    'rght' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
    'title' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
    'plugin' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
    'controller' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
    'action' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
    'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
    '_constraints' => [
        'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
    ],
    '_options' => [
        'engine' => 'InnoDB',
        'collation' => 'utf8_general_ci'
    ],
  ];
  // @codingStandardsIgnoreEnd

  /**
   * Init method
   *
   * @return void
   */
  public function init()
  {
    $this->records = [
      [
        'id' => 'b30be162-d34c-43fa-b798-ea03d7313b52',
        'parent_id' => 'a95af221-3ee3-4b18-a418-84bae1382417',
        'lft' => 1,
        'rght' => 1,
        'title' => 'Lorem ipsum dolor sit amet',
        'plugin' => 'Lorem ipsum dolor sit amet',
        'controller' => 'Lorem ipsum dolor sit amet',
        'action' => 'Lorem ipsum dolor sit amet',
        'created' => '2018-11-19 05:47:20'
      ],
    ];
    parent::init();
  }
}
