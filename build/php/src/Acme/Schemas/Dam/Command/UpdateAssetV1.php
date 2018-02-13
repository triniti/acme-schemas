<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/update-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\UpdateAsset\UpdateAssetV1 as TrinitiDamUpdateAssetV1;
use Triniti\Schemas\Dam\Mixin\UpdateAsset\UpdateAssetV1Mixin as TrinitiDamUpdateAssetV1Mixin;

final class UpdateAssetV1 extends AbstractMessage implements
    UpdateAsset,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1,
    TrinitiDamUpdateAssetV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:update-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
                TrinitiDamUpdateAssetV1Mixin::create(),
            ]
        );
    }
}
