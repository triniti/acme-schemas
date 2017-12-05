// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/command/publish-video/1-0-0.json#
import GdbotsNcrPublishNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/publish-node/PublishNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpPublishVideoV1Mixin from '@triniti/schemas/triniti/ovp/mixin/publish-video/PublishVideoV1Mixin';

export default class PublishVideoV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:command:publish-video:1-0-0', PublishVideoV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrPublishNodeV1Mixin.create(),
        TrinitiOvpPublishVideoV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(PublishVideoV1);
MessageResolver.register('acme:ovp:command:publish-video', PublishVideoV1);
Object.freeze(PublishVideoV1);
Object.freeze(PublishVideoV1.prototype);
