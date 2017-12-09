// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/unpublish-article/1-0-0.json#
import GdbotsNcrUnpublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unpublish-node/UnpublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsUnpublishArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/unpublish-article/UnpublishArticleV1Mixin';

export default class UnpublishArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:unpublish-article:1-0-0', UnpublishArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnpublishNodeV1Mixin.create(),
        TrinitiNewsUnpublishArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnpublishArticleV1);
MessageResolver.register('acme:news:command:unpublish-article', UnpublishArticleV1);
Object.freeze(UnpublishArticleV1);
Object.freeze(UnpublishArticleV1.prototype);
