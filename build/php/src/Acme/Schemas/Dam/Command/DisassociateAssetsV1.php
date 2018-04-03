<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/disassociate-assets/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\DisassociateAssets\DisassociateAssetsV1 as TrinitiDamDisassociateAssetsV1;
use Triniti\Schemas\Dam\Mixin\DisassociateAssets\DisassociateAssetsV1Mixin as TrinitiDamDisassociateAssetsV1Mixin;

final class DisassociateAssetsV1 extends AbstractMessage implements
    DisassociateAssets,
    GdbotsPbjxCommandV1,
    TrinitiDamDisassociateAssetsV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:disassociate-assets:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                TrinitiDamDisassociateAssetsV1Mixin::create(),
            ]
        );
    }
}
