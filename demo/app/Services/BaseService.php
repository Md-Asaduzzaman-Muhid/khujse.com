<?php


namespace App\Services;


abstract class BaseService
{
    /**
     * This function will be orverrid on clild class and initiallize the base repository
     * @return mixed
     */
    abstract public function baseRepository();

    public function all()
    {
        return $this->baseRepository()->all();
    }

    public function update(array $data, $id, $attribute = "id")
    {
        return $this->baseRepository()->update($data,$id,$attribute);
    }

    public function delete($id){
        return $this->baseRepository()->delete($id);
    }

    public function find($id, $columns = array('*'))
    {
        return $this->baseRepository()->find($id,$columns);
    }

    public function getFilterWithPaginatedData(array $filter)
    {
        return $this->baseRepository()->getFilterWithPaginatedData($filter);
    }
}
