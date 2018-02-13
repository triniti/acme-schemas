// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/category-renamed/1-0-0.json#
import GdbotsNcrNodeRenamedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-renamed/NodeRenamedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyCategoryRenamedV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/category-renamed/CategoryRenamedV1Mixin';

export default class CategoryRenamedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:event:category-renamed:1-0-0', CategoryRenamedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeRenamedV1Mixin.create(),
        TrinitiTaxonomyCategoryRenamedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(CategoryRenamedV1);
MessageResolver.register('acme:taxonomy:event:category-renamed', CategoryRenamedV1);
Object.freeze(CategoryRenamedV1);
Object.freeze(CategoryRenamedV1.prototype);
