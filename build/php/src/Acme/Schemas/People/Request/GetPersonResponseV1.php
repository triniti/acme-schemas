<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/request/get-person-response/1-0-0.json#
namespace Acme\Schemas\People\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1 as GdbotsNcrGetNodeResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeResponse\GetNodeResponseV1Mixin as GdbotsNcrGetNodeResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\People\Mixin\GetPersonResponse\GetPersonResponseV1 as TrinitiPeopleGetPersonResponseV1;
use Triniti\Schemas\People\Mixin\GetPersonResponse\GetPersonResponseV1Mixin as TrinitiPeopleGetPersonResponseV1Mixin;

final class GetPersonResponseV1 extends AbstractMessage implements
    GetPersonResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeResponseV1,
    TrinitiPeopleGetPersonResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:request:get-person-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeResponseV1Mixin::create(),
                TrinitiPeopleGetPersonResponseV1Mixin::create(),
            ]
        );
    }
}
