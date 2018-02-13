<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/expire-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1 as GdbotsNcrExpireNodeV1;
use Gdbots\Schemas\Ncr\Mixin\ExpireNode\ExpireNodeV1Mixin as GdbotsNcrExpireNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\ExpireAsset\ExpireAssetV1 as TrinitiDamExpireAssetV1;
use Triniti\Schemas\Dam\Mixin\ExpireAsset\ExpireAssetV1Mixin as TrinitiDamExpireAssetV1Mixin;

final class ExpireAssetV1 extends AbstractMessage implements
    ExpireAsset,
    GdbotsPbjxCommandV1,
    GdbotsNcrExpireNodeV1,
    TrinitiDamExpireAssetV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:expire-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrExpireNodeV1Mixin::create(),
                TrinitiDamExpireAssetV1Mixin::create(),
            ]
        );
    }
}
