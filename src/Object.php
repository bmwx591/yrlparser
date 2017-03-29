<?php

namespace bmwx591\yrl;

abstract class Object
{

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
