<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/curator/node/category-teaser/1-0-0.json#
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
use Triniti\Schemas\Boost\Mixin\Sponsorable\SponsorableV1 as TrinitiBoostSponsorableV1;
use Triniti\Schemas\Boost\Mixin\Sponsorable\SponsorableV1Mixin as TrinitiBoostSponsorableV1Mixin;
use Triniti\Schemas\Curator\Mixin\CategoryTeaser\CategoryTeaserV1 as TrinitiCuratorCategoryTeaserV1;
use Triniti\Schemas\Curator\Mixin\CategoryTeaser\CategoryTeaserV1Mixin as TrinitiCuratorCategoryTeaserV1Mixin;
use Triniti\Schemas\Curator\Mixin\CategoryTeaser\CategoryTeaserV1Trait as TrinitiCuratorCategoryTeaserV1Trait;
use Triniti\Schemas\Curator\Mixin\TeaserHasTarget\TeaserHasTargetV1 as TrinitiCuratorTeaserHasTargetV1;
use Triniti\Schemas\Curator\Mixin\TeaserHasTarget\TeaserHasTargetV1Mixin as TrinitiCuratorTeaserHasTargetV1Mixin;
use Triniti\Schemas\Curator\Mixin\Teaser\TeaserV1 as TrinitiCuratorTeaserV1;
use Triniti\Schemas\Curator\Mixin\Teaser\TeaserV1Mixin as TrinitiCuratorTeaserV1Mixin;
use Triniti\Schemas\People\Mixin\HasPeople\HasPeopleV1 as TrinitiPeopleHasPeopleV1;
use Triniti\Schemas\People\Mixin\HasPeople\HasPeopleV1Mixin as TrinitiPeopleHasPeopleV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Categorizable\CategorizableV1 as TrinitiTaxonomyCategorizableV1;
use Triniti\Schemas\Taxonomy\Mixin\Categorizable\CategorizableV1Mixin as TrinitiTaxonomyCategorizableV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\HasChannel\HasChannelV1 as TrinitiTaxonomyHasChannelV1;
use Triniti\Schemas\Taxonomy\Mixin\HasChannel\HasChannelV1Mixin as TrinitiTaxonomyHasChannelV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1 as TrinitiTaxonomyHashtaggableV1;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1Mixin as TrinitiTaxonomyHashtaggableV1Mixin;

final class CategoryTeaserV1 extends AbstractMessage implements
    CategoryTeaser,
    GdbotsNcrNodeV1,
    TrinitiCuratorTeaserV1,
    TrinitiCuratorTeaserHasTargetV1,
    TrinitiCuratorCategoryTeaserV1,
    GdbotsCommonTaggableV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrPublishableV1,
    TrinitiBoostSponsorableV1,
    TrinitiPeopleHasPeopleV1,
    TrinitiTaxonomyCategorizableV1,
    TrinitiTaxonomyHasChannelV1,
    TrinitiTaxonomyHashtaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiCuratorCategoryTeaserV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:curator:node:category-teaser:1-0-0', __CLASS__,
            [],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiCuratorTeaserV1Mixin::create(),
                TrinitiCuratorTeaserHasTargetV1Mixin::create(),
                TrinitiCuratorCategoryTeaserV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrPublishableV1Mixin::create(),
                TrinitiBoostSponsorableV1Mixin::create(),
                TrinitiPeopleHasPeopleV1Mixin::create(),
                TrinitiTaxonomyCategorizableV1Mixin::create(),
                TrinitiTaxonomyHasChannelV1Mixin::create(),
                TrinitiTaxonomyHashtaggableV1Mixin::create(),
            ]
        );
    }
}
