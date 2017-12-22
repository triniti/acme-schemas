<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/mark-asset-as-pending/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1 as GdbotsNcrMarkNodeAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1Mixin as GdbotsNcrMarkNodeAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\MarkAssetAsPending\MarkAssetAsPendingV1 as TrinitiDamMarkAssetAsPendingV1;
use Triniti\Schemas\Dam\Mixin\MarkAssetAsPending\MarkAssetAsPendingV1Mixin as TrinitiDamMarkAssetAsPendingV1Mixin;

final class MarkAssetAsPendingV1 extends AbstractMessage implements
    MarkAssetAsPending,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsPendingV1,
    TrinitiDamMarkAssetAsPendingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:mark-asset-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsPendingV1Mixin::create(),
                TrinitiDamMarkAssetAsPendingV1Mixin::create(),
            ]
        );
    }
}
