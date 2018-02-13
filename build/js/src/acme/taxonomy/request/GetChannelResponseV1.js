// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/request/get-channel-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyGetChannelResponseV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/get-channel-response/GetChannelResponseV1Mixin';

export default class GetChannelResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:request:get-channel-response:1-0-0', GetChannelResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiTaxonomyGetChannelResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetChannelResponseV1);
MessageResolver.register('acme:taxonomy:request:get-channel-response', GetChannelResponseV1);
Object.freeze(GetChannelResponseV1);
Object.freeze(GetChannelResponseV1.prototype);
