<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class Datascans
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataDiscovery::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Processing::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�8
(google/cloud/dataplex/v1/datascans.protogoogle.cloud.dataplex.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.proto-google/cloud/dataplex/v1/data_discovery.proto+google/cloud/dataplex/v1/data_profile.proto+google/cloud/dataplex/v1/data_quality.proto)google/cloud/dataplex/v1/processing.proto(google/cloud/dataplex/v1/resources.proto&google/cloud/dataplex/v1/service.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateDataScanRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location:
	data_scan (2".google.cloud.dataplex.v1.DataScanB�A
data_scan_id (	B�A
validate_only (B�A"�
UpdateDataScanRequest:
	data_scan (2".google.cloud.dataplex.v1.DataScanB�A4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only (B�A"c
DeleteDataScanRequest6
name (	B(�A�A"
 dataplex.googleapis.com/DataScan
force (B�A"�
GetDataScanRequest6
name (	B(�A�A"
 dataplex.googleapis.com/DataScanL
view (29.google.cloud.dataplex.v1.GetDataScanRequest.DataScanViewB�A"C
DataScanView
DATA_SCAN_VIEW_UNSPECIFIED 	
BASIC
FULL
"�
ListDataScansRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"}
ListDataScansResponse6

data_scans (2".google.cloud.dataplex.v1.DataScan
next_page_token (	
unreachable (	"L
RunDataScanRequest6
name (	B(�A�A"
 dataplex.googleapis.com/DataScan"I
RunDataScanResponse2
job (2%.google.cloud.dataplex.v1.DataScanJob"�
GetDataScanJobRequest9
name (	B+�A�A%
#dataplex.googleapis.com/DataScanJobR
view (2?.google.cloud.dataplex.v1.GetDataScanJobRequest.DataScanJobViewB�A"J
DataScanJobView"
DATA_SCAN_JOB_VIEW_UNSPECIFIED 	
BASIC
FULL
"�
ListDataScanJobsRequest8
parent (	B(�A�A"
 dataplex.googleapis.com/DataScan
	page_size (B�A

page_token (	B�A
filter (	B�A"r
ListDataScanJobsResponse=
data_scan_jobs (2%.google.cloud.dataplex.v1.DataScanJob
next_page_token (	"4
GenerateDataQualityRulesRequest
name (	B�A"[
 GenerateDataQualityRulesResponse7
rule (2).google.cloud.dataplex.v1.DataQualityRule"�
DataScan
name (	B�A�A
uid (	B�A���
description (	B�A
display_name (	B�AC
labels (2..google.cloud.dataplex.v1.DataScan.LabelsEntryB�A3
state (2.google.cloud.dataplex.v1.StateB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A7
data	 (2$.google.cloud.dataplex.v1.DataSourceB�AM
execution_spec
 (20.google.cloud.dataplex.v1.DataScan.ExecutionSpecB�AQ
execution_status (22.google.cloud.dataplex.v1.DataScan.ExecutionStatusB�A9
type (2&.google.cloud.dataplex.v1.DataScanTypeB�AF
data_quality_specd (2).google.cloud.dataplex.v1.DataQualitySpecH F
data_profile_spece (2).google.cloud.dataplex.v1.DataProfileSpecH J
data_discovery_specf (2+.google.cloud.dataplex.v1.DataDiscoverySpecH P
data_quality_result� (2+.google.cloud.dataplex.v1.DataQualityResultB�AHP
data_profile_result� (2+.google.cloud.dataplex.v1.DataProfileResultB�AHT
data_discovery_result� (2-.google.cloud.dataplex.v1.DataDiscoveryResultB�AHm
ExecutionSpec7
trigger (2!.google.cloud.dataplex.v1.TriggerB�A
fieldd (	B�AH B
incremental�
ExecutionStatus>
latest_job_start_time (2.google.protobuf.TimestampB�A<
latest_job_end_time (2.google.protobuf.TimestampB�A?
latest_job_create_time (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:8:c�A`
 dataplex.googleapis.com/DataScan<projects/{project}/locations/{location}/dataScans/{dataScan}B
specB
result"�
DataScanJob
name (	B�A�A
uid (	B�A���4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A?
state (2+.google.cloud.dataplex.v1.DataScanJob.StateB�A
message (	B�A9
type (2&.google.cloud.dataplex.v1.DataScanTypeB�AK
data_quality_specd (2).google.cloud.dataplex.v1.DataQualitySpecB�AH K
data_profile_spece (2).google.cloud.dataplex.v1.DataProfileSpecB�AH O
data_discovery_specf (2+.google.cloud.dataplex.v1.DataDiscoverySpecB�AH P
data_quality_result� (2+.google.cloud.dataplex.v1.DataQualityResultB�AHP
data_profile_result� (2+.google.cloud.dataplex.v1.DataProfileResultB�AHT
data_discovery_result� (2-.google.cloud.dataplex.v1.DataDiscoveryResultB�AH"q
State
STATE_UNSPECIFIED 
RUNNING
	CANCELING
	CANCELLED
	SUCCEEDED

FAILED
PENDING:q�An
#dataplex.googleapis.com/DataScanJobGprojects/{project}/locations/{location}/dataScans/{dataScan}/jobs/{job}B
specB
result*f
DataScanType
DATA_SCAN_TYPE_UNSPECIFIED 
DATA_QUALITY
DATA_PROFILE
DATA_DISCOVERY2�
DataScanService�
CreateDataScan/.google.cloud.dataplex.v1.CreateDataScanRequest.google.longrunning.Operation"��A
DataScanOperationMetadata�Aparent,data_scan,data_scan_id���:"-/v1/{parent=projects/*/locations/*}/dataScans:	data_scan�
UpdateDataScan/.google.cloud.dataplex.v1.UpdateDataScanRequest.google.longrunning.Operation"��A
DataScanOperationMetadata�Adata_scan,update_mask���D27/v1/{data_scan.name=projects/*/locations/*/dataScans/*}:	data_scan�
DeleteDataScan/.google.cloud.dataplex.v1.DeleteDataScanRequest.google.longrunning.Operation"i�A*
google.protobuf.EmptyOperationMetadata�Aname���/*-/v1/{name=projects/*/locations/*/dataScans/*}�
GetDataScan,.google.cloud.dataplex.v1.GetDataScanRequest".google.cloud.dataplex.v1.DataScan"<�Aname���/-/v1/{name=projects/*/locations/*/dataScans/*}�
ListDataScans..google.cloud.dataplex.v1.ListDataScansRequest/.google.cloud.dataplex.v1.ListDataScansResponse">�Aparent���/-/v1/{parent=projects/*/locations/*}/dataScans�
RunDataScan,.google.cloud.dataplex.v1.RunDataScanRequest-.google.cloud.dataplex.v1.RunDataScanResponse"C�Aname���6"1/v1/{name=projects/*/locations/*/dataScans/*}:run:*�
GetDataScanJob/.google.cloud.dataplex.v1.GetDataScanJobRequest%.google.cloud.dataplex.v1.DataScanJob"C�Aname���64/v1/{name=projects/*/locations/*/dataScans/*/jobs/*}�
ListDataScanJobs1.google.cloud.dataplex.v1.ListDataScanJobsRequest2.google.cloud.dataplex.v1.ListDataScanJobsResponse"E�Aparent���64/v1/{parent=projects/*/locations/*/dataScans/*}/jobs�
GenerateDataQualityRules9.google.cloud.dataplex.v1.GenerateDataQualityRulesRequest:.google.cloud.dataplex.v1.GenerateDataQualityRulesResponse"��Aname����"F/v1/{name=projects/*/locations/*/dataScans/*}:generateDataQualityRules:*ZR"M/v1/{name=projects/*/locations/*/dataScans/*/jobs/*}:generateDataQualityRules:*K�Adataplex.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBj
com.google.cloud.dataplex.v1BDataScansProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

