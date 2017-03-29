<?php

namespace bmwx591\yrl;

class Metro extends NestedObject
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
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
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
     * @return $this
     */
    public function setTimeOnTransport($timeOnTransport)
    {
        $this->timeOnTransport = $timeOnTransport;
        return $this;
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
     * @return $this
     */
    public function setTimeOnFoot($timeOnFoot)
    {
        $this->timeOnFoot = $timeOnFoot;
        return $this;
    }
}
