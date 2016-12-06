<?php

namespace App\Services;

class NotesService extends BaseService
{

    public function getOne($id)
    {
        return $this->db->silex->notes->findOne(['_id' => $id]);
        //return $this->db->fetchAssoc("SELECT * FROM notes WHERE id=?", [(int) $id]);
    }

    public function getAll()
    {
        return $this->db->silex->notes->find();
        //return $this->db->fetchAll("SELECT * FROM notes");
    }

    function save($note)
    {
        return $this->db->silex->notes->insertOne($note)->getInsertedId();
        //$this->db->insert("notes", $note);
        //return $this->db->lastInsertId();
    }

    function update($id, $note)
    {
        return $this->db->silex->notes->updateOne(['_id' => $id], ['$set' => $note])->getModifiedCount();
        //return $this->db->update('notes', $note, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->silex->notes->deleteOne(['_id' => $id])->getDeletedCount();
        //return $this->db->delete("notes", array("id" => $id));
    }

}
