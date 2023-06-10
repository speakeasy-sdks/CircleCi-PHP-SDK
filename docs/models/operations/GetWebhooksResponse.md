# GetWebhooksResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `getWebhooks200ApplicationJSONObject`                                                                        | [?GetWebhooks200ApplicationJSON](../../models/operations/GetWebhooks200ApplicationJSON.md)                   | :heavy_minus_sign:                                                                                           | A list of webhooks                                                                                           |
| `getWebhooksDefaultApplicationJSONObject`                                                                    | [?GetWebhooksDefaultApplicationJSON](../../models/operations/GetWebhooksDefaultApplicationJSON.md)           | :heavy_minus_sign:                                                                                           | Error response.                                                                                              |