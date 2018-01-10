// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/pull-quote-block/1-0-0.json#
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Mixin';
import TrinitiCanvasBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Trait';
import TrinitiCanvasPullQuoteBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/pull-quote-block/PullQuoteBlockV1Mixin';
import TrinitiCanvasPullQuoteBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/pull-quote-block/PullQuoteBlockV1Trait';

export default class PullQuoteBlockV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:block:pull-quote-block:1-0-0', PullQuoteBlockV1,
      [],
      [
        TrinitiCanvasBlockV1Mixin.create(),
        TrinitiCanvasPullQuoteBlockV1Mixin.create(),
      ],
    );
  }
}

TrinitiCanvasBlockV1Trait(PullQuoteBlockV1);
TrinitiCanvasPullQuoteBlockV1Trait(PullQuoteBlockV1);
MessageResolver.register('acme:canvas:block:pull-quote-block', PullQuoteBlockV1);
Object.freeze(PullQuoteBlockV1);
Object.freeze(PullQuoteBlockV1.prototype);
