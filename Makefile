.PHONY: all tests

all: composer-update

composer := composer.phar

$(composer):
	curl -sS https://getcomposer.org/installer | php

composer-update: $(composer)
	php composer.phar update

tests: composer-update
	./vendor/bin/phpunit --testdox tests


# 容器开发环境
## 启动开发环境
dev-build:
	

dev-up: dev-build
	

## 连接进入开发环境
dev-attach: dev-up
	

## 关闭开发环境
dev-down:
	

## 清除开发环境
dev-clean: dev-down



# 最终测试用命令
dev-tests: dev-up
	./vendor/bin/phpunit tests/

