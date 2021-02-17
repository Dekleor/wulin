<?php


class Treasure
{
/**
 * @var string
 */
protected $treasureName;

/**
 * @var int
 */
protected $treasureLevel;

    /**
     * @return string
     */
    public function getTreasureName()
    {
        return $this->treasureName;
    }

    /**
     * @param string $treasureName
     */
    public function setTreasureName($treasureName)
    {
        $this->treasureName = $treasureName;
    }

    /**
     * @return int
     */
    public function getTreasureLevel()
    {
        return $this->treasureLevel;
    }

    /**
     * @param int $treasureLevel
     */
    public function setTreasureLevel($treasureLevel)
    {
        $this->treasureLevel = $treasureLevel;
    }


}