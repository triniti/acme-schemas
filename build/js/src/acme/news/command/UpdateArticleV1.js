// @link http://acme-schemas.gdbots.io/json-schema/acme/news/command/update-article/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsUpdateArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/update-article/UpdateArticleV1Mixin';

export default class UpdateArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:update-article:1-0-0', UpdateArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
        TrinitiNewsUpdateArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdateArticleV1);
MessageResolver.register('acme:news:command:update-article', UpdateArticleV1);
Object.freeze(UpdateArticleV1);
Object.freeze(UpdateArticleV1.prototype);
