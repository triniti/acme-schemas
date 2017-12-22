// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/publish-asset/1-0-0.json#
import GdbotsNcrPublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publish-node/PublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamPublishAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/publish-asset/PublishAssetV1Mixin';

export default class PublishAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:publish-asset:1-0-0', PublishAssetV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrPublishNodeV1Mixin.create(),
        TrinitiDamPublishAssetV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(PublishAssetV1);
MessageResolver.register('acme:dam:command:publish-asset', PublishAssetV1);
Object.freeze(PublishAssetV1);
Object.freeze(PublishAssetV1.prototype);
