<?php
declare(strict_types=1);

namespace Acme\Schemas\Dam;

use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;

final class AssetId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return NodeRef::fromString("acme:asset:{$this->toString()}");
    }
}
