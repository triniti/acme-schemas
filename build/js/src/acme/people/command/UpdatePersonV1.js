// @link http://acme-schemas.triniti.io/json-schema/acme/people/command/update-person/1-0-0.json#
import GdbotsNcrUpdateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/update-node/UpdateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPeopleUpdatePersonV1Mixin from '@triniti/schemas/triniti/people/mixin/update-person/UpdatePersonV1Mixin';

export default class UpdatePersonV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:people:command:update-person:1-0-0', UpdatePersonV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrUpdateNodeV1Mixin.create(),
        TrinitiPeopleUpdatePersonV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(UpdatePersonV1);
MessageResolver.register('acme:people:command:update-person', UpdatePersonV1);
Object.freeze(UpdatePersonV1);
Object.freeze(UpdatePersonV1.prototype);
