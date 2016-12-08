<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class NotesController
{

    protected $notesService;

    public function __construct($service)
    {
        $this->notesService = $service;
    }

    public function getOne($id)
    {
        return new JsonResponse($this->notesService->getOne($id));
    }

    public function getAll()
    {
        return new JsonResponse($this->notesService->getAll());
    }

    public function save(Request $request)
    {

        $note = $this->getDataFromRequest($request);
        if(strlen($note['note']) > 0 && strlen($note['note']) <= 140){
            return new JsonResponse(array("id" => $this->notesService->save($note)));
        }else{
            return new JsonResponse(array("msg" => 'LengthException: Note length must be >0 and <=140'), 400);
        }


    }

    public function update($id, Request $request)
    {
        $note = $this->getDataFromRequest($request);
        if(strlen($note['note']) > 0 && strlen($note['note']) <= 140){
            $this->notesService->update($id, $note);
            return new JsonResponse($note);
        }else{
            return new JsonResponse(array("msg" => 'LengthException: Note length must be >0 and <=140'), 400);
        }

    }

    public function delete($id)
    {

        return new JsonResponse($this->notesService->delete($id));

    }

    public function getDataFromRequest(Request $request)
    {
        return $note = array(
            "note" => $request->request->get("note")
        );
    }
}
