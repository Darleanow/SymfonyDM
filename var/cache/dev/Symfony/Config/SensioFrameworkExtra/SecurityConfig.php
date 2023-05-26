<?php

namespace Symfony\Config\SensioFrameworkExtra;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SecurityConfig 
{
    private $annotations;
    private $expressionLanguage;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function annotations($value): static
    {
        $this->_usedProperties['annotations'] = true;
        $this->annotations = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    /**
     * @default 'sensio_framework_extra.security.expression_language.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function expressionLanguage($value): static
    {
        $this->_usedProperties['expressionLanguage'] = true;
        $this->expressionLanguage = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
    public function __construct(array $value = [])
    {
        if (array_key_exists('annotations', $value)) {
            $this->_usedProperties['annotations'] = true;
            $this->annotations = $value['annotations'];
            unset($value['annotations']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        if (array_key_exists('expression_language', $value)) {
            $this->_usedProperties['expressionLanguage'] = true;
            $this->expressionLanguage = $value['expression_language'];
            unset($value['expression_language']);
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
        if (isset($this->_usedProperties['annotations'])) {
            $output['annotations'] = $this->annotations;
        }
        if (isset($this->_usedProperties['expressionLanguage'])) {
            $output['expression_language'] = $this->expressionLanguage;
        }
<<<<<<< HEAD
    
=======

>>>>>>> fd6f3db (PDO INCLUDE MYSQL)
        return $output;
    }

}
