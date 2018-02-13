// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/category-deleted/1-0-0.json#
import GdbotsNcrNodeDeletedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-deleted/NodeDeletedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyCategoryDeletedV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/category-deleted/CategoryDeletedV1Mixin';

export default class CategoryDeletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:event:category-deleted:1-0-0', CategoryDeletedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeDeletedV1Mixin.create(),
        TrinitiTaxonomyCategoryDeletedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(CategoryDeletedV1);
MessageResolver.register('acme:taxonomy:event:category-deleted', CategoryDeletedV1);
Object.freeze(CategoryDeletedV1);
Object.freeze(CategoryDeletedV1.prototype);
