<?php
class dbsetup extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;
    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE tweets (what VARCHAR(50) NOT NULL)");
    }
    public function tearDown()
    {
        $this->pdo->query("DROP TABLE tweets");
    }
    
    public function testOnePlusOne() {
        $this->assertEquals(1+1,2);
    }
}