<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/event/person-renamed/1-0-0.json#
namespace Acme\Schemas\People\Event;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1 as GdbotsNcrNodeRenamedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeRenamed\NodeRenamedV1Mixin as GdbotsNcrNodeRenamedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;
use Triniti\Schemas\People\Mixin\PersonRenamed\PersonRenamedV1 as TrinitiPeoplePersonRenamedV1;
use Triniti\Schemas\People\Mixin\PersonRenamed\PersonRenamedV1Mixin as TrinitiPeoplePersonRenamedV1Mixin;

final class PersonRenamedV1 extends AbstractMessage implements
    PersonRenamed,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeRenamedV1,
    TrinitiPeoplePersonRenamedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:event:person-renamed:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeRenamedV1Mixin::create(),
                TrinitiPeoplePersonRenamedV1Mixin::create(),
            ]
        );
    }
}
