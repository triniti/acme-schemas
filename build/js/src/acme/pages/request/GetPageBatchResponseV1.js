// @link http://acme-schemas.gdbots.io/json-schema/acme/pages/request/get-page-batch-response/1-0-0.json#
import GdbotsNcrGetNodeBatchResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-response/GetNodeBatchResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPagesGetPageBatchResponseV1Mixin from '@triniti/schemas/triniti/pages/mixin/get-page-batch-response/GetPageBatchResponseV1Mixin';

export default class GetPageBatchResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:pages:request:get-page-batch-response:1-0-0', GetPageBatchResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeBatchResponseV1Mixin.create(),
        TrinitiPagesGetPageBatchResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPageBatchResponseV1);
MessageResolver.register('acme:pages:request:get-page-batch-response', GetPageBatchResponseV1);
Object.freeze(GetPageBatchResponseV1);
Object.freeze(GetPageBatchResponseV1.prototype);
