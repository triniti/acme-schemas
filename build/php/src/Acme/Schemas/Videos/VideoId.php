<?php
declare(strict_types=1);
namespace Tmz\Schemas\Videos;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
final class VideoId extends UuidIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return NodeRef::fromString("tmz:video:{$this->toString()}");
    }
}
