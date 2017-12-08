// @link http://acme-schemas.gdbots.io/json-schema/acme/news/request/get-article-batch-response/1-0-0.json#
import GdbotsNcrGetNodeBatchResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-batch-response/GetNodeBatchResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsGetArticleBatchResponseV1Mixin from '@triniti/schemas/triniti/news/mixin/get-article-batch-response/GetArticleBatchResponseV1Mixin';

export default class GetArticleBatchResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:request:get-article-batch-response:1-0-0', GetArticleBatchResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeBatchResponseV1Mixin.create(),
        TrinitiNewsGetArticleBatchResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetArticleBatchResponseV1);
MessageResolver.register('acme:news:request:get-article-batch-response', GetArticleBatchResponseV1);
Object.freeze(GetArticleBatchResponseV1);
Object.freeze(GetArticleBatchResponseV1.prototype);
