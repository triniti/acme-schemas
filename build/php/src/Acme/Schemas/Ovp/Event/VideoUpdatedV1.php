<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-updated/1-0-0.json#
namespace Acme\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1 as GdbotsNcrNodeUpdatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1Mixin as GdbotsNcrNodeUpdatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Ovp\Mixin\VideoUpdated\VideoUpdatedV1 as TrinitiOvpVideoUpdatedV1;
use Triniti\Schemas\Ovp\Mixin\VideoUpdated\VideoUpdatedV1Mixin as TrinitiOvpVideoUpdatedV1Mixin;

final class VideoUpdatedV1 extends AbstractMessage implements
    VideoUpdated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUpdatedV1,
    TrinitiOvpVideoUpdatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:event:video-updated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUpdatedV1Mixin::create(),
                TrinitiOvpVideoUpdatedV1Mixin::create(),
            ]
        );
    }
}
