<?php

namespace App\Observers;

use App\Models\Borrowing;

class BorrowingObserver
{
    public function created(Borrowing $borrowing)
    {
        $book = $borrowing->book;
        $book->copies_available -= 1;
        $book->save();
    }

    public function updated(Borrowing $borrowing)
    {
        if ($borrowing->isDirty('returned_at') && $borrowing->returned_at !== null) {
            $book = $borrowing->book;
            $book->copies_available += 1;
            $book->save();
        }
    }
}