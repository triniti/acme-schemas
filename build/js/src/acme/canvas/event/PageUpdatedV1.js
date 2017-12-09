// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-updated/1-0-0.json#
import GdbotsNcrNodeUpdatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-updated/NodeUpdatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasPageUpdatedV1Mixin from '@triniti/schemas/triniti/canvas/mixin/page-updated/PageUpdatedV1Mixin';

export default class PageUpdatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:event:page-updated:1-0-0', PageUpdatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUpdatedV1Mixin.create(),
        TrinitiCanvasPageUpdatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PageUpdatedV1);
MessageResolver.register('acme:canvas:event:page-updated', PageUpdatedV1);
Object.freeze(PageUpdatedV1);
Object.freeze(PageUpdatedV1.prototype);
