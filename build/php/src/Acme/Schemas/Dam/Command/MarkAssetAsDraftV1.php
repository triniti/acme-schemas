<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/mark-asset-as-draft/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1 as GdbotsNcrMarkNodeAsDraftV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsDraft\MarkNodeAsDraftV1Mixin as GdbotsNcrMarkNodeAsDraftV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\MarkAssetAsDraft\MarkAssetAsDraftV1 as TrinitiDamMarkAssetAsDraftV1;
use Triniti\Schemas\Dam\Mixin\MarkAssetAsDraft\MarkAssetAsDraftV1Mixin as TrinitiDamMarkAssetAsDraftV1Mixin;

final class MarkAssetAsDraftV1 extends AbstractMessage implements
    MarkAssetAsDraft,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsDraftV1,
    TrinitiDamMarkAssetAsDraftV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:mark-asset-as-draft:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsDraftV1Mixin::create(),
                TrinitiDamMarkAssetAsDraftV1Mixin::create(),
            ]
        );
    }
}
