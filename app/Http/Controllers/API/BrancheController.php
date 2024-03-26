<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Branche\UpdateBrancheRequest;
use App\Http\Requests\Branche\CreateBrancheRequest;
use App\Http\Resources\Branche\BrancheResource;
use App\Models\Branche;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BrancheController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $branches = Branche::useFilters()->dynamicPaginate();

        return BrancheResource::collection($branches);
    }

    public function store(CreateBrancheRequest $request): JsonResponse
    {
        $branche = Branche::create($request->validated());

        return $this->responseCreated('Branche created successfully', new BrancheResource($branche));
    }

    public function show(Branche $branche): JsonResponse
    {
        return $this->responseSuccess(null, new BrancheResource($branche));
    }

    public function update(UpdateBrancheRequest $request, Branche $branche): JsonResponse
    {
        $branche->update($request->validated());

        return $this->responseSuccess('Branche updated Successfully', new BrancheResource($branche));
    }

    public function destroy(Branche $branche): JsonResponse
    {
        $branche->delete();

        return $this->responseDeleted();
    }

   
}
