<?php

namespace App\Entity\ValueObject;

use App\Entity\ValueObject\Email\EmptyEmailAddressException;
use App\Entity\ValueObject\Email\InvalidEmailAddressException;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class Email
{
    #[ORM\Column(type: "string", length: 320, unique: true, nullable: false)]
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

        if ($email === "") {throw new EmptyEmailAddressException();}

        throw new InvalidEmailAddressException($email);
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
