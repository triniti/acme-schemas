import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';
import NodeRef from '@gdbots/schemas/gdbots/ncr/NodeRef';

export default class PollId extends UuidIdentifier {
  /**
   * @returns {NodeRef}
   */
  toNodeRef() {
    return NodeRef.fromString(`acme:poll:${this.value}`);
  }
}
