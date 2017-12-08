// @link http://acme-schemas.gdbots.io/json-schema/acme/news/request/get-article-batch-request/1-0-0.json#
import GdbotsNcrGetNodeBatchRequestV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-request/GetNodeBatchRequestV1Mixin';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import GdbotsPbjxRequestV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsGetArticleBatchRequestV1Mixin from '@triniti/schemas/triniti/news/mixin/get-article-batch-request/GetArticleBatchRequestV1Mixin';

export default class GetArticleBatchRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:request:get-article-batch-request:1-0-0', GetArticleBatchRequestV1,
      [],
      [
        GdbotsPbjxRequestV1Mixin.create(),
        GdbotsNcrGetNodeBatchRequestV1Mixin.create(),
        TrinitiNewsGetArticleBatchRequestV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxRequestV1Trait(GetArticleBatchRequestV1);
MessageResolver.register('acme:news:request:get-article-batch-request', GetArticleBatchRequestV1);
Object.freeze(GetArticleBatchRequestV1);
Object.freeze(GetArticleBatchRequestV1.prototype);
