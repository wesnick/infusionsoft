infusionsoft
============

PSR-2 compatible Infusionsoft API client

*This is a work-in-progress*

Usage

```php

        $infusionsoft = new Infusionsoft($appName, $apiKey, new fXmlRpc\Client());
        $contact = $infusionsoft->getContactService->load(1234);
```
