<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/publish-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1 as GdbotsNcrPublishNodeV1;
use Gdbots\Schemas\Ncr\Mixin\PublishNode\PublishNodeV1Mixin as GdbotsNcrPublishNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;
use Triniti\Schemas\Dam\Mixin\PublishAsset\PublishAssetV1 as TrinitiDamPublishAssetV1;
use Triniti\Schemas\Dam\Mixin\PublishAsset\PublishAssetV1Mixin as TrinitiDamPublishAssetV1Mixin;

final class PublishAssetV1 extends AbstractMessage implements
    PublishAsset,
    GdbotsPbjxCommandV1,
    GdbotsNcrPublishNodeV1,
    TrinitiDamPublishAssetV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:command:publish-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrPublishNodeV1Mixin::create(),
                TrinitiDamPublishAssetV1Mixin::create(),
            ]
        );
    }
}
