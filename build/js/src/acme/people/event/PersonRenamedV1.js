// @link http://acme-schemas.triniti.io/json-schema/acme/people/event/person-renamed/1-0-0.json#
import GdbotsNcrNodeRenamedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-renamed/NodeRenamedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPeoplePersonRenamedV1Mixin from '@triniti/schemas/triniti/people/mixin/person-renamed/PersonRenamedV1Mixin';

export default class PersonRenamedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:people:event:person-renamed:1-0-0', PersonRenamedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeRenamedV1Mixin.create(),
        TrinitiPeoplePersonRenamedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PersonRenamedV1);
MessageResolver.register('acme:people:event:person-renamed', PersonRenamedV1);
Object.freeze(PersonRenamedV1);
Object.freeze(PersonRenamedV1.prototype);
