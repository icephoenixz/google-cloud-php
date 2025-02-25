<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START securitycentermanagement_v1_generated_SecurityCenterManagement_SimulateSecurityHealthAnalyticsCustomModule_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\SecurityCenterManagement\V1\Client\SecurityCenterManagementClient;
use Google\Cloud\SecurityCenterManagement\V1\CustomConfig;
use Google\Cloud\SecurityCenterManagement\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest;
use Google\Cloud\SecurityCenterManagement\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource;
use Google\Cloud\SecurityCenterManagement\V1\SimulateSecurityHealthAnalyticsCustomModuleResponse;

/**
 * Simulates the result of using a
 * [SecurityHealthAnalyticsCustomModule][google.cloud.securitycentermanagement.v1.SecurityHealthAnalyticsCustomModule]
 * to check a resource.
 *
 * @param string $parent               The relative resource name of the organization, project, or
 *                                     folder. For more information about relative resource names, see [AIP-122:
 *                                     Resource names](https://google.aip.dev/122). Example:
 *                                     `organizations/{organization_id}`.
 * @param string $resourceResourceType The type of the resource. For example,
 *                                     `compute.googleapis.com/Disk`.
 */
function simulate_security_health_analytics_custom_module_sample(
    string $parent,
    string $resourceResourceType
): void {
    // Create a client.
    $securityCenterManagementClient = new SecurityCenterManagementClient();

    // Prepare the request message.
    $customConfig = new CustomConfig();
    $resource = (new SimulatedResource())
        ->setResourceType($resourceResourceType);
    $request = (new SimulateSecurityHealthAnalyticsCustomModuleRequest())
        ->setParent($parent)
        ->setCustomConfig($customConfig)
        ->setResource($resource);

    // Call the API and handle any network failures.
    try {
        /** @var SimulateSecurityHealthAnalyticsCustomModuleResponse $response */
        $response = $securityCenterManagementClient->simulateSecurityHealthAnalyticsCustomModule($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $parent = '[PARENT]';
    $resourceResourceType = '[RESOURCE_TYPE]';

    simulate_security_health_analytics_custom_module_sample($parent, $resourceResourceType);
}
// [END securitycentermanagement_v1_generated_SecurityCenterManagement_SimulateSecurityHealthAnalyticsCustomModule_sync]
