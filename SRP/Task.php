<?php

class Task
{
    private string $title;

    private string $descr;

    private int $author;

    private int $executor;

    private int $state;


    const NEW_STATE = 1; // 'Новая',
    const IN_WORK_STATE = 2;// 'В работе',
    const STOP_STATE = 3;// 'Приостановлена',
    const CANCEL_STATE = 4;// 'Отклонена',
    const CHECK_STATE = 5;// 'На проверке у заказчка',
    const RESOLVE_STATE = 6;// 'Решена',

    /**
     * Task constructor.
     * @param string $title
     * @param string $descr
     * @param int $author
     * @param int $executor
     */
    public function __construct(string $title, string $descr, int $author, int $executor)
    {
        $this->title = $title;
        $this->descr = $descr;
        $this->author = $author;
        $this->executor = $executor;
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
     * @return int
     */
    public function setState(int $state): int
    {
        $this->state = $state;
    }
}