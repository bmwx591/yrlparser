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
        if (method_exists($this, $setter)) {
            $this->$setter($attrNode['value']);
        }
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

    /**
     * @return array
     */
    public function getData()
    {
        $data = self::toArray($this);
        unset($data['errors']);

        return $data;
    }

    /**
     * @param self|array $object
     * @return array
     */
    public static function toArray($object)
    {
        $array = [];
        foreach ($object as $key => $value) {
            if (is_object($value) && method_exists($value, 'getData')) {
                $array[$key] = $value->getData();
            } elseif (is_array($value) && !empty($value)) {
                $array[$key] = self::toArray($value);
            } else {
                $getter = 'get' . $key;
                if (method_exists($object, $getter)) {
                    $getValue = $object->$getter();
                    if ((is_array($getValue) && !empty($getValue)) || (!is_array($getValue) && !is_null($getValue))) {
                        $array[$key] = $getValue;
                    }
                }
                elseif ($value !== null) {
                    $array[$key] = $value;
                }
            }
        }
        return $array;
    }


}
