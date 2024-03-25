<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Compagnie\UpdateCompagnieRequest;
use App\Http\Requests\Compagnie\CreateCompagnieRequest;
use App\Http\Resources\Compagnie\CompagnieResource;
use App\Models\Compagnie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompagnieController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $compagnies = Compagnie::useFilters()->dynamicPaginate();

        return CompagnieResource::collection($compagnies);
    }

    public function store(CreateCompagnieRequest $request): JsonResponse
    {
        $compagnie = Compagnie::create($request->validated());

        return $this->responseCreated('Compagnie created successfully', new CompagnieResource($compagnie));
    }

    public function show(Compagnie $compagnie): JsonResponse
    {
        return $this->responseSuccess(null, new CompagnieResource($compagnie));
    }

    public function update(UpdateCompagnieRequest $request, Compagnie $compagnie): JsonResponse
    {
        $compagnie->update($request->validated());

        return $this->responseSuccess('Compagnie updated Successfully', new CompagnieResource($compagnie));
    }

    public function destroy(Compagnie $compagnie): JsonResponse
    {
        $compagnie->delete();

        return $this->responseDeleted();
    }

   
}
