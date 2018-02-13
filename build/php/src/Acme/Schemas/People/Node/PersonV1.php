<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/node/person/1-0-0.json#
namespace Acme\Schemas\People\Node;

use Acme\Schemas\People\PersonId;
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
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1 as GdbotsNcrSluggableV1;
use Gdbots\Schemas\Ncr\Mixin\Sluggable\SluggableV1Mixin as GdbotsNcrSluggableV1Mixin;
use Triniti\Schemas\Common\Mixin\Seo\SeoV1 as TrinitiCommonSeoV1;
use Triniti\Schemas\Common\Mixin\Seo\SeoV1Mixin as TrinitiCommonSeoV1Mixin;
use Triniti\Schemas\People\Mixin\Person\PersonV1 as TrinitiPeoplePersonV1;
use Triniti\Schemas\People\Mixin\Person\PersonV1Mixin as TrinitiPeoplePersonV1Mixin;
use Triniti\Schemas\People\Mixin\Person\PersonV1Trait as TrinitiPeoplePersonV1Trait;

final class PersonV1 extends AbstractMessage implements
    Person,
    GdbotsNcrNodeV1,
    TrinitiPeoplePersonV1,
    TrinitiCommonSeoV1,
    GdbotsNcrIndexedV1,
    GdbotsNcrSluggableV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;
    use TrinitiPeoplePersonV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:node:person:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return PersonId::generate(); })
                    ->className(PersonId::class)
                    ->build(),
            ],
            [
                GdbotsNcrNodeV1Mixin::create(),
                TrinitiPeoplePersonV1Mixin::create(),
                TrinitiCommonSeoV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsNcrSluggableV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }
}
