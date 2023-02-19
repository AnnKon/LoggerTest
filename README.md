# LoggerTest

Add to composer
```
"ann/logger": "*"

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/AnnKon/LoggerTest"
    }
]
```

Пример проверки на Laravel

В routes/web:
```
Route::get('/test', [Controller::class, 'log']);
```

В контроллере:
```
public function log()
    {
        $filePath = 'log-test.txt';
        $logger = new Logger($filePath);
        
        $logger->info("Info message");
        $logger->alert("Alert message");
        $logger->error("Error message");
        $logger->debug("Debug message");
        $logger->notice("Notice message");
        $logger->warning("Warning message");
        $logger->critical("Critical message");
        $logger->emergency("Emergency message");
    }
```
    
Создан файл public/log-test.txt со следующим содержимым (обращения к странице test):
```
Sun, 19 Feb 2023 13:31:41 +0000 info Info message
Sun, 19 Feb 2023 13:31:41 +0000 alert Alert message
Sun, 19 Feb 2023 13:31:41 +0000 error Error message
Sun, 19 Feb 2023 13:31:41 +0000 debug Debug message
Sun, 19 Feb 2023 13:31:41 +0000 notice Notice message
Sun, 19 Feb 2023 13:31:41 +0000 warning Warning message
Sun, 19 Feb 2023 13:31:41 +0000 critical Critical message
Sun, 19 Feb 2023 13:31:41 +0000 emergency Emergency message
Sun, 19 Feb 2023 13:34:48 +0000 info Info message
Sun, 19 Feb 2023 13:34:48 +0000 alert Alert message
Sun, 19 Feb 2023 13:34:48 +0000 error Error message
Sun, 19 Feb 2023 13:34:48 +0000 debug Debug message
Sun, 19 Feb 2023 13:34:48 +0000 notice Notice message
Sun, 19 Feb 2023 13:34:48 +0000 warning Warning message
Sun, 19 Feb 2023 13:34:48 +0000 critical Critical message
Sun, 19 Feb 2023 13:34:48 +0000 emergency Emergency message
```
