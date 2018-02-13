// @link http://acme-schemas.triniti.io/json-schema/acme/people/command/create-person/1-0-0.json#
import GdbotsNcrCreateNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/create-node/CreateNodeV1Mixin';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPeopleCreatePersonV1Mixin from '@triniti/schemas/triniti/people/mixin/create-person/CreatePersonV1Mixin';

export default class CreatePersonV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:people:command:create-person:1-0-0', CreatePersonV1,
      [],
      [
        GdbotsPbjxCommandV1Mixin.create(),
        GdbotsNcrCreateNodeV1Mixin.create(),
        TrinitiPeopleCreatePersonV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(CreatePersonV1);
MessageResolver.register('acme:people:command:create-person', CreatePersonV1);
Object.freeze(CreatePersonV1);
Object.freeze(CreatePersonV1.prototype);
