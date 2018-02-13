// @link http://acme-schemas.triniti.io/json-schema/acme/people/event/person-deleted/1-0-0.json#
import GdbotsNcrNodeDeletedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-deleted/NodeDeletedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPeoplePersonDeletedV1Mixin from '@triniti/schemas/triniti/people/mixin/person-deleted/PersonDeletedV1Mixin';

export default class PersonDeletedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:people:event:person-deleted:1-0-0', PersonDeletedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeDeletedV1Mixin.create(),
        TrinitiPeoplePersonDeletedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PersonDeletedV1);
MessageResolver.register('acme:people:event:person-deleted', PersonDeletedV1);
Object.freeze(PersonDeletedV1);
Object.freeze(PersonDeletedV1.prototype);
