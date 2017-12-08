// @link http://acme-schemas.gdbots.io/json-schema/acme/news/command/expire-article/1-0-0.json#
import GdbotsNcrExpireNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expire-node/ExpireNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsExpireArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/expire-article/ExpireArticleV1Mixin';

export default class ExpireArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:expire-article:1-0-0', ExpireArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrExpireNodeV1Mixin.create(),
        TrinitiNewsExpireArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(ExpireArticleV1);
MessageResolver.register('acme:news:command:expire-article', ExpireArticleV1);
Object.freeze(ExpireArticleV1);
Object.freeze(ExpireArticleV1.prototype);
