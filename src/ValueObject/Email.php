<?php

namespace App\ValueObject;

use App\Exceptions\ValueObjects\Email\EmptyPasswordException;
use App\Exceptions\ValueObjects\Email\InvalidPasswordException;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class Email
{
    #[ORM\Column(type: "string")]
    private string $email;

    public function __construct(string $email)
    {
        $this->assertValidEmail($email);
        $this->setEmail($email);
    }

    public static function create(string $email): self
    {
        return new self($email);
    }

    public function assertValidEmail(string $email): void
    {
        if ($email !== "" && filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return;
        }

        if ($email === "") {throw new EmptyPasswordException();}

        throw new InvalidPasswordException($email);
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function get(): string
    {
        return $this->email;
    }
}
