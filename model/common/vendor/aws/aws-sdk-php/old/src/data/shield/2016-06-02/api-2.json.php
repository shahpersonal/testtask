<?php
// This file was auto-generated from sdk-root/src/data/shield/2016-06-02/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-06-02', 'endpointPrefix' => 'shield', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'AWS Shield', 'serviceFullName' => 'AWS Shield', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSShield_20160616', 'uid' => 'shield-2016-06-02', ], 'operations' => [ 'CreateProtection' => [ 'name' => 'CreateProtection', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateProtectionRequest', ], 'output' => [ 'shape' => 'CreateProtectionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidOperationException', ], [ 'shape' => 'LimitsExceededException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'OptimisticLockException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'CreateSubscription' => [ 'name' => 'CreateSubscription', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateSubscriptionRequest', ], 'output' => [ 'shape' => 'CreateSubscriptionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], ], ], 'DeleteProtection' => [ 'name' => 'DeleteProtection', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteProtectionRequest', ], 'output' => [ 'shape' => 'DeleteProtectionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'OptimisticLockException', ], ], ], 'DeleteSubscription' => [ 'name' => 'DeleteSubscription', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteSubscriptionRequest', ], 'output' => [ 'shape' => 'DeleteSubscriptionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'LockedSubscriptionException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeAttack' => [ 'name' => 'DescribeAttack', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAttackRequest', ], 'output' => [ 'shape' => 'DescribeAttackResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], ], ], 'DescribeProtection' => [ 'name' => 'DescribeProtection', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeProtectionRequest', ], 'output' => [ 'shape' => 'DescribeProtectionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeSubscription' => [ 'name' => 'DescribeSubscription', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeSubscriptionRequest', ], 'output' => [ 'shape' => 'DescribeSubscriptionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSubscriptionState' => [ 'name' => 'GetSubscriptionState', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetSubscriptionStateRequest', ], 'output' => [ 'shape' => 'GetSubscriptionStateResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], ], ], 'ListAttacks' => [ 'name' => 'ListAttacks', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAttacksRequest', ], 'output' => [ 'shape' => 'ListAttacksResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidOperationException', ], ], ], 'ListProtections' => [ 'name' => 'ListProtections', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListProtectionsRequest', ], 'output' => [ 'shape' => 'ListProtectionsResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'AttackDetail' => [ 'type' => 'structure', 'members' => [ 'AttackId' => [ 'shape' => 'AttackId', ], 'ResourceArn' => [ 'shape' => 'ResourceArn', ], 'SubResources' => [ 'shape' => 'SubResourceSummaryList', ], 'StartTime' => [ 'shape' => 'AttackTimestamp', ], 'EndTime' => [ 'shape' => 'AttackTimestamp', ], 'AttackCounters' => [ 'shape' => 'SummarizedCounterList', ], 'AttackProperties' => [ 'shape' => 'AttackProperties', ], 'Mitigations' => [ 'shape' => 'MitigationList', ], ], ], 'AttackId' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9\\\\-]*', ], 'AttackLayer' => [ 'type' => 'string', 'enum' => [ 'NETWORK', 'APPLICATION', ], ], 'AttackProperties' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackProperty', ], ], 'AttackProperty' => [ 'type' => 'structure', 'members' => [ 'AttackLayer' => [ 'shape' => 'AttackLayer', ], 'AttackPropertyIdentifier' => [ 'shape' => 'AttackPropertyIdentifier', ], 'TopContributors' => [ 'shape' => 'TopContributors', ], 'Unit' => [ 'shape' => 'Unit', ], 'Total' => [ 'shape' => 'Long', ], ], ], 'AttackPropertyIdentifier' => [ 'type' => 'string', 'enum' => [ 'DESTINATION_URL', 'REFERRER', 'SOURCE_ASN', 'SOURCE_COUNTRY', 'SOURCE_IP_ADDRESS', 'SOURCE_USER_AGENT', ], ], 'AttackSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackSummary', ], ], 'AttackSummary' => [ 'type' => 'structure', 'members' => [ 'AttackId' => [ 'shape' => 'String', ], 'ResourceArn' => [ 'shape' => 'String', ], 'StartTime' => [ 'shape' => 'AttackTimestamp', ], 'EndTime' => [ 'shape' => 'AttackTimestamp', ], 'AttackVectors' => [ 'shape' => 'AttackVectorDescriptionList', ], ], ], 'AttackTimestamp' => [ 'type' => 'timestamp', ], 'AttackVectorDescription' => [ 'type' => 'structure', 'required' => [ 'VectorType', ], 'members' => [ 'VectorType' => [ 'shape' => 'String', ], ], ], 'AttackVectorDescriptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttackVectorDescription', ], ], 'Contributor' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'Long', ], ], ], 'CreateProtectionRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'ResourceArn', ], 'members' => [ 'Name' => [ 'shape' => 'ProtectionName', ], 'ResourceArn' => [ 'shape' => 'ResourceArn', ], ], ], 'CreateProtectionResponse' => [ 'type' => 'structure', 'members' => [ 'ProtectionId' => [ 'shape' => 'ProtectionId', ], ], ], 'CreateSubscriptionRequest' => [ 'type' => 'structure', 'members' => [], ], 'CreateSubscriptionResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteProtectionRequest' => [ 'type' => 'structure', 'required' => [ 'ProtectionId', ], 'members' => [ 'ProtectionId' => [ 'shape' => 'ProtectionId', ], ], ], 'DeleteProtectionResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteSubscriptionRequest' => [ 'type' => 'structure', 'members' => [], ], 'DeleteSubscriptionResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeAttackRequest' => [ 'type' => 'structure', 'required' => [ 'AttackId', ], 'members' => [ 'AttackId' => [ 'shape' => 'AttackId', ], ], ], 'DescribeAttackResponse' => [ 'type' => 'structure', 'members' => [ 'Attack' => [ 'shape' => 'AttackDetail', ], ], ], 'DescribeProtectionRequest' => [ 'type' => 'structure', 'required' => [ 'ProtectionId', ], 'members' => [ 'ProtectionId' => [ 'shape' => 'ProtectionId', ], ], ], 'DescribeProtectionResponse' => [ 'type' => 'structure', 'members' => [ 'Protection' => [ 'shape' => 'Protection', ], ], ], 'DescribeSubscriptionRequest' => [ 'type' => 'structure', 'members' => [], ], 'DescribeSubscriptionResponse' => [ 'type' => 'structure', 'members' => [ 'Subscription' => [ 'shape' => 'Subscription', ], ], ], 'Double' => [ 'type' => 'double', ], 'DurationInSeconds' => [ 'type' => 'long', 'min' => 0, ], 'GetSubscriptionStateRequest' => [ 'type' => 'structure', 'members' => [], ], 'GetSubscriptionStateResponse' => [ 'type' => 'structure', 'required' => [ 'SubscriptionState', ], 'members' => [ 'SubscriptionState' => [ 'shape' => 'SubscriptionState', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'InternalErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidOperationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'InvalidResourceException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'LimitNumber' => [ 'type' => 'long', ], 'LimitType' => [ 'type' => 'string', ], 'LimitsExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], 'Type' => [ 'shape' => 'LimitType', ], 'Limit' => [ 'shape' => 'LimitNumber', ], ], 'exception' => true, ], 'ListAttacksRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArns' => [ 'shape' => 'ResourceArnFilterList', ], 'StartTime' => [ 'shape' => 'TimeRange', ], 'EndTime' => [ 'shape' => 'TimeRange', ], 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListAttacksResponse' => [ 'type' => 'structure', 'members' => [ 'AttackSummaries' => [ 'shape' => 'AttackSummaries', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'ListProtectionsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListProtectionsResponse' => [ 'type' => 'structure', 'members' => [ 'Protections' => [ 'shape' => 'Protections', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'LockedSubscriptionException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'Long' => [ 'type' => 'long', ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 10000, 'min' => 0, ], 'Mitigation' => [ 'type' => 'structure', 'members' => [ 'MitigationName' => [ 'shape' => 'String', ], ], ], 'MitigationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Mitigation', ], ], 'OptimisticLockException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'Protection' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'ProtectionId', ], 'Name' => [ 'shape' => 'ProtectionName', ], 'ResourceArn' => [ 'shape' => 'ResourceArn', ], ], ], 'ProtectionId' => [ 'type' => 'string', 'max' => 36, 'min' => 1, 'pattern' => '[a-zA-Z0-9\\\\-]*', ], 'ProtectionName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[ a-zA-Z0-9_\\\\.\\\\-]*', ], 'Protections' => [ 'type' => 'list', 'member' => [ 'shape' => 'Protection', ], ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'ResourceArn' => [ 'type' => 'string', 'min' => 1, ], 'ResourceArnFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceArn', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'SubResourceSummary' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'SubResourceType', ], 'Id' => [ 'shape' => 'String', ], 'AttackVectors' => [ 'shape' => 'SummarizedAttackVectorList', ], 'Counters' => [ 'shape' => 'SummarizedCounterList', ], ], ], 'SubResourceSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubResourceSummary', ], ], 'SubResourceType' => [ 'type' => 'string', 'enum' => [ 'IP', 'URL', ], ], 'Subscription' => [ 'type' => 'structure', 'members' => [ 'StartTime' => [ 'shape' => 'Timestamp', ], 'TimeCommitmentInSeconds' => [ 'shape' => 'DurationInSeconds', ], ], ], 'SubscriptionState' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'INACTIVE', ], ], 'SummarizedAttackVector' => [ 'type' => 'structure', 'required' => [ 'VectorType', ], 'members' => [ 'VectorType' => [ 'shape' => 'String', ], 'VectorCounters' => [ 'shape' => 'SummarizedCounterList', ], ], ], 'SummarizedAttackVectorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SummarizedAttackVector', ], ], 'SummarizedCounter' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Max' => [ 'shape' => 'Double', ], 'Average' => [ 'shape' => 'Double', ], 'Sum' => [ 'shape' => 'Double', ], 'N' => [ 'shape' => 'Integer', ], 'Unit' => [ 'shape' => 'String', ], ], ], 'SummarizedCounterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SummarizedCounter', ], ], 'TimeRange' => [ 'type' => 'structure', 'members' => [ 'FromInclusive' => [ 'shape' => 'AttackTimestamp', ], 'ToExclusive' => [ 'shape' => 'AttackTimestamp', ], ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Token' => [ 'type' => 'string', 'min' => 1, ], 'TopContributors' => [ 'type' => 'list', 'member' => [ 'shape' => 'Contributor', ], ], 'Unit' => [ 'type' => 'string', 'enum' => [ 'BITS', 'BYTES', 'PACKETS', 'REQUESTS', ], ], 'errorMessage' => [ 'type' => 'string', ], ],];
