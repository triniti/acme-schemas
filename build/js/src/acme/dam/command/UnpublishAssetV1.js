// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/unpublish-asset/1-0-0.json#
import GdbotsNcrUnpublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unpublish-node/UnpublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamUnpublishAssetV1Mixin from '@triniti/schemas/triniti/dam/mixin/unpublish-asset/UnpublishAssetV1Mixin';

export default class UnpublishAssetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:unpublish-asset:1-0-0', UnpublishAssetV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnpublishNodeV1Mixin.create(),
        TrinitiDamUnpublishAssetV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnpublishAssetV1);
MessageResolver.register('acme:dam:command:unpublish-asset', UnpublishAssetV1);
Object.freeze(UnpublishAssetV1);
Object.freeze(UnpublishAssetV1.prototype);
