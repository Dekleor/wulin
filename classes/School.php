<?php


class School
{
    /**
     * @var string
     */
    protected $schoolName;

    /**
     * @var boolean
     */
    protected $isDragon;

    /**
     * @var boolean
     */
    protected $isTiger;

    /**
     * @var string|null
     */
    protected $schoolMaster;

    /**
     * @return string
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * @param string $schoolName
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;
    }

    /**
     * @return bool
     */
    public function isDragon()
    {
        return $this->isDragon;
    }

    /**
     * @param bool $isDragon
     */
    public function setIsDragon($isDragon)
    {
        $this->isDragon = $isDragon;
    }

    /**
     * @return bool
     */
    public function isTiger()
    {
        return $this->isTiger;
    }

    /**
     * @param bool $isTiger
     */
    public function setIsTiger($isTiger)
    {
        $this->isTiger = $isTiger;
    }

    /**
     * @return string|null
     */
    public function getSchoolMaster()
    {
        return $this->schoolMaster;
    }

    /**
     * @param string|null $schoolMaster
     */
    public function setSchoolMaster($schoolMaster)
    {
        $this->schoolMaster = $schoolMaster;
    }
}