<?php


namespace Classes;


class ShowDices
{
    protected Dices $dices;

    public function __construct(Dices $dices)
    {
        $this->dices = $dices;
    }

    private function showDices(array $dicesArr, int $sum): string
    {
        return "<img width='50' height='50' src='/images/$dicesArr[0].png'>" .
            "<img width='50' height='50' src='/images/$dicesArr[1].png'>" . "Сумма: $sum<br>";
    }

    public function showDicesPlayer(): string
    {
        return $this->showDices($this->dices->getDicesPlayer(), $this->dices->sumPlayer());
    }

    public function showDicesComputer(): string
    {
        return $this->showDices($this->dices->getDicesComputer(), $this->dices->sumComputer());
    }

    public function showWinner(): string
    {

        switch ($this->dices->checkWinner()) {

            case 0:
                return "Nobody won";

            case 1:
                return "Player won";

            case -1:
                return "Computer won";

        }
    }
}