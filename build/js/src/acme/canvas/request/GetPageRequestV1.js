// @link http://acme-schemas.gdbots.io/json-schema/acme/canvas/request/get-page-request/1-0-0.json#
import GdbotsNcrGetNodeRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-request/GetNodeRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasGetPageRequestV1Mixin from '@triniti/schemas/triniti/canvas/mixin/get-page-request/GetPageRequestV1Mixin';

export default class GetPageRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:request:get-page-request:1-0-0', GetPageRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeRequestV1Mixin.create(),
        TrinitiCanvasGetPageRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetPageRequestV1);
MessageResolver.register('acme:canvas:request:get-page-request', GetPageRequestV1);
Object.freeze(GetPageRequestV1);
Object.freeze(GetPageRequestV1.prototype);
