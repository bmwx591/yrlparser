<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 22.03.17
 * Time: 23:42
 */

namespace bmwx591\yrl;


trait TYRL
{

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
