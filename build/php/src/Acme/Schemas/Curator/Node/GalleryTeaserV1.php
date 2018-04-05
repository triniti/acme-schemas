<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/curator/node/gallery-teaser/1-0-0.json#
namespace Acme\Schemas\Curator\Node;

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
use Triniti\Schemas\Curator\Mixin\GalleryTeaser\GalleryTeaserV1 as TrinitiCuratorGalleryTeaserV1;
use Triniti\Schemas\Curator\Mixin\GalleryTeaser\GalleryTeaserV1Mixin as TrinitiCuratorGalleryTeaserV1Mixin;
use Triniti\Schemas\Curator\Mixin\GalleryTeaser\GalleryTeaserV1Trait as TrinitiCuratorGalleryTeaserV1Trait;
use Triniti\Schemas\Curator\Mixin\TeaserHasTarget\TeaserHasTargetV1 as TrinitiCuratorTeaserHasTargetV1;
use Triniti\Schemas\Curator\Mixin\TeaserHasTarget\TeaserHasTargetV1Mixin as TrinitiCuratorTeaserHasTargetV1Mixin;
use Triniti\Schemas\Curator\Mixin\Teaser\TeaserV1 as TrinitiCuratorTeaserV1;
use Triniti\Schemas\Curator\Mixin\Teaser\TeaserV1Mixin as TrinitiCuratorTeaserV1Mixin;

final class GalleryTeaserV1 extends AbstractMessage implements
    GalleryTeaser,
    GdbotsNcrNodeV1,
    TrinitiCuratorTeaserV1,
    TrinitiCuratorTeaserHasTargetV1,
    TrinitiCuratorGalleryTeaserV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrPublishableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiCuratorGalleryTeaserV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:curator:node:gallery-teaser:1-0-0', __CLASS__,
            [],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiCuratorTeaserV1Mixin::create(),
                TrinitiCuratorTeaserHasTargetV1Mixin::create(),
                TrinitiCuratorGalleryTeaserV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrPublishableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
