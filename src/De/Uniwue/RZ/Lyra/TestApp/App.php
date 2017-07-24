<?php
/**
* The test App is added here.
*
* @author Pouyan Azari <pouyan.azari@uni-wuerzburg.de>
* @license MIT
*/
namespace De\Uniwue\RZ\Lyra\TestApp;

use De\Uniwue\RZ\Lyra\Base\Base;

class App{

    /**
    * The name of the given application
    * @var string
    */
    private $name;

    /**
    * The paths to the config files
    * @var array
    **/
    private $paths;

    /**
    * Placeholder for the base
    * @var Base
    **/
    private $base;

    /**
    * Placeholder for the container
    * @var Container
    **/
    private $container;

    /**
    * Placeholder for the logger
    * @var $logger
    */
    private $logger;

    /**
    * Constructor
    *
    * @param string $name   The name of the given application
    * @param array  $paths  The configuration paths that should be used.
    */
    public function __construct($name, $paths){
        $this->paths = $paths;
        $this->name = $name;
    }

    /**
    * The configuration is done in this method
    *
    */
    public function configure(){
        // Build the base
        $this->base = new Base($this->name, $this->paths);
        // Create the config container
        $this->container = $this->base->getConfigurationContainer();
        // Set the application name in the parameters
        $this->container->setParameter("name", $this->name);
        $this->container->compile();
    }


    /**
    * Runs the application
    *
    */
    public function run(){
        $this->container->get("logger")->info("ERRR");
    }
}