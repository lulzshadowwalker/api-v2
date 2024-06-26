# api-v2

> [Scribe docs](./public/docs/index.html)

<!-- vscode-markdown-toc -->
* 1. [End-point: Login](#End-point:Login)
	* 1.1. [Method: POST](#Method:POST)
	* 1.2. [Headers](#Headers)
	* 1.3. [Body formdata](#Bodyformdata)
	* 1.4. [Response: 200](#Response:200)
	* 1.5. [Response: 401](#Response:401)
* 2. [End-point: Logout](#End-point:Logout)
	* 2.1. [Method: GET](#Method:GET)
	* 2.2. [Response: 200](#Response:200-1)
	* 2.3. [Response: 401](#Response:401-1)
	* 2.4. [Response: 200](#Response:200-1)
* 3. [End-point: Get All Tickets](#End-point:GetAllTickets)
	* 3.1. [Method: GET](#Method:GET-1)
	* 3.2. [Headers](#Headers-1)
	* 3.3. [Query Params](#QueryParams)
	* 3.4. [Response: 200](#Response:200-1)
* 4. [End-point: Get Ticket By ID](#End-point:GetTicketByID)
	* 4.1. [Method: GET](#Method:GET-1)
	* 4.2. [Query Params](#QueryParams-1)
	* 4.3. [Response: 200](#Response:200-1)
	* 4.4. [Response: 200](#Response:200-1)
	* 4.5. [Response: 404](#Response:404)
* 5. [End-point: Create Ticket](#End-point:CreateTicket)
	* 5.1. [Method: POST](#Method:POST-1)
	* 5.2. [Headers](#Headers-1)
	* 5.3. [Body (**raw**)](#Bodyraw)
	* 5.4. [Response: 201](#Response:201)
	* 5.5. [Response: 422](#Response:422)
* 6. [End-point: Delete Ticket](#End-point:DeleteTicket)
	* 6.1. [Method: DELETE](#Method:DELETE)
	* 6.2. [Headers](#Headers-1)
	* 6.3. [Response: 404](#Response:404-1)
	* 6.4. [Response: 200](#Response:200-1)
* 7. [End-point: Update Ticket](#End-point:UpdateTicket)
	* 7.1. [Method: PATCH](#Method:PATCH)
	* 7.2. [Headers](#Headers-1)
	* 7.3. [Body (**raw**)](#Bodyraw-1)
	* 7.4. [Response: 200](#Response:200-1)
	* 7.5. [Response: 404](#Response:404-1)
	* 7.6. [Response: 401](#Response:401-1)
	* 7.7. [Response: 401](#Response:401-1)
* 8. [End-point: Replace Ticket](#End-point:ReplaceTicket)
	* 8.1. [Method: PUT](#Method:PUT)
	* 8.2. [Headers](#Headers-1)
	* 8.3. [Body (**raw**)](#Bodyraw-1)
	* 8.4. [Response: 200](#Response:200-1)
	* 8.5. [Response: 404](#Response:404-1)
	* 8.6. [Response: 404](#Response:404-1)
* 9. [End-point: Get All Authors](#End-point:GetAllAuthors)
	* 9.1. [Method: GET](#Method:GET-1)
	* 9.2. [Headers](#Headers-1)
	* 9.3. [Query Params](#QueryParams-1)
	* 9.4. [Response: 200](#Response:200-1)
* 10. [End-point: Get Author By ID](#End-point:GetAuthorByID)
	* 10.1. [Method: GET](#Method:GET-1)
	* 10.2. [Headers](#Headers-1)
	* 10.3. [Response: 200](#Response:200-1)
* 11. [End-point: Get Tickets](#End-point:GetTickets)
	* 11.1. [Method: GET](#Method:GET-1)
	* 11.2. [Query Params](#QueryParams-1)
	* 11.3. [Response: 200](#Response:200-1)
* 12. [End-point: Create Ticket](#End-point:CreateTicket-1)
	* 12.1. [Method: POST](#Method:POST-1)
	* 12.2. [Headers](#Headers-1)
	* 12.3. [Body (**raw**)](#Bodyraw-1)
	* 12.4. [Response: 201](#Response:201-1)
	* 12.5. [Response: 422](#Response:422-1)
* 13. [End-point: Replace Ticket](#End-point:ReplaceTicket-1)
	* 13.1. [Method: PUT](#Method:PUT-1)
	* 13.2. [Headers](#Headers-1)
	* 13.3. [Body (**raw**)](#Bodyraw-1)
	* 13.4. [Response: 200](#Response:200-1)
	* 13.5. [Response: 404](#Response:404-1)
* 14. [End-point: Update Ticket](#End-point:UpdateTicket-1)
	* 14.1. [Method: PATCH](#Method:PATCH-1)
	* 14.2. [Headers](#Headers-1)
	* 14.3. [Body (**raw**)](#Bodyraw-1)
	* 14.4. [Response: 200](#Response:200-1)
	* 14.5. [Response: 422](#Response:422-1)
	* 14.6. [Response: 404](#Response:404-1)

<!-- vscode-markdown-toc-config
	numbering=true
	autoSave=true
	/vscode-markdown-toc-config -->
<!-- /vscode-markdown-toc -->

# 📁 Collection: Auth 


##  1. <a name='End-point:Login'></a>End-point: Login
###  1.1. <a name='Method:POST'></a>Method: POST
>```
>{{base}}/auth/login
>```
###  1.2. <a name='Headers'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  1.3. <a name='Bodyformdata'></a>Body formdata

|Param|value|Type|
|---|---|---|
|email|carolyne.olson@example.net|text|
|password|password|text|


###  1.4. <a name='Response:200'></a>Response: 200
```json
{
    "data": {
        "token": "1|DIk3UjYEEHkmkgPJKaqMJcclO4zjDA4FGd0dXbzm91ccaece"
    },
    "message": "Authenticated",
    "status": 200
}
```

###  1.5. <a name='Response:401'></a>Response: 401
```json
{
    "message": "Invalid credentials",
    "status": 401
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  2. <a name='End-point:Logout'></a>End-point: Logout
###  2.1. <a name='Method:GET'></a>Method: GET
>```
>{{base}}/auth/logout
>```
###  2.2. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": [],
    "message": "Token revoked",
    "status": 200
}
```

###  2.3. <a name='Response:401-1'></a>Response: 401
```json
{
    "message": "Unauthenticated",
    "status": 401
}
```

###  2.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": [],
    "message": "Token revoked",
    "status": 200
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
# 📁 Collection: Tickets 


##  3. <a name='End-point:GetAllTickets'></a>End-point: Get All Tickets
###  3.1. <a name='Method:GET-1'></a>Method: GET
>```
>{{base}}/{{version}}/tickets
>```
###  3.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  3.3. <a name='QueryParams'></a>Query Params

|Param|value|
|---|---|
|filter[status]|OPEN|
|filter[title]|*sint*|
|filter[createdAt]|2024-06-15,2024-06-20|
|filter[updatedAt]|2024-06-15,2024-06-20|
|sort|-status,-createdAt|
|include|author|


###  3.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": [
        {
            "type": "ticket",
            "id": 52,
            "attributes": {
                "title": "possimus sint sed",
                "description": "Odio quia aut minima et non voluptatem. Qui at et dolor qui. In consequatur est consequatur quasi quo itaque delectus tempora.",
                "status": "OPEN",
                "createdAt": "2024-06-24T18:29:21.000000Z",
                "updatedAt": "2024-06-24T18:29:21.000000Z"
            },
            "links": {
                "self": "http://localhost:8000/api/v1/tickets/52"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 5
                    },
                    "links": {
                        "self": "http://localhost:8000/api/v1/authors/5"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 5,
                "attributes": {
                    "name": "Carlotta Keeling",
                    "email": "josephine66@example.net"
                },
                "links": {
                    "self": "http://localhost:8000/api/v1/authors/5"
                }
            }
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/v1/tickets?page=1",
        "last": "http://localhost:8000/api/v1/tickets?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/tickets?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost:8000/api/v1/tickets",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  4. <a name='End-point:GetTicketByID'></a>End-point: Get Ticket By ID
###  4.1. <a name='Method:GET-1'></a>Method: GET
>```
>{{base}}/{{version}}/tickets/1?include=author
>```
###  4.2. <a name='QueryParams-1'></a>Query Params

|Param|value|
|---|---|
|include|author|


###  4.3. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "ticket",
        "id": 1,
        "attributes": {
            "title": "consequatur expedita sapiente",
            "description": "Tenetur dolorem officia porro consequatur sit. Qui qui eum quas in natus quo quas. Consequatur et ipsum minima sunt incidunt in.",
            "status": "CLOSED",
            "createdAt": "2024-06-15T16:46:48.000000Z",
            "updatedAt": "2024-06-15T16:46:48.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/1"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 1
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/users/1"
                }
            }
        },
        "includes": {
            "type": "user",
            "id": 1,
            "attributes": {
                "name": "Dashawn Langworth",
                "email": "norbert.batz@example.org"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/users/1"
            }
        }
    }
}
```

###  4.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "ticket",
        "id": 1,
        "attributes": {
            "title": "consequatur expedita sapiente",
            "description": "Tenetur dolorem officia porro consequatur sit. Qui qui eum quas in natus quo quas. Consequatur et ipsum minima sunt incidunt in.",
            "status": "CLOSED",
            "createdAt": "2024-06-15T16:46:48.000000Z",
            "updatedAt": "2024-06-15T16:46:48.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/1"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 1
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/users/1"
                }
            }
        }
    }
}
```

###  4.5. <a name='Response:404'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/tickets/128"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  5. <a name='End-point:CreateTicket'></a>End-point: Create Ticket
###  5.1. <a name='Method:POST-1'></a>Method: POST
>```
>{{base}}/{{version}}/tickets
>```
###  5.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  5.3. <a name='Bodyraw'></a>Body (**raw**)

```json
{
    "data": {
        "attributes": {
            "title": "Ticket no. 1",
            "description": "hello, ticket.",
            "status": "OPEN"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 2
                }
            }
        }
    }
}
```

###  5.4. <a name='Response:201'></a>Response: 201
```json
{
    "data": {
        "type": "ticket",
        "id": 105,
        "attributes": {
            "title": "Ticket no. 1",
            "description": "hello, ticket.",
            "status": "OPEN",
            "createdAt": "2024-06-16T12:44:15.000000Z",
            "updatedAt": "2024-06-16T12:44:15.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/105"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 2
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/2"
                }
            }
        },
        "includes": {
            "type": "author",
            "id": 2,
            "attributes": {
                "name": "Fletcher Block",
                "email": "sporer.donnell@example.org"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/authors/2"
            }
        }
    }
}
```

###  5.5. <a name='Response:422'></a>Response: 422
```json
{
    "errors": [
        {
            "status": 422,
            "message": "The data field is required.",
            "source": "data"
        },
        {
            "status": 422,
            "message": "The data.attributes field is required.",
            "source": "data.attributes"
        },
        {
            "status": 422,
            "message": "The data.attributes.title field is required.",
            "source": "data.attributes.title"
        },
        {
            "status": 422,
            "message": "The data.attributes.description field is required.",
            "source": "data.attributes.description"
        },
        {
            "status": 422,
            "message": "The status field must be either OPEN or CLOSED.",
            "source": "data.attributes.status"
        },
        {
            "status": 422,
            "message": "The author field is required.",
            "source": "author"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  6. <a name='End-point:DeleteTicket'></a>End-point: Delete Ticket
###  6.1. <a name='Method:DELETE'></a>Method: DELETE
>```
>{{base}}/{{version}}/tickets/2
>```
###  6.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  6.3. <a name='Response:404-1'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/tickets/123123"
        }
    ]
}
```

###  6.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": [],
    "message": "Ticket with id 2 has been deleted",
    "status": 200
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  7. <a name='End-point:UpdateTicket'></a>End-point: Update Ticket
###  7.1. <a name='Method:PATCH'></a>Method: PATCH
>```
>{{base}}/{{version}}/tickets/6
>```
###  7.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  7.3. <a name='Bodyraw-1'></a>Body (**raw**)

```json
{
    "data": {
        "attributes": {
            "title": "Ticket no. 439,",
            "status": "CLOSED"
        }
        
    }
}
```

###  7.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "ticket",
        "id": 4,
        "attributes": {
            "title": "Ticket no. 439,",
            "description": "Possimus quidem sit veniam necessitatibus nesciunt in. Deleniti eius voluptas accusamus sit nihil eum. Adipisci error possimus beatae. Omnis eos qui ipsam consequatur.",
            "status": "CLOSED",
            "createdAt": "2024-06-15T16:46:48.000000Z",
            "updatedAt": "2024-06-19T14:28:14.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/4"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 6
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/6"
                }
            }
        }
    }
}
```

###  7.5. <a name='Response:404-1'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/tickets/413"
        }
    ]
}
```

###  7.6. <a name='Response:401-1'></a>Response: 401
```json
{
    "message": "Unauthorized",
    "status": 401
}
```

###  7.7. <a name='Response:401-1'></a>Response: 401
```json
{
    "errors": [
        {
            "status": 403,
            "message": "Forbidden",
            "source": ""
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  8. <a name='End-point:ReplaceTicket'></a>End-point: Replace Ticket
###  8.1. <a name='Method:PUT'></a>Method: PUT
>```
>{{base}}/{{version}}/tickets/6
>```
###  8.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  8.3. <a name='Bodyraw-1'></a>Body (**raw**)

```json
{
    "data": {
        "attributes": {
            "title": "new Ticket no. 1",
            "description": "new hello, ticket.",
            "status": "CLOSED"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 9
                }
            }
        }
    }
}
```

###  8.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "ticket",
        "id": 6,
        "attributes": {
            "title": "new Ticket no. 1",
            "description": "new hello, ticket.",
            "status": "CLOSED",
            "createdAt": "2024-06-15T16:46:48.000000Z",
            "updatedAt": "2024-06-19T14:29:27.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/6"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 9
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/9"
                }
            }
        }
    }
}
```

###  8.5. <a name='Response:404-1'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/tickets/413"
        }
    ]
}
```

###  8.6. <a name='Response:404-1'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/tickets/169"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
# 📁 Collection: Authors 


##  9. <a name='End-point:GetAllAuthors'></a>End-point: Get All Authors
###  9.1. <a name='Method:GET-1'></a>Method: GET
>```
>{{base}}/{{version}}/authors?filter[id]=1,3,5,7&filter[name]=*s*&filter[createdAt]=2024-06-15,2024-06-20&filter[updatedAt]=2024-06-15,2024-06-20&filter[email]=*.com&sort=-createdAt,name
>```
###  9.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  9.3. <a name='QueryParams-1'></a>Query Params

|Param|value|
|---|---|
|filter[id]|1,3,5,7|
|filter[name]|*s*|
|filter[createdAt]|2024-06-15,2024-06-20|
|filter[updatedAt]|2024-06-15,2024-06-20|
|filter[email]|*.com|
|sort|-createdAt,name|


###  9.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": [
        {
            "type": "author",
            "id": 8,
            "attributes": {
                "name": "Annie Hansen",
                "email": "jason.lehner@example.com"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 6,
                    "attributes": {
                        "title": "assumenda nemo ut",
                        "description": "Aperiam ab voluptatum consequatur numquam. Nesciunt rerum nam non quia laboriosam neque dicta. Totam itaque repudiandae inventore earum rerum aut. Porro ducimus ratione ut. Cumque sed molestiae in.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/6"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 8,
                    "attributes": {
                        "title": "doloremque repellat possimus",
                        "description": "Voluptatem sequi incidunt recusandae fuga. Non architecto a aspernatur placeat repudiandae. Aut autem quidem blanditiis officia deleniti dolorem.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/8"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 17,
                    "attributes": {
                        "title": "ex et impedit",
                        "description": "Aut ex aut et qui earum quo numquam. Autem illo ut similique tenetur iure sed. Accusamus autem similique quo eum hic. Odio veniam quia mollitia mollitia non.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/17"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 21,
                    "attributes": {
                        "title": "adipisci nulla dolor",
                        "description": "Delectus praesentium voluptatem similique eum sunt nihil. Ipsum est ullam dolor error.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/21"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 42,
                    "attributes": {
                        "title": "tenetur delectus assumenda",
                        "description": "Mollitia alias quia et quo corporis rerum numquam est. Placeat repellat rerum soluta et sit voluptates. Reiciendis corrupti quam accusantium voluptate. Amet quas vel molestias ut porro non.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/42"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 61,
                    "attributes": {
                        "title": "ipsum sequi et",
                        "description": "Unde magnam ea quo dicta. Consequatur itaque doloribus at deserunt eveniet libero minus consequatur. Nihil sint voluptas velit consequatur minus dolor ut. Repellendus et et praesentium voluptatibus non cumque nihil.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/61"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 65,
                    "attributes": {
                        "title": "eum nisi eum",
                        "description": "Repellat natus nihil quisquam ipsam doloremque recusandae. Est sed eos sit hic itaque. Fuga ipsum ratione veritatis ipsam.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/65"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 68,
                    "attributes": {
                        "title": "est voluptas iste",
                        "description": "Consequatur deserunt libero odit quisquam aspernatur veniam iste. Ut quos unde facilis enim labore veritatis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/68"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 75,
                    "attributes": {
                        "title": "quos in sit",
                        "description": "Iste id libero veniam illum animi beatae. Cumque occaecati rerum nam dicta cupiditate non neque. Pariatur dignissimos dignissimos officia sunt rerum alias perspiciatis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/75"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 93,
                    "attributes": {
                        "title": "dolore est autem",
                        "description": "Et nihil quibusdam blanditiis facilis et minus neque. Iure blanditiis optio aspernatur minima. Tempora enim quia veritatis. Eos quia iste distinctio in similique praesentium.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/93"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 8
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/8"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/8"
            }
        },
        {
            "type": "author",
            "id": 1,
            "attributes": {
                "name": "Dashawn Langworth",
                "email": "norbert.batz@example.org"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 1,
                    "attributes": {
                        "title": "consequatur expedita sapiente",
                        "description": "Tenetur dolorem officia porro consequatur sit. Qui qui eum quas in natus quo quas. Consequatur et ipsum minima sunt incidunt in.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/1"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 7,
                    "attributes": {
                        "title": "qui qui impedit",
                        "description": "Consectetur ipsam molestiae dolores rem iste. Sed sint molestiae quia similique quia et eius dicta. Nobis omnis esse ad est.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/7"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 15,
                    "attributes": {
                        "title": "excepturi dolores expedita",
                        "description": "Debitis in quibusdam eum et aut. Iste ducimus corrupti optio possimus id sint. Ut quos sit vero quidem nam.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/15"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 20,
                    "attributes": {
                        "title": "sed quia voluptatem",
                        "description": "Est accusamus beatae quaerat ut. Enim minus numquam voluptatibus quaerat aperiam doloremque magni. Sint recusandae labore atque beatae expedita ex ut. Ex eos quae voluptatem fugit.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/20"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 33,
                    "attributes": {
                        "title": "ut eligendi odit",
                        "description": "Ut exercitationem dolorum dolores labore. Libero sunt explicabo explicabo inventore nihil qui molestiae. Hic possimus quasi aut similique est provident. Fugiat laudantium sint voluptatem.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/33"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 39,
                    "attributes": {
                        "title": "sapiente nobis sed",
                        "description": "Deleniti nam nihil velit aut ut ut corrupti. Ut deleniti laudantium aperiam. Nesciunt quas in quo consequatur. Laboriosam minus earum deserunt eaque qui veritatis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/39"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 43,
                    "attributes": {
                        "title": "ut est omnis",
                        "description": "Ex vitae minima omnis nam eaque et tempore. Non iusto consequatur quo libero voluptatibus inventore magni. Quia doloribus eveniet sed fugiat distinctio reiciendis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/43"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 53,
                    "attributes": {
                        "title": "autem fuga sed",
                        "description": "Et et alias soluta iusto magni aut. Quo quibusdam veniam perspiciatis hic maxime omnis fuga est. Adipisci sed exercitationem et eveniet rerum ut sit. In neque laboriosam veniam quia.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/53"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 67,
                    "attributes": {
                        "title": "voluptatibus consequatur itaque",
                        "description": "Cumque autem et quisquam dolor perferendis voluptate quod natus. Necessitatibus labore officia quia fugiat. Ea atque velit non ad. Aut excepturi explicabo maiores repellat est aut veritatis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/67"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 70,
                    "attributes": {
                        "title": "enim facilis nihil",
                        "description": "Pariatur id repellat quas veritatis. Consequuntur rerum at eligendi quia sunt omnis. Veritatis quo autem assumenda sed corporis omnis dolor quas. Ea perspiciatis in qui labore a quia.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/70"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 94,
                    "attributes": {
                        "title": "adipisci ullam cumque",
                        "description": "Praesentium quia qui nesciunt hic. Molestiae veniam autem omnis distinctio qui error. Ducimus odit qui nisi mollitia modi voluptatem nihil. Placeat tempore quasi et quia eum reiciendis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/94"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 1
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/1"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/1"
            }
        },
        {
            "type": "author",
            "id": 4,
            "attributes": {
                "name": "Dr. Mateo Sipes IV",
                "email": "floyd.goodwin@example.net"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 30,
                    "attributes": {
                        "title": "error magni illo",
                        "description": "Voluptatem ea eligendi numquam totam. Doloremque enim animi tempora ratione sed. Quo pariatur deleniti delectus officia. Qui repudiandae dolor dignissimos aliquam a deleniti dolor.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/30"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 49,
                    "attributes": {
                        "title": "consectetur quasi soluta",
                        "description": "Voluptas doloremque sit et aperiam ea voluptate ea dolor. Fuga ut qui nam quo aut odit. Quas ipsam hic quis earum quasi suscipit.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/49"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 51,
                    "attributes": {
                        "title": "velit magnam voluptatem",
                        "description": "Animi aliquid voluptatem eius voluptas pariatur illum. Omnis amet unde sit. Consectetur vel architecto labore voluptas quia.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/51"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 54,
                    "attributes": {
                        "title": "qui reprehenderit quae",
                        "description": "Amet debitis distinctio debitis debitis ut voluptatem. Mollitia qui qui ipsum vel dolores. Quibusdam eum est distinctio aut est dolores vitae quos.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/54"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 66,
                    "attributes": {
                        "title": "dolores in quia",
                        "description": "Rerum molestias et soluta nulla perspiciatis. Quia sed voluptates provident qui. Nostrum architecto sunt voluptatem eligendi eos.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/66"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 76,
                    "attributes": {
                        "title": "aspernatur cumque ullam",
                        "description": "Sit occaecati ab sit consequatur omnis. Est id dolorem dolores voluptas repudiandae ut aut. Saepe eaque unde non labore qui dolorum.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/76"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 85,
                    "attributes": {
                        "title": "iste nemo voluptatem",
                        "description": "Sit et quis nesciunt aperiam fuga atque neque sunt. Est maxime vel deleniti dolor assumenda alias. Laboriosam suscipit deserunt dolor magni. Qui consequatur cumque blanditiis at.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/85"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 95,
                    "attributes": {
                        "title": "omnis expedita nihil",
                        "description": "Saepe ipsam consequatur dolores maiores. Est ut et aut.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/95"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 4
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/4"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/4"
            }
        },
        {
            "type": "author",
            "id": 6,
            "attributes": {
                "name": "Kassandra Ratke",
                "email": "ocormier@example.org"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 3,
                    "attributes": {
                        "title": "provident quia veritatis",
                        "description": "Dolores suscipit quia qui laudantium quia illum. In et sapiente debitis a. Et voluptas exercitationem recusandae suscipit et. Non facere in aut sed nihil saepe et.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/3"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 4,
                    "attributes": {
                        "title": "earum et quaerat",
                        "description": "Possimus quidem sit veniam necessitatibus nesciunt in. Deleniti eius voluptas accusamus sit nihil eum. Adipisci error possimus beatae. Omnis eos qui ipsam consequatur.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/4"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 9,
                    "attributes": {
                        "title": "quasi autem laudantium",
                        "description": "Ipsum ut nisi quae. Consequuntur ratione perferendis cumque tempora placeat. Voluptas velit tempore ex ea. Placeat ea quis vel in tempore.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/9"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 18,
                    "attributes": {
                        "title": "dolores quis architecto",
                        "description": "Recusandae enim cumque ut facilis ut consectetur dolores. Laudantium reprehenderit voluptatem earum sint iste veniam nihil. Asperiores quo consequatur delectus est beatae cum maiores expedita. Est et autem reprehenderit quaerat aut est aut.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/18"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 25,
                    "attributes": {
                        "title": "laborum ut nostrum",
                        "description": "Et vero ea molestias molestiae temporibus aut sed assumenda. Omnis sunt atque eaque sed. Aut esse sit ut est. Qui sit rerum eos ex reprehenderit. Dolore animi voluptate culpa rerum.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/25"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 27,
                    "attributes": {
                        "title": "consequuntur qui nemo",
                        "description": "Vel fugit ducimus officiis. Illo aut voluptatem voluptate laudantium doloribus.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/27"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 34,
                    "attributes": {
                        "title": "mollitia aliquid sapiente",
                        "description": "Vitae ea molestiae nostrum aut aut. Culpa sit quae suscipit numquam architecto magnam. Eaque velit possimus minus sapiente.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/34"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 100,
                    "attributes": {
                        "title": "minima rerum labore",
                        "description": "Minima deserunt saepe dolores nam hic ab ut. Nemo quam aut est dolorem nam ut in sit. Nesciunt ea sit aliquam corrupti.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/100"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 6
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/6"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/6"
            }
        },
        {
            "type": "author",
            "id": 9,
            "attributes": {
                "name": "Lilliana Heathcote II",
                "email": "kovacek.catherine@example.com"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 5,
                    "attributes": {
                        "title": "voluptatem velit laudantium",
                        "description": "Sunt quibusdam voluptas earum dolorem asperiores. Sed quibusdam ipsum optio. Eligendi dolor velit rerum. In a non ipsam nulla iste.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/5"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 14,
                    "attributes": {
                        "title": "possimus quia laudantium",
                        "description": "Quas ut accusantium fugiat nesciunt saepe occaecati. Nihil rerum ducimus ducimus placeat et libero sunt. Quibusdam quibusdam est libero soluta dolor eligendi sunt.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/14"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 29,
                    "attributes": {
                        "title": "quae aut recusandae",
                        "description": "Quasi fuga illo nisi quia. Culpa odit deleniti aut minima totam consequatur beatae. Quis distinctio perferendis vel eum. Aut corrupti ut dolorem quam dolor.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/29"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 36,
                    "attributes": {
                        "title": "ducimus quae velit",
                        "description": "Porro qui magnam eveniet ut possimus et. Expedita provident dolorem odit maxime. Qui et blanditiis atque sapiente non velit alias.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/36"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 37,
                    "attributes": {
                        "title": "eos voluptas animi",
                        "description": "Placeat laborum quia rerum reprehenderit distinctio et ratione. Nesciunt voluptates recusandae dolore necessitatibus quasi numquam. Adipisci et architecto et quae. Fugit enim praesentium odio.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/37"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 38,
                    "attributes": {
                        "title": "qui eius voluptas",
                        "description": "Delectus qui enim aut omnis. Natus omnis magnam praesentium eum. Autem aspernatur ut nobis ea esse.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/38"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 60,
                    "attributes": {
                        "title": "consectetur molestiae fuga",
                        "description": "Eos non ut et similique repellat inventore. Nam tempore ad omnis doloribus exercitationem. Totam est ipsam et voluptas molestias dolor. Cum molestias atque dolorum quis.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/60"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 62,
                    "attributes": {
                        "title": "porro eligendi animi",
                        "description": "Nihil ut quas aut cumque ut alias id. Officiis quis perspiciatis porro modi asperiores. Praesentium in optio pariatur.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/62"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 63,
                    "attributes": {
                        "title": "enim qui commodi",
                        "description": "Aut assumenda esse iste qui quia eaque cupiditate. Aut enim eius et quidem beatae. Omnis est nesciunt eaque omnis.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/63"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 78,
                    "attributes": {
                        "title": "est praesentium ullam",
                        "description": "Nisi reprehenderit ut qui eos dolor est. Sed eum hic dolorum placeat quia aut ut quaerat. Omnis magnam sequi eius et error recusandae qui.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/78"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 81,
                    "attributes": {
                        "title": "praesentium velit exercitationem",
                        "description": "Pariatur ut qui qui adipisci nesciunt aliquid. Facere assumenda est qui explicabo corporis rerum. Sed dicta corporis eveniet minima praesentium eos.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/81"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 91,
                    "attributes": {
                        "title": "quia iste aut",
                        "description": "Recusandae et rerum saepe aperiam omnis. Impedit hic minus sed alias voluptatibus enim. Saepe et labore totam unde consectetur quia.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/91"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 99,
                    "attributes": {
                        "title": "sequi doloremque alias",
                        "description": "Eaque quae ea aut quod. Nesciunt commodi qui dolorem quia sed non id. Veniam itaque omnis quidem quasi sit occaecati odio. Reiciendis sed et asperiores deserunt.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/99"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 9
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/9"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/9"
            }
        },
        {
            "type": "author",
            "id": 7,
            "attributes": {
                "name": "Mr. Jamie Reilly I",
                "email": "anderson.nelle@example.net"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 12,
                    "attributes": {
                        "title": "odit aut quia",
                        "description": "Provident quia voluptas quaerat ea voluptate. Consequuntur et rerum atque ea laborum. Id tempore incidunt accusamus alias qui. Ut dolores neque eum explicabo doloribus.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/12"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 22,
                    "attributes": {
                        "title": "fugit sed quae",
                        "description": "Et quod sint exercitationem quidem illum. Occaecati saepe neque debitis incidunt soluta. Quaerat itaque officia ipsa enim hic et est sint. Perspiciatis earum unde illum atque vero.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/22"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 41,
                    "attributes": {
                        "title": "optio fuga saepe",
                        "description": "Eligendi cumque dolor dolore quia. Sed aut voluptatem officiis occaecati ex magnam debitis. Rerum aut eligendi et quam qui sunt officiis dolorem. Unde beatae eaque ut.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/41"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 45,
                    "attributes": {
                        "title": "temporibus voluptatem aut",
                        "description": "Sit officiis consequatur amet fuga doloremque minus. Perferendis expedita sunt cumque eveniet. Itaque laboriosam et deleniti delectus consequatur explicabo voluptatem.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/45"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 46,
                    "attributes": {
                        "title": "voluptas est quis",
                        "description": "Omnis similique est minima et quis ipsa id. Eaque quasi ut autem ex rem. Itaque est magnam sint dolorum debitis. Ut possimus et eum autem inventore adipisci sit.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/46"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 69,
                    "attributes": {
                        "title": "consequatur reprehenderit perspiciatis",
                        "description": "Sunt non voluptatem consequatur fugiat cupiditate qui. Nulla nesciunt mollitia aliquid deserunt excepturi unde. Alias reprehenderit fugit quo quia.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/69"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 72,
                    "attributes": {
                        "title": "excepturi ipsam maiores",
                        "description": "Nisi sit rerum non similique aut atque. Quod natus qui rerum ut. Dolorem suscipit corporis dolore est voluptatem. Doloremque maxime ducimus architecto et a laborum.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/72"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 74,
                    "attributes": {
                        "title": "quaerat aut saepe",
                        "description": "Aut enim repudiandae aut laudantium voluptatibus. Modi sit nihil similique nihil repellendus. Voluptatibus soluta fuga eius tempore doloribus. Accusantium harum consequatur est odio nam distinctio rerum commodi.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/74"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 92,
                    "attributes": {
                        "title": "error et consequuntur",
                        "description": "Rerum qui et officia dolores. Blanditiis optio quis quia dolorem quidem consequatur consequatur. Veniam omnis sit mollitia illo harum esse qui et.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/92"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 97,
                    "attributes": {
                        "title": "unde nobis sed",
                        "description": "Fugiat sit assumenda aliquid temporibus ab eum eum cum. Ad fugit illum eveniet aliquid deleniti. Sequi natus qui nihil est. Ratione dolor eaque autem earum a sequi.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/97"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 7
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/7"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/7"
            }
        },
        {
            "type": "author",
            "id": 10,
            "attributes": {
                "name": "Wilhelm Bailey",
                "email": "sbruen@example.com"
            },
            "includes": [
                {
                    "type": "ticket",
                    "id": 2,
                    "attributes": {
                        "title": "temporibus sint et",
                        "description": "Quam qui dignissimos pariatur saepe. Et quas dolorem ut laboriosam alias officiis tempore. Eveniet repudiandae aliquid et modi qui. Ut reiciendis ut iure ducimus.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/2"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 10,
                    "attributes": {
                        "title": "voluptas ullam ducimus",
                        "description": "Voluptas repellat porro et voluptatem. Et eaque quia fugit facilis quasi quod numquam. Qui ad omnis soluta et laborum. Tempore aut non accusantium perspiciatis quae architecto.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/10"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 23,
                    "attributes": {
                        "title": "quo natus aut",
                        "description": "Adipisci dicta sint et. Sit sit deserunt aliquam pariatur non assumenda praesentium. Id asperiores eveniet nihil eius ratione. Voluptas non est ab est.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/23"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 24,
                    "attributes": {
                        "title": "aut quam est",
                        "description": "Sunt molestiae pariatur adipisci odio. Molestiae et ex qui aut. Magni ipsum ipsum in nulla nostrum. Optio et tenetur et et quia. Eligendi eaque molestiae blanditiis earum voluptatem.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/24"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 26,
                    "attributes": {
                        "title": "dignissimos corporis pariatur",
                        "description": "Non autem ipsum eos deserunt animi nesciunt minus quia. Dicta quibusdam itaque fugit aut possimus molestias veniam. Suscipit non aut autem qui sit hic sit. Omnis odit vel tenetur ut.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/26"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 32,
                    "attributes": {
                        "title": "quibusdam ipsum beatae",
                        "description": "Autem maxime dolores corrupti culpa autem odio. Consequuntur animi qui eaque in. Qui voluptatem delectus maiores dolor. Non consequuntur quis facere in.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/32"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 47,
                    "attributes": {
                        "title": "accusantium harum quisquam",
                        "description": "Perferendis ut qui distinctio eum unde facilis. Voluptatem aut in iure magnam ipsam expedita consectetur molestiae. Reprehenderit ratione dolorum ut consequatur. Et culpa eligendi laboriosam voluptatem voluptatem porro.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/47"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 56,
                    "attributes": {
                        "title": "dolorum exercitationem aliquam",
                        "description": "Ratione laborum et vel et est. Illum officia consequatur magnam alias eum. Laborum inventore et minima quia autem.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/56"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 57,
                    "attributes": {
                        "title": "architecto iste in",
                        "description": "Et nihil unde dolorem. Ipsam sapiente sit cupiditate. Ea praesentium aliquam et qui qui voluptates adipisci. Quod ex temporibus itaque voluptas et iure sint.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/57"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 59,
                    "attributes": {
                        "title": "laborum ratione suscipit",
                        "description": "Et unde necessitatibus ipsum. Qui quae velit blanditiis numquam ipsam sit culpa.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/59"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 79,
                    "attributes": {
                        "title": "vitae eos necessitatibus",
                        "description": "Inventore voluptate veniam accusamus nisi. Nulla quod omnis rem. Sint iure ipsum sunt earum ut vel. Quis omnis non in nostrum.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/79"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 80,
                    "attributes": {
                        "title": "hic ducimus magni",
                        "description": "Nam aliquid error odio eligendi amet est. Eveniet ut et et dolorum.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/80"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 84,
                    "attributes": {
                        "title": "nemo voluptatem voluptatem",
                        "description": "Voluptatem ullam alias ut consectetur sunt. Sint perspiciatis neque est dolor. Quae earum a ut dolorem aliquid nulla sed.",
                        "status": "CLOSED",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/84"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 90,
                    "attributes": {
                        "title": "sint dolorem dicta",
                        "description": "In deleniti et et. Consequuntur asperiores qui et quas pariatur. Perferendis tempora exercitationem sit animi veniam.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/90"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 96,
                    "attributes": {
                        "title": "voluptas sit nobis",
                        "description": "Eius culpa ad ipsum nostrum. Recusandae quo ipsum possimus velit mollitia et. Quae consequatur alias enim maxime consequatur.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/96"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                },
                {
                    "type": "ticket",
                    "id": 98,
                    "attributes": {
                        "title": "at officiis et",
                        "description": "Quos quia sit perspiciatis similique. Vitae blanditiis et consectetur voluptatem. Illo mollitia minima et qui qui voluptas. Enim blanditiis quaerat tempore.",
                        "status": "OPEN",
                        "createdAt": "2024-06-15T16:46:48.000000Z",
                        "updatedAt": "2024-06-15T16:46:48.000000Z"
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/tickets/98"
                    },
                    "relationships": {
                        "author": {
                            "data": {
                                "type": "user",
                                "id": 10
                            },
                            "links": {
                                "self": "http://api-v2.test/api/v1/authors/10"
                            }
                        }
                    }
                }
            ],
            "links": {
                "self": "http://api-v2.test/api/v1/authors/10"
            }
        }
    ],
    "links": {
        "first": "http://api-v2.test/api/v1/authors?page=1",
        "last": "http://api-v2.test/api/v1/authors?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://api-v2.test/api/v1/authors?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://api-v2.test/api/v1/authors",
        "per_page": 15,
        "to": 7,
        "total": 7
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  10. <a name='End-point:GetAuthorByID'></a>End-point: Get Author By ID
###  10.1. <a name='Method:GET-1'></a>Method: GET
>```
>{{base}}/{{version}}/authors/1
>```
###  10.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  10.3. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "author",
        "id": 1,
        "attributes": {
            "name": "Dashawn Langworth",
            "email": "norbert.batz@example.org"
        },
        "includes": [
            {
                "type": "ticket",
                "id": 1,
                "attributes": {
                    "title": "consequatur expedita sapiente",
                    "description": "Tenetur dolorem officia porro consequatur sit. Qui qui eum quas in natus quo quas. Consequatur et ipsum minima sunt incidunt in.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/1"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 7,
                "attributes": {
                    "title": "qui qui impedit",
                    "description": "Consectetur ipsam molestiae dolores rem iste. Sed sint molestiae quia similique quia et eius dicta. Nobis omnis esse ad est.",
                    "status": "OPEN",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/7"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 15,
                "attributes": {
                    "title": "excepturi dolores expedita",
                    "description": "Debitis in quibusdam eum et aut. Iste ducimus corrupti optio possimus id sint. Ut quos sit vero quidem nam.",
                    "status": "OPEN",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/15"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 20,
                "attributes": {
                    "title": "sed quia voluptatem",
                    "description": "Est accusamus beatae quaerat ut. Enim minus numquam voluptatibus quaerat aperiam doloremque magni. Sint recusandae labore atque beatae expedita ex ut. Ex eos quae voluptatem fugit.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/20"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 33,
                "attributes": {
                    "title": "ut eligendi odit",
                    "description": "Ut exercitationem dolorum dolores labore. Libero sunt explicabo explicabo inventore nihil qui molestiae. Hic possimus quasi aut similique est provident. Fugiat laudantium sint voluptatem.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/33"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 39,
                "attributes": {
                    "title": "sapiente nobis sed",
                    "description": "Deleniti nam nihil velit aut ut ut corrupti. Ut deleniti laudantium aperiam. Nesciunt quas in quo consequatur. Laboriosam minus earum deserunt eaque qui veritatis.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/39"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 43,
                "attributes": {
                    "title": "ut est omnis",
                    "description": "Ex vitae minima omnis nam eaque et tempore. Non iusto consequatur quo libero voluptatibus inventore magni. Quia doloribus eveniet sed fugiat distinctio reiciendis.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/43"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 53,
                "attributes": {
                    "title": "autem fuga sed",
                    "description": "Et et alias soluta iusto magni aut. Quo quibusdam veniam perspiciatis hic maxime omnis fuga est. Adipisci sed exercitationem et eveniet rerum ut sit. In neque laboriosam veniam quia.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/53"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 67,
                "attributes": {
                    "title": "voluptatibus consequatur itaque",
                    "description": "Cumque autem et quisquam dolor perferendis voluptate quod natus. Necessitatibus labore officia quia fugiat. Ea atque velit non ad. Aut excepturi explicabo maiores repellat est aut veritatis.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/67"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 70,
                "attributes": {
                    "title": "enim facilis nihil",
                    "description": "Pariatur id repellat quas veritatis. Consequuntur rerum at eligendi quia sunt omnis. Veritatis quo autem assumenda sed corporis omnis dolor quas. Ea perspiciatis in qui labore a quia.",
                    "status": "OPEN",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/70"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            },
            {
                "type": "ticket",
                "id": 94,
                "attributes": {
                    "title": "adipisci ullam cumque",
                    "description": "Praesentium quia qui nesciunt hic. Molestiae veniam autem omnis distinctio qui error. Ducimus odit qui nisi mollitia modi voluptatem nihil. Placeat tempore quasi et quia eum reiciendis.",
                    "status": "CLOSED",
                    "createdAt": "2024-06-15T16:46:48.000000Z",
                    "updatedAt": "2024-06-15T16:46:48.000000Z"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/tickets/94"
                },
                "relationships": {
                    "author": {
                        "data": {
                            "type": "user",
                            "id": 1
                        },
                        "links": {
                            "self": "http://api-v2.test/api/v1/authors/1"
                        }
                    }
                }
            }
        ],
        "links": {
            "self": "http://api-v2.test/api/v1/authors/1"
        }
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  11. <a name='End-point:GetTickets'></a>End-point: Get Tickets
###  11.1. <a name='Method:GET-1'></a>Method: GET
>```
>{{base}}/{{version}}/authors/2/tickets?include=author
>```
###  11.2. <a name='QueryParams-1'></a>Query Params

|Param|value|
|---|---|
|include|author|


###  11.3. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": [
        {
            "type": "ticket",
            "id": 1,
            "attributes": {
                "title": "consequatur expedita sapiente",
                "description": "Tenetur dolorem officia porro consequatur sit. Qui qui eum quas in natus quo quas. Consequatur et ipsum minima sunt incidunt in.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/1"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 7,
            "attributes": {
                "title": "qui qui impedit",
                "description": "Consectetur ipsam molestiae dolores rem iste. Sed sint molestiae quia similique quia et eius dicta. Nobis omnis esse ad est.",
                "status": "OPEN",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/7"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 15,
            "attributes": {
                "title": "excepturi dolores expedita",
                "description": "Debitis in quibusdam eum et aut. Iste ducimus corrupti optio possimus id sint. Ut quos sit vero quidem nam.",
                "status": "OPEN",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/15"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 20,
            "attributes": {
                "title": "sed quia voluptatem",
                "description": "Est accusamus beatae quaerat ut. Enim minus numquam voluptatibus quaerat aperiam doloremque magni. Sint recusandae labore atque beatae expedita ex ut. Ex eos quae voluptatem fugit.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/20"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 33,
            "attributes": {
                "title": "ut eligendi odit",
                "description": "Ut exercitationem dolorum dolores labore. Libero sunt explicabo explicabo inventore nihil qui molestiae. Hic possimus quasi aut similique est provident. Fugiat laudantium sint voluptatem.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/33"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 39,
            "attributes": {
                "title": "sapiente nobis sed",
                "description": "Deleniti nam nihil velit aut ut ut corrupti. Ut deleniti laudantium aperiam. Nesciunt quas in quo consequatur. Laboriosam minus earum deserunt eaque qui veritatis.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/39"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 43,
            "attributes": {
                "title": "ut est omnis",
                "description": "Ex vitae minima omnis nam eaque et tempore. Non iusto consequatur quo libero voluptatibus inventore magni. Quia doloribus eveniet sed fugiat distinctio reiciendis.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/43"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 53,
            "attributes": {
                "title": "autem fuga sed",
                "description": "Et et alias soluta iusto magni aut. Quo quibusdam veniam perspiciatis hic maxime omnis fuga est. Adipisci sed exercitationem et eveniet rerum ut sit. In neque laboriosam veniam quia.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/53"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 67,
            "attributes": {
                "title": "voluptatibus consequatur itaque",
                "description": "Cumque autem et quisquam dolor perferendis voluptate quod natus. Necessitatibus labore officia quia fugiat. Ea atque velit non ad. Aut excepturi explicabo maiores repellat est aut veritatis.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/67"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 70,
            "attributes": {
                "title": "enim facilis nihil",
                "description": "Pariatur id repellat quas veritatis. Consequuntur rerum at eligendi quia sunt omnis. Veritatis quo autem assumenda sed corporis omnis dolor quas. Ea perspiciatis in qui labore a quia.",
                "status": "OPEN",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/70"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        {
            "type": "ticket",
            "id": 94,
            "attributes": {
                "title": "adipisci ullam cumque",
                "description": "Praesentium quia qui nesciunt hic. Molestiae veniam autem omnis distinctio qui error. Ducimus odit qui nisi mollitia modi voluptatem nihil. Placeat tempore quasi et quia eum reiciendis.",
                "status": "CLOSED",
                "createdAt": "2024-06-15T16:46:48.000000Z",
                "updatedAt": "2024-06-15T16:46:48.000000Z"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/tickets/94"
            },
            "relationships": {
                "author": {
                    "data": {
                        "type": "user",
                        "id": 1
                    },
                    "links": {
                        "self": "http://api-v2.test/api/v1/authors/1"
                    }
                }
            },
            "includes": {
                "type": "author",
                "id": 1,
                "attributes": {
                    "name": "Dashawn Langworth",
                    "email": "norbert.batz@example.org"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        }
    ],
    "links": {
        "first": "http://api-v2.test/api/v1/authors/1/tickets?page=1",
        "last": "http://api-v2.test/api/v1/authors/1/tickets?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://api-v2.test/api/v1/authors/1/tickets?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://api-v2.test/api/v1/authors/1/tickets",
        "per_page": 15,
        "to": 11,
        "total": 11
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  12. <a name='End-point:CreateTicket-1'></a>End-point: Create Ticket
###  12.1. <a name='Method:POST-1'></a>Method: POST
>```
>{{base}}/{{version}}/authors/1/tickets
>```
###  12.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  12.3. <a name='Bodyraw-1'></a>Body (**raw**)

```json
{
    "data": {
        "attributes": {
            "title": "Ticket no. 1",
            "description": "hello, ticket.",
            "status": "OPEN"
        }
    }
}
```

###  12.4. <a name='Response:201-1'></a>Response: 201
```json
{
    "data": {
        "type": "ticket",
        "id": 107,
        "attributes": {
            "title": "Ticket no. 1",
            "description": "hello, ticket.",
            "status": "OPEN",
            "createdAt": "2024-06-16T12:46:15.000000Z",
            "updatedAt": "2024-06-16T12:46:15.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/107"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": "1"
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/1"
                }
            }
        },
        "includes": {
            "type": "author",
            "id": 1,
            "attributes": {
                "name": "Dashawn Langworth",
                "email": "norbert.batz@example.org"
            },
            "links": {
                "self": "http://api-v2.test/api/v1/authors/1"
            }
        }
    }
}
```

###  12.5. <a name='Response:422-1'></a>Response: 422
```json
{
    "errors": [
        {
            "status": 422,
            "message": "The author field is required.",
            "source": "author"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  13. <a name='End-point:ReplaceTicket-1'></a>End-point: Replace Ticket
###  13.1. <a name='Method:PUT-1'></a>Method: PUT
>```
>{{base}}/{{version}}/authors/7/tickets/1444
>```
###  13.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  13.3. <a name='Bodyraw-1'></a>Body (**raw**)

```json
{
    "data": {
        "attributes": {
            "title": "Ticket no. 1",
            "description": "hello, ticket.",
            "status": "OPEN"
        }
    }
}
```

###  13.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "ticket",
        "id": 12,
        "attributes": {
            "title": "new Ticket no. 1",
            "description": "new hello, ticket.",
            "status": "CLOSED",
            "createdAt": "2024-06-15T16:46:48.000000Z",
            "updatedAt": "2024-06-24T18:27:14.000000Z"
        },
        "links": {
            "self": "http://localhost:8000/api/v1/tickets/12"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 7
                },
                "links": {
                    "self": "http://localhost:8000/api/v1/authors/7"
                }
            }
        }
    }
}
```

###  13.5. <a name='Response:404-1'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/authors/7/tickets/1444"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

##  14. <a name='End-point:UpdateTicket-1'></a>End-point: Update Ticket
###  14.1. <a name='Method:PATCH-1'></a>Method: PATCH
>```
>{{base}}/{{version}}/tickets/6
>```
###  14.2. <a name='Headers-1'></a>Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


###  14.3. <a name='Bodyraw-1'></a>Body (**raw**)

```json
{
    "data": {
        "attributes": {
            "status": "OPEN"
        }
    }
}
```

###  14.4. <a name='Response:200-1'></a>Response: 200
```json
{
    "data": {
        "type": "ticket",
        "id": 6,
        "attributes": {
            "title": "new Ticket no. 1",
            "description": "new hello, ticket.",
            "status": "OPEN",
            "createdAt": "2024-06-15T16:46:48.000000Z",
            "updatedAt": "2024-06-19T15:46:12.000000Z"
        },
        "links": {
            "self": "http://api-v2.test/api/v1/tickets/6"
        },
        "relationships": {
            "author": {
                "data": {
                    "type": "user",
                    "id": 9
                },
                "links": {
                    "self": "http://api-v2.test/api/v1/authors/9"
                }
            }
        }
    }
}
```

###  14.5. <a name='Response:422-1'></a>Response: 422
```json
{
    "errors": [
        {
            "status": 422,
            "message": "The data.relationships.author.data.id field is prohibited.",
            "source": "data.relationships.author.data.id"
        }
    ]
}
```

###  14.6. <a name='Response:404-1'></a>Response: 404
```json
{
    "errors": [
        {
            "status": 404,
            "message": "Resource not found",
            "source": "api/v1/authors/7/tickets/1244"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
