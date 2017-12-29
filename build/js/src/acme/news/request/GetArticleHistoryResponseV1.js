// @link http://acme-schemas.triniti.io/json-schema/acme/news/request/get-article-history-response/1-0-0.json#
import GdbotsPbjxGetEventsResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/get-events-response/GetEventsResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsGetArticleHistoryResponseV1Mixin from '@triniti/schemas/triniti/news/mixin/get-article-history-response/GetArticleHistoryResponseV1Mixin';

export default class GetArticleHistoryResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:request:get-article-history-response:1-0-0', GetArticleHistoryResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsPbjxGetEventsResponseV1Mixin.create(),
        TrinitiNewsGetArticleHistoryResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetArticleHistoryResponseV1);
MessageResolver.register('acme:news:request:get-article-history-response', GetArticleHistoryResponseV1);
Object.freeze(GetArticleHistoryResponseV1);
Object.freeze(GetArticleHistoryResponseV1.prototype);