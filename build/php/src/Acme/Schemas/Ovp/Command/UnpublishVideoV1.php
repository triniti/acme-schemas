<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/command/unpublish-video/1-0-0.json#
namespace Acme\Schemas\Ovp\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1 as GdbotsNcrUnpublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1Mixin as GdbotsNcrUnpublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Ovp\Mixin\UnpublishVideo\UnpublishVideoV1 as TrinitiOvpUnpublishVideoV1;
use Triniti\Schemas\Ovp\Mixin\UnpublishVideo\UnpublishVideoV1Mixin as TrinitiOvpUnpublishVideoV1Mixin;

final class UnpublishVideoV1 extends AbstractMessage implements
    UnpublishVideo,
    GdbotsPbjxCommandV1,
    GdbotsNcrUnpublishNodeV1,
    TrinitiOvpUnpublishVideoV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:ovp:command:unpublish-video:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUnpublishNodeV1Mixin::create(),
                TrinitiOvpUnpublishVideoV1Mixin::create(),
            ]
        );
    }
}
