// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/poll-block/1-0-0.json#
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Mixin';
import TrinitiCanvasBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Trait';
import TrinitiCanvasNodeRefBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/node-ref-block/NodeRefBlockV1Mixin';

export default class PollBlockV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:block:poll-block:1-0-0', PollBlockV1,
      [],
      [
        TrinitiCanvasBlockV1Mixin.create(),
        TrinitiCanvasNodeRefBlockV1Mixin.create(),
      ],
    );
  }

  /**
   * @returns {Object}
   */
  getUriTemplateVars() {
    return {
      etag: this.get('etag'),
      node_ref: `${this.get('node_ref', '')}`,
    };
  }
}

TrinitiCanvasBlockV1Trait(PollBlockV1);
MessageResolver.register('acme:canvas:block:poll-block', PollBlockV1);
Object.freeze(PollBlockV1);
Object.freeze(PollBlockV1.prototype);
