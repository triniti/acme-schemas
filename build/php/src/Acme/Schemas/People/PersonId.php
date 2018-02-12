<?php
declare(strict_types=1);

namespace Acme\Schemas\People;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;

final class PersonId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return NodeRef::fromString("acme:person:{$this->toString()}");
    }
}
