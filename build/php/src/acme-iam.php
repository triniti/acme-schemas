<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://acme-schemas.triniti.io/
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'acme:iam:command:create-app' => 'Acme\Schemas\Iam\Command\CreateAppV1',
    'acme:iam:command:create-role' => 'Acme\Schemas\Iam\Command\CreateRoleV1',
    'acme:iam:command:create-user' => 'Acme\Schemas\Iam\Command\CreateUserV1',
    'acme:iam:command:delete-app' => 'Acme\Schemas\Iam\Command\DeleteAppV1',
    'acme:iam:command:delete-role' => 'Acme\Schemas\Iam\Command\DeleteRoleV1',
    'acme:iam:command:delete-user' => 'Acme\Schemas\Iam\Command\DeleteUserV1',
    'acme:iam:command:grant-roles-to-app' => 'Acme\Schemas\Iam\Command\GrantRolesToAppV1',
    'acme:iam:command:grant-roles-to-user' => 'Acme\Schemas\Iam\Command\GrantRolesToUserV1',
    'acme:iam:command:patch-user' => 'Acme\Schemas\Iam\Command\PatchUserV1',
    'acme:iam:command:patch-users' => 'Acme\Schemas\Iam\Command\PatchUsersV1',
    'acme:iam:command:revoke-roles-from-app' => 'Acme\Schemas\Iam\Command\RevokeRolesFromAppV1',
    'acme:iam:command:revoke-roles-from-user' => 'Acme\Schemas\Iam\Command\RevokeRolesFromUserV1',
    'acme:iam:command:update-app' => 'Acme\Schemas\Iam\Command\UpdateAppV1',
    'acme:iam:command:update-role' => 'Acme\Schemas\Iam\Command\UpdateRoleV1',
    'acme:iam:command:update-user' => 'Acme\Schemas\Iam\Command\UpdateUserV1',
    'acme:iam:event:app-created' => 'Acme\Schemas\Iam\Event\AppCreatedV1',
    'acme:iam:event:app-deleted' => 'Acme\Schemas\Iam\Event\AppDeletedV1',
    'acme:iam:event:app-roles-granted' => 'Acme\Schemas\Iam\Event\AppRolesGrantedV1',
    'acme:iam:event:app-roles-revoked' => 'Acme\Schemas\Iam\Event\AppRolesRevokedV1',
    'acme:iam:event:app-updated' => 'Acme\Schemas\Iam\Event\AppUpdatedV1',
    'acme:iam:event:role-created' => 'Acme\Schemas\Iam\Event\RoleCreatedV1',
    'acme:iam:event:role-deleted' => 'Acme\Schemas\Iam\Event\RoleDeletedV1',
    'acme:iam:event:role-updated' => 'Acme\Schemas\Iam\Event\RoleUpdatedV1',
    'acme:iam:event:user-created' => 'Acme\Schemas\Iam\Event\UserCreatedV1',
    'acme:iam:event:user-deleted' => 'Acme\Schemas\Iam\Event\UserDeletedV1',
    'acme:iam:event:user-patched' => 'Acme\Schemas\Iam\Event\UserPatchedV1',
    'acme:iam:event:user-roles-granted' => 'Acme\Schemas\Iam\Event\UserRolesGrantedV1',
    'acme:iam:event:user-roles-revoked' => 'Acme\Schemas\Iam\Event\UserRolesRevokedV1',
    'acme:iam:event:user-updated' => 'Acme\Schemas\Iam\Event\UserUpdatedV1',
    'acme:iam:node:alexa-app' => 'Acme\Schemas\Iam\Node\AlexaAppV1',
    'acme:iam:node:android-app' => 'Acme\Schemas\Iam\Node\AndroidAppV1',
    'acme:iam:node:apple-news-app' => 'Acme\Schemas\Iam\Node\AppleNewsAppV1',
    'acme:iam:node:browser-app' => 'Acme\Schemas\Iam\Node\BrowserAppV1',
    'acme:iam:node:ios-app' => 'Acme\Schemas\Iam\Node\IosAppV1',
    'acme:iam:node:role' => 'Acme\Schemas\Iam\Node\RoleV1',
    'acme:iam:node:slack-app' => 'Acme\Schemas\Iam\Node\SlackAppV1',
    'acme:iam:node:sms-app' => 'Acme\Schemas\Iam\Node\SmsAppV1',
    'acme:iam:node:user' => 'Acme\Schemas\Iam\Node\UserV1',
    'acme:iam:request:get-all-apps-request' => 'Acme\Schemas\Iam\Request\GetAllAppsRequestV1',
    'acme:iam:request:get-all-apps-response' => 'Acme\Schemas\Iam\Request\GetAllAppsResponseV1',
    'acme:iam:request:get-app-history-request' => 'Acme\Schemas\Iam\Request\GetAppHistoryRequestV1',
    'acme:iam:request:get-app-history-response' => 'Acme\Schemas\Iam\Request\GetAppHistoryResponseV1',
    'acme:iam:request:get-app-request' => 'Acme\Schemas\Iam\Request\GetAppRequestV1',
    'acme:iam:request:get-app-response' => 'Acme\Schemas\Iam\Request\GetAppResponseV1',
    'acme:iam:request:get-role-history-request' => 'Acme\Schemas\Iam\Request\GetRoleHistoryRequestV1',
    'acme:iam:request:get-role-history-response' => 'Acme\Schemas\Iam\Request\GetRoleHistoryResponseV1',
    'acme:iam:request:get-role-request' => 'Acme\Schemas\Iam\Request\GetRoleRequestV1',
    'acme:iam:request:get-role-response' => 'Acme\Schemas\Iam\Request\GetRoleResponseV1',
    'acme:iam:request:get-user-history-request' => 'Acme\Schemas\Iam\Request\GetUserHistoryRequestV1',
    'acme:iam:request:get-user-history-response' => 'Acme\Schemas\Iam\Request\GetUserHistoryResponseV1',
    'acme:iam:request:get-user-request' => 'Acme\Schemas\Iam\Request\GetUserRequestV1',
    'acme:iam:request:get-user-response' => 'Acme\Schemas\Iam\Request\GetUserResponseV1',
    'acme:iam:request:list-all-roles-request' => 'Acme\Schemas\Iam\Request\ListAllRolesRequestV1',
    'acme:iam:request:list-all-roles-response' => 'Acme\Schemas\Iam\Request\ListAllRolesResponseV1',
    'acme:iam:request:search-users-request' => 'Acme\Schemas\Iam\Request\SearchUsersRequestV1',
    'acme:iam:request:search-users-response' => 'Acme\Schemas\Iam\Request\SearchUsersResponseV1',
]);
