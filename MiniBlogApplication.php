<?php

class MiniBlogApplication extends Application
{
    protected $loginActions = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return array();
    }

    public function configure()
    {
        $tableName = Config::get('app.TABLE_NAME');
        $this->dbManager->connect('master', array(
            'dsn' => "mysql:dbname=$tableName;host=localhost",
            'user' => Config::get('app.DATABASE_USER'),
            'password' => Config::get('app.DATABASE_PASSWORD'),
        ));
    }
}
