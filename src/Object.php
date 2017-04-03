<?php

namespace bmwx591\yrl;

/**
 * Class Object
 * @package bmwx591\yrl
 */
abstract class Object
{
    protected $errors = [];

    /**
     * @return bool
     */
    public function hasErrors()
    {
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @param string $error
     * @return $this
     */
    public function addError($error)
    {
        array_push($this->errors, $error);
        return $this;
    }

    /**
     * @param array $nodeOptions
     * @return $this
     */
    public function setOptions(array $nodeOptions)
    {
        foreach ($nodeOptions['attributes'] as $name => $value) {
            $this->setField($name, $value);
        }

        foreach ($nodeOptions['nodes'] as $attrNode) {
            $this->setAttribute($attrNode);
        }
        return $this;
    }

    /**
     * @param array $attrNode
     * @return $this
     */
    public function setAttribute(array $attrNode)
    {
        $setter = 'set' . str_replace(['-', '_'], '', $attrNode['name']);
        $this->$setter($attrNode['value']);
        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function setField($name, $value)
    {
        $setter = 'set' . str_replace(['-', '_'], '', $name);
        if (method_exists($this, $setter)) {
            $this->$setter($value);
        }
        return $this;
    }
}
