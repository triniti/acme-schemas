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
    'gdbots:ncr:command:create-edge' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:delete-edge' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:ncr:event:edge-created' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:ncr:request:get-node-batch-request' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
    'gdbots:ncr:request:get-node-batch-response' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
]);
