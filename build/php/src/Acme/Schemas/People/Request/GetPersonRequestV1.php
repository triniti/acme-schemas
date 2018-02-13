<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/people/request/get-person-request/1-0-0.json#
namespace Acme\Schemas\People\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1 as GdbotsNcrGetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin as GdbotsNcrGetNodeRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\People\Mixin\GetPersonRequest\GetPersonRequestV1 as TrinitiPeopleGetPersonRequestV1;
use Triniti\Schemas\People\Mixin\GetPersonRequest\GetPersonRequestV1Mixin as TrinitiPeopleGetPersonRequestV1Mixin;

final class GetPersonRequestV1 extends AbstractMessage implements
    GetPersonRequest,
    GdbotsPbjxRequestV1,
    GdbotsNcrGetNodeRequestV1,
    TrinitiPeopleGetPersonRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:people:request:get-person-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                GdbotsNcrGetNodeRequestV1Mixin::create(),
                TrinitiPeopleGetPersonRequestV1Mixin::create(),
            ]
        );
    }
}
