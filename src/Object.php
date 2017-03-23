<?php

namespace bmwx591\yrl;

abstract class Object
{

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

    abstract public function setAttribute(array $attrNode);

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
