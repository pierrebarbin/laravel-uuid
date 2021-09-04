<?php

namespace PierreBarbin\Uuid;

use Exception;
use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid
{
    public static function make(string $version, ...$params): string
    {
        $uuid = new static();

        if (method_exists($uuid, 'uuid'.$version)) {
            return $uuid->{'uuid'.$version}(...$params);
        }

        throw new Exception('Unknown version');
    }

    public function uuid1(...$params): string
    {
        return RamseyUuid::uuid1(...$params)->toString();
    }

    public function uuid2(...$params): string
    {
        return RamseyUuid::uuid2(...$params)->toString();
    }

    public function uuid3(...$params): string
    {
        return RamseyUuid::uuid3(...$params)->toString();
    }

    public function uuid4(): string
    {
        return RamseyUuid::uuid4()->toString();
    }

    public function uuid5(...$params): string
    {
        return RamseyUuid::uuid5(...$params)->toString();
    }

    public function uuid6(...$params): string
    {
        return RamseyUuid::uuid6(...$params)->toString();
    }
}
