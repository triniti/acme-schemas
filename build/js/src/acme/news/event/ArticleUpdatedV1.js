// @link http://acme-schemas.triniti.io/json-schema/acme/news/event/article-updated/1-0-0.json#
import GdbotsNcrNodeUpdatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-updated/NodeUpdatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsArticleUpdatedV1Mixin from '@triniti/schemas/triniti/news/mixin/article-updated/ArticleUpdatedV1Mixin';

export default class ArticleUpdatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:event:article-updated:1-0-0', ArticleUpdatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUpdatedV1Mixin.create(),
        TrinitiNewsArticleUpdatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(ArticleUpdatedV1);
MessageResolver.register('acme:news:event:article-updated', ArticleUpdatedV1);
Object.freeze(ArticleUpdatedV1);
Object.freeze(ArticleUpdatedV1.prototype);
