<?php

namespace bmwx591\yrl;

class Metro extends Object
{
    protected $name;

    protected $timeOnTransport;

    protected $timeOnFoot;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTimeOnTransport()
    {
        return $this->timeOnTransport;
    }

    /**
     * @param mixed $timeOnTransport
     */
    public function setTimeOnTransport($timeOnTransport)
    {
        $this->timeOnTransport = $timeOnTransport;
    }

    /**
     * @return mixed
     */
    public function getTimeOnFoot()
    {
        return $this->timeOnFoot;
    }

    /**
     * @param mixed $timeOnFoot
     */
    public function setTimeOnFoot($timeOnFoot)
    {
        $this->timeOnFoot = $timeOnFoot;
    }

    public function setAttribute(array $attrNode)
    {

    }
}
