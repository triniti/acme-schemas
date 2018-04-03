// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-associated/1-0-0.json#
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssetAssociatedV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset-associated/AssetAssociatedV1Mixin';

export default class AssetAssociatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:event:asset-associated:1-0-0', AssetAssociatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        TrinitiDamAssetAssociatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(AssetAssociatedV1);
MessageResolver.register('acme:dam:event:asset-associated', AssetAssociatedV1);
Object.freeze(AssetAssociatedV1);
Object.freeze(AssetAssociatedV1.prototype);
