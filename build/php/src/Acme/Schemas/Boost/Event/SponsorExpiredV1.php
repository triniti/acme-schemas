<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/boost/event/sponsor-expired/1-0-0.json#
namespace Acme\Schemas\Boost\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1 as GdbotsNcrNodeExpiredV1;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1Mixin as GdbotsNcrNodeExpiredV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;

final class SponsorExpiredV1 extends AbstractMessage implements
    SponsorExpired,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeExpiredV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:boost:event:sponsor-expired:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeExpiredV1Mixin::create(),
            ]
        );
    }
}
