# GetProjectWorkflowTestMetrics200ApplicationJSONMostFailedTests


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `classname`                                                           | *string*                                                              | :heavy_check_mark:                                                    | The class the test belongs to.                                        |
| `failedRuns`                                                          | *int*                                                                 | :heavy_check_mark:                                                    | The number of times the test failed                                   |
| `file`                                                                | *string*                                                              | :heavy_check_mark:                                                    | The file the test belongs to.                                         |
| `flaky`                                                               | *bool*                                                                | :heavy_check_mark:                                                    | Whether the test is flaky.                                            |
| `jobName`                                                             | *string*                                                              | :heavy_check_mark:                                                    | The name of the job.                                                  |
| `p95Duration`                                                         | *float*                                                               | :heavy_check_mark:                                                    | The 95th percentile duration, in seconds, among a group of test runs. |
| `source`                                                              | *string*                                                              | :heavy_check_mark:                                                    | The source of the test.                                               |
| `testName`                                                            | *string*                                                              | :heavy_check_mark:                                                    | The name of the test.                                                 |
| `totalRuns`                                                           | *int*                                                                 | :heavy_check_mark:                                                    | The total number of times the test was run.                           |