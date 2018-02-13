// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/create-category/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyCreateCategoryV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/create-category/CreateCategoryV1Mixin';

export default class CreateCategoryV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:command:create-category:1-0-0', CreateCategoryV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
        TrinitiTaxonomyCreateCategoryV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreateCategoryV1);
MessageResolver.register('acme:taxonomy:command:create-category', CreateCategoryV1);
Object.freeze(CreateCategoryV1);
Object.freeze(CreateCategoryV1.prototype);
