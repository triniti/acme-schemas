<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/videos/node/video/1-0-0.json#
namespace Acme\Schemas\Videos\Node;

use Acme\Schemas\Videos\VideoId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
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
use Triniti\Schemas\Videos\Mixin\Video\VideoV1 as TrinitiVideosVideoV1;
use Triniti\Schemas\Videos\Mixin\Video\VideoV1Mixin as TrinitiVideosVideoV1Mixin;
use Triniti\Schemas\Videos\Mixin\Video\VideoV1Trait as TrinitiVideosVideoV1Trait;

final class VideoV1 extends AbstractMessage implements
    Video,
    GdbotsNcrNodeV1,
    TrinitiVideosVideoV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrPublishableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiVideosVideoV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:videos:node:video:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return VideoId::generate(); })
                    ->className(VideoId::class)
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiVideosVideoV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrExpirableV1Mixin::create(),
                GdbotsNcrPublishableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }

    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['video_id' => (string)$this->get('_id')];
    }
}
