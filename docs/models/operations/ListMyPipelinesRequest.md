# ListMyPipelinesRequest


## Fields

| Field                                                                                          | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `pageToken`                                                                                    | *?string*                                                                                      | :heavy_minus_sign:                                                                             | A token to retrieve the next page of results.                                                  |
| `projectSlug`                                                                                  | *string*                                                                                       | :heavy_check_mark:                                                                             | Project slug in the form `vcs-slug/org-name/repo-name`. The `/` characters may be URL-escaped. |