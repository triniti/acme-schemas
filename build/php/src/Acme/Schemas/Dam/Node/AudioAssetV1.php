<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/node/audio-asset/1-0-0.json#
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
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1 as TrinitiDamAssetV1;
use Triniti\Schemas\Dam\Mixin\Asset\AssetV1Mixin as TrinitiDamAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\AudioAsset\AudioAssetV1 as TrinitiDamAudioAssetV1;
use Triniti\Schemas\Dam\Mixin\AudioAsset\AudioAssetV1Mixin as TrinitiDamAudioAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\AudioAsset\AudioAssetV1Trait as TrinitiDamAudioAssetV1Trait;

final class AudioAssetV1 extends AbstractMessage implements
    AudioAsset,
    GdbotsNcrNodeV1,
    TrinitiDamAssetV1,
    TrinitiDamAudioAssetV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiDamAudioAssetV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:node:audio-asset:1-0-0', __CLASS__,
            [],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiDamAssetV1Mixin::create(),
                TrinitiDamAudioAssetV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
