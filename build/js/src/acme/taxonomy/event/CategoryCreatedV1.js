// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/event/category-created/1-0-0.json#
import GdbotsNcrNodeCreatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-created/NodeCreatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyCategoryCreatedV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/category-created/CategoryCreatedV1Mixin';

export default class CategoryCreatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:event:category-created:1-0-0', CategoryCreatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeCreatedV1Mixin.create(),
        TrinitiTaxonomyCategoryCreatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(CategoryCreatedV1);
MessageResolver.register('acme:taxonomy:event:category-created', CategoryCreatedV1);
Object.freeze(CategoryCreatedV1);
Object.freeze(CategoryCreatedV1.prototype);
