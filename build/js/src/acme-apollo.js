/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@triniti/acme-schemas/acme/apollo/PollAnswerV1';
import '@triniti/acme-schemas/acme/apollo/command/CastVoteV1';
import '@triniti/acme-schemas/acme/apollo/command/CreatePollV1';
import '@triniti/acme-schemas/acme/apollo/command/DeletePollV1';
import '@triniti/acme-schemas/acme/apollo/command/ExpirePollV1';
import '@triniti/acme-schemas/acme/apollo/command/MarkPollAsDraftV1';
import '@triniti/acme-schemas/acme/apollo/command/MarkPollAsPendingV1';
import '@triniti/acme-schemas/acme/apollo/command/PublishPollV1';
import '@triniti/acme-schemas/acme/apollo/command/UnpublishPollV1';
import '@triniti/acme-schemas/acme/apollo/command/UpdatePollV1';
import '@triniti/acme-schemas/acme/apollo/event/PollCreatedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollDeletedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollExpiredV1';
import '@triniti/acme-schemas/acme/apollo/event/PollMarkedAsDraftV1';
import '@triniti/acme-schemas/acme/apollo/event/PollMarkedAsPendingV1';
import '@triniti/acme-schemas/acme/apollo/event/PollPublishedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollScheduledV1';
import '@triniti/acme-schemas/acme/apollo/event/PollUnpublishedV1';
import '@triniti/acme-schemas/acme/apollo/event/PollUpdatedV1';
import '@triniti/acme-schemas/acme/apollo/event/VoteCastedV1';
import '@triniti/acme-schemas/acme/apollo/node/PollV1';
import '@triniti/acme-schemas/acme/apollo/node/PollStatsV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollHistoryRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollHistoryResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/GetPollResponseV1';
import '@triniti/acme-schemas/acme/apollo/request/SearchPollsRequestV1';
import '@triniti/acme-schemas/acme/apollo/request/SearchPollsResponseV1';

export default MessageResolver;