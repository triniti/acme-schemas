// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-updated/1-0-0.json#
import GdbotsNcrNodeUpdatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-updated/NodeUpdatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssetUpdatedV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset-updated/AssetUpdatedV1Mixin';

export default class AssetUpdatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:event:asset-updated:1-0-0', AssetUpdatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUpdatedV1Mixin.create(),
        TrinitiDamAssetUpdatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(AssetUpdatedV1);
MessageResolver.register('acme:dam:event:asset-updated', AssetUpdatedV1);
Object.freeze(AssetUpdatedV1);
Object.freeze(AssetUpdatedV1.prototype);
