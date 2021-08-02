<?php


namespace Classes;


class Roulette
{
    /**
     * @var int
     */
    protected int $imageCount;
    /**
     * @var array
     */
    protected array $randomArr = [];

    /**
     * @return array
     */
    public function getRandomArr(): array
    {
        return $this->randomArr;
    }

    /**
     * Roulette constructor.
     * @param int $imageCount
     * @throws \Exception
     */
    public function __construct(int $imageCount)
    {
        $this->setImageCount($imageCount);
        $this->randomArr = $this->generationRandomArr();
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function generationRandomArr(): array
    {
        $arr = [];
        for ($i = 0; $i <= $this->imageCount; $i++) {
            $arr[] = random_int(0, $this->imageCount);

        }
        return $arr;
    }

    /**
     * @return bool
     */
    public function checkWinner(): bool
    {
        for ($i = 0; $i < count($this->randomArr) - 1; $i++) {
            if ($this->randomArr[$i] != $this->randomArr[$i + 1]) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param int $imageCount
     * @return $this
     */
    public function setImageCount(int $imageCount): static
    {
        $this->imageCount = $imageCount;
        return $this;
    }
}