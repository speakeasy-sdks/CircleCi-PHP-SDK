# RerunWorkflowResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `rerunWorkflow202ApplicationJSONObject`                                                                      | [?RerunWorkflow202ApplicationJSON](../../models/operations/RerunWorkflow202ApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | A confirmation message.                                                                                      |
| `rerunWorkflowDefaultApplicationJSONObject`                                                                  | [?RerunWorkflowDefaultApplicationJSON](../../models/operations/RerunWorkflowDefaultApplicationJSON.md)       | :heavy_minus_sign:                                                                                           | Error response.                                                                                              |