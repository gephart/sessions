Gephart Sessions
===

[![Build Status](https://travis-ci.org/gephart/sessions.svg?branch=master)](https://travis-ci.org/gephart/sessions)

Dependencies
---
 - PHP >= 7.0

Instalation
---

```bash
composer require gephart/sessions
```

Using
---

```php
$sessions = new \Gephart\Sessions\Sessions();
$sessions->set("key","value");
echo $sessions->get("key"); // value
```