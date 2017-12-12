// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/request/get-page-batch-request/1-0-0.json#
import GdbotsNcrGetNodeBatchRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-request/GetNodeBatchRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasGetPageBatchRequestV1Mixin from '@triniti/schemas/triniti/canvas/mixin/get-page-batch-request/GetPageBatchRequestV1Mixin';

export default class GetPageBatchRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:request:get-page-batch-request:1-0-0', GetPageBatchRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeBatchRequestV1Mixin.create(),
        TrinitiCanvasGetPageBatchRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetPageBatchRequestV1);
MessageResolver.register('acme:canvas:request:get-page-batch-request', GetPageBatchRequestV1);
Object.freeze(GetPageBatchRequestV1);
Object.freeze(GetPageBatchRequestV1.prototype);
