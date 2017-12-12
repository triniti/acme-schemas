// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/publish-article/1-0-0.json#
import GdbotsNcrPublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publish-node/PublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsPublishArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/publish-article/PublishArticleV1Mixin';

export default class PublishArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:publish-article:1-0-0', PublishArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrPublishNodeV1Mixin.create(),
        TrinitiNewsPublishArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(PublishArticleV1);
MessageResolver.register('acme:news:command:publish-article', PublishArticleV1);
Object.freeze(PublishArticleV1);
Object.freeze(PublishArticleV1.prototype);
