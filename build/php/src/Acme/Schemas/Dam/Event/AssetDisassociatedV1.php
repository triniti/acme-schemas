<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-disassociated/1-0-0.json#
namespace Acme\Schemas\Dam\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Dam\Mixin\AssetDisassociated\AssetDisassociatedV1 as TrinitiDamAssetDisassociatedV1;
use Triniti\Schemas\Dam\Mixin\AssetDisassociated\AssetDisassociatedV1Mixin as TrinitiDamAssetDisassociatedV1Mixin;

final class AssetDisassociatedV1 extends AbstractMessage implements
    AssetDisassociated,
    GdbotsPbjxEventV1,
    TrinitiDamAssetDisassociatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:event:asset-disassociated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                TrinitiDamAssetDisassociatedV1Mixin::create(),
            ]
        );
    }
}
