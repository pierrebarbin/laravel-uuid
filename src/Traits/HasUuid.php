<?php


namespace PierreBarbin\Uuid\Traits;

use PierreBarbin\Uuid\Uuid;

trait HasUuid
{
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
