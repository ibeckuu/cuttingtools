<?php

class CuttingToolsApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return array(
            '/home'
                => array('controller' => 'home', 'action' => 'index'),
            '/home/:action'
                => array('controller' => 'home'),

            '/leadAngle'
                => array('controller' => 'leadAngle', 'action' => 'index'),
            '/leadAngle/:action'
                => array('controller' => 'leadAngle'),
        );
    }

    protected function configure()
    {

    }
}

