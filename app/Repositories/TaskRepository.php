<?php

namespace App\Repositories;

class TaskRepository implements TaskRepositoryInterface
{
    /**
     * Model class name
     *
     * @var string
     */
    protected $modelClassName = "App\Task";

    /**
     * Get all entities of a model
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*'))
    {
        return call_user_func_array("{$this->modelClassName}::all", array($columns));
    }

    /**
     * Create a new entity of a model
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return call_user_func_array("{$this->modelClassName}::create", array($attributes));
    }

    /**
     * Destroy a list of entities by their identifiers
     *
     * @param $ids
     * @return mixed
     */
    public function destroy($ids)
    {
        return call_user_func_array("{$this->modelClassName}::destroy", array($ids));
    }

}