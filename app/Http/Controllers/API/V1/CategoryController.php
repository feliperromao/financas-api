<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, CategoryService $service)
    {
        $paginate = true;
        $query = $request->all();

        $result = $service->index($paginate, $query);
        return response()->json($result);
    }


    public function store(CategoryRequest $request, CategoryService $service)
    {
        $data = $request->all();
        $newCategory = $service->store($data);
        if ($newCategory) {
            return response()->json($newCategory, 201);
        }
        
        return response()->json([
            'statue' => false,
            'message' => 'Não foi possivel adicionar nova categoria'
        ], 500);
    }


    public function show(Category $category)
    {
        if ($category) {
            return response()->json($category);
        }

        return response()->json([
            'statue' => false,
            'message' => 'Categoria não encontrada'
        ], 404);
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->all();

        $category->update($data);

        return response()->json($category);
    }


    public function destroy(Category $category)
    {
        $category->delete();
    }
}
