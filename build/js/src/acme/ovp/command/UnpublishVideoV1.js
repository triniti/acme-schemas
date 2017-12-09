// @link http://acme-schemas.triniti.io/json-schema/acme/ovp/command/unpublish-video/1-0-0.json#
import GdbotsNcrUnpublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/unpublish-node/UnpublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpUnpublishVideoV1Mixin from '@triniti/schemas/triniti/ovp/mixin/unpublish-video/UnpublishVideoV1Mixin';

export default class UnpublishVideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:command:unpublish-video:1-0-0', UnpublishVideoV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUnpublishNodeV1Mixin.create(),
        TrinitiOvpUnpublishVideoV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UnpublishVideoV1);
MessageResolver.register('acme:ovp:command:unpublish-video', UnpublishVideoV1);
Object.freeze(UnpublishVideoV1);
Object.freeze(UnpublishVideoV1.prototype);
