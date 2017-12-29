// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloGetPollHistoryResponseV1Mixin from '@triniti/schemas/triniti/apollo/mixin/get-poll-history-response/GetPollHistoryResponseV1Mixin';

export default class GetPollHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:request:get-poll-history-response:1-0-0', GetPollHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
        TrinitiApolloGetPollHistoryResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPollHistoryResponseV1);
MessageResolver.register('acme:apollo:request:get-poll-history-response', GetPollHistoryResponseV1);
Object.freeze(GetPollHistoryResponseV1);
Object.freeze(GetPollHistoryResponseV1.prototype);