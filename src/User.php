<?php
declare(strict_types=1);

namespace Php;

final class User
{
    /** @var string */
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function findByName(string $name): self
    {
        return new User($name);
    }
}
