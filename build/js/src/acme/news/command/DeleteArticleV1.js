// @link http://acme-schemas.gdbots.io/json-schema/acme/news/command/delete-article/1-0-0.json#
import GdbotsNcrDeleteNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/delete-node/DeleteNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsDeleteArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/delete-article/DeleteArticleV1Mixin';

export default class DeleteArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:delete-article:1-0-0', DeleteArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrDeleteNodeV1Mixin.create(),
        TrinitiNewsDeleteArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DeleteArticleV1);
MessageResolver.register('acme:news:command:delete-article', DeleteArticleV1);
Object.freeze(DeleteArticleV1);
Object.freeze(DeleteArticleV1.prototype);
