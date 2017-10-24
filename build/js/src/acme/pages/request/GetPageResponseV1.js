// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPagesGetPageResponseV1Mixin from '@triniti/schemas/triniti/pages/mixin/get-page-response/GetPageResponseV1Mixin';

export default class GetPageResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:pages:request:get-page-response:1-0-0', GetPageResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiPagesGetPageResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPageResponseV1);
MessageResolver.register('acme:pages:request:get-page-response', GetPageResponseV1);
Object.freeze(GetPageResponseV1);
Object.freeze(GetPageResponseV1.prototype);
