<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-created/1-0-0.json#
namespace Acme\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1 as GdbotsNcrNodeCreatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1Mixin as GdbotsNcrNodeCreatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Ovp\Mixin\VideoCreated\VideoCreatedV1 as TrinitiOvpVideoCreatedV1;
use Triniti\Schemas\Ovp\Mixin\VideoCreated\VideoCreatedV1Mixin as TrinitiOvpVideoCreatedV1Mixin;

final class VideoCreatedV1 extends AbstractMessage implements
    VideoCreated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeCreatedV1,
    TrinitiOvpVideoCreatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:event:video-created:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeCreatedV1Mixin::create(),
                TrinitiOvpVideoCreatedV1Mixin::create(),
            ]
        );
    }
}
