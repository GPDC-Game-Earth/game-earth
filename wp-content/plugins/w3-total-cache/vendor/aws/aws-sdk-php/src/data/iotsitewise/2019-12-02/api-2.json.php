<?php
// This file was auto-generated from sdk-root/src/data/iotsitewise/2019-12-02/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-12-02', 'endpointPrefix' => 'iotsitewise', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS IoT SiteWise', 'serviceId' => 'IoTSiteWise', 'signatureVersion' => 'v4', 'signingName' => 'iotsitewise', 'uid' => 'iotsitewise-2019-12-02', ], 'operations' => [ 'AssociateAssets' => [ 'name' => 'AssociateAssets', 'http' => [ 'method' => 'POST', 'requestUri' => '/assets/{assetId}/associate', ], 'input' => [ 'shape' => 'AssociateAssetsRequest', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'BatchAssociateProjectAssets' => [ 'name' => 'BatchAssociateProjectAssets', 'http' => [ 'method' => 'POST', 'requestUri' => '/projects/{projectId}/assets/associate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BatchAssociateProjectAssetsRequest', ], 'output' => [ 'shape' => 'BatchAssociateProjectAssetsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'BatchDisassociateProjectAssets' => [ 'name' => 'BatchDisassociateProjectAssets', 'http' => [ 'method' => 'POST', 'requestUri' => '/projects/{projectId}/assets/disassociate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BatchDisassociateProjectAssetsRequest', ], 'output' => [ 'shape' => 'BatchDisassociateProjectAssetsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'BatchPutAssetPropertyValue' => [ 'name' => 'BatchPutAssetPropertyValue', 'http' => [ 'method' => 'POST', 'requestUri' => '/properties', ], 'input' => [ 'shape' => 'BatchPutAssetPropertyValueRequest', ], 'output' => [ 'shape' => 'BatchPutAssetPropertyValueResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'data.', ], ], 'CreateAccessPolicy' => [ 'name' => 'CreateAccessPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/access-policies', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateAccessPolicyRequest', ], 'output' => [ 'shape' => 'CreateAccessPolicyResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'CreateAsset' => [ 'name' => 'CreateAsset', 'http' => [ 'method' => 'POST', 'requestUri' => '/assets', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateAssetRequest', ], 'output' => [ 'shape' => 'CreateAssetResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'CreateAssetModel' => [ 'name' => 'CreateAssetModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/asset-models', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateAssetModelRequest', ], 'output' => [ 'shape' => 'CreateAssetModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'CreateDashboard' => [ 'name' => 'CreateDashboard', 'http' => [ 'method' => 'POST', 'requestUri' => '/dashboards', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateDashboardRequest', ], 'output' => [ 'shape' => 'CreateDashboardResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'CreateGateway' => [ 'name' => 'CreateGateway', 'http' => [ 'method' => 'POST', 'requestUri' => '/20200301/gateways', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateGatewayRequest', ], 'output' => [ 'shape' => 'CreateGatewayResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'edge.', ], ], 'CreatePortal' => [ 'name' => 'CreatePortal', 'http' => [ 'method' => 'POST', 'requestUri' => '/portals', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreatePortalRequest', ], 'output' => [ 'shape' => 'CreatePortalResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'CreateProject' => [ 'name' => 'CreateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/projects', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateProjectRequest', ], 'output' => [ 'shape' => 'CreateProjectResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DeleteAccessPolicy' => [ 'name' => 'DeleteAccessPolicy', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/access-policies/{accessPolicyId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteAccessPolicyRequest', ], 'output' => [ 'shape' => 'DeleteAccessPolicyResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DeleteAsset' => [ 'name' => 'DeleteAsset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/assets/{assetId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteAssetRequest', ], 'output' => [ 'shape' => 'DeleteAssetResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'DeleteAssetModel' => [ 'name' => 'DeleteAssetModel', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/asset-models/{assetModelId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteAssetModelRequest', ], 'output' => [ 'shape' => 'DeleteAssetModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'DeleteDashboard' => [ 'name' => 'DeleteDashboard', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/dashboards/{dashboardId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteDashboardRequest', ], 'output' => [ 'shape' => 'DeleteDashboardResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DeleteGateway' => [ 'name' => 'DeleteGateway', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/20200301/gateways/{gatewayId}', ], 'input' => [ 'shape' => 'DeleteGatewayRequest', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'edge.', ], ], 'DeletePortal' => [ 'name' => 'DeletePortal', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/portals/{portalId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeletePortalRequest', ], 'output' => [ 'shape' => 'DeletePortalResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DeleteProject' => [ 'name' => 'DeleteProject', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/projects/{projectId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteProjectRequest', ], 'output' => [ 'shape' => 'DeleteProjectResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DescribeAccessPolicy' => [ 'name' => 'DescribeAccessPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/access-policies/{accessPolicyId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeAccessPolicyRequest', ], 'output' => [ 'shape' => 'DescribeAccessPolicyResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DescribeAsset' => [ 'name' => 'DescribeAsset', 'http' => [ 'method' => 'GET', 'requestUri' => '/assets/{assetId}', ], 'input' => [ 'shape' => 'DescribeAssetRequest', ], 'output' => [ 'shape' => 'DescribeAssetResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'DescribeAssetModel' => [ 'name' => 'DescribeAssetModel', 'http' => [ 'method' => 'GET', 'requestUri' => '/asset-models/{assetModelId}', ], 'input' => [ 'shape' => 'DescribeAssetModelRequest', ], 'output' => [ 'shape' => 'DescribeAssetModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'DescribeAssetProperty' => [ 'name' => 'DescribeAssetProperty', 'http' => [ 'method' => 'GET', 'requestUri' => '/assets/{assetId}/properties/{propertyId}', ], 'input' => [ 'shape' => 'DescribeAssetPropertyRequest', ], 'output' => [ 'shape' => 'DescribeAssetPropertyResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'DescribeDashboard' => [ 'name' => 'DescribeDashboard', 'http' => [ 'method' => 'GET', 'requestUri' => '/dashboards/{dashboardId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeDashboardRequest', ], 'output' => [ 'shape' => 'DescribeDashboardResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DescribeDefaultEncryptionConfiguration' => [ 'name' => 'DescribeDefaultEncryptionConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/configuration/account/encryption', ], 'input' => [ 'shape' => 'DescribeDefaultEncryptionConfigurationRequest', ], 'output' => [ 'shape' => 'DescribeDefaultEncryptionConfigurationResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeGateway' => [ 'name' => 'DescribeGateway', 'http' => [ 'method' => 'GET', 'requestUri' => '/20200301/gateways/{gatewayId}', ], 'input' => [ 'shape' => 'DescribeGatewayRequest', ], 'output' => [ 'shape' => 'DescribeGatewayResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'edge.', ], ], 'DescribeGatewayCapabilityConfiguration' => [ 'name' => 'DescribeGatewayCapabilityConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/20200301/gateways/{gatewayId}/capability/{capabilityNamespace}', ], 'input' => [ 'shape' => 'DescribeGatewayCapabilityConfigurationRequest', ], 'output' => [ 'shape' => 'DescribeGatewayCapabilityConfigurationResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'edge.', ], ], 'DescribeLoggingOptions' => [ 'name' => 'DescribeLoggingOptions', 'http' => [ 'method' => 'GET', 'requestUri' => '/logging', ], 'input' => [ 'shape' => 'DescribeLoggingOptionsRequest', ], 'output' => [ 'shape' => 'DescribeLoggingOptionsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'DescribePortal' => [ 'name' => 'DescribePortal', 'http' => [ 'method' => 'GET', 'requestUri' => '/portals/{portalId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribePortalRequest', ], 'output' => [ 'shape' => 'DescribePortalResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DescribeProject' => [ 'name' => 'DescribeProject', 'http' => [ 'method' => 'GET', 'requestUri' => '/projects/{projectId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeProjectRequest', ], 'output' => [ 'shape' => 'DescribeProjectResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], ], 'endpoint' => [ 'hostPrefix' => 'monitor.', ], ], 'DisassociateAssets' => [ 'name' => 'DisassociateAssets', 'http' => [ 'method' => 'POST', 'requestUri' => '/assets/{assetId}/disassociate', ], 'input' => [ 'shape' => 'DisassociateAssetsRequest', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictingOperationException', ], ], 'endpoint' => [ 'hostPrefix' => 'model.', ], ], 'GetAssetPropertyAggregates' => [ 'name' => 'GetAssetPropertyAggregates', 'http' => [ 'method' => 'GET', 'requestUri' => '/properties/aggregates', ]�KofU  �KofU                  -nfU          �