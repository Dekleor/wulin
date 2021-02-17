<?php


class Sword
{
    /**
     * @var string
     */
    protected $swordName;

    /**
     * @var string
     */
    protected $ancientKingdom;

    /**
     * @var string
     */
    protected $trigram;

    /**
     * @var string
     */
    protected $legendaryTrait;

    /**
     * @return string
     */
    public function getSwordName()
    {
        return $this->swordName;
    }

    /**
     * @param string $swordName
     */
    public function setSwordName($swordName)
    {
        $this->swordName = $swordName;
    }

    /**
     * @return string
     */
    public function getAncientKingdom()
    {
        return $this->ancientKingdom;
    }

    /**
     * @param string $ancientKingdom
     */
    public function setAncientKingdom($ancientKingdom)
    {
        $this->ancientKingdom = $ancientKingdom;
    }

    /**
     * @return string
     */
    public function getTrigram()
    {
        return $this->trigram;
    }

    /**
     * @param string $trigram
     */
    public function setTrigram($trigram)
    {
        $this->trigram = $trigram;
    }

    /**
     * @return string
     */
    public function getLegendaryTrait()
    {
        return $this->legendaryTrait;
    }

    /**
     * @param string $legendaryTrait
     */
    public function setLegendaryTrait($legendaryTrait)
    {
        $this->legendaryTrait = $legendaryTrait;
    }
}