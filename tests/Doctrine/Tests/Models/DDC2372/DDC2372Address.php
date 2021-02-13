<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\DDC2372;

/** @Entity @Table(name="addresses") */
class DDC2372Address
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     * @Column(type="string", length=255)
     */
    private $street;
    /** @OneToOne(targetEntity="User", mappedBy="address") */
    private $user;

    public function getId()
    {
        return $this->id;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street): void
    {
        $this->street = $street;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        if ($this->user !== $user) {
            $this->user = $user;
            $user->setAddress($this);
        }
    }
}
