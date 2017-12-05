// @link http://acme-schemas.gdbots.io/json-schema/acme/ovp/event/video-scheduled/1-0-0.json#
import GdbotsAnalyticsTrackedMessageV1Mixin from '@gdbots/schemas/gdbots/analytics/mixin/tracked-message/TrackedMessageV1Mixin';
import GdbotsEnrichmentsIpToGeoV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/ip-to-geo/IpToGeoV1Mixin';
import GdbotsEnrichmentsTimePartingV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/time-parting/TimePartingV1Mixin';
import GdbotsEnrichmentsTimeSamplingV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/time-sampling/TimeSamplingV1Mixin';
import GdbotsEnrichmentsUaParserV1Mixin from '@gdbots/schemas/gdbots/enrichments/mixin/ua-parser/UaParserV1Mixin';
import GdbotsNcrNodeScheduledV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node-scheduled/NodeScheduledV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiOvpVideoScheduledV1Mixin from '@triniti/schemas/triniti/ovp/mixin/video-scheduled/VideoScheduledV1Mixin';

export default class VideoScheduledV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:acme:ovp:event:video-scheduled:1-0-0', VideoScheduledV1,
      [],
      [
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsNcrNodeScheduledV1Mixin.create(),
        TrinitiOvpVideoScheduledV1Mixin.create(),
        GdbotsAnalyticsTrackedMessageV1Mixin.create(),
        GdbotsEnrichmentsIpToGeoV1Mixin.create(),
        GdbotsEnrichmentsTimePartingV1Mixin.create(),
        GdbotsEnrichmentsTimeSamplingV1Mixin.create(),
        GdbotsEnrichmentsUaParserV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(VideoScheduledV1);
MessageResolver.register('acme:ovp:event:video-scheduled', VideoScheduledV1);
Object.freeze(VideoScheduledV1);
Object.freeze(VideoScheduledV1.prototype);
