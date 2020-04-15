VERSION: 0.1


## {{api}}/auth/register

### Register with mobile [POST]

+ Request (application/json)

        {
            "name" : "Ali Sharifi Neyestani",
            "mobile" : "09128182953",
            "password": "password"
        }




+ Response 200 (application/json)

        {
            "data": {
                "mobile": "09128182953",
            },
            "message": "It's requires code to be verified"
        }



