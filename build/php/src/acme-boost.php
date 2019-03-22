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
    'acme:boost:command:create-sponsor' => 'Acme\Schemas\Boost\Command\CreateSponsorV1',
    'acme:boost:command:delete-sponsor' => 'Acme\Schemas\Boost\Command\DeleteSponsorV1',
    'acme:boost:command:expire-sponsor' => 'Acme\Schemas\Boost\Command\ExpireSponsorV1',
    'acme:boost:command:mark-sponsor-as-draft' => 'Acme\Schemas\Boost\Command\MarkSponsorAsDraftV1',
    'acme:boost:command:mark-sponsor-as-pending' => 'Acme\Schemas\Boost\Command\MarkSponsorAsPendingV1',
    'acme:boost:command:publish-sponsor' => 'Acme\Schemas\Boost\Command\PublishSponsorV1',
    'acme:boost:command:rename-sponsor' => 'Acme\Schemas\Boost\Command\RenameSponsorV1',
    'acme:boost:command:unpublish-sponsor' => 'Acme\Schemas\Boost\Command\UnpublishSponsorV1',
    'acme:boost:command:update-sponsor' => 'Acme\Schemas\Boost\Command\UpdateSponsorV1',
    'acme:boost:event:sponsor-created' => 'Acme\Schemas\Boost\Event\SponsorCreatedV1',
    'acme:boost:event:sponsor-deleted' => 'Acme\Schemas\Boost\Event\SponsorDeletedV1',
    'acme:boost:event:sponsor-expired' => 'Acme\Schemas\Boost\Event\SponsorExpiredV1',
    'acme:boost:event:sponsor-marked-as-draft' => 'Acme\Schemas\Boost\Event\SponsorMarkedAsDraftV1',
    'acme:boost:event:sponsor-marked-as-pending' => 'Acme\Schemas\Boost\Event\SponsorMarkedAsPendingV1',
    'acme:boost:event:sponsor-published' => 'Acme\Schemas\Boost\Event\SponsorPublishedV1',
    'acme:boost:event:sponsor-renamed' => 'Acme\Schemas\Boost\Event\SponsorRenamedV1',
    'acme:boost:event:sponsor-scheduled' => 'Acme\Schemas\Boost\Event\SponsorScheduledV1',
    'acme:boost:event:sponsor-unpublished' => 'Acme\Schemas\Boost\Event\SponsorUnpublishedV1',
    'acme:boost:event:sponsor-updated' => 'Acme\Schemas\Boost\Event\SponsorUpdatedV1',
    'acme:boost:node:sponsor' => 'Acme\Schemas\Boost\Node\SponsorV1',
    'acme:boost:request:get-sponsor-history-request' => 'Acme\Schemas\Boost\Request\GetSponsorHistoryRequestV1',
    'acme:boost:request:get-sponsor-history-response' => 'Acme\Schemas\Boost\Request\GetSponsorHistoryResponseV1',
    'acme:boost:request:get-sponsor-request' => 'Acme\Schemas\Boost\Request\GetSponsorRequestV1',
    'acme:boost:request:get-sponsor-response' => 'Acme\Schemas\Boost\Request\GetSponsorResponseV1',
    'acme:boost:request:search-sponsors-request' => 'Acme\Schemas\Boost\Request\SearchSponsorsRequestV1',
    'acme:boost:request:search-sponsors-response' => 'Acme\Schemas\Boost\Request\SearchSponsorsResponseV1',
]);