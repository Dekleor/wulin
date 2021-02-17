<?php


class CharacterTrait
{
    /**
     * @var String
     * */
    protected $traitName;

    /**
     * @var int
     * */
    protected $traitLevel;

    /**
     * @return String
     */
    public function getTraitName()
    {
        return $this->traitName;
    }

    /**
     * @param String $traitName
     */
    public function setTraitName($traitName)
    {
        $this->traitName = $traitName;
    }

    /**
     * @return int
     */
    public function getTraitLevel()
    {
        return $this->traitLevel;
    }

    /**
     * @param int $traitLevel
     */
    public function setTraitLevel($traitLevel)
    {
        $this->traitLevel = $traitLevel;
    }
}