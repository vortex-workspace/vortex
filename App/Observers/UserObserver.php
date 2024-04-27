<?php

namespace App\Observers;

use Core\Abstractions\Model;
use Core\Observers\Observer;

class UserObserver extends Observer
{
    public static function creating(array $args): array
    {
        return $args;
    }

    public static function created(Model $model)
    {
        return $model;
    }

    public static function updating(array $args): array
    {
        return $args;
    }

    public static function updated(Model $model)
    {
        return $model;
    }

    public static function deleting(Model $model)
    {
        return $model;
    }

    public static function deleted(int $model_id)
    {
        return $model_id;
    }
}
