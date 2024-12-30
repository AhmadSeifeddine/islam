<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends BaseController
{
    public function store(CategoryRequest $request)
    {
        return $this->storeItem(Category::class, $request->all(), [
            'successMessage' => 'Category created successfully'
        ]);
    }
    public function update(CategoryRequest $request, $id)
    {
        return $this->updateItem(Category::class, $id, $request->all(), [
            'successMessage' => 'Category updated successfully'
        ]);
    }

    public function destroy($id)
    {
        return $this->deleteItem(Category::class, $id, [
            'successMessage' => 'Category deleted successfully'
        ]);
    }

}
