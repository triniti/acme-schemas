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
    'acme:people:command:create-person' => 'Acme\Schemas\People\Command\CreatePersonV1',
    'acme:people:command:delete-person' => 'Acme\Schemas\People\Command\DeletePersonV1',
    'acme:people:command:rename-person' => 'Acme\Schemas\People\Command\RenamePersonV1',
    'acme:people:command:update-person' => 'Acme\Schemas\People\Command\UpdatePersonV1',
    'acme:people:event:person-created' => 'Acme\Schemas\People\Event\PersonCreatedV1',
    'acme:people:event:person-deleted' => 'Acme\Schemas\People\Event\PersonDeletedV1',
    'acme:people:event:person-renamed' => 'Acme\Schemas\People\Event\PersonRenamedV1',
    'acme:people:event:person-updated' => 'Acme\Schemas\People\Event\PersonUpdatedV1',
    'acme:people:node:person' => 'Acme\Schemas\People\Node\PersonV1',
    'acme:people:request:get-person-history-request' => 'Acme\Schemas\People\Request\GetPersonHistoryRequestV1',
    'acme:people:request:get-person-history-response' => 'Acme\Schemas\People\Request\GetPersonHistoryResponseV1',
    'acme:people:request:get-person-request' => 'Acme\Schemas\People\Request\GetPersonRequestV1',
    'acme:people:request:get-person-response' => 'Acme\Schemas\People\Request\GetPersonResponseV1',
    'acme:people:request:search-people-request' => 'Acme\Schemas\People\Request\SearchPeopleRequestV1',
    'acme:people:request:search-people-response' => 'Acme\Schemas\People\Request\SearchPeopleResponseV1',
]);