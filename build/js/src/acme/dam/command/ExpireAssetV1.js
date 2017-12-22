// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/expire-asset/1-0-0.json#
import GdbotsNcrExpireNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/expire-node/ExpireNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamExpireAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/expire-asset/ExpireAssetV1Mixin';

export default class ExpireAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:expire-asset:1-0-0', ExpireAssetV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrExpireNodeV1Mixin.create(),
        TrinitiDamExpireAssetV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(ExpireAssetV1);
MessageResolver.register('acme:dam:command:expire-asset', ExpireAssetV1);
Object.freeze(ExpireAssetV1);
Object.freeze(ExpireAssetV1.prototype);
