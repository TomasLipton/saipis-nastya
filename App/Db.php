<?php


namespace App;

class Db
{

    private $dbh;
    private $settings;

    public function __construct()
    {
        $this->settings = require __DIR__ . '/settings.php';
        $this->dbh = new \PDO(
            'mysql:dbname=' .  $this->settings['Db']['base'] . ';host=' . $this->settings['Db']['host'] . ';charset=utf8', $this->settings['Db']['user'], $this->settings['Db']['password']
        );
    }

    public function execute(string $sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query(string $sql, array $data = [], string $class = \stdClass::class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}