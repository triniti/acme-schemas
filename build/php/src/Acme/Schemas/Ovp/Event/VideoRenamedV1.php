<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/event/video-renamed/1-0-0.json#
namespace Acme\Schemas\Ovp\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1 as GdbotsNcrNodeRenamedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1Mixin as GdbotsNcrNodeRenamedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Ovp\Mixin\VideoRenamed\VideoRenamedV1 as TrinitiOvpVideoRenamedV1;
use Triniti\Schemas\Ovp\Mixin\VideoRenamed\VideoRenamedV1Mixin as TrinitiOvpVideoRenamedV1Mixin;

final class VideoRenamedV1 extends AbstractMessage implements
    VideoRenamed,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeRenamedV1,
    TrinitiOvpVideoRenamedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:event:video-renamed:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeRenamedV1Mixin::create(),
                TrinitiOvpVideoRenamedV1Mixin::create(),
            ]
        );
    }
}
