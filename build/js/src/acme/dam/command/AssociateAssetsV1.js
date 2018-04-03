// @link http://acme-schemas.triniti.io/json-schema/acme/dam/command/associate-assets/1-0-0.json#
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiDamAssociateAssetsV1Mixin from '@triniti/schemas/triniti/dam/mixin/associate-assets/AssociateAssetsV1Mixin';

export default class AssociateAssetsV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:dam:command:associate-assets:1-0-0', AssociateAssetsV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        TrinitiDamAssociateAssetsV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(AssociateAssetsV1);
MessageResolver.register('acme:dam:command:associate-assets', AssociateAssetsV1);
Object.freeze(AssociateAssetsV1);
Object.freeze(AssociateAssetsV1.prototype);
