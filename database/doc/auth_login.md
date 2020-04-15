VERSION: 0.1


## {{api}}/auth/login

### Login with password [POST]

+ Request (application/json)

        {
            "mobile": "09101230001",
            "password": "password"
        }



+ Response 200 (application/json)

        {
            "data": {
                "token": {
                    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQzYTcyMjhkNjhiN2RlMDZhYWI2ZWU2YjA4MmI1ZWVjMTFjY2I1NThhNTJhZDVlN2E1NWUzZWE4ZTQ0YjliY2JhZGM0NmVmOGQ2Yjc1MGMiLCJpYXQiOjE1ODY5NTM1NzksIm5iZiI6MTU4Njk1MzU3OSwiZXhwIjoxNjE4NDg5NTc5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.sKeR4fwBd0pGivHViJ9Bqgu2IMo1OB-NECRiTvCL341-L7btgwBmcUQuR1Hqq4vrrTNSfyYXFuRLsQHXlhbnelFYWvoF2O4aj32sYbOi4JlIz-HLgIJI-9jD-GCQ_AXU07Zaw-RKTwCbsHqn7Ve8Je2BwB1orRxoODOjcffLbAykBo4yUzHBOGQVH4g_HAjpzpPiGRbWSKr0URYb9hThgZz6UMPSUwizaX91nZR6Rjg7ElCgJeoZvARnjEwtEpt3gscNxxCgFXLjf85H-XBMwDJg9Q4MZsN5aqgzcW0nnLOuAFGHFcatxfiQnuK_j-e95764Ly4OESlpC_2X8c1gjYYcl-W-xo619eH2wo9l8RmTaG9crOjGuCE6G_PjbDmj9RBWCkbddl4sdvZeTSw-J-LgUG01TdfQvyKyMJmBimuW6OrB4eNwM52UUOrl4buzGYTcnx2H3rn5wwcfDp14EPl0b25ONkg07b8BQAG_B7U0QPrLaWeqgoxQUnOXqQh1BSrgmopR01bo6yudBqvkwlJzyYRYO-XKL7RRn6_0UECLU3Rw72Rvt7jZGeLfz9_9rL4I2kGx9BES0XbaLGxKislSTEjjIDWqFFpelOyN5GEy2jKD3xUCAcDYRtsDyU8Vu-JoL9U-jO7yvV8caT9kkbYTVu9A5OrZFiukYMLojtI",
                    "token_type": "Bearer",
                    "expires_at": "2021-04-15T12:26:19.000000Z"
                },
                "user": {
                    "id": 1,
                    "name": "super admin",
                    "email": "super-admin@gmail.com",
                    "email_verified_at": "2020-04-13T17:39:23.000000Z",
                    "created_at": "2020-04-13T17:39:23.000000Z",
                    "updated_at": "2020-04-13T17:39:23.000000Z",
                    "mobile": "09101230001",
                    "avatar_path": "/img/avatars/avatar1.jpg",
                    "gender": "MALE",
                    "status": 1
                }
            }
        }



