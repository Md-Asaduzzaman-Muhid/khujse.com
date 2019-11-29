<?php


namespace App\Services;


use App\Repositories\TodoRepository;

class TodoService extends BaseService
{
    private $todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function baseRepository()
    {
        return $this->todoRepository;
    }
}
