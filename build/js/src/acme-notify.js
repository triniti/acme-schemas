/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@triniti/acme-schemas/acme/notify/command/CreateNotificationV1';
import '@triniti/acme-schemas/acme/notify/command/DeleteNotificationV1';
import '@triniti/acme-schemas/acme/notify/command/SendNotificationV1';
import '@triniti/acme-schemas/acme/notify/command/UpdateNotificationV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationCreatedV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationDeletedV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationFailedV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationSentV1';
import '@triniti/acme-schemas/acme/notify/event/NotificationUpdatedV1';
import '@triniti/acme-schemas/acme/notify/node/AlexaNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/AndroidNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/AppleNewsNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/BrowserNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/IosNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/SlackNotificationV1';
import '@triniti/acme-schemas/acme/notify/node/SmsNotificationV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationHistoryRequestV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationHistoryResponseV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationRequestV1';
import '@triniti/acme-schemas/acme/notify/request/GetNotificationResponseV1';
import '@triniti/acme-schemas/acme/notify/request/SearchNotificationsRequestV1';
import '@triniti/acme-schemas/acme/notify/request/SearchNotificationsResponseV1';

export default MessageResolver;
