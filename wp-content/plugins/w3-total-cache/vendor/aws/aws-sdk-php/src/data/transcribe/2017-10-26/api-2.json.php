<?php
// This file was auto-generated from sdk-root/src/data/transcribe/2017-10-26/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-10-26', 'endpointPrefix' => 'transcribe', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Transcribe Service', 'serviceId' => 'Transcribe', 'signatureVersion' => 'v4', 'signingName' => 'transcribe', 'targetPrefix' => 'Transcribe', 'uid' => 'transcribe-2017-10-26', ], 'operations' => [ 'CreateLanguageModel' => [ 'name' => 'CreateLanguageModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLanguageModelRequest', ], 'output' => [ 'shape' => 'CreateLanguageModelResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'CreateMedicalVocabulary' => [ 'name' => 'CreateMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateMedicalVocabularyRequest', ], 'output' => [ 'shape' => 'CreateMedicalVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'CreateVocabulary' => [ 'name' => 'CreateVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateVocabularyRequest', ], 'output' => [ 'shape' => 'CreateVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'CreateVocabularyFilter' => [ 'name' => 'CreateVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateVocabularyFilterRequest', ], 'output' => [ 'shape' => 'CreateVocabularyFilterResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'DeleteLanguageModel' => [ 'name' => 'DeleteLanguageModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteLanguageModelRequest', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteMedicalTranscriptionJob' => [ 'name' => 'DeleteMedicalTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteMedicalTranscriptionJobRequest', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteMedicalVocabulary' => [ 'name' => 'DeleteMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteMedicalVocabularyRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteTranscriptionJob' => [ 'name' => 'DeleteTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTranscriptionJobRequest', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteVocabulary' => [ 'name' => 'DeleteVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteVocabularyRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteVocabularyFilter' => [ 'name' => 'DeleteVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteVocabularyFilterRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DescribeLanguageModel' => [ 'name' => 'DescribeLanguageModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLanguageModelRequest', ], 'output' => [ 'shape' => 'DescribeLanguageModelResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], 'GetMedicalTranscriptionJob' => [ 'name' => 'GetMedicalTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMedicalTranscriptionJobRequest', ], 'output' => [ 'shape' => 'GetMedicalTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], 'GetMedicalVocabulary' => [ 'name' => 'GetMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMedicalVocabularyRequest', ], 'output' => [ 'shape' => 'GetMedicalVocabularyResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'BadRequestException', ], ], ], 'GetTranscriptionJob' => [ 'name' => 'GetTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTranscriptionJobRequest', ], 'output' => [ 'shape' => 'GetTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], 'GetVocabulary' => [ 'name' => 'GetVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetVocabularyRequest', ], 'output' => [ 'shape' => 'GetVocabularyResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'BadRequestException', ], ], ], 'GetVocabularyFilter' => [ 'name' => 'GetVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetVocabularyFilterRequest', ], 'output' => [ 'shape' => 'GetVocabularyFilterResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'BadRequestException', ], ], ], 'ListLanguageModels' => [ 'name' => 'ListLanguageModels', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListLanguageModelsRequest', ], 'output' => [ 'shape' => 'ListLanguageModelsResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListMedicalTranscriptionJobs' => [ 'name' => 'ListMedicalTranscriptionJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMedicalTranscriptionJobsRequest', ], 'output' => [ 'shape' => 'ListMedicalTranscriptionJobsResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListMedicalVocabularies' => [ 'name' => 'ListMedicalVocabularies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMedicalVocabulariesRequest', ], 'output' => [ 'shape' => 'ListMedicalVocabulariesResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListTranscriptionJobs' => [ 'name' => 'ListTranscriptionJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTranscriptionJobsRequest', ], 'output' => [ 'shape' => 'ListTranscriptionJobsResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListVocabularies' => [ 'name' => 'ListVocabularies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListVocabulariesRequest', ], 'output' => [ 'shape' => 'ListVocabulariesResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListVocabularyFilters' => [ 'name' => 'ListVocabularyFilters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListVocabularyFiltersRequest', ], 'output' => [ 'shape' => 'ListVocabularyFiltersResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'StartMedicalTranscriptionJob' => [ 'name' => 'StartMedicalTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartMedicalTranscriptionJobRequest', ], 'output' => [ 'shape' => 'StartMedicalTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'StartTranscriptionJob' => [ 'name' => 'StartTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartTranscriptionJobRequest', ], 'output' => [ 'shape' => 'StartTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'UpdateMedicalVocabulary' => [ 'name' => 'UpdateMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateMedicalVocabularyRequest', ], 'output' => [ 'shape' => 'UpdateMedicalVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'UpdateVocabulary' => [ 'name' => 'UpdateVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateVocabularyRequest', ], 'output' => [ 'shape' => 'UpdateVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'UpdateVocabularyFilter' => [ 'name' => 'UpdateVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateVocabularyFilterRequest', ], 'output' => [ 'shape' => 'UpdateVocabularyFilterResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], ], 'shapes' => [ 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'exception' => true, ], 'BaseModelName' => [ 'type' => 'string', 'enum' => [ 'NarrowBand', 'WideBand', ], ], 'Boolean' => [ 'type' => 'boolean', ], 'CLMLanguageCode' => [ 'type' => 'string', 'enum' => [ 'en-US', 'hi-IN', 'es-US', 'en-GB', 'en-AU', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ContentRedaction' => [ 'type' => 'structure', 'required' => [ 'RedactionType', 'RedactionOutput', ], 'members' => [ 'RedactionType' => [ 'shape' => 'RedactionType', ], 'RedactionOutput' => [ 'shape' => 'RedactionOutput', ], ], ], 'CreateLanguageModelRequest' => [ 'type' => 'structure', 'required' => [ 'LanguageCode', 'BaseModelName', 'ModelName', 'InputDataConfig', ], 'members' => [ 'LanguageCode' => [ 'shape' => 'CLMLanguageCode', ], 'BaseModelName' => [ 'shape' => 'BaseModelName', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], ], ], 'CreateLanguageModelResponse' => [ 'type' => 'structure', 'members' => [ 'LanguageCode' => [ 'shape' => 'CLMLanguageCode', ], 'BaseModelName' => [ 'shape' => 'BaseModelName', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'ModelStatus' => [ 'shape' => 'ModelStatus', ], ], ], 'CreateMedicalVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', 'LanguageCode', 'VocabularyFileUri', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyFileUri' => [ 'shape' => 'Uri', ], ], ], 'CreateMedicalVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], ], ], 'CreateVocabularyFilterRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyFilterName', 'LanguageCode', ], 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'Words' => [ 'shape' => 'Words', ], 'VocabularyFilterFileUri' => [ 'shape' => 'Uri', ], ], ], 'CreateVocabularyFilterResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], ], ], 'CreateVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', 'LanguageCode', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'Phrases' => [ 'shape' => 'Phrases', ], 'VocabularyFileUri' => [ 'shape' => 'Uri', ], ], ], 'CreateVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], ], ], 'DataAccessRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso-{0,1}[a-z]{0,1}):iam::[0-9]{0,63}:role/[A-Za-z0-9:_/+=,@.-]{0,1024}$', ], 'DateTime' => [ 'type' => 'timestamp', ], 'DeleteLanguageModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'DeleteMedicalTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'MedicalTranscriptionJobName', ], 'members' => [ 'MedicalTranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], ], ], 'DeleteMedicalVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'DeleteTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'TranscriptionJobName', ], 'members' => [ 'TranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], ], ], 'DeleteVocabularyFilterRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyFilterName', ], 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], ], ], 'DeleteVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'DescribeLanguageModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'DescribeLanguageModelResponse' => [ 'type' => 'structure', 'members' => [ 'LanguageModel' => [ 'shape' => 'LanguageModel', ], ], ], 'FailureReason' => [ 'type' => 'string', ], 'GetMedicalTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'MedicalTranscriptionJobName', ], 'members' => [ 'MedicalTranscriptionJ���nfU  ���nfU                  ��MnfU          