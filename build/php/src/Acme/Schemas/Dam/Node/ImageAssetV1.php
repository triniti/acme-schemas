<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/node/image-asset/1-0-0.json#
namespace Acme\Schemas\Dam\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1 as GdbotsNcrExpirableV1;
use Gdbots\Schemas\Ncr\Mixin\Expirable\ExpirableV1Mixin as GdbotsNcrExpirableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Gdbots\Schemas\Ncr\Mixin\Publishable\PublishableV1 as GdbotsNcrPublishableV1;
use Gdbots\Schemas\Ncr\Mixin\Publishable\PublishableV1Mixin as GdbotsNcrPublishableV1Mixin;
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1 as TrinitiDamAssetV1;
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1Mixin as TrinitiDamAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1Trait as TrinitiDamAssetV1Trait;
use Triniti\Schemas\Dam\Mixin\ImageAsset\ImageAssetV1 as TrinitiDamImageAssetV1;
use Triniti\Schemas\Dam\Mixin\ImageAsset\ImageAssetV1Mixin as TrinitiDamImageAssetV1Mixin;

final class ImageAssetV1 extends AbstractMessage implements
    ImageAsset,
    GdbotsNcrNodeV1,
    TrinitiDamAssetV1,
    TrinitiDamImageAssetV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrPublishableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiDamAssetV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:node:image-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiDamAssetV1Mixin::create(),
                TrinitiDamImageAssetV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrPublishableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
