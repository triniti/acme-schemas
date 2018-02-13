// @link http://acme-schemas.triniti.io/json-schema/acme/people/request/get-person-response/1-0-0.json#
import GdbotsNcrGetNodeResponseV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/get-node-response/GetNodeResponseV1Mixin';
import GdbotsPbjxResponseV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Mixin';
import GdbotsPbjxResponseV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/response/ResponseV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiPeopleGetPersonResponseV1Mixin from '@triniti/schemas/triniti/people/mixin/get-person-response/GetPersonResponseV1Mixin';

export default class GetPersonResponseV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:people:request:get-person-response:1-0-0', GetPersonResponseV1,
      [],
      [
        GdbotsPbjxResponseV1Mixin.create(),
        GdbotsNcrGetNodeResponseV1Mixin.create(),
        TrinitiPeopleGetPersonResponseV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxResponseV1Trait(GetPersonResponseV1);
MessageResolver.register('acme:people:request:get-person-response', GetPersonResponseV1);
Object.freeze(GetPersonResponseV1);
Object.freeze(GetPersonResponseV1.prototype);
