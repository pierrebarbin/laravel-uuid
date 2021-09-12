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

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setUuidWhenKeyHasNotBeenSet();
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

    public function keyHasBeenSet(): bool
    {
        return ($this->attributes[$this->getKeyName()] ?? null) !== null;
    }

    public function setUuid()
    {
        $this->attributes[$this->getKeyName()] = Uuid::make($this->uuidVersion());
    }

    public function setUuidWhenKeyHasNotBeenSet()
    {
        if ($this->keyHasBeenSet()) {
            return;
        }

        $this->setUuid();
    }
}
