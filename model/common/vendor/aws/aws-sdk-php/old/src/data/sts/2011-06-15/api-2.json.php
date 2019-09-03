<?php
// This file was auto-generated from sdk-root/src/data/sts/2011-06-15/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2011-06-15', 'endpointPrefix' => 'sts', 'globalEndpoint' => 'sts.amazonaws.com', 'protocol' => 'query', 'serviceAbbreviation' => 'AWS STS', 'serviceFullName' => 'AWS Security Token Service', 'serviceId' => 'STS', 'signatureVersion' => 'v4', 'uid' => 'sts-2011-06-15', 'xmlNamespace' => 'https://sts.amazonaws.com/doc/2011-06-15/', ], 'operations' => [ 'AssumeRole' => [ 'name' => 'AssumeRole', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssumeRoleRequest', ], 'output' => [ 'shape' => 'AssumeRoleResponse', 'resultWrapper' => 'AssumeRoleResult', ], 'errors' => [ [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'PackedPolicyTooLargeException', ], [ 'shape' => 'RegionDisabledException', ], ], ], 'AssumeRoleWithSAML' => [ 'name' => 'AssumeRoleWithSAML', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssumeRoleWithSAMLRequest', ], 'output' => [ 'shape' => 'AssumeRoleWithSAMLResponse', 'resultWrapper' => 'AssumeRoleWithSAMLResult', ], 'errors' => [ [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'PackedPolicyTooLargeException', ], [ 'shape' => 'IDPRejectedClaimException', ], [ 'shape' => 'InvalidIdentityTokenException', ], [ 'shape' => 'ExpiredTokenException', ], [ 'shape' => 'RegionDisabledException', ], ], ], 'AssumeRoleWithWebIdentity' => [ 'name' => 'AssumeRoleWithWebIdentity', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssumeRoleWithWebIdentityRequest', ], 'output' => [ 'shape' => 'AssumeRoleWithWebIdentityResponse', 'resultWrapper' => 'AssumeRoleWithWebIdentityResult', ], 'errors' => [ [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'PackedPolicyTooLargeException', ], [ 'shape' => 'IDPRejectedClaimException', ], [ 'shape' => 'IDPCommunicationErrorException', ], [ 'shape' => 'InvalidIdentityTokenException', ], [ 'shape' => 'ExpiredTokenException', ], [ 'shape' => 'RegionDisabledException', ], ], ], 'DecodeAuthorizationMessage' => [ 'name' => 'DecodeAuthorizationMessage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DecodeAuthorizationMessageRequest', ], 'output' => [ 'shape' => 'DecodeAuthorizationMessageResponse', 'resultWrapper' => 'DecodeAuthorizationMessageResult', ], 'errors' => [ [ 'shape' => 'InvalidAuthorizationMessageException', ], ], ], 'GetCallerIdentity' => [ 'name' => 'GetCallerIdentity', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetCallerIdentityRequest', ], 'output' => [ 'shape' => 'GetCallerIdentityResponse', 'resultWrapper' => 'GetCallerIdentityResult', ], ], 'GetFederationToken' => [ 'name' => 'GetFederationToken', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetFederationTokenRequest', ], 'output' => [ 'shape' => 'GetFederationTokenResponse', 'resultWrapper' => 'GetFederationTokenResult', ], 'errors' => [ [ 'shape' => 'MalformedPolicyDocumentException', ], [ 'shape' => 'PackedPolicyTooLargeException', ], [ 'shape' => 'RegionDisabledException', ], ], ], 'GetSessionToken' => [ 'name' => 'GetSessionToken', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetSessionTokenRequest', ], 'output' => [ 'shape' => 'GetSessionTokenResponse', 'resultWrapper' => 'GetSessionTokenResult', ], 'errors' => [ [ 'shape' => 'RegionDisabledException', ], ], ], ], 'shapes' => [ 'AssumeRoleRequest' => [ 'type' => 'structure', 'required' => [ 'RoleArn', 'RoleSessionName', ], 'members' => [ 'RoleArn' => [ 'shape' => 'arnType', ], 'RoleSessionName' => [ 'shape' => 'roleSessionNameType', ], 'Policy' => [ 'shape' => 'sessionPolicyDocumentType', ], 'DurationSeconds' => [ 'shape' => 'roleDurationSecondsType', ], 'ExternalId' => [ 'shape' => 'externalIdType', ], 'SerialNumber' => [ 'shape' => 'serialNumberType', ], 'TokenCode' => [ 'shape' => 'tokenCodeType', ], ], ], 'AssumeRoleResponse' => [ 'type' => 'structure', 'members' => [ 'Credentials' => [ 'shape' => 'Credentials', ], 'AssumedRoleUser' => [ 'shape' => 'AssumedRoleUser', ], 'PackedPolicySize' => [ 'shape' => 'nonNegativeIntegerType', ], ], ], 'AssumeRoleWithSAMLRequest' => [ 'type' => 'structure', 'required' => [ 'RoleArn', 'PrincipalArn', 'SAMLAssertion', ], 'members' => [ 'RoleArn' => [ 'shape' => 'arnType', ], 'PrincipalArn' => [ 'shape' => 'arnType', ], 'SAMLAssertion' => [ 'shape' => 'SAMLAssertionType', ], 'Policy' => [ 'shape' => 'sessionPolicyDocumentType', ], 'DurationSeconds' => [ 'shape' => 'roleDurationSecondsType', ], ], ], 'AssumeRoleWithSAMLResponse' => [ 'type' => 'structure', 'members' => [ 'Credentials' => [ 'shape' => 'Credentials', ], 'AssumedRoleUser' => [ 'shape' => 'AssumedRoleUser', ], 'PackedPolicySize' => [ 'shape' => 'nonNegativeIntegerType', ], 'Subject' => [ 'shape' => 'Subject', ], 'SubjectType' => [ 'shape' => 'SubjectType', ], 'Issuer' => [ 'shape' => 'Issuer', ], 'Audience' => [ 'shape' => 'Audience', ], 'NameQualifier' => [ 'shape' => 'NameQualifier', ], ], ], 'AssumeRoleWithWebIdentityRequest' => [ 'type' => 'structure', 'required' => [ 'RoleArn', 'RoleSessionName', 'WebIdentityToken', ], 'members' => [ 'RoleArn' => [ 'shape' => 'arnType', ], 'RoleSessionName' => [ 'shape' => 'roleSessionNameType', ], 'WebIdentityToken' => [ 'shape' => 'clientTokenType', ], 'ProviderId' => [ 'shape' => 'urlType', ], 'Policy' => [ 'shape' => 'sessionPolicyDocumentType', ], 'DurationSeconds' => [ 'shape' => 'roleDurationSecondsType', ], ], ], 'AssumeRoleWithWebIdentityResponse' => [ 'type' => 'structure', 'members' => [ 'Credentials' => [ 'shape' => 'Credentials', ], 'SubjectFromWebIdentityToken' => [ 'shape' => 'webIdentitySubjectType', ], 'AssumedRoleUser' => [ 'shape' => 'AssumedRoleUser', ], 'PackedPolicySize' => [ 'shape' => 'nonNegativeIntegerType', ], 'Provider' => [ 'shape' => 'Issuer', ], 'Audience' => [ 'shape' => 'Audience', ], ], ], 'AssumedRoleUser' => [ 'type' => 'structure', 'required' => [ 'AssumedRoleId', 'Arn', ], 'members' => [ 'AssumedRoleId' => [ 'shape' => 'assumedRoleIdType', ], 'Arn' => [ 'shape' => 'arnType', ], ], ], 'Audience' => [ 'type' => 'string', ], 'Credentials' => [ 'type' => 'structure', 'required' => [ 'AccessKeyId', 'SecretAccessKey', 'SessionToken', 'Expiration', ], 'members' => [ 'AccessKeyId' => [ 'shape' => 'accessKeyIdType', ], 'SecretAccessKey' => [ 'shape' => 'accessKeySecretType', ], 'SessionToken' => [ 'shape' => 'tokenType', ], 'Expiration' => [ 'shape' => 'dateType', ], ], ], 'DecodeAuthorizationMessageRequest' => [ 'type' => 'structure', 'required' => [ 'EncodedMessage', ], 'members' => [ 'EncodedMessage' => [ 'shape' => 'encodedMessageType', ], ], ], 'DecodeAuthorizationMessageResponse' => [ 'type' => 'structure', 'members' => [ 'DecodedMessage' => [ 'shape' => 'decodedMessageType', ], ], ], 'ExpiredTokenException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'expiredIdentityTokenMessage', ], ], 'error' => [ 'code' => 'ExpiredTokenException', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'FederatedUser' => [ 'type' => 'structure', 'required' => [ 'FederatedUserId', 'Arn', ], 'members' => [ 'FederatedUserId' => [ 'shape' => 'federatedIdType', ], 'Arn' => [ 'shape' => 'arnType', ], ], ], 'GetCallerIdentityRequest' => [ 'type' => 'structure', 'members' => [], ], 'GetCallerIdentityResponse' => [ 'type' => 'structure', 'members' => [ 'UserId' => [ 'shape' => 'userIdType', ], 'Account' => [ 'shape' => 'accountType', ], 'Arn' => [ 'shape' => 'arnType', ], ], ], 'GetFederationTokenRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'userNameType', ], 'Policy' => [ 'shape' => 'sessionPolicyDocumentType', ], 'DurationSeconds' => [ 'shape' => 'durationSecondsType', ], ], ], 'GetFederationTokenResponse' => [ 'type' => 'structure', 'members' => [ 'Credentials' => [ 'shape' => 'Credentials', ], 'FederatedUser' => [ 'shape' => 'FederatedUser', ], 'PackedPolicySize' => [ 'shape' => 'nonNegativeIntegerType', ], ], ], 'GetSessionTokenRequest' => [ 'type' => 'structure', 'members' => [ 'DurationSeconds' => [ 'shape' => 'durationSecondsType', ], 'SerialNumber' => [ 'shape' => 'serialNumberType', ], 'TokenCode' => [ 'shape' => 'tokenCodeType', ], ], ], 'GetSessionTokenResponse' => [ 'type' => 'structure', 'members' => [ 'Credentials' => [ 'shape' => 'Credentials', ], ], ], 'IDPCommunicationErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'idpCommunicationErrorMessage', ], ], 'error' => [ 'code' => 'IDPCommunicationError', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'IDPRejectedClaimException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'idpRejectedClaimMessage', ], ], 'error' => [ 'code' => 'IDPRejectedClaim', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'InvalidAuthorizationMessageException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'invalidAuthorizationMessage', ], ], 'error' => [ 'code' => 'InvalidAuthorizationMessageException', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidIdentityTokenException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'invalidIdentityTokenMessage', ], ], 'error' => [ 'code' => 'InvalidIdentityToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Issuer' => [ 'type' => 'string', ], 'MalformedPolicyDocumentException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'malformedPolicyDocumentMessage', ], ], 'error' => [ 'code' => 'MalformedPolicyDocument', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'NameQualifier' => [ 'type' => 'string', ], 'PackedPolicyTooLargeException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'packedPolicyTooLargeMessage', ], ], 'error' => [ 'code' => 'PackedPolicyTooLarge', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'RegionDisabledException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'regionDisabledMessage', ], ], 'error' => [ 'code' => 'RegionDisabledException', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'SAMLAssertionType' => [ 'type' => 'string', 'max' => 100000, 'min' => 4, ], 'Subject' => [ 'type' => 'string', ], 'SubjectType' => [ 'type' => 'string', ], 'accessKeyIdType' => [ 'type' => 'string', 'max' => 128, 'min' => 16, 'pattern' => '[\\w]*', ], 'accessKeySecretType' => [ 'type' => 'string', ], 'accountType' => [ 'type' => 'string', ], 'arnType' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u007E\\u0085\\u00A0-\\uD7FF\\uE000-\\uFFFD\\u10000-\\u10FFFF]+', ], 'assumedRoleIdType' => [ 'type' => 'string', 'max' => 193, 'min' => 2, 'pattern' => '[\\w+=,.@:-]*', ], 'clientTokenType' => [ 'type' => 'string', 'max' => 2048, 'min' => 4, ], 'dateType' => [ 'type' => 'timestamp', ], 'decodedMessageType' => [ 'type' => 'string', ], 'durationSecondsType' => [ 'type' => 'integer', 'max' => 129600, 'min' => 900, ], 'encodedMessageType' => [ 'type' => 'string', 'max' => 10240, 'min' => 1, ], 'expiredIdentityTokenMessage' => [ 'type' => 'string', ], 'externalIdType' => [ 'type' => 'string', 'max' => 1224, 'min' => 2, 'pattern' => '[\\w+=,.@:\\/-]*', ], 'federatedIdType' => [ 'type' => 'string', 'max' => 193, 'min' => 2, 'pattern' => '[\\w+=,.@\\:-]*', ], 'idpCommunicationErrorMessage' => [ 'type' => 'string', ], 'idpRejectedClaimMessage' => [ 'type' => 'string', ], 'invalidAuthorizationMessage' => [ 'type' => 'string', ], 'invalidIdentityTokenMessage' => [ 'type' => 'string', ], 'malformedPolicyDocumentMessage' => [ 'type' => 'string', ], 'nonNegativeIntegerType' => [ 'type' => 'integer', 'min' => 0, ], 'packedPolicyTooLargeMessage' => [ 'type' => 'string', ], 'regionDisabledMessage' => [ 'type' => 'string', ], 'roleDurationSecondsType' => [ 'type' => 'integer', 'max' => 3600, 'min' => 900, ], 'roleSessionNameType' => [ 'type' => 'string', 'max' => 64, 'min' => 2, 'pattern' => '[\\w+=,.@-]*', ], 'serialNumberType' => [ 'type' => 'string', 'max' => 256, 'min' => 9, 'pattern' => '[\\w+=/:,.@-]*', ], 'sessionPolicyDocumentType' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+', ], 'tokenCodeType' => [ 'type' => 'string', 'max' => 6, 'min' => 6, 'pattern' => '[\\d]*', ], 'tokenType' => [ 'type' => 'string', ], 'urlType' => [ 'type' => 'string', 'max' => 2048, 'min' => 4, ], 'userIdType' => [ 'type' => 'string', ], 'userNameType' => [ 'type' => 'string', 'max' => 32, 'min' => 2, 'pattern' => '[\\w+=,.@-]*', ], 'webIdentitySubjectType' => [ 'type' => 'string', 'max' => 255, 'min' => 6, ], ],];
