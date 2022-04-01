<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Editorial;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ApieditorialsController extends ApiController
{
    /**
     * Display a listing of the resource.rc
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorials = Editorial::all();

        return $this->showAll($editorials, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorials = Editorial::create($request->all());

        return $this->showOne($editorials, 201);
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
            $editorials = Editorial::findOrfail($id);

            return $this->showOne($editorials, 200);

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
        $id= Editorial::find($id);
        $id->update($request->all());
        //return $id;
        return $this->showUpdate('Editorial actualizada correctamente');
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
            $editorials = Editorial::findOrfail($id);

            $editorials->delete();

            return $this->successResponse($editorials, 200);

        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage(), 404);
        }
    }
}