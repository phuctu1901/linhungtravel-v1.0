---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_caaeb290ada2ed91cfc05495f2d67fac -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost/api/login" 
```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/login`


<!-- END_caaeb290ada2ed91cfc05495f2d67fac -->


<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## login api

> Example request:

```bash
curl -X POST "http://localhost/api/login" 
```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->


<!-- START_61739f3220a224b34228600649230ad1 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/api/logout" 
```

```javascript
const url = new URL("http://localhost/api/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->


<!-- START_2ed165150fc1d9bdc90f8edbc8a40fe0 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "http://localhost/api/register" 
```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/register`


<!-- END_2ed165150fc1d9bdc90f8edbc8a40fe0 -->


<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

> Example request:

```bash
curl -X POST "http://localhost/api/register" 
```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->


<!-- START_d9262c03ac71a820f46e401341072b02 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost/api/password/reset" 
```

```javascript
const url = new URL("http://localhost/api/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/password/reset`


<!-- END_d9262c03ac71a820f46e401341072b02 -->


<!-- START_b7802a3a2092f162a21dc668479801f4 -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/api/password/email" 
```

```javascript
const url = new URL("http://localhost/api/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/email`


<!-- END_b7802a3a2092f162a21dc668479801f4 -->


<!-- START_3fc1ef796ad26ae024817447895c3377 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost/api/password/reset/1" 
```

```javascript
const url = new URL("http://localhost/api/password/reset/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/password/reset/{token}`


<!-- END_3fc1ef796ad26ae024817447895c3377 -->


<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/api/password/reset" 
```

```javascript
const url = new URL("http://localhost/api/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/reset`


<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->


<!-- START_38ea1240dd3576dc44c468e5c84e9ff3 -->
## api/sum
> Example request:

```bash
curl -X POST "http://localhost/api/sum" 
```

```javascript
const url = new URL("http://localhost/api/sum");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/sum`


<!-- END_38ea1240dd3576dc44c468e5c84e9ff3 -->


<!-- START_a69bb9a29be86907a2edb0c13ea1f993 -->
## details api

> Example request:

```bash
curl -X POST "http://localhost/api/details" 
```

```javascript
const url = new URL("http://localhost/api/details");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/details`


<!-- END_a69bb9a29be86907a2edb0c13ea1f993 -->




