<?php
declare(strict_types=1);

// @link http://acme-schemas.triniti.io/json-schema/acme/dam/request/get-upload-urls-response/1-0-0.json#
namespace Acme\Schemas\Dam\Request;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Pbjx\Mixin\Response\ResponseV1Mixin as GdbotsPbjxResponseV1Mixin;
use Triniti\Schemas\Dam\AssetId;

final class GetUploadUrlsResponseV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:acme:dam:request:get-upload-urls-response:1-0-0';
    const SCHEMA_CURIE = 'acme:dam:request:get-upload-urls-response';
    const SCHEMA_CURIE_MAJOR = 'acme:dam:request:get-upload-urls-response:v1';
    const MIXINS = [
      'gdbots:pbjx:mixin:response:v1',
      'gdbots:pbjx:mixin:response',
      'triniti:dam:mixin:get-upload-urls-response:v1',
      'triniti:dam:mixin:get-upload-urls-response',
    ];

    use GdbotsPbjxResponseV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                Fb::create('response_id', T\UuidType::create())
                    ->required()
                    ->build(),
                Fb::create('created_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * Multi-tenant apps can use this field to track the tenant id.
                 */
                Fb::create('ctx_tenant_id', T\StringType::create())
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('ctx_request_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * The "ctx_request" is the actual request object that "ctx_request_ref" refers to.
                 * In some cases it's useful for request handlers to copy the request into the response
                 * so the requestor has everything in one message. This will NOT always be populated.
                 * A common use case is search request/response cycles where you want to know what the
                 * search criteria was so you can render that along with the results.
                 */
                Fb::create('ctx_request', T\MessageType::create())
                    ->anyOfCuries([
                        'gdbots:pbjx:mixin:request',
                    ])
                    ->build(),
                Fb::create('ctx_correlator_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * Responses can include "dereferenced" messages to prevent
                 * the consumer from needing to make multiple HTTP requests.
                 * It is up to the consumer to make use of the dereferenced
                 * messages if/when they are provided.
                 */
                Fb::create('derefs', T\MessageType::create())
                    ->asAMap()
                    ->build(),
                /*
                 * @link https://en.wikipedia.org/wiki/HATEOAS
                 */
                Fb::create('links', T\TextType::create())
                    ->asAMap()
                    ->build(),
                Fb::create('metas', T\TextType::create())
                    ->asAMap()
                    ->build(),
                /*
                 * A map of asset ids with an md5 hash of the client file name as the
                 * key and the generated asset id as the value.
                 */
                Fb::create('asset_ids', T\IdentifierType::create())
                    ->asAMap()
                    ->className(AssetId::class)
                    ->build(),
                /*
                 * A map of URLs with an md5 hash of the client file name as the key
                 * and the S3 presigned URL as the value.
                 */
                Fb::create('s3_presigned_urls', T\TextType::create())
                    ->asAMap()
                    ->format(Format::URL)
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
