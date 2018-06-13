<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'acme:dam:command:create-asset' => 'Acme\Schemas\Dam\Command\CreateAssetV1',
    'acme:dam:command:delete-asset' => 'Acme\Schemas\Dam\Command\DeleteAssetV1',
    'acme:dam:command:expire-asset' => 'Acme\Schemas\Dam\Command\ExpireAssetV1',
    'acme:dam:command:link-assets' => 'Acme\Schemas\Dam\Command\LinkAssetsV1',
    'acme:dam:command:patch-assets' => 'Acme\Schemas\Dam\Command\PatchAssetsV1',
    'acme:dam:command:reorder-gallery-assets' => 'Acme\Schemas\Dam\Command\ReorderGalleryAssetsV1',
    'acme:dam:command:unlink-assets' => 'Acme\Schemas\Dam\Command\UnlinkAssetsV1',
    'acme:dam:command:update-asset' => 'Acme\Schemas\Dam\Command\UpdateAssetV1',
    'acme:dam:event:asset-created' => 'Acme\Schemas\Dam\Event\AssetCreatedV1',
    'acme:dam:event:asset-deleted' => 'Acme\Schemas\Dam\Event\AssetDeletedV1',
    'acme:dam:event:asset-expired' => 'Acme\Schemas\Dam\Event\AssetExpiredV1',
    'acme:dam:event:asset-linked' => 'Acme\Schemas\Dam\Event\AssetLinkedV1',
    'acme:dam:event:asset-patched' => 'Acme\Schemas\Dam\Event\AssetPatchedV1',
    'acme:dam:event:asset-unlinked' => 'Acme\Schemas\Dam\Event\AssetUnlinkedV1',
    'acme:dam:event:asset-updated' => 'Acme\Schemas\Dam\Event\AssetUpdatedV1',
    'acme:dam:event:gallery-asset-reordered' => 'Acme\Schemas\Dam\Event\GalleryAssetReorderedV1',
    'acme:dam:node:archive-asset' => 'Acme\Schemas\Dam\Node\ArchiveAssetV1',
    'acme:dam:node:audio-asset' => 'Acme\Schemas\Dam\Node\AudioAssetV1',
    'acme:dam:node:code-asset' => 'Acme\Schemas\Dam\Node\CodeAssetV1',
    'acme:dam:node:document-asset' => 'Acme\Schemas\Dam\Node\DocumentAssetV1',
    'acme:dam:node:image-asset' => 'Acme\Schemas\Dam\Node\ImageAssetV1',
    'acme:dam:node:unknown-asset' => 'Acme\Schemas\Dam\Node\UnknownAssetV1',
    'acme:dam:node:video-asset' => 'Acme\Schemas\Dam\Node\VideoAssetV1',
    'acme:dam:request:get-asset-history-request' => 'Acme\Schemas\Dam\Request\GetAssetHistoryRequestV1',
    'acme:dam:request:get-asset-history-response' => 'Acme\Schemas\Dam\Request\GetAssetHistoryResponseV1',
    'acme:dam:request:get-asset-request' => 'Acme\Schemas\Dam\Request\GetAssetRequestV1',
    'acme:dam:request:get-asset-response' => 'Acme\Schemas\Dam\Request\GetAssetResponseV1',
    'acme:dam:request:get-upload-urls-request' => 'Acme\Schemas\Dam\Request\GetUploadUrlsRequestV1',
    'acme:dam:request:get-upload-urls-response' => 'Acme\Schemas\Dam\Request\GetUploadUrlsResponseV1',
    'acme:dam:request:search-assets-request' => 'Acme\Schemas\Dam\Request\SearchAssetsRequestV1',
    'acme:dam:request:search-assets-response' => 'Acme\Schemas\Dam\Request\SearchAssetsResponseV1',
]);
