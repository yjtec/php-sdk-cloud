# yjtec cloud

## 1.方法

### 1.1 rpc() rpc调用，
### 1.2 http() http调用 目前不支持
### 1.3 prefix 调用前缀，主要用于rpc的前缀调用
### 1.4 action($name) 调用的方法名称
### 1.5 options($array) 参数
### 1.6 request() 请求

## 2.平台方法

### 2.1 scenter提供方法

```
$result = YjtecCloud::rpc()
    ->product('scenter')
    ->prefix('cas')
    ->action('getByName')
    ->options(['13072419652'])
    ->request();
```

### 2.1.1 cas专用 getByName 

>通过名称来获取用户信息

### 2.1.2 cas专用 getByPhone

>通过手机号来获取用户