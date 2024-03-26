<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorie\UpdateCategorieRequest;
use App\Http\Requests\Categorie\CreateCategorieRequest;
use App\Http\Resources\Categorie\CategorieResource;
use App\Models\Categorie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategorieController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $categories = Categorie::useFilters()->dynamicPaginate();
        $categories = Categorie::with('branche')->get();


        return CategorieResource::collection($categories);
    }

    public function store(CreateCategorieRequest $request): JsonResponse
    {
        $categorie = Categorie::create($request->validated());

        return $this->responseCreated('Categorie created successfully', new CategorieResource($categorie));
    }

    public function show(Categorie $categorie): JsonResponse
    {
        return $this->responseSuccess(null, new CategorieResource($categorie));
    }

    public function update(UpdateCategorieRequest $request, Categorie $categorie): JsonResponse
    {
        $categorie->update($request->validated());

        return $this->responseSuccess('Categorie updated Successfully', new CategorieResource($categorie));
    }

    public function destroy(Categorie $categorie): JsonResponse
    {
        $categorie->delete();

        return $this->responseDeleted();
    }

   
}
