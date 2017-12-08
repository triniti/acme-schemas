// @link http://acme-schemas.gdbots.io/json-schema/acme/news/event/article-created/1-0-0.json#
import GdbotsNcrNodeCreatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-created/NodeCreatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsArticleCreatedV1Mixin from '@triniti/schemas/triniti/news/mixin/article-created/ArticleCreatedV1Mixin';

export default class ArticleCreatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:event:article-created:1-0-0', ArticleCreatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeCreatedV1Mixin.create(),
        TrinitiNewsArticleCreatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ArticleCreatedV1);
MessageResolver.register('acme:news:event:article-created', ArticleCreatedV1);
Object.freeze(ArticleCreatedV1);
Object.freeze(ArticleCreatedV1.prototype);
