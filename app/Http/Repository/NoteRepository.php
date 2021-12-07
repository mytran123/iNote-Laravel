<?php

namespace App\Http\Repository;

use App\Models\Note;


class NoteRepository
{
    public function getAll()
    {
        $notes = Note::latest()->paginate(5);
        return $notes;
    }

    public function create($request)
    {
        $data = $request->only('category','title','content');
        Note::query()->create($data);
    }


    public function getById($id)
    {
        $note = Note::findOrFail($id);
        return $note;
    }

    public function update($request, $id)
    {
        Note::query()->findOrFail($id);
        $data = $request->only('category','title','content');
        return Note::query()->where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $note = Note::query()->findOrFail($id);
        $note->delete();
    }
}
