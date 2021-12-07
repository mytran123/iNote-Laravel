<?php

namespace App\Http\Repository;

interface Repository
{
    public function getAll();

    public function create();

    public function store();

    public function getById($id);

    public function update();

    public function delete($id);
}
