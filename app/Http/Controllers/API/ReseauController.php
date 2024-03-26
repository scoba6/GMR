<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reseau\UpdateReseauRequest;
use App\Http\Requests\Reseau\CreateReseauRequest;
use App\Http\Resources\Reseau\ReseauResource;
use App\Models\Reseau;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ReseauController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $reseaus = Reseau::useFilters()->dynamicPaginate();

        return ReseauResource::collection($reseaus);
    }

    public function store(CreateReseauRequest $request): JsonResponse
    {
        $reseau = Reseau::create($request->validated());

        return $this->responseCreated('Reseau created successfully', new ReseauResource($reseau));
    }

    public function show(Reseau $reseau): JsonResponse
    {
        return $this->responseSuccess(null, new ReseauResource($reseau));
    }

    public function update(UpdateReseauRequest $request, Reseau $reseau): JsonResponse
    {
        $reseau->update($request->validated());

        return $this->responseSuccess('Reseau updated Successfully', new ReseauResource($reseau));
    }

    public function destroy(Reseau $reseau): JsonResponse
    {
        $reseau->delete();

        return $this->responseDeleted();
    }

   
}
