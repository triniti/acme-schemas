<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/unpublish-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1 as GdbotsNcrUnpublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UnpublishNode\UnpublishNodeV1Mixin as GdbotsNcrUnpublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\UnpublishAsset\UnpublishAssetV1 as TrinitiDamUnpublishAssetV1;
use Triniti\Schemas\Dam\Mixin\UnpublishAsset\UnpublishAssetV1Mixin as TrinitiDamUnpublishAssetV1Mixin;

final class UnpublishAssetV1 extends AbstractMessage implements
    UnpublishAsset,
    GdbotsPbjxCommandV1,
    GdbotsNcrUnpublishNodeV1,
    TrinitiDamUnpublishAssetV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:unpublish-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUnpublishNodeV1Mixin::create(),
                TrinitiDamUnpublishAssetV1Mixin::create(),
            ]
        );
    }
}
