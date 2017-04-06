Run project
```
cd web/
php -S localhost:8080
```

Run tests

```
cd tests/
./codeception/bin/yii migrate
codecept run acceptance
```