<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ApibooksController extends ApiController
{
    /**
     * Display a listing of the resource.rc
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = Book::create($request->all());

        return $this->showOne($books, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $books = Book::findOrfail($id);

            return $this->showOne($books, 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id= Book::find($id);
        $id->update($request->all());
        //return $id;
        return $this->showUpdate('Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $books = Book::findOrfail($id);

            $books->delete();

            return $this->successResponse($books, 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 404);
        }
    }
}