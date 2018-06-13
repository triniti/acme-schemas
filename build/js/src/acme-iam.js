/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@triniti/acme-schemas/acme/iam/command/CreateAppV1';
import '@triniti/acme-schemas/acme/iam/command/CreateRoleV1';
import '@triniti/acme-schemas/acme/iam/command/CreateUserV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteAppV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteRoleV1';
import '@triniti/acme-schemas/acme/iam/command/DeleteUserV1';
import '@triniti/acme-schemas/acme/iam/command/GrantRolesToAppV1';
import '@triniti/acme-schemas/acme/iam/command/GrantRolesToUserV1';
import '@triniti/acme-schemas/acme/iam/command/PatchUserV1';
import '@triniti/acme-schemas/acme/iam/command/PatchUsersV1';
import '@triniti/acme-schemas/acme/iam/command/RevokeRolesFromAppV1';
import '@triniti/acme-schemas/acme/iam/command/RevokeRolesFromUserV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateAppV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateRoleV1';
import '@triniti/acme-schemas/acme/iam/command/UpdateUserV1';
import '@triniti/acme-schemas/acme/iam/event/AppCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/AppDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/AppRolesGrantedV1';
import '@triniti/acme-schemas/acme/iam/event/AppRolesRevokedV1';
import '@triniti/acme-schemas/acme/iam/event/AppUpdatedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/RoleUpdatedV1';
import '@triniti/acme-schemas/acme/iam/event/UserCreatedV1';
import '@triniti/acme-schemas/acme/iam/event/UserDeletedV1';
import '@triniti/acme-schemas/acme/iam/event/UserPatchedV1';
import '@triniti/acme-schemas/acme/iam/event/UserRolesGrantedV1';
import '@triniti/acme-schemas/acme/iam/event/UserRolesRevokedV1';
import '@triniti/acme-schemas/acme/iam/event/UserUpdatedV1';
import '@triniti/acme-schemas/acme/iam/node/AlexaAppV1';
import '@triniti/acme-schemas/acme/iam/node/AndroidAppV1';
import '@triniti/acme-schemas/acme/iam/node/AppleNewsAppV1';
import '@triniti/acme-schemas/acme/iam/node/BrowserAppV1';
import '@triniti/acme-schemas/acme/iam/node/IosAppV1';
import '@triniti/acme-schemas/acme/iam/node/RoleV1';
import '@triniti/acme-schemas/acme/iam/node/SlackAppV1';
import '@triniti/acme-schemas/acme/iam/node/SmsAppV1';
import '@triniti/acme-schemas/acme/iam/node/UserV1';
import '@triniti/acme-schemas/acme/iam/request/GetAllAppsRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetAllAppsResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetAppResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetRoleResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserHistoryRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserHistoryResponseV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserRequestV1';
import '@triniti/acme-schemas/acme/iam/request/GetUserResponseV1';
import '@triniti/acme-schemas/acme/iam/request/ListAllRolesRequestV1';
import '@triniti/acme-schemas/acme/iam/request/ListAllRolesResponseV1';
import '@triniti/acme-schemas/acme/iam/request/SearchUsersRequestV1';
import '@triniti/acme-schemas/acme/iam/request/SearchUsersResponseV1';

export default MessageResolver;
