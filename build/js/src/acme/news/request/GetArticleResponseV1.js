// @link http://acme-schemas.triniti.io/json-schema/acme/news/request/get-article-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsGetArticleResponseV1Mixin from '@triniti/schemas/triniti/news/mixin/get-article-response/GetArticleResponseV1Mixin';

export default class GetArticleResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:request:get-article-response:1-0-0', GetArticleResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiNewsGetArticleResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetArticleResponseV1);
MessageResolver.register('acme:news:request:get-article-response', GetArticleResponseV1);
Object.freeze(GetArticleResponseV1);
Object.freeze(GetArticleResponseV1.prototype);