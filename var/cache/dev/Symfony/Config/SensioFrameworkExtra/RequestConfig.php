<?php

namespace Symfony\Config\SensioFrameworkExtra;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RequestConfig 
{
    private $converters;
    private $autoConvert;
    private $disable;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function converters($value): static
    {
        $this->_usedProperties['converters'] = true;
        $this->converters = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoConvert($value): static
    {
        $this->_usedProperties['autoConvert'] = true;
        $this->autoConvert = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function disable(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['disable'] = true;
        $this->disable = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    public function __construct(array $value = [])
    {
        if (array_key_exists('converters', $value)) {
            $this->_usedProperties['converters'] = true;
            $this->converters = $value['converters'];
            unset($value['converters']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        if (array_key_exists('auto_convert', $value)) {
            $this->_usedProperties['autoConvert'] = true;
            $this->autoConvert = $value['auto_convert'];
            unset($value['auto_convert']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        if (array_key_exists('disable', $value)) {
            $this->_usedProperties['disable'] = true;
            $this->disable = $value['disable'];
            unset($value['disable']);
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
        if (isset($this->_usedProperties['converters'])) {
            $output['converters'] = $this->converters;
        }
        if (isset($this->_usedProperties['autoConvert'])) {
            $output['auto_convert'] = $this->autoConvert;
        }
        if (isset($this->_usedProperties['disable'])) {
            $output['disable'] = $this->disable;
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        return $output;
    }

}
