<?php

namespace App\Services;

class Service
{
    protected $model;

    protected $user_id;

    public function __construct($model)
    {
        $this->model = $model;
        $this->user_id = auth()->user()->_id;
    }

    public function index(bool $paginate = false, array $query = [])
    {
        $result = $this->model->where('user_id', $this->user_id);

        if (count($query) > 0) {
            $result = $result->whereRaw($query);
        }

        if ($paginate) {
            $itensPerPage = (int)env('PAGINATION') ?? 20;
            return $result->paginate($itensPerPage);
        }

        return $result->all();
    }

    public function store(array $data)
    {
        $data['user_id'] = $this->user_id;
        return $this->model->create($data);
    }

    public function show($id)
    {
        return $this->model->where([
            '_id' => $id,
            'user_id' => $this->user_id
        ])->first() ?? null;
    }

    public function update($id, array $data)
    {
        $document = $this->model->where([
            '_id' => $id,
            'user_id' => $this->user_id
        ])->first();

        if (! $document) {
            return null;
        }

        $document->update($data);

        return $document;
    }

    public function destroy($id)
    {
        $document = $this->model->where([
            '_id' => $id,
            'user_id' => $this->user_id
        ])->first();
        
        if (! $document) {
            return null;
        }

        if ($document->delete()) {
            return true;
        }

        return false;
    }
}