<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-updated/1-0-0.json#
namespace Acme\Schemas\Dam\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1 as GdbotsNcrNodeUpdatedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUpdated\NodeUpdatedV1Mixin as GdbotsNcrNodeUpdatedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Dam\Mixin\AssetUpdated\AssetUpdatedV1 as TrinitiDamAssetUpdatedV1;
use Triniti\Schemas\Dam\Mixin\AssetUpdated\AssetUpdatedV1Mixin as TrinitiDamAssetUpdatedV1Mixin;

final class AssetUpdatedV1 extends AbstractMessage implements
    AssetUpdated,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUpdatedV1,
    TrinitiDamAssetUpdatedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:event:asset-updated:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUpdatedV1Mixin::create(),
                TrinitiDamAssetUpdatedV1Mixin::create(),
            ]
        );
    }
}
