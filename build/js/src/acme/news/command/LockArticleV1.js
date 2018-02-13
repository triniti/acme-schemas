// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/lock-article/1-0-0.json#
import GdbotsNcrLockNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/lock-node/LockNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsLockArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/lock-article/LockArticleV1Mixin';

export default class LockArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:lock-article:1-0-0', LockArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrLockNodeV1Mixin.create(),
        TrinitiNewsLockArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(LockArticleV1);
MessageResolver.register('acme:news:command:lock-article', LockArticleV1);
Object.freeze(LockArticleV1);
Object.freeze(LockArticleV1.prototype);
