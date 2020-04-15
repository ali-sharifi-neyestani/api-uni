VERSION: 0.1


##  {{api}}/requests

### create new requests [POST]

+ Request (application/json)

        {
            "subject": "subject",
            "body": "bodybodybodybodybodybody"
        }



+ Response 200 (application/json)

        {
            "data": {
                "subject": "subject",
                "body": "bodybodybodybodybodybody",
                "user_id": 1,
                "updated_at": "2020-04-14T20:00:57.000000Z",
                "created_at": "2020-04-14T20:00:57.000000Z",
                "id": 1
            }
        }



