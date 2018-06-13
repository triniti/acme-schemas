/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@triniti/acme-schemas/acme/people/command/CreatePersonV1';
import '@triniti/acme-schemas/acme/people/command/DeletePersonV1';
import '@triniti/acme-schemas/acme/people/command/RenamePersonV1';
import '@triniti/acme-schemas/acme/people/command/UpdatePersonV1';
import '@triniti/acme-schemas/acme/people/event/PersonCreatedV1';
import '@triniti/acme-schemas/acme/people/event/PersonDeletedV1';
import '@triniti/acme-schemas/acme/people/event/PersonRenamedV1';
import '@triniti/acme-schemas/acme/people/event/PersonUpdatedV1';
import '@triniti/acme-schemas/acme/people/node/PersonV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonHistoryRequestV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonHistoryResponseV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonRequestV1';
import '@triniti/acme-schemas/acme/people/request/GetPersonResponseV1';
import '@triniti/acme-schemas/acme/people/request/SearchPeopleRequestV1';
import '@triniti/acme-schemas/acme/people/request/SearchPeopleResponseV1';

export default MessageResolver;