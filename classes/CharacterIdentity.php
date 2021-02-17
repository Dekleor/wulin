<?php


class CharacterIdentity
{
    /**
     * @var String
     * */
    protected $identityName;

    /**
     * @var int
     * */
    protected $identityLevel;

    /**
     * @return String
     */
    public function getIdentityName()
    {
        return $this->identityName;
    }

    /**
     * @param String $identityName
     */
    public function setIdentityName($identityName)
    {
        $this->identityName = $identityName;
    }

    /**
     * @return int
     */
    public function getIdentityLevel()
    {
        return $this->identityLevel;
    }

    /**
     * @param int $identityLevel
     */
    public function setIdentityLevel($identityLevel)
    {
        $this->identityLevel = $identityLevel;
    }


}

