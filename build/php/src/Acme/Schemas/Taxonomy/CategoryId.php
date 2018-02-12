<?php
declare(strict_types=1);

namespace Acme\Schemas\Taxonomy;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;

final class CategoryId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return NodeRef::fromString("acme:category:{$this->toString()}");
    }
}
