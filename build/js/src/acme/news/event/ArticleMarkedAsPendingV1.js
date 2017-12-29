// @link http://acme-schemas.triniti.io/json-schema/acme/news/event/article-marked-as-pending/1-0-0.json#
import GdbotsNcrNodeMarkedAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-pending/NodeMarkedAsPendingV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsArticleMarkedAsPendingV1Mixin from '@triniti/schemas/triniti/news/mixin/article-marked-as-pending/ArticleMarkedAsPendingV1Mixin';

export default class ArticleMarkedAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:event:article-marked-as-pending:1-0-0', ArticleMarkedAsPendingV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsPendingV1Mixin.create(),
        TrinitiNewsArticleMarkedAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ArticleMarkedAsPendingV1);
MessageResolver.register('acme:news:event:article-marked-as-pending', ArticleMarkedAsPendingV1);
Object.freeze(ArticleMarkedAsPendingV1);
Object.freeze(ArticleMarkedAsPendingV1.prototype);