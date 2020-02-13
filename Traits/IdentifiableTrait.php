<?php

namespace Dzign\Core\Traits;

use Doctrine\ORM\Mapping as ORM;

trait IdentifiableTrait
{
    /**
     * @var int
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
