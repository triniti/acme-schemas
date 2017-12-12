<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/node/page/1-0-0.json#
namespace Acme\Schemas\Canvas\Node;

use Acme\Schemas\Canvas\PageId;
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
use Triniti\Schemas\Canvas\Mixin\Page\PageV1 as TrinitiCanvasPageV1;
use Triniti\Schemas\Canvas\Mixin\Page\PageV1Mixin as TrinitiCanvasPageV1Mixin;
use Triniti\Schemas\Canvas\Mixin\Page\PageV1Trait as TrinitiCanvasPageV1Trait;

final class PageV1 extends AbstractMessage implements
    Page,
    GdbotsNcrNodeV1,
    TrinitiCanvasPageV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrExpirableV1,
    GdbotsNcrPublishableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiCanvasPageV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:canvas:node:page:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return PageId::generate(); })
                    ->className(PageId::class)
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiCanvasPageV1Mixin::create(),
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
        return ['page_id' => (string)$this->get('_id')];
    }
}
