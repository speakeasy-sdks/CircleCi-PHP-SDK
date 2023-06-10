# CancelJobResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `messageResponse`                                                                                            | [?CancelJobMessageResponse](../../models/operations/CancelJobMessageResponse.md)                             | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `cancelJobDefaultApplicationJSONObject`                                                                      | [?CancelJobDefaultApplicationJSON](../../models/operations/CancelJobDefaultApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | Error response.                                                                                              |