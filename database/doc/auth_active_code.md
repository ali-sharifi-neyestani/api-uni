VERSION: 0.1


## {{api}}/auth/active/code

### Active Code [POST]

+ Request (application/json)

        {
            "mobile" : "09128182953",
            "code": "4865"
        }





+ Response 200 (application/json)

        {
            "data": {
                "token": {
                    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjY4NGMyZjM2ZTZhYzEzZTI3NDM0NmU0YjdkYjk5NWYxMWY1OGRjODJjYjRkMjBiYzg0YmVhNmNkZDIyOWYyNWE3OThkZTBkMjM0NjNkYWQiLCJpYXQiOjE1ODY5NjQ0NTQsIm5iZiI6MTU4Njk2NDQ1NCwiZXhwIjoxNjE4NTAwNDU0LCJzdWIiOiI3MiIsInNjb3BlcyI6W119.f0f6F0MVorCgCLgs2pxMmlEBmUYK8gogp_qngaKRp7wzNcXSiw-Oqm_8B4gTykA5zyeg3-WrPVSbvvfUNTD1N-YR3cR585KSTk6XX48sG7hUkKpy5I6yO0ltN0OInuVYmB3qLY4SQDie5hnlYD9OVRn8TWPYpjor5KiV0kS6KKCh4Yzc6px-PZk958SX9ovlcCfJ-S5R82UmYKjjl8aeK7SBNWp1vqdNQqLJdkZymLg8rJLFNaIhUf8S5TD46n01JlYrjDYyMp1GZcFAnioSXMERcZEeFwxAIMse_yXdk65Z4h5J08AqJl6sudA9eQQS6uMnPcVVKDR7lic3rlUHUnMbn7GKrT2FTmJJ9fxZYd9uut2RZkbKKyENC5MAonW3jaEzfBUGHjBMFRZ9FfKExrHqOFUUKoCNXIUJ9Iplet3tLSoLJ9ltTKxzGobmNAFxr1XS6m-TT8-LqHOPRMjzHqkE4E37F5rBdb8zsf-jq9GMEt0jxW8MVhww2mSO1AYYrYOpJSBM9PCrFpWXWwpeDGH8yNlOswq67LmDKBMGbO5k_udLN1CWTOHSHsqEhtOk9ycRmQybapw0go3K8uA3P0DZXAew6i2wlxTbev8XgYb3jtpDw50ACwds3FoDMq5yuT159e16WEfZ9SxqXilHpnirowpz-_LJvbktEe0KX1s",
                    "token_type": "Bearer",
                    "expires_at": "2021-04-15T15:27:34.000000Z"
                },
                "user": {
                    "id": 72,
                    "name": "Ali Sharifi Neyestani",
                    "email": null,
                    "email_verified_at": null,
                    "created_at": "2020-04-15T15:26:19.000000Z",
                    "updated_at": "2020-04-15T15:27:34.000000Z",
                    "mobile": "09128182953",
                    "avatar_path": null,
                    "gender": "MALE",
                    "status": 1,
                    "national_code": null
                }
            }
        }



