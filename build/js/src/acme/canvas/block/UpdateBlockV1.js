// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/update-block/1-0-0.json#
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Mixin';
import TrinitiCanvasBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Trait';
import TrinitiCanvasUpdateBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/update-block/UpdateBlockV1Mixin';
import TrinitiCanvasUpdateBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/update-block/UpdateBlockV1Trait';

export default class UpdateBlockV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:block:update-block:1-0-0', UpdateBlockV1,
      [],
      [
        TrinitiCanvasBlockV1Mixin.create(),
        TrinitiCanvasUpdateBlockV1Mixin.create(),
      ],
    );
  }
}

TrinitiCanvasBlockV1Trait(UpdateBlockV1);
TrinitiCanvasUpdateBlockV1Trait(UpdateBlockV1);
MessageResolver.register('acme:canvas:block:update-block', UpdateBlockV1);
Object.freeze(UpdateBlockV1);
Object.freeze(UpdateBlockV1.prototype);
