<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/node/channel/1-0-0.json#
namespace Acme\Schemas\Taxonomy\Node;

use Acme\Schemas\Taxonomy\ChannelId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1 as GdbotsNcrSluggableV1;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1Mixin as GdbotsNcrSluggableV1Mixin;
use Triniti\Schemas\Common\Mixin\Seo\SeoV1 as TrinitiCommonSeoV1;
use Triniti\Schemas\Common\Mixin\Seo\SeoV1Mixin as TrinitiCommonSeoV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Channel\ChannelV1 as TrinitiTaxonomyChannelV1;
use Triniti\Schemas\Taxonomy\Mixin\Channel\ChannelV1Mixin as TrinitiTaxonomyChannelV1Mixin;
use Triniti\Schemas\Taxonomy\Mixin\Channel\ChannelV1Trait as TrinitiTaxonomyChannelV1Trait;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1 as TrinitiTaxonomyHashtaggableV1;
use Triniti\Schemas\Taxonomy\Mixin\Hashtaggable\HashtaggableV1Mixin as TrinitiTaxonomyHashtaggableV1Mixin;

final class ChannelV1 extends AbstractMessage implements
    Channel,
    GdbotsNcrNodeV1,
    TrinitiTaxonomyChannelV1,
    TrinitiCommonSeoV1,
    TrinitiTaxonomyHashtaggableV1,
    GdbotsNcrSluggableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiTaxonomyChannelV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:taxonomy:node:channel:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return ChannelId::generate(); })
                    ->className(ChannelId::class)
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiTaxonomyChannelV1Mixin::create(),
                TrinitiCommonSeoV1Mixin::create(),
                TrinitiTaxonomyHashtaggableV1Mixin::create(),
                GdbotsNcrSluggableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
