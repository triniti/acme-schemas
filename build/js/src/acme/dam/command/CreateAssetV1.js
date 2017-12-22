// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/create-asset/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamCreateAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/create-asset/CreateAssetV1Mixin';

export default class CreateAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:create-asset:1-0-0', CreateAssetV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
        TrinitiDamCreateAssetV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreateAssetV1);
MessageResolver.register('acme:dam:command:create-asset', CreateAssetV1);
Object.freeze(CreateAssetV1);
Object.freeze(CreateAssetV1.prototype);
