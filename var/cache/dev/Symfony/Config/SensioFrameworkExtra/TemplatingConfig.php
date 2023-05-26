<?php

namespace Symfony\Config\SensioFrameworkExtra;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TemplatingConfig 
{
    private $controllerPatterns;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function controllerPatterns(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['controllerPatterns'] = true;
        $this->controllerPatterns = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    public function __construct(array $value = [])
    {
        if (array_key_exists('controller_patterns', $value)) {
            $this->_usedProperties['controllerPatterns'] = true;
            $this->controllerPatterns = $value['controller_patterns'];
            unset($value['controller_patterns']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['controllerPatterns'])) {
            $output['controller_patterns'] = $this->controllerPatterns;
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        return $output;
    }

}
