// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/event/page-marked-as-draft/1-0-0.json#
import GdbotsNcrNodeMarkedAsDraftV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-marked-as-draft/NodeMarkedAsDraftV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasPageMarkedAsDraftV1Mixin from '@triniti/schemas/triniti/canvas/mixin/page-marked-as-draft/PageMarkedAsDraftV1Mixin';

export default class PageMarkedAsDraftV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:event:page-marked-as-draft:1-0-0', PageMarkedAsDraftV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeMarkedAsDraftV1Mixin.create(),
        TrinitiCanvasPageMarkedAsDraftV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PageMarkedAsDraftV1);
MessageResolver.register('acme:canvas:event:page-marked-as-draft', PageMarkedAsDraftV1);
Object.freeze(PageMarkedAsDraftV1);
Object.freeze(PageMarkedAsDraftV1.prototype);
