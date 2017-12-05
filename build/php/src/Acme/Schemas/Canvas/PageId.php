<?php
declare(strict_types=1);

namespace Acme\Schemas\Canvas;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;

final class PageId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return NodeRef::fromString("acme:page:{$this->toString()}");
    }
}
