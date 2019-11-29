<?php


namespace App\Repositories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class TodoRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Todo::class;
    }

    /**
     * Filter data based on user input
     *
     * @param array $filter
     * @param       $query
     */
    public function filterData(array $filter, $query)
    {
        // TODO: Implement filterData() method.
    }
}
