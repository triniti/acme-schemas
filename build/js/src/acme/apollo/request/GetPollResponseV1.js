// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloGetPollResponseV1Mixin from '@triniti/schemas/triniti/apollo/mixin/get-poll-response/GetPollResponseV1Mixin';

export default class GetPollResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:request:get-poll-response:1-0-0', GetPollResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiApolloGetPollResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPollResponseV1);
MessageResolver.register('acme:apollo:request:get-poll-response', GetPollResponseV1);
Object.freeze(GetPollResponseV1);
Object.freeze(GetPollResponseV1.prototype);