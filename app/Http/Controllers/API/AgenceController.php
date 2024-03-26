<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agence\UpdateAgenceRequest;
use App\Http\Requests\Agence\CreateAgenceRequest;
use App\Http\Resources\Agence\AgenceResource;
use App\Models\Agence;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AgenceController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $agences = Agence::useFilters()->dynamicPaginate();

        return AgenceResource::collection($agences);
    }

    public function store(CreateAgenceRequest $request): JsonResponse
    {
        $agence = Agence::create($request->validated());

        return $this->responseCreated('Agence created successfully', new AgenceResource($agence));
    }

    public function show(Agence $agence): JsonResponse
    {
        return $this->responseSuccess(null, new AgenceResource($agence));
    }

    public function update(UpdateAgenceRequest $request, Agence $agence): JsonResponse
    {
        $agence->update($request->validated());

        return $this->responseSuccess('Agence updated Successfully', new AgenceResource($agence));
    }

    public function destroy(Agence $agence): JsonResponse
    {
        $agence->delete();

        return $this->responseDeleted();
    }

   
}
