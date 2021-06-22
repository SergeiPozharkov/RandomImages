<?php


namespace Classes;


class Roulette
{
    protected int $one;
    protected int $two;
    protected int $three;

    public function random(): array
    {
        $arr = [];
        $arr[] = $this->one = random_int(0, 2);
        $arr[] = $this->two = random_int(0, 2);
        $arr[] = $this->three = random_int(0, 2);
        return $arr;
    }

    public function showRandomImage(): string
    {
        $html = "";
        foreach ($this->random() as $img) {
            $html .= "<img width='50' height='50' src='/img/$img.png'>";
        }
        return "<div>$html</div>";
    }

    public function checkWinner(): string
    {
        $result = "";
        for ($i = 0; $i < count($this->random()); $i++) {
            if ($this->random()[$i] == 0 && $this->random()[$i] == 0 && $this->random()[$i] == 0) {
                $result = "YOU WINNER!!!";
            } elseif ($this->random()[$i] == 1 && $this->random()[$i] == 1 && $this->random()[$i] == 1) {
                $result = "YOU WINNER!!!";
            } elseif ($this->random()[$i] == 2 && $this->random()[$i] == 2 && $this->random()[$i] == 2) {
                $result = "YOU WINNER!!!";
            } else {
                $result = "YOU LOSING";
            }
        }
        return $result;
    }


}