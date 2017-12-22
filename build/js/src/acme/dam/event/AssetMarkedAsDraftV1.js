// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-marked-as-draft/1-0-0.json#
import GdbotsNcrNodeMarkedAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-draft/NodeMarkedAsDraftV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssetMarkedAsDraftV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset-marked-as-draft/AssetMarkedAsDraftV1Mixin';

export default class AssetMarkedAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:event:asset-marked-as-draft:1-0-0', AssetMarkedAsDraftV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsDraftV1Mixin.create(),
        TrinitiDamAssetMarkedAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(AssetMarkedAsDraftV1);
MessageResolver.register('acme:dam:event:asset-marked-as-draft', AssetMarkedAsDraftV1);
Object.freeze(AssetMarkedAsDraftV1);
Object.freeze(AssetMarkedAsDraftV1.prototype);
