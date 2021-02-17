<?php


class Personnalities
{
    /**
     * @var String
     * */
    protected $characterName;

    /**
     * @var boolean
     * */
    protected $isFemale;

    /**
     * @var string
     */
    protected $knownStory;

    /**
     * @var boolean
     */
    protected $isPc;

    /**
     * @return String
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * @param String $characterName
     */
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
    }

    /**
     * @return bool
     */
    public function isFemale()
    {
        return $this->isFemale;
    }

    /**
     * @param bool $isFemale
     */
    public function setIsFemale($isFemale)
    {
        $this->isFemale = $isFemale;
    }

    /**
     * @return string
     */
    public function getKnownStory()
    {
        return $this->knownStory;
    }

    /**
     * @param string $knownStory
     */
    public function setKnownStory($knownStory)
    {
        $this->knownStory = $knownStory;
    }

    /**
     * @return bool
     */
    public function isPc()
    {
        return $this->isPc;
    }

    /**
     * @param bool $isPc
     */
    public function setIsPc($isPc)
    {
        $this->isPc = $isPc;
    }


}