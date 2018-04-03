// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-disassociated/1-0-0.json#
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssetDisassociatedV1Mixin from '@triniti/schemas/triniti/dam/mixin/asset-disassociated/AssetDisassociatedV1Mixin';

export default class AssetDisassociatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:event:asset-disassociated:1-0-0', AssetDisassociatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        TrinitiDamAssetDisassociatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(AssetDisassociatedV1);
MessageResolver.register('acme:dam:event:asset-disassociated', AssetDisassociatedV1);
Object.freeze(AssetDisassociatedV1);
Object.freeze(AssetDisassociatedV1.prototype);
