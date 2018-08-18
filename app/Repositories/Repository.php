<?php
/**
 * Created by PhpStorm.
 * User: duda
 * Date: 18.08.18
 * Time: 14:12
 */

namespace App\Repositories;


abstract class Repository
{
    protected $model = false;

    public function get($select = '*', $where=false)
    {
        $builder = $this->model->select($select);
        if($where) {
            $builder->whereRaw($where);
        }
        return $builder->get();
    }

    public function getOne($id)
    {
        $result = $this->model->where('id', $id)->first();
        return $result;
    }

    public function update($input)
    {
        return $this->model->save($input);
    }

    public  function new($input)
    {
        $model = new $this->model;
        $model->fill($input);
        $model->save($input);
        return $model->id;
    }

}
