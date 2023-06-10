# GetCurrentUserResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `user`                                                                                                       | [?GetCurrentUserUser](../../models/operations/GetCurrentUserUser.md)                                         | :heavy_minus_sign:                                                                                           | User login information.                                                                                      |
| `getCurrentUserDefaultApplicationJSONObject`                                                                 | [?GetCurrentUserDefaultApplicationJSON](../../models/operations/GetCurrentUserDefaultApplicationJSON.md)     | :heavy_minus_sign:                                                                                           | Error response.                                                                                              |