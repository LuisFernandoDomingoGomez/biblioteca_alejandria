<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
/** Declaramos un metodo privado que sera el encargado de
 *  retornar respuestas satisfactorias en Formato Json */
trait apiResponser
{
    private function successResponse($data, $code)
    {
        return  response()->json($data,$code);  
    }

    /** Metodo para retornar una respuesta de error que 
     * tendra el mensaje y el codigo */
    protected function errorResponse($message, $code)
    {
        return response()->json(['error'=>$message,'code'=>$code],$code);
    }
    
    /** Mostrara la lista completas de usuarios  si la respuesta
     * no tiene un codigo por defecto mandamos un 200*/
    protected function showAll(Collection $collection, $code = 200){
        return $this->successResponse(['data'=> $collection], $code);
    }

    /** Mostrara solo un registro y este resive una instancia */
    protected function showOne(Model $instance, $code = 200){
        return $this->successResponse(['data'=> $instance], $code);
  }

}