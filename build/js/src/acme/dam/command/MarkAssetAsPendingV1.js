// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/mark-asset-as-pending/1-0-0.json#
import GdbotsNcrMarkNodeAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-pending/MarkNodeAsPendingV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamMarkAssetAsPendingV1Mixin from '@triniti/schemas/triniti/dam/mixin/mark-asset-as-pending/MarkAssetAsPendingV1Mixin';

export default class MarkAssetAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:mark-asset-as-pending:1-0-0', MarkAssetAsPendingV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsPendingV1Mixin.create(),
        TrinitiDamMarkAssetAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkAssetAsPendingV1);
MessageResolver.register('acme:dam:command:mark-asset-as-pending', MarkAssetAsPendingV1);
Object.freeze(MarkAssetAsPendingV1);
Object.freeze(MarkAssetAsPendingV1.prototype);
