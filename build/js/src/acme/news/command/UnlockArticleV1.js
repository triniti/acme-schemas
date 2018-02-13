// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/unlock-article/1-0-0.json#
import GdbotsNcrUnlockNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unlock-node/UnlockNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsUnlockArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/unlock-article/UnlockArticleV1Mixin';

export default class UnlockArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:unlock-article:1-0-0', UnlockArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnlockNodeV1Mixin.create(),
        TrinitiNewsUnlockArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnlockArticleV1);
MessageResolver.register('acme:news:command:unlock-article', UnlockArticleV1);
Object.freeze(UnlockArticleV1);
Object.freeze(UnlockArticleV1.prototype);
