<?php


namespace Classes;


class Dices
{

    protected array $dicesPlayer;
    protected array $dicesComputer;


    /**
     * @throws \Exception
     */
    public function turnPlayer(): static
    {
        $this->dicesPlayer = [random_int(1, 6), random_int(1, 6)];
        return $this;
    }

    /**
     * @throws \Exception
     */
    public function turnComputer(): static
    {
//        $this->cubeOne = random_int(1, 6);
//        $this->cubeTwo = random_int(1, 6);
//        return $this->sumComputer = $this->cubeOne + $this->cubeTwo;
        $this->dicesComputer = [random_int(1, 6), random_int(1, 6)];
        return $this;

    }

    /**
     * @return int
     */
    public function checkWinner(): int
    {
        return $this->sumPlayer() <=> $this->sumComputer();

//        {echo "<h2><b style=' color: darkgreen'>Winner player</b></h2>";
//         elseif ($this->sumPlayer == $this->sumComputer) {
//            echo "<h2><b style=' color: crimson'>Draw</b></h2>";
//        } else {
//            echo "<h2><b style=' color: darkslateblue'>Winner computer</b></h2>";
//        }
    }

    /**
     * @return int
     */
    public function sumPlayer(): int
    {
        return array_sum($this->dicesPlayer);
    }

    /**
     * @return int
     */
    public function sumComputer(): int
    {
        return array_sum($this->dicesComputer);
    }

    /**
     * @return array
     */
    public function getDicesPlayer(): array
    {
        return $this->dicesPlayer;
    }

    /**
     * @return array
     */
    public function getDicesComputer(): array
    {
        return $this->dicesComputer;
    }

}