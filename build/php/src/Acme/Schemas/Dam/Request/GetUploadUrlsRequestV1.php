<?php
// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-upload-urls-request/1-0-0.json#
namespace Acme\Schemas\Dam\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1 as GdbotsPbjxRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin as GdbotsPbjxRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait as GdbotsPbjxRequestV1Trait;
use Triniti\Schemas\Dam\Mixin\GetUploadUrlsRequest\GetUploadUrlsRequestV1 as TrinitiDamGetUploadUrlsRequestV1;
use Triniti\Schemas\Dam\Mixin\GetUploadUrlsRequest\GetUploadUrlsRequestV1Mixin as TrinitiDamGetUploadUrlsRequestV1Mixin;

final class GetUploadUrlsRequestV1 extends AbstractMessage implements
    GetUploadUrlsRequest,
    GdbotsPbjxRequestV1,
    TrinitiDamGetUploadUrlsRequestV1
{
    use GdbotsPbjxRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:dam:request:get-upload-urls-request:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxRequestV1Mixin::create(),
                TrinitiDamGetUploadUrlsRequestV1Mixin::create(),
            ]
        );
    }
}
