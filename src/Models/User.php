<?php

namespace PierreBarbin\Uuid\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use PierreBarbin\Uuid\Traits\HasUuid;

abstract class User extends Authenticatable
{
    use HasUuid;

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
}
