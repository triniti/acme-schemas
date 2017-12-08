<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-expired/1-0-0.json#
namespace Acme\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1 as GdbotsNcrNodeExpiredV1;
use Gdbots\Schemas\Ncr\Mixin\NodeExpired\NodeExpiredV1Mixin as GdbotsNcrNodeExpiredV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Ovp\Mixin\VideoExpired\VideoExpiredV1 as TrinitiOvpVideoExpiredV1;
use Triniti\Schemas\Ovp\Mixin\VideoExpired\VideoExpiredV1Mixin as TrinitiOvpVideoExpiredV1Mixin;

final class VideoExpiredV1 extends AbstractMessage implements
    VideoExpired,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeExpiredV1,
    TrinitiOvpVideoExpiredV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:event:video-expired:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeExpiredV1Mixin::create(),
                TrinitiOvpVideoExpiredV1Mixin::create(),
            ]
        );
    }
}
