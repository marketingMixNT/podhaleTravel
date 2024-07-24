<?php

namespace App\Observers;

use App\Models\Attraction;
use Illuminate\Support\Facades\Storage;

class AttractionObserver
{
    /**
     * Handle the Attraction "created" event.
     */
    public function created(Attraction $attraction): void
    {
        //
    }

    /**
     * Handle the Attraction "updated" event.
     */
    public function updated(Attraction $attraction): void
    {
        if ($attraction->isDirty('thumbnail')) {
            Storage::disk('public')->delete($attraction->getOriginal('thumbnail'));
        }

        if ($attraction->isDirty('gallery')) {
            Storage::disk('public')->delete($attraction->getOriginal('gallery'));
        }
    }

    /**
     * Handle the Attraction "deleted" event.
     */
    public function deleted(Attraction $attraction): void
    {
        if (! is_null($attraction->thumbnail)) {
            Storage::disk('public')->delete($attraction->thumbnail);
        }
        if (! is_null($attraction->gallery)) {
            Storage::disk('public')->delete($attraction->gallery);
        }
    }

    /**
     * Handle the Attraction "restored" event.
     */
    public function restored(Attraction $attraction): void
    {
        //
    }

    /**
     * Handle the Attraction "force deleted" event.
     */
    public function forceDeleted(Attraction $attraction): void
    {
        //
    }
}
