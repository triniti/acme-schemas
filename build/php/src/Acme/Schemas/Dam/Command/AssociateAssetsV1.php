<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/associate-assets/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\AssociateAssets\AssociateAssetsV1 as TrinitiDamAssociateAssetsV1;
use Triniti\Schemas\Dam\Mixin\AssociateAssets\AssociateAssetsV1Mixin as TrinitiDamAssociateAssetsV1Mixin;

final class AssociateAssetsV1 extends AbstractMessage implements
    AssociateAssets,
    GdbotsPbjxCommandV1,
    TrinitiDamAssociateAssetsV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:associate-assets:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                TrinitiDamAssociateAssetsV1Mixin::create(),
            ]
        );
    }
}
