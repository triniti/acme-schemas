// @link http://acme-schemas.triniti.io/json-schema/acme/dam/event/asset-created/1-0-0.json#
import GdbotsNcrNodeCreatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-created/NodeCreatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';

export default class AssetCreatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:event:asset-created:1-0-0', AssetCreatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeCreatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(AssetCreatedV1);
MessageResolver.register('acme:dam:event:asset-created', AssetCreatedV1);
Object.freeze(AssetCreatedV1);
Object.freeze(AssetCreatedV1.prototype);
