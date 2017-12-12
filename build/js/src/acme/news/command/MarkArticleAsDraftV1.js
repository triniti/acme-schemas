// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/mark-article-as-draft/1-0-0.json#
import GdbotsNcrMarkNodeAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-draft/MarkNodeAsDraftV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsMarkArticleAsDraftV1Mixin from '@triniti/schemas/triniti/news/mixin/mark-article-as-draft/MarkArticleAsDraftV1Mixin';

export default class MarkArticleAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:mark-article-as-draft:1-0-0', MarkArticleAsDraftV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsDraftV1Mixin.create(),
        TrinitiNewsMarkArticleAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkArticleAsDraftV1);
MessageResolver.register('acme:news:command:mark-article-as-draft', MarkArticleAsDraftV1);
Object.freeze(MarkArticleAsDraftV1);
Object.freeze(MarkArticleAsDraftV1.prototype);
