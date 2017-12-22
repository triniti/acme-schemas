<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-marked-as-pending/1-0-0.json#
namespace Acme\Schemas\Dam\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1 as GdbotsNcrNodeMarkedAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\NodeMarkedAsPending\NodeMarkedAsPendingV1Mixin as GdbotsNcrNodeMarkedAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\Dam\Mixin\AssetMarkedAsPending\AssetMarkedAsPendingV1 as TrinitiDamAssetMarkedAsPendingV1;
use Triniti\Schemas\Dam\Mixin\AssetMarkedAsPending\AssetMarkedAsPendingV1Mixin as TrinitiDamAssetMarkedAsPendingV1Mixin;

final class AssetMarkedAsPendingV1 extends AbstractMessage implements
    AssetMarkedAsPending,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeMarkedAsPendingV1,
    TrinitiDamAssetMarkedAsPendingV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:event:asset-marked-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeMarkedAsPendingV1Mixin::create(),
                TrinitiDamAssetMarkedAsPendingV1Mixin::create(),
            ]
        );
    }
}
