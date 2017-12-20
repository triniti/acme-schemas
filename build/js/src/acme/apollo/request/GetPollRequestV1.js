// @link http://acme-schemas.triniti.io/json-schema/acme/apollo/request/get-poll-request/1-0-0.json#
import GdbotsNcrGetNodeRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-request/GetNodeRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiApolloGetPollRequestV1Mixin from '@triniti/schemas/triniti/apollo/mixin/get-poll-request/GetPollRequestV1Mixin';

export default class GetPollRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:apollo:request:get-poll-request:1-0-0', GetPollRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeRequestV1Mixin.create(),
        TrinitiApolloGetPollRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetPollRequestV1);
MessageResolver.register('acme:apollo:request:get-poll-request', GetPollRequestV1);
Object.freeze(GetPollRequestV1);
Object.freeze(GetPollRequestV1.prototype);
