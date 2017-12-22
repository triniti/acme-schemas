<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/delete-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1 as GdbotsNcrDeleteNodeV1;
use Gdbots\Schemas\Ncr\Mixin\DeleteNode\DeleteNodeV1Mixin as GdbotsNcrDeleteNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\DeleteAsset\DeleteAssetV1 as TrinitiDamDeleteAssetV1;
use Triniti\Schemas\Dam\Mixin\DeleteAsset\DeleteAssetV1Mixin as TrinitiDamDeleteAssetV1Mixin;

final class DeleteAssetV1 extends AbstractMessage implements
    DeleteAsset,
    GdbotsPbjxCommandV1,
    GdbotsNcrDeleteNodeV1,
    TrinitiDamDeleteAssetV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:delete-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrDeleteNodeV1Mixin::create(),
                TrinitiDamDeleteAssetV1Mixin::create(),
            ]
        );
    }
}
