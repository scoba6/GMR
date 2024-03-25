<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apporteur\UpdateApporteurRequest;
use App\Http\Requests\Apporteur\CreateApporteurRequest;
use App\Http\Resources\Apporteur\ApporteurResource;
use App\Models\Apporteur;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ApporteurController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $apporteurs = Apporteur::useFilters()->dynamicPaginate();

        return ApporteurResource::collection($apporteurs);
    }

    public function store(CreateApporteurRequest $request): JsonResponse
    {
        $apporteur = Apporteur::create($request->validated());

        return $this->responseCreated('Apporteur created successfully', new ApporteurResource($apporteur));
    }

    public function show(Apporteur $apporteur): JsonResponse
    {
        return $this->responseSuccess(null, new ApporteurResource($apporteur));
    }

    public function update(UpdateApporteurRequest $request, Apporteur $apporteur): JsonResponse
    {
        $apporteur->update($request->validated());

        return $this->responseSuccess('Apporteur updated Successfully', new ApporteurResource($apporteur));
    }

    public function destroy(Apporteur $apporteur): JsonResponse
    {
        $apporteur->delete();

        return $this->responseDeleted();
    }

   
}
