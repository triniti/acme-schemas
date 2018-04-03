// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/disassociate-assets/1-0-0.json#
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamDisassociateAssetsV1Mixin from '@triniti/schemas/triniti/dam/mixin/disassociate-assets/DisassociateAssetsV1Mixin';

export default class DisassociateAssetsV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:disassociate-assets:1-0-0', DisassociateAssetsV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        TrinitiDamDisassociateAssetsV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(DisassociateAssetsV1);
MessageResolver.register('acme:dam:command:disassociate-assets', DisassociateAssetsV1);
Object.freeze(DisassociateAssetsV1);
Object.freeze(DisassociateAssetsV1.prototype);
