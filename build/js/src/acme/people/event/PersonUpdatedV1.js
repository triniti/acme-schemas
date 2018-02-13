// @link http://acme-schemas.triniti.io/json-schema/acme/people/event/person-updated/1-0-0.json#
import GdbotsNcrNodeUpdatedV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-updated/NodeUpdatedV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPeoplePersonUpdatedV1Mixin from '@triniti/schemas/triniti/people/mixin/person-updated/PersonUpdatedV1Mixin';

export default class PersonUpdatedV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:people:event:person-updated:1-0-0', PersonUpdatedV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeUpdatedV1Mixin.create(),
        TrinitiPeoplePersonUpdatedV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(PersonUpdatedV1);
MessageResolver.register('acme:people:event:person-updated', PersonUpdatedV1);
Object.freeze(PersonUpdatedV1);
Object.freeze(PersonUpdatedV1.prototype);
