<?php
namespace Javlopez\Codeception\Module;

use Codeception\Lib\Framework;


/**
 * Class Properties
 * @author Javier Lopez Lopez<javier.lopez@aurea.com>
 */
class Properties extends Framework
{
    private $config;
    
    public function _beforeSuite($settings = [])
    {
        $this->config = $settings['propertiesFile'];
    }
    
    public function getProperty($property)
    {
        return $this->debug("Getting {$property}!");
    }
}