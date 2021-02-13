<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\ValueConversionType;

/**
 * @Entity
 * @Table(name="vct_inversed_onetoone_compositeid")
 */
class InversedOneToOneCompositeIdEntity
{
    /**
     * @Column(type="rot13")
     * @Id
     */
    public $id1;

    /**
     * @Column(type="rot13")
     * @Id
     */
    public $id2;

    /**
     * @var string
     * @Column(type="string", name="some_property")
     */
    public $someProperty;

    /** @OneToOne(targetEntity="OwningOneToOneCompositeIdEntity", mappedBy="associatedEntity") */
    public $associatedEntity;
}
