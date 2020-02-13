<?php

namespace Dzign\Core\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="dzign_admin")
 */
class Admin implements UserInterface
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $enabled = true;

    /**
     * @var \DateTimeImmutable
     * @ORM\Column(type="datetime")
     */
    private $lastLoginAt;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @var array
     * @ORM\Column(type="array")
     */
    private $roles = [];

    /**
     * @var string
     * @ORM\Column(type="string", length=32)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getLastLoginAt(): ?\DateTimeImmutable
    {
        return $this->lastLoginAt;
    }

    /**
     * @param \DateTimeImmutable $lastLoginAt
     */
    public function setLastLoginAt(\DateTimeImmutable $lastLoginAt): void
    {
        $this->lastLoginAt = $lastLoginAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * {@inheritdoc}
     */
    public function getSalt(): void
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials(): void
    {
        // TODO: Implement eraseCredentials() method.
    }
}
