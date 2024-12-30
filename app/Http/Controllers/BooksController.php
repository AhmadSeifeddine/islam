<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BooksController extends BaseController
{
    public function index()
    {
        return view('web.book.books');
    }

    /**
     * Store a new book in the database
     */
    public function store(BookRequest $request)
    {
        try {
            $data = $request->validated();

            $book = Book::create([
                ...$data,
                'scholar_id' => $request->scholar_id,
                'category_id' => $request->category_id
            ]);

            return $this->sendSuccessResponse(
                'Book created successfully',
                201,
                $book
            );
        } catch (\Exception $e) {
            return $this->sendErrorResponse(
                'Error creating book: ' . $e->getMessage(),
                500
            );
        }
    }

    /**
     * Update the specified book
     */
    public function update(BookRequest $request, $id)
    {
        return $this->updateItem(Book::class, $id, $request->validated(), [
            'file' => $request->file('image'),
            'collection' => 'book_images',
        ]);
    }

    /**
     * Remove the specified book
     */
    public function destroy($id)
    {
        return $this->deleteItem(Book::class, $id, [
            'successMessage' => 'Book deleted successfully'
        ]);
    }
}
