<?php


namespace Classes;

/**
 * Class ShowRoulette
 * Класс для отображения результатов игры
 * @package Classes
 */
class ShowRoulette
{
    /**
     * @var Roulette
     */
    protected Roulette $roulette;

    /**
     * ShowRoulette constructor.
     * @param Roulette $roulette
     */
    public function __construct(Roulette $roulette)
    {
        $this->roulette = $roulette;
    }

    /**
     * @return string
     */
    public function showImage(): string
    {
        $row = "";
        foreach ($this->roulette->getRandomArr() as $value) {
            $row .= "<img width='50' height='50' src='img/$value.png'>";
        }
        return $row;

    }

    /**
     * @return string
     */
    public function showWinner(): string
    {
        return $this->roulette->checkWinner() ? "<h1>ВЫ Победили!!!</h1>" : "<h1>ВЫ Проиграли</h1>";
    }
}