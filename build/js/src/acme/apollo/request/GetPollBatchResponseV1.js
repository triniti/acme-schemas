// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-batch-response/1-0-0.json#
import GdbotsNcrGetNodeBatchResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-response/GetNodeBatchResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloGetPollBatchResponseV1Mixin from '@triniti/schemas/triniti/apollo/mixin/get-poll-batch-response/GetPollBatchResponseV1Mixin';

export default class GetPollBatchResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:request:get-poll-batch-response:1-0-0', GetPollBatchResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeBatchResponseV1Mixin.create(),
        TrinitiApolloGetPollBatchResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPollBatchResponseV1);
MessageResolver.register('acme:apollo:request:get-poll-batch-response', GetPollBatchResponseV1);
Object.freeze(GetPollBatchResponseV1);
Object.freeze(GetPollBatchResponseV1.prototype);
