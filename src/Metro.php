<?php

namespace bmwx591\yrl;

/**
 * Class Metro
 * @package bmwx591\yrl
 */
class Metro extends NestedObject
{
    protected $name;

    protected $timeOnTransport;

    protected $timeOnFoot;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return integer
     */
    public function getTimeOnTransport()
    {
        return $this->timeOnTransport;
    }

    /**
     * @param integer $timeOnTransport
     * @return $this
     */
    public function setTimeOnTransport($timeOnTransport)
    {
        $this->timeOnTransport = $timeOnTransport;
        return $this;
    }

    /**
     * @return integer
     */
    public function getTimeOnFoot()
    {
        return $this->timeOnFoot;
    }

    /**
     * @param integer $timeOnFoot
     * @return $this
     */
    public function setTimeOnFoot($timeOnFoot)
    {
        $this->timeOnFoot = $timeOnFoot;
        return $this;
    }
}
