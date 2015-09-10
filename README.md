# PhalconPHP with AspectMock

It's just an attempt to use the awesome [PhalconPHP](https://github.com/phalcon/cphalcon/) with the also awesome [AspectMock](https://github.com/Codeception/AspectMock).

I run the test on PhalconPHP 2.0.6 and 2.0.7 and it's failing. I got the error:

````
1) Test\ClientEmailsTestUnitTest::test_sendFirstNotifications
Expected Mailer::send to be invoked but it never occur.
````

I tried it without PhalconPHP and it worked fine, so I think the problem is with the Phalcon Loader.

Ideas?
