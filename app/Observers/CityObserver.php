<?php

namespace App\Observers;

use App\Models\City;
use Illuminate\Support\Facades\Storage;

class CityObserver
{
    /**
     * Handle the City "created" event.
     */
    public function created(City $city): void
    {
        //
    }

    /**
     * Handle the City "updated" event.
     */
    public function updated(City $city): void
    {
        if ($city->isDirty('thumbnail')) {
            Storage::disk('public')->delete($city->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the City "deleted" event.
     */
    public function deleted(City $city): void
    {
        if (! is_null($city->thumbnail)) {
            Storage::disk('public')->delete($city->thumbnail);
        }
    }

    /**
     * Handle the City "restored" event.
     */
    public function restored(City $city): void
    {
        //
    }

    /**
     * Handle the City "force deleted" event.
     */
    public function forceDeleted(City $city): void
    {
        //
    }
}
