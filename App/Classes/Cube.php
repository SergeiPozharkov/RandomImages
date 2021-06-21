<?php


namespace Classes;


class Cube
{
    protected int $sumPlayer;
    protected int $sumComputer;
    protected int $cubeOne;
    protected int $cubeTwo;

    /**
     * @param int $cubeOne
     * @return Cube
     */
    public function setCubeOne(int $cubeOne): static
    {
        $this->cubeOne = $cubeOne;
        return $this;
    }

    /**
     * @param int $cubeTwo
     * @return Cube
     */
    public function setCubeTwo(int $cubeTwo): static
    {
        $this->cubeTwo = $cubeTwo;
        return $this;

    }

    /**
     * @return int
     */
    public function getSumPlayer(): int
    {
        return $this->sumPlayer;
    }

    /**
     * @return int
     */
    public function getSumComputer(): int
    {
        return $this->sumComputer;
    }

    /**
     * @return int
     */
    public function getCubeOne(): int
    {
        return $this->cubeOne;
    }

    /**
     * @return int
     */
    public function getCubeTwo(): int
    {
        return $this->cubeTwo;
    }

    /**
     * @throws \Exception
     */
    public function player(): int
    {
        $this->cubeOne = random_int(1, 6);
        $this->cubeTwo = random_int(1, 6);
        return $this->sumPlayer = $this->cubeOne + $this->cubeTwo;
    }

    /**
     * @throws \Exception
     */
    public function computer(): int
    {
        $this->cubeOne = random_int(1, 6);
        $this->cubeTwo = random_int(1, 6);
        return $this->sumComputer = $this->cubeOne + $this->cubeTwo;

    }

    public function checkWinner(): void
    {
        if ($this->sumPlayer > $this->sumComputer) {
            echo "<h2><b style=' color: darkgreen'>Winner player</b></h2>";
        } elseif ($this->sumPlayer == $this->sumComputer) {
            echo "<h2><b style=' color: crimson'>Draw</b></h2>";
        } else {
            echo "<h2><b style=' color: darkslateblue'>Winner computer</b></h2>";
        }
    }
}