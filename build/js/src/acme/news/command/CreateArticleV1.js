// @link http://acme-schemas.triniti.io/json-schema/acme/news/command/create-article/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiNewsCreateArticleV1Mixin from '@triniti/schemas/triniti/news/mixin/create-article/CreateArticleV1Mixin';

export default class CreateArticleV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:news:command:create-article:1-0-0', CreateArticleV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
        TrinitiNewsCreateArticleV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreateArticleV1);
MessageResolver.register('acme:news:command:create-article', CreateArticleV1);
Object.freeze(CreateArticleV1);
Object.freeze(CreateArticleV1.prototype);