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

    public function update($data)
    {
        $this->model->fill($data);
        $this->model->save($data);
        return $this->model->id;
    }

    public  function save($data)
    {
        $model = new $this->model;
        $model->fill($data);
        $model->save($data);
        return $model->id;
    }

    public function delete()
    {
        return $this->delete();
    }

}
