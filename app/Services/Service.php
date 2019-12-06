<?php

namespace App\Services;

class Service
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index($paginate = false)
    {
        if ($paginate) {
            return $this->model->paginate();
        }
        return $this->model->all();
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function show($id)
    {
        return $this->model->find($id) ?? null;
    }

    public function update($id, $data)
    {
        $document = $this->model->find($id);
        if (! $document) {
            return null;
        }

        $document->update($data);

        return $document;
    }

    public function destroy($id)
    {
        $document = $this->model->find($id);
        if (! $document) {
            return null;
        }

        if ($document->delete()) {
            return true;
        }

        return false;
    }
}