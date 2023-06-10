# GetProjectWorkflowsPageDataResponse


## Fields

| Field                                                                                                                              | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                                      | *string*                                                                                                                           | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `statusCode`                                                                                                                       | *int*                                                                                                                              | :heavy_check_mark:                                                                                                                 | N/A                                                                                                                                |
| `rawResponse`                                                                                                                      | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                       | :heavy_minus_sign:                                                                                                                 | N/A                                                                                                                                |
| `getProjectWorkflowsPageData200ApplicationJSONObject`                                                                              | [?GetProjectWorkflowsPageData200ApplicationJSON](../../models/operations/GetProjectWorkflowsPageData200ApplicationJSON.md)         | :heavy_minus_sign:                                                                                                                 | Aggregated summary metrics and trends by workflow and branches                                                                     |
| `getProjectWorkflowsPageDataDefaultApplicationJSONObject`                                                                          | [?GetProjectWorkflowsPageDataDefaultApplicationJSON](../../models/operations/GetProjectWorkflowsPageDataDefaultApplicationJSON.md) | :heavy_minus_sign:                                                                                                                 | Error response.                                                                                                                    |