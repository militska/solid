<?php

class Claim
{
    private string $descr;

    private int $state;

    /**
     * Claim constructor.
     * @param string $descr
     */
    public function __construct(string $descr)
    {
        $this->descr = $descr;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState(int $state): void
    {
        $this->state = $state;
    }

}