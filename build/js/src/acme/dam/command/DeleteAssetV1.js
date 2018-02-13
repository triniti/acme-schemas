// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/delete-asset/1-0-0.json#
import GdbotsNcrDeleteNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/delete-node/DeleteNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamDeleteAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/delete-asset/DeleteAssetV1Mixin';

export default class DeleteAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:delete-asset:1-0-0', DeleteAssetV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrDeleteNodeV1Mixin.create(),
        TrinitiDamDeleteAssetV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DeleteAssetV1);
MessageResolver.register('acme:dam:command:delete-asset', DeleteAssetV1);
Object.freeze(DeleteAssetV1);
Object.freeze(DeleteAssetV1.prototype);
