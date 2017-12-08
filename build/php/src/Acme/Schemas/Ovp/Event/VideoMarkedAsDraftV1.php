<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-marked-as-draft/1-0-0.json#
namespace Acme\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsDraft\NodeMarkedAsDraftV1 as GdbotsNcrNodeMarkedAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsDraft\NodeMarkedAsDraftV1Mixin as GdbotsNcrNodeMarkedAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Ovp\Mixin\VideoMarkedAsDraft\VideoMarkedAsDraftV1 as TrinitiOvpVideoMarkedAsDraftV1;
use Triniti\Schemas\Ovp\Mixin\VideoMarkedAsDraft\VideoMarkedAsDraftV1Mixin as TrinitiOvpVideoMarkedAsDraftV1Mixin;

final class VideoMarkedAsDraftV1 extends AbstractMessage implements
    VideoMarkedAsDraft,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeMarkedAsDraftV1,
    TrinitiOvpVideoMarkedAsDraftV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:event:video-marked-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeMarkedAsDraftV1Mixin::create(),
                TrinitiOvpVideoMarkedAsDraftV1Mixin::create(),
            ]
        );
    }
}
