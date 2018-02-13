<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/create-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\CreateAsset\CreateAssetV1 as TrinitiDamCreateAssetV1;
use Triniti\Schemas\Dam\Mixin\CreateAsset\CreateAssetV1Mixin as TrinitiDamCreateAssetV1Mixin;

final class CreateAssetV1 extends AbstractMessage implements
    CreateAsset,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1,
    TrinitiDamCreateAssetV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:create-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
                TrinitiDamCreateAssetV1Mixin::create(),
            ]
        );
    }
}
