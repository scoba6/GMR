<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Societe\UpdateSocieteRequest;
use App\Http\Requests\Societe\CreateSocieteRequest;
use App\Http\Resources\Societe\SocieteResource;
use App\Models\Societe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SocieteController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $societes = Societe::useFilters()->dynamicPaginate();

        return SocieteResource::collection($societes);
    }

    public function store(CreateSocieteRequest $request): JsonResponse
    {
        $societe = Societe::create($request->validated());

        return $this->responseCreated('Societe created successfully', new SocieteResource($societe));
    }

    public function show(Societe $societe): JsonResponse
    {
        return $this->responseSuccess(null, new SocieteResource($societe));
    }

    public function update(UpdateSocieteRequest $request, Societe $societe): JsonResponse
    {
        $societe->update($request->validated());

        return $this->responseSuccess('Societe updated Successfully', new SocieteResource($societe));
    }

    public function destroy(Societe $societe): JsonResponse
    {
        $societe->delete();

        return $this->responseDeleted();
    }

   
}
