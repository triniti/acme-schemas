<?php
// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-batch-response/1-0-0.json#
namespace Acme\Schemas\Pages\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1 as GdbotsNcrGetNodeBatchResponseV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeBatchResponse\GetNodeBatchResponseV1Mixin as GdbotsNcrGetNodeBatchResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1 as GdbotsPbjxResponseV1;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Trait as GdbotsPbjxResponseV1Trait;
use Triniti\Schemas\Pages\Mixin\GetPageBatchResponse\GetPageBatchResponseV1 as TrinitiPagesGetPageBatchResponseV1;
use Triniti\Schemas\Pages\Mixin\GetPageBatchResponse\GetPageBatchResponseV1Mixin as TrinitiPagesGetPageBatchResponseV1Mixin;

final class GetPageBatchResponseV1 extends AbstractMessage implements
    GetPageBatchResponse,
    GdbotsPbjxResponseV1,
    GdbotsNcrGetNodeBatchResponseV1,
    TrinitiPagesGetPageBatchResponseV1
{
    use GdbotsPbjxResponseV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:acme:pages:request:get-page-batch-response:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxResponseV1Mixin::create(),
                GdbotsNcrGetNodeBatchResponseV1Mixin::create(),
                TrinitiPagesGetPageBatchResponseV1Mixin::create(),
            ]
        );
    }
}
