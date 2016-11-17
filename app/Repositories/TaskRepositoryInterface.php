<?php

namespace App\Repositories;

interface TaskRepositoryInterface
{
   public function all($columns = array('*'));


   public function create(array $attributes);


   public function destroy($ids);
}