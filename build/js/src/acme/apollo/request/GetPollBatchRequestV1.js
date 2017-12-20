// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-batch-request/1-0-0.json#
import GdbotsNcrGetNodeBatchRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-request/GetNodeBatchRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloGetPollBatchRequestV1Mixin from '@triniti/schemas/triniti/apollo/mixin/get-poll-batch-request/GetPollBatchRequestV1Mixin';

export default class GetPollBatchRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:request:get-poll-batch-request:1-0-0', GetPollBatchRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeBatchRequestV1Mixin.create(),
        TrinitiApolloGetPollBatchRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetPollBatchRequestV1);
MessageResolver.register('acme:apollo:request:get-poll-batch-request', GetPollBatchRequestV1);
Object.freeze(GetPollBatchRequestV1);
Object.freeze(GetPollBatchRequestV1.prototype);
