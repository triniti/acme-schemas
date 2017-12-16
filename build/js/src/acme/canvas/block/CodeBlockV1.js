// @link http://acme-schemas.triniti.io/json-schema/acme/canvas/block/code-block/1-0-0.json#
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiCanvasBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Mixin';
import TrinitiCanvasBlockV1Trait from '@triniti/schemas/triniti/canvas/mixin/block/BlockV1Trait';
import TrinitiCanvasCodeBlockV1Mixin from '@triniti/schemas/triniti/canvas/mixin/code-block/CodeBlockV1Mixin';

export default class CodeBlockV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:canvas:block:code-block:1-0-0', CodeBlockV1,
      [],
      [
        TrinitiCanvasBlockV1Mixin.create(),
        TrinitiCanvasCodeBlockV1Mixin.create(),
      ],
    );
  }
}

TrinitiCanvasBlockV1Trait(CodeBlockV1);
MessageResolver.register('acme:canvas:block:code-block', CodeBlockV1);
Object.freeze(CodeBlockV1);
Object.freeze(CodeBlockV1.prototype);
