// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/mark-asset-as-draft/1-0-0.json#
import GdbotsNcrMarkNodeAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/mark-node-as-draft/MarkNodeAsDraftV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamMarkAssetAsDraftV1Mixin from '@triniti/schemas/triniti/dam/mixin/mark-asset-as-draft/MarkAssetAsDraftV1Mixin';

export default class MarkAssetAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:mark-asset-as-draft:1-0-0', MarkAssetAsDraftV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrMarkNodeAsDraftV1Mixin.create(),
        TrinitiDamMarkAssetAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(MarkAssetAsDraftV1);
MessageResolver.register('acme:dam:command:mark-asset-as-draft', MarkAssetAsDraftV1);
Object.freeze(MarkAssetAsDraftV1);
Object.freeze(MarkAssetAsDraftV1.prototype);
