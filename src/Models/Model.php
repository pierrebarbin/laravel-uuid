<?php


namespace PierreBarbin\Uuid\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use PierreBarbin\Uuid\Uuid;

abstract class Model extends BaseModel
{
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setUuid();
        });
    }

    /**
     * Uuid version
     *
     * @return string
     */
    public function uuidVersion(): string
    {
        return config('uuid.version', '4');
    }

    public function setUuid()
    {
        $this->attributes[$this->getKeyName()] = Uuid::make($this->uuidVersion());
    }
}
