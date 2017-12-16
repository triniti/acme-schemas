// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/iframe-block/1-0-0.json#
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Mixin';
import TrinitiCanvasBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Trait';
import TrinitiCanvasIframeBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/iframe-block/IframeBlockV1Mixin';

export default class IframeBlockV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:block:iframe-block:1-0-0', IframeBlockV1,
      [],
      [
        TrinitiCanvasBlockV1Mixin.create(),
        TrinitiCanvasIframeBlockV1Mixin.create(),
      ],
    );
  }
}

TrinitiCanvasBlockV1Trait(IframeBlockV1);
MessageResolver.register('acme:canvas:block:iframe-block', IframeBlockV1);
Object.freeze(IframeBlockV1);
Object.freeze(IframeBlockV1.prototype);
