# GetEnvVarResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `environmentVariablePair`                                                                                    | [?GetEnvVarEnvironmentVariablePair](../../models/operations/GetEnvVarEnvironmentVariablePair.md)             | :heavy_minus_sign:                                                                                           | The environment variable.                                                                                    |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `getEnvVarDefaultApplicationJSONObject`                                                                      | [?GetEnvVarDefaultApplicationJSON](../../models/operations/GetEnvVarDefaultApplicationJSON.md)               | :heavy_minus_sign:                                                                                           | Error response.                                                                                              |