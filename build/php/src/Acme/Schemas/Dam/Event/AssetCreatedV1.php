<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-created/1-0-0.json#
namespace Acme\Schemas\Dam\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1 as GdbotsNcrNodeCreatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeCreated\NodeCreatedV1Mixin as GdbotsNcrNodeCreatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Dam\Mixin\AssetCreated\AssetCreatedV1 as TrinitiDamAssetCreatedV1;
use Triniti\Schemas\Dam\Mixin\AssetCreated\AssetCreatedV1Mixin as TrinitiDamAssetCreatedV1Mixin;

final class AssetCreatedV1 extends AbstractMessage implements
    AssetCreated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeCreatedV1,
    TrinitiDamAssetCreatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:event:asset-created:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeCreatedV1Mixin::create(),
                TrinitiDamAssetCreatedV1Mixin::create(),
            ]
        );
    }
}
