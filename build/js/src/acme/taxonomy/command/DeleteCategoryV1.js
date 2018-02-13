// @link http://acme-schemas.triniti.io/json-schema/acme/taxonomy/command/delete-category/1-0-0.json#
import GdbotsNcrDeleteNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/delete-node/DeleteNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiTaxonomyDeleteCategoryV1Mixin from '@triniti/schemas/triniti/taxonomy/mixin/delete-category/DeleteCategoryV1Mixin';

export default class DeleteCategoryV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:taxonomy:command:delete-category:1-0-0', DeleteCategoryV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrDeleteNodeV1Mixin.create(),
        TrinitiTaxonomyDeleteCategoryV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DeleteCategoryV1);
MessageResolver.register('acme:taxonomy:command:delete-category', DeleteCategoryV1);
Object.freeze(DeleteCategoryV1);
Object.freeze(DeleteCategoryV1.prototype);
