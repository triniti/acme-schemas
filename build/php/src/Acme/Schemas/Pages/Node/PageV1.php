<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/node/page/1-0-0.json#
namespace Acme\Schemas\Pages\Node;

use Acme\Schemas\Pages\PageId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;
use Triniti\Schemas\Pages\Mixin\Page\PageV1 as TrinitiPagesPageV1;
use Triniti\Schemas\Pages\Mixin\Page\PageV1Mixin as TrinitiPagesPageV1Mixin;
use Triniti\Schemas\Pages\Mixin\Page\PageV1Trait as TrinitiPagesPageV1Trait;

final class PageV1 extends AbstractMessage implements
    Page,
    GdbotsNcrNodeV1,
    TrinitiPagesPageV1,
    GdbotsNcrIndexedV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiPagesPageV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:node:page:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return PageId::generate(); })
                    ->className(PageId::class)
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiPagesPageV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
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
