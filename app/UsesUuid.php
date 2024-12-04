<?php

namespace App;

use Illuminate\Support\Str;

/**
 * @method static creating(\Closure $param)
 */
trait UsesUuid
{
    /**
     * Boot the model to use UUIDs as primary keys.
     */
    protected static function bootUsesUuid(): void
    {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
