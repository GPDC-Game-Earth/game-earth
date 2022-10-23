<?php
// This file was auto-generated from sdk-root/src/data/groundstation/2019-05-23/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-05-23', 'endpointPrefix' => 'groundstation', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Ground Station', 'serviceId' => 'GroundStation', 'signatureVersion' => 'v4', 'signingName' => 'groundstation', 'uid' => 'groundstation-2019-05-23', ], 'operations' => [ 'CancelContact' => [ 'name' => 'CancelContact', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/contact/{contactId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CancelContactRequest', ], 'output' => [ 'shape' => 'ContactIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'CreateConfig' => [ 'name' => 'CreateConfig', 'http' => [ 'method' => 'POST', 'requestUri' => '/config', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateConfigRequest', ], 'output' => [ 'shape' => 'ConfigIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'CreateDataflowEndpointGroup' => [ 'name' => 'CreateDataflowEndpointGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/dataflowEndpointGroup', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateDataflowEndpointGroupRequest', ], 'output' => [ 'shape' => 'DataflowEndpointGroupIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'CreateMissionProfile' => [ 'name' => 'CreateMissionProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/missionprofile', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateMissionProfileRequest', ], 'output' => [ 'shape' => 'MissionProfileIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DeleteConfig' => [ 'name' => 'DeleteConfig', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/config/{configType}/{configId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteConfigRequest', ], 'output' => [ 'shape' => 'ConfigIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'DeleteDataflowEndpointGroup' => [ 'name' => 'DeleteDataflowEndpointGroup', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/dataflowEndpointGroup/{dataflowEndpointGroupId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteDataflowEndpointGroupRequest', ], 'output' => [ 'shape' => 'DataflowEndpointGroupIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'DeleteMissionProfile' => [ 'name' => 'DeleteMissionProfile', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/missionprofile/{missionProfileId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteMissionProfileRequest', ], 'output' => [ 'shape' => 'MissionProfileIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'DescribeContact' => [ 'name' => 'DescribeContact', 'http' => [ 'method' => 'GET', 'requestUri' => '/contact/{contactId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeContactRequest', ], 'output' => [ 'shape' => 'DescribeContactResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetConfig' => [ 'name' => 'GetConfig', 'http' => [ 'method' => 'GET', 'requestUri' => '/config/{configType}/{configId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetConfigRequest', ], 'output' => [ 'shape' => 'GetConfigResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetDataflowEndpointGroup' => [ 'name' => 'GetDataflowEndpointGroup', 'http' => [ 'method' => 'GET', 'requestUri' => '/dataflowEndpointGroup/{dataflowEndpointGroupId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDataflowEndpointGroupRequest', ], 'output' => [ 'shape' => 'GetDataflowEndpointGroupResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetMinuteUsage' => [ 'name' => 'GetMinuteUsage', 'http' => [ 'method' => 'POST', 'requestUri' => '/minute-usage', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetMinuteUsageRequest', ], 'output' => [ 'shape' => 'GetMinuteUsageResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetMissionProfile' => [ 'name' => 'GetMissionProfile', 'http' => [ 'method' => 'GET', 'requestUri' => '/missionprofile/{missionProfileId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetMissionProfileRequest', ], 'output' => [ 'shape' => 'GetMissionProfileResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetSatellite' => [ 'name' => 'GetSatellite', 'http' => [ 'method' => 'GET', 'requestUri' => '/satellite/{satelliteId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetSatelliteRequest', ], 'output' => [ 'shape' => 'GetSatelliteResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListConfigs' => [ 'name' => 'ListConfigs', 'http' => [ 'method' => 'GET', 'requestUri' => '/config', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListConfigsRequest', ], 'output' => [ 'shape' => 'ListConfigsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListContacts' => [ 'name' => 'ListContacts', 'http' => [ 'method' => 'POST', 'requestUri' => '/contacts', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListContactsRequest', ], 'output' => [ 'shape' => 'ListContactsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListDataflowEndpointGroups' => [ 'name' => 'ListDataflowEndpointGroups', 'http' => [ 'method' => 'GET', 'requestUri' => '/dataflowEndpointGroup', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDataflowEndpointGroupsRequest', ], 'output' => [ 'shape' => 'ListDataflowEndpointGroupsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListGroundStations' => [ 'name' => 'ListGroundStations', 'http' => [ 'method' => 'GET', 'requestUri' => '/groundstation', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListGroundStationsRequest', ], 'output' => [ 'shape' => 'ListGroundStationsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListMissionProfiles' => [ 'name' => 'ListMissionProfiles', 'http' => [ 'method' => 'GET', 'requestUri' => '/missionprofile', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListMissionProfilesRequest', ], 'output' => [ 'shape' => 'ListMissionProfilesResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListSatellites' => [ 'name' => 'ListSatellites', 'http' => [ 'method' => 'GET', 'requestUri' => '/satellite', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListSatellitesRequest', ], 'output' => [ 'shape' => 'ListSatellitesResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ReserveContact' => [ 'name' => 'ReserveContact', 'http' => [ 'method' => 'POST', 'requestUri' => '/contact', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ReserveContactRequest', ], 'output' => [ 'shape' => 'ContactIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'UpdateConfig' => [ 'name' => 'UpdateConfig', 'http' => [ 'method' => 'PUT', 'requestUri' => '/config/{configType}/{configId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateConfigRequest', ], 'output' => [ 'shape' => 'ConfigIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'UpdateMissionProfile' => [ 'name' => 'UpdateMissionProfile', 'http' => [ 'method' => 'PUT', 'requestUri' => '/missionprofile/{missionProfileId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateMissionProfileRequest', ], 'output' => [ 'shape' => 'MissionProfileIdResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'DependencyException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AngleUnits' => [ 'type' => 'string', 'enum' => [ 'DEGREE_ANGLE', 'RADIAN', ], ], 'AntennaDemodDecodeDetails' => [ 'type' => 'structure', 'members' => [ 'outputNode' => [ 'shape' => 'String', ], ], ], 'AntennaDownlinkConfig' => [ 'type' => 'structure', 'required' => [ 'spectrumConfig', ], 'members' => [ 'spectrumConfig' => [ 'shape' => 'SpectrumConfig', ], ], ], 'AntennaDownlinkDemodDecodeConfig' => [ 'type' => 'structure', 'required' => [ 'decodeConfig', 'demodulationConfig', 'spectrumConfig', ], 'members' => [ 'decodeConfig' => [ 'shape' => 'DecodeConfig', ], 'demodulationConfig' => [ 'shape' => 'DemodulationConfig', ], 'spectrumConfig' => [ 'shape' => 'SpectrumConfig', ], ], ], 'AntennaUplinkConfig' => [ 'type' => 'structure', 'required' => [ 'spectrumConfig', 'targetEirp', ], 'members' => [ 'spectrumConfig' => [ 'shape' => 'UplinkSpectrumConfig', ], 'targetEirp' => [ 'shape' => 'Eirp', ], 'transmitDisabled' => [ 'shape' => 'Boolean', ], ], ], 'BandwidthUnits' => [ 'type' => 'string', 'enum' => [ 'GHz', 'MHz', 'kHz', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'BucketArn' => [ 'type' => 'string', ], 'CancelContactRequest' => [ 'type' => 'structure', 'required' => [ 'contactId', ], 'members' => [ 'contactId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'contactId', ], ], ], 'ConfigArn' => [ 'type' => 'string', ], 'ConfigCapabilityType' => [ 'type' => 'string', 'enum' => [ 'antenna-downlink', 'antenna-downlink-demod-decode', 'antenna-uplink', 'dataflow-endpoint', 'tracking', 'uplink-echo', 's3-recording', ], ], 'ConfigDetails' => [ 'type' => 'structure', 'members' => [ 'antennaDemodDecodeDetails' => [ 'shape' => 'AntennaDemodDecodeDetails', ], 'endpointDetails' => [ 'shape' => 'EndpointDetails', ], 's3RecordingDetails' => [ 'shape' => 'S3RecordingDetails', ], ], 'union' => true, ], 'ConfigIdResponse' => [ 'type' => 'structure', 'members' => [ 'configArn' => [ 'shape' => 'ConfigArn', ], 'configId' => [ 'shape' => 'String', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', ], ], ], 'ConfigList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigListItem', ], ], 'ConfigListItem' => [ 'type' => 'structure', 'members' => [ 'configArn' => [ 'shape' => 'ConfigArn', ], 'configId' => [ 'shape' => 'String', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', ], 'name' => [ 'shape' => 'String', ], ], ], 'ConfigTypeData' => [ 'type' => 'structure', 'members' => [ 'antennaDownlinkConfig' => [ 'shape' => 'AntennaDownlinkConfig', ], 'antennaDownlinkDemodDecodeConfig' => [ 'shape' => 'AntennaDownlinkDemodDecodeConfig', ], 'antennaUplinkConfig' => [ 'shape' => 'AntennaUplinkConfig', ], 'dataflowEndpointConfig' => [ 'shape' => 'DataflowEndpointConfig', ], 's3RecordingConfig' => [ 'shape' => 'S3RecordingConfig', ], 'trackingConfig' => [ 'shape' => 'TrackingConfig', ], 'uplinkEchoConfig' => [ 'shape' => 'UplinkEchoConfig', ], ], 'union' => true, ], 'ContactData' => [ 'type' => 'structure', 'members' => [ 'contactId' => [ 'shape' => 'String', ], 'contactStatus' => [ 'shape' => 'ContactStatus', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'errorMessage' => [ 'shape' => 'String', ], 'groundStation' => [ 'shape' => 'String', ], 'maximumElevation' => [ 'shape' => 'Elevation', ], 'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ], 'postPassEndTime' => [ 'shape' => 'Timestamp', ], 'prePassStartTime' => [ 'shape' => 'Timestamp', ], 'region' => [ 'shape' => 'String', ], 'satelliteArn' => [ 'shape' => 'satelliteArn', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'ContactIdResponse' => [ 'type' => 'structure', 'members' => [ 'contactId' => [ 'shape' => 'String', ], ], ], 'ContactList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactData', ], ], 'ContactStatus' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'AWS_CANCELLED', 'AWS_FAILED', 'CANCELLED', 'CANCELLING', 'COMPLETED', 'FAILED', 'FAILED_TO_SCHEDULE', 'PASS', 'POSTPASS', 'PREPASS', 'SCHEDULED', 'SCHEDULING', ], ], 'CreateConfigRequest' => [ 'type' => 'structure', 'required' => [ 'configData', 'name', ], 'members' => [ 'configData' => [ 'shape' => 'ConfigTypeData', ], 'name' => [ 'shape' => 'SafeName', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'CreateDataflowEndpointGroupRequest' => [ 'type' => 'structure', 'required' => [ 'endpointDetails', ], 'members' => [ 'endpointDetails' => [ 'shape' => 'EndpointDetailsList', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'CreateMissionProfileRequest' => [ 'type' => 'structure', 'required' => [ 'dataflowEdges', 'minimumViableContactDurationSeconds', 'name', 'trackingConfigArn', ], 'members' => [ 'contactPostPassDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'contactPrePassDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'dataflowEdges' => [ 'shape' => 'DataflowEdgeList', ], 'minimumViableContactDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'name' => [ 'shape' => 'SafeName', ], 'tags' => [ 'shape' => 'TagsMap', ], 'trackingConfigArn' => [ 'shape' => 'ConfigArn', ], ], ], 'Criticality' => [ 'type' => 'string', 'enum' => [ 'PREFERRED', 'REMOVED', 'REQUIRED', ], ], 'DataflowDetail' => [ 'type' => 'structure', 'members' => [ 'destination' => [ 'shape' => 'Destination', ], 'errorMessage' => [ 'shape' => 'String', ], 'source' => [ 'shape' => 'Source', ], ], ], 'DataflowEdge' => @��nfU  @��nfU                  @c�nfU          �:�nfU  ���nfU          `��nfU   @      `��nfU          t' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataflowEdge', ], ], 'DataflowEndpoint' => [ 'type' => 'structure', 'members' => [ 'address' => [ 'shape' => 'SocketAddress', ], 'mtu' => [ 'shape' => 'DataflowEndpointMtuInteger', ], 'name' => [ 'shape' => 'SafeName', ], 'status' => [ 'shape' => 'EndpointStatus', ], ], ], 'DataflowEndpointConfig' => [ 'type' => 'structure', 'required' => [ 'dataflowEndpointName', ], 'members' => [ 'dataflowEndpointName' => [ 'shape' => 'String', ], 'dataflowEndpointRegion' => [ 'shape' => 'String', ], ], ], 'DataflowEndpointGroupArn' => [ 'type' => 'string', ], 'DataflowEndpointGroupIdResponse' => [ 'type' => 'structure', 'members' => [ 'dataflowEndpointGroupId' => [ 'shape' => 'String', ], ], ], 'DataflowEndpointGroupList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataflowEndpointListItem', ], ], 'DataflowEndpointListItem' => [ 'type' => 'structure', 'members' => [ 'dataflowEndpointGroupArn' => [ 'shape' => 'DataflowEndpointGroupArn', ], 'dataflowEndpointGroupId' => [ 'shape' => 'String', ], ], ], 'DataflowEndpointMtuInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1500, 'min' => 1400, ], 'DataflowList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataflowDetail', ], ], 'DecodeConfig' => [ 'type' => 'structure', 'required' => [ 'unvalidatedJSON', ], 'members' => [ 'unvalidatedJSON' => [ 'shape' => 'JsonString', ], ], ], 'DeleteConfigRequest' => [ 'type' => 'structure', 'required' => [ 'configId', 'configType', ], 'members' => [ 'configId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'configId', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', 'location' => 'uri', 'locationName' => 'configType', ], ], ], 'DeleteDataflowEndpointGroupRequest' => [ 'type' => 'structure', 'required' => [ 'dataflowEndpointGroupId', ], 'members' => [ 'dataflowEndpointGroupId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'dataflowEndpointGroupId', ], ], ], 'DeleteMissionProfileRequest' => [ 'type' => 'structure', 'required' => [ 'missionProfileId', ], 'members' => [ 'missionProfileId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'missionProfileId', ], ], ], 'DemodulationConfig' => [ 'type' => 'structure', 'required' => [ 'unvalidatedJSON', ], 'members' => [ 'unvalidatedJSON' => [ 'shape' => 'JsonString', ], ], ], 'DependencyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], 'parameterName' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 531, ], 'exception' => true, 'fault' => true, ], 'DescribeContactRequest' => [ 'type' => 'structure', 'required' => [ 'contactId', ], 'members' => [ 'contactId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'contactId', ], ], ], 'DescribeContactResponse' => [ 'type' => 'structure', 'members' => [ 'contactId' => [ 'shape' => 'String', ], 'contactStatus' => [ 'shape' => 'ContactStatus', ], 'dataflowList' => [ 'shape' => 'DataflowList', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'errorMessage' => [ 'shape' => 'String', ], 'groundStation' => [ 'shape' => 'String', ], 'maximumElevation' => [ 'shape' => 'Elevation', ], 'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ], 'postPassEndTime' => [ 'shape' => 'Timestamp', ], 'prePassStartTime' => [ 'shape' => 'Timestamp', ], 'region' => [ 'shape' => 'String', ], 'satelliteArn' => [ 'shape' => 'satelliteArn', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'Destination' => [ 'type' => 'structure', 'members' => [ 'configDetails' => [ 'shape' => 'ConfigDetails', ], 'configId' => [ 'shape' => 'String', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', ], 'dataflowDestinationRegion' => [ 'shape' => 'String', ], ], ], 'Double' => [ 'type' => 'double', 'box' => true, ], 'DurationInSeconds' => [ 'type' => 'integer', 'box' => true, 'max' => 21600, 'min' => 1, ], 'Eirp' => [ 'type' => 'structure', 'required' => [ 'units', 'value', ], 'members' => [ 'units' => [ 'shape' => 'EirpUnits', ], 'value' => [ 'shape' => 'Double', ], ], ], 'EirpUnits' => [ 'type' => 'string', 'enum' => [ 'dBW', ], ], 'Elevation' => [ 'type' => 'structure', 'required' => [ 'unit', 'value', ], 'members' => [ 'unit' => [ 'shape' => 'AngleUnits', ], 'value' => [ 'shape' => 'Double', ], ], ], 'EndpointDetails' => [ 'type' => 'structure', 'members' => [ 'endpoint' => [ 'shape' => 'DataflowEndpoint', ], 'securityDetails' => [ 'shape' => 'SecurityDetails', ], ], ], 'EndpointDetailsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointDetails', ], ], 'EndpointStatus' => [ 'type' => 'string', 'enum' => [ 'created', 'creating', 'deleted', 'deleting', 'failed', ], ], 'Frequency' => [ 'type' => 'structure', 'required' => [ 'units', 'value', ], 'members' => [ 'units' => [ 'shape' => 'FrequencyUnits', ], 'value' => [ 'shape' => 'Double', ], ], ], 'FrequencyBandwidth' => [ 'type' => 'structure', 'required' => [ 'units', 'value', ], 'members' => [ 'units' => [ 'shape' => 'BandwidthUnits', ], 'value' => [ 'shape' => 'Double', ], ], ], 'FrequencyUnits' => [ 'type' => 'string', 'enum' => [ 'GHz', 'MHz', 'kHz', ], ], 'GetConfigRequest' => [ 'type' => 'structure', 'required' => [ 'configId', 'configType', ], 'members' => [ 'configId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'configId', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', 'location' => 'uri', 'locationName' => 'configType', ], ], ], 'GetConfigResponse' => [ 'type' => 'structure', 'required' => [ 'configArn', 'configData', 'configId', 'name', ], 'members' => [ 'configArn' => [ 'shape' => 'ConfigArn', ], 'configData' => [ 'shape' => 'ConfigTypeData', ], 'configId' => [ 'shape' => 'String', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', ], 'name' => [ 'shape' => 'String', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'GetDataflowEndpointGroupRequest' => [ 'type' => 'structure', 'required' => [ 'dataflowEndpointGroupId', ], 'members' => [ 'dataflowEndpointGroupId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'dataflowEndpointGroupId', ], ], ], 'GetDataflowEndpointGroupResponse' => [ 'type' => 'structure', 'members' => [ 'dataflowEndpointGroupArn' => [ 'shape' => 'DataflowEndpointGroupArn', ], 'dataflowEndpointGroupId' => [ 'shape' => 'String', ], 'endpointsDetails' => [ 'shape' => 'EndpointDetailsList', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'GetMinuteUsageRequest' => [ 'type' => 'structure', 'required' => [ 'month', 'year', ], 'members' => [ 'month' => [ 'shape' => 'Integer', ], 'year' => [ 'shape' => 'Integer', ], ], ], 'GetMinuteUsageResponse' => [ 'type' => 'structure', 'members' => [ 'estimatedMinutesRemaining' => [ 'shape' => 'Integer', ], 'isReservedMinutesCustomer' => [ 'shape' => 'Boolean', ], 'totalReservedMinuteAllocation' => [ 'shape' => 'Integer', ], 'totalScheduledMinutes' => [ 'shape' => 'Integer', ], 'upcomingMinutesScheduled' => [ 'shape' => 'Integer', ], ], ], 'GetMissionProfileRequest' => [ 'type' => 'structure', 'required' => [ 'missionProfileId', ], 'members' => [ 'missionProfileId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'missionProfileId', ], ], ], 'GetMissionProfileResponse' => [ 'type' => 'structure', 'members' => [ 'contactPostPassDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'contactPrePassDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'dataflowEdges' => [ 'shape' => 'DataflowEdgeList', ], 'minimumViableContactDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ], 'missionProfileId' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], 'region' => [ 'shape' => 'String', ], 'tags' => [ 'shape' => 'TagsMap', ], 'trackingConfigArn' => [ 'shape' => 'ConfigArn', ], ], ], 'GetSatelliteRequest' => [ 'type' => 'structure', 'required' => [ 'satelliteId', ], 'members' => [ 'satelliteId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'satelliteId', ], ], ], 'GetSatelliteResponse' => [ 'type' => 'structure', 'members' => [ 'groundStations' => [ 'shape' => 'GroundStationIdList', ], 'noradSatelliteID' => [ 'shape' => 'noradSatelliteID', ], 'satelliteArn' => [ 'shape' => 'satelliteArn', ], 'satelliteId' => [ 'shape' => 'Uuid', ], ], ], 'GroundStationData' => [ 'type' => 'structure', 'members' => [ 'groundStationId' => [ 'shape' => 'String', ], 'groundStationName' => [ 'shape' => 'String', ], 'region' => [ 'shape' => 'String', ], ], ], 'GroundStationIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'GroundStationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroundStationData', ], ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], 'parameterName' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 431, 'senderFault' => true, ], 'exception' => true, ], 'JsonString' => [ 'type' => 'string', 'max' => 8192, 'min' => 2, 'pattern' => '^[{}\\[\\]:.,"0-9A-z\\-_\\s]{2,8192}$', ], 'ListConfigsRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListConfigsResponse' => [ 'type' => 'structure', 'members' => [ 'configList' => [ 'shape' => 'ConfigList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListContactsRequest' => [ 'type' => 'structure', 'required' => [ 'endTime', 'startTime', 'statusList', ], 'members' => [ 'endTime' => [ 'shape' => 'Timestamp', ], 'groundStation' => [ 'shape' => 'String', ], 'maxResults' => [ 'shape' => 'Integer', ], 'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ], 'nextToken' => [ 'shape' => 'String', ], 'satelliteArn' => [ 'shape' => 'satelliteArn', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'statusList' => [ 'shape' => 'StatusList', ], ], ], 'ListContactsResponse' => [ 'type' => 'structure', 'members' => [ 'contactList' => [ 'shape' => 'ContactList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListDataflowEndpointGroupsRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListDataflowEndpointGroupsResponse' => [ 'type' => 'structure', 'members' => [ 'dataflowEndpointGroupList' => [ 'shape' => 'DataflowEndpointGroupList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListGroundStationsRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'satelliteId' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'satelliteId', ], ], ], 'ListGroundStationsResponse' => [ 'type' => 'structure', 'members' => [ 'groundStationList' => [ 'shape' => 'GroundStationList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListMissionProfilesRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListMissionProfilesResponse' => [ 'type' => 'structure', 'members' => [ 'missionProfileList' => [ 'shape' => 'MissionProfileList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListSatellitesRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListSatellitesResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'satellites' => [ 'shape' => 'SatelliteList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'MissionProfileArn' => [ 'type' => 'string', ], 'MissionProfileIdResponse' => [ 'type' => 'structure', 'members' => [ 'missionProfileId' => [ 'shape' => 'String', ], ], ], 'MissionProfileList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MissionProfileListItem', ], ], 'MissionProfileListItem' => [ 'type' => 'structure', 'members' => [ 'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ], 'missionProfileId' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], 'region' => [ 'shape' => 'String', ], ], ], 'Polarization' => [ 'type' => 'string', 'enum' => [ 'LEFT_HAND', 'NONE', 'RIGHT_HAND', ], ], 'ReserveContactRequest' => [ 'type' => 'structure', 'required' => [ 'endTime', 'groundStation', 'missionProfileArn', 'satelliteArn', 'startTime', ], 'members' => [ 'endTime' => [ 'shape' => 'Timestamp', ], 'groundStation' => [ 'shape' => 'String', ], 'missionProfileArn' => [ 'shape' => 'MissionProfileArn', ], 'satelliteArn' => [ 'shape' => 'satelliteArn', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'ResourceLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], 'parameterName' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 434, 'senderFault' => true, ], 'exception' => true, ], 'RoleArn' => [ 'type' => 'string', ], 'S3KeyPrefix' => [ 'type' => 'string', 'max' => 900, 'min' => 1, 'pattern' => '^([a-zA-Z0-9_\\-=/]|\\{satellite_id\\}|\\{config\\-name}|\\{s3\\-config-id}|\\{year\\}|\\{month\\}|\\{day\\}){1,900}$', ], 'S3RecordingConfig' => [ 'type' => 'structure', 'required' => [ 'bucketArn', 'roleArn', ], 'members' => [ 'bucketArn' => [ 'shape' => 'BucketArn', ], 'prefix' => [ 'shape' => 'S3KeyPrefix', ], 'roleArn' => [ 'shape' => 'RoleArn', ], ], ], 'S3RecordingDetails' => [ 'type' => 'structure', 'members' => [ 'bucketArn' => [ 'shape' => 'BucketArn', ], 'keyTemplate' => [ 'shape' => 'String', ], ], ], 'SafeName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[ a-zA-Z0-9_:-]{1,256}$', ], 'SatelliteList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SatelliteListItem', ], ], 'SatelliteListItem' => [ 'type' => 'structure', 'members' => [ 'groundStations' => [ 'shape' => 'GroundStationIdList', ], 'noradSatelliteID' => [ 'shape' => 'noradSatelliteID', ], 'satelliteArn' => [ 'shape' => 'satelliteArn', ], 'satelliteId' => [ 'shape' => 'Uuid', ], ], ], 'SecurityDetails' => [ 'type' => 'structure', 'required' => [ 'roleArn', 'securityGroupIds', 'subnetIds', ], 'members' => [ 'roleArn' => [ 'shape' => 'RoleArn', ], 'securityGroupIds' => [ 'shape' => 'SecurityGroupIdList', ], 'subnetIds' => [ 'shape' => 'SubnetList', ], ], ], 'SecurityGroupIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'SocketAddress' => [ 'type' => 'structure', 'required' => [ 'name', 'port', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'port' => [ 'shape' => 'Integer', ], ], ], 'Source' => [ 'type' => 'structure', 'members' => [ 'configDetails' => [ 'shape' => 'ConfigDetails', ], 'configId' => [ 'shape' => 'String', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', ], 'dataflowSourceRegion' => [ 'shape' => 'String', ], ], ], 'SpectrumConfig' => [ 'type' => 'structure', 'required' => [ 'bandwidth', 'centerFrequency', ], 'members' => [ 'bandwidth' => [ 'shape' => 'FrequencyBandwidth', ], 'centerFrequency' => [ 'shape' => 'Frequency', ], 'polarization' => [ 'shape' => 'Polarization', ], ], ], 'StatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContactStatus', ], ], 'String' => [ 'type' => 'string', ], 'SubnetList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TrackingConfig' => [ 'type' => 'structure', 'required' => [ 'autotrack', ], 'members' => [ 'autotrack' => [ 'shape' => 'Criticality', ], ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateConfigRequest' => [ 'type' => 'structure', 'required' => [ 'configData', 'configId', 'configType', 'name', ], 'members' => [ 'configData' => [ 'shape' => 'ConfigTypeData', ], 'configId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'configId', ], 'configType' => [ 'shape' => 'ConfigCapabilityType', 'location' => 'uri', 'locationName' => 'configType', ], 'name' => [ 'shape' => 'SafeName', ], ], ], 'UpdateMissionProfileRequest' => [ 'type' => 'structure', 'required' => [ 'missionProfileId', ], 'members' => [ 'contactPostPassDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'contactPrePassDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'dataflowEdges' => [ 'shape' => 'DataflowEdgeList', ], 'minimumViableContactDurationSeconds' => [ 'shape' => 'DurationInSeconds', ], 'missionProfileId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'missionProfileId', ], 'name' => [ 'shape' => 'SafeName', ], 'trackingConfigArn' => [ 'shape' => 'ConfigArn', ], ], ], 'UplinkEchoConfig' => [ 'type' => 'structure', 'required' => [ 'antennaUplinkConfigArn', 'enabled', ], 'members' => [ 'antennaUplinkConfigArn' => [ 'shape' => 'ConfigArn', ], 'enabled' => [ 'shape' => 'Boolean', ], ], ], 'UplinkSpectrumConfig' => [ 'type' => 'structure', 'required' => [ 'centerFrequency', ], 'members' => [ 'centerFrequency' => [ 'shape' => 'Frequency', ], 'polarization' => [ 'shape' => 'Polarization', ], ], ], 'Uuid' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}', ], 'noradSatelliteID' => [ 'type' => 'integer', 'max' => 99999, 'min' => 1, ], 'satelliteArn' => [ 'type' => 'string', ], ],];
