// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-marked-as-pending/1-0-0.json#
import GdbotsNcrNodeMarkedAsPendingV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-pending/NodeMarkedAsPendingV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssetMarkedAsPendingV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset-marked-as-pending/AssetMarkedAsPendingV1Mixin';

export default class AssetMarkedAsPendingV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:event:asset-marked-as-pending:1-0-0', AssetMarkedAsPendingV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsPendingV1Mixin.create(),
        TrinitiDamAssetMarkedAsPendingV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(AssetMarkedAsPendingV1);
MessageResolver.register('acme:dam:event:asset-marked-as-pending', AssetMarkedAsPendingV1);
Object.freeze(AssetMarkedAsPendingV1);
Object.freeze(AssetMarkedAsPendingV1.prototype);
