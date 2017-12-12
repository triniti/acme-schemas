<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/event/video-marked-as-pending/1-0-0.json#
namespace Acme\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1 as GdbotsNcrNodeMarkedAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1Mixin as GdbotsNcrNodeMarkedAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Ovp\Mixin\VideoMarkedAsPending\VideoMarkedAsPendingV1 as TrinitiOvpVideoMarkedAsPendingV1;
use Triniti\Schemas\Ovp\Mixin\VideoMarkedAsPending\VideoMarkedAsPendingV1Mixin as TrinitiOvpVideoMarkedAsPendingV1Mixin;

final class VideoMarkedAsPendingV1 extends AbstractMessage implements
    VideoMarkedAsPending,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeMarkedAsPendingV1,
    TrinitiOvpVideoMarkedAsPendingV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:event:video-marked-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeMarkedAsPendingV1Mixin::create(),
                TrinitiOvpVideoMarkedAsPendingV1Mixin::create(),
            ]
        );
    }
}
