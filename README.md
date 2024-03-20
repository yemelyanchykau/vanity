# vacancy_vanity

Main urls:
- https://app.airdrop-hunter.site/
- https://airdrop-hunter.site/

# Необходим специалисты с знанием 
- Vanilla JS (Способность писать код на простом JavaScript)
- Vanity PHP (способность понимать нативный PHP)
- Web3 (знать и понимать, что такое Abi). Понимать различие в Read, Write функциях смартконтракта.
- Css3 (понимать чем отличается точка от хештега в стиле)
- Bootstrap 4. (Знать что такое d-none, row, col-4 и тд)
- Использовать обычные функции. Выделять куски кода, которые имеют 2 и более повторений и разделять их на функции.
- понимать зачем нужны RPC. Что такое RPC.
- github: clone,commit,push,merge. branch, tag.
- mysql (console, phpmyadmin)

## Установка проводилась на ubuntu 20 с версией php 7.4

```bash
apt install nginx php-fpm php-cli
```

You need modify file  /etc/php/7.4/fpm/pool.d/www.conf and change listen = /run/php/php7.4-fpm.sock to listen=127.0.0.1:9000
```bash
/etc/init.d/php7.4-fpm restart
```

```bash
mkdir -p /www/
cd /www
git clone https://github.com/airdrop-hunter-site/vacancy_vanity
cd vacancy_vanity
cp nginx/11_vacancy_vanilla.conf /etc/nginx/sites-available
nginx -t
/etc/init.d/nginx restart
```

открываем в браузере http://<ip_you_server>/

Пример того, что Вы увидите у себя после установки:
https://vacancy-vanilla.airdrop-hunter.site/stats


## Тестовые задачи
- необходимо найти где и включить кнопку Deposit
- необходимо найти где и показать выпадающий список сетей Ethereum, Bsc, Polygon
- нужно создать новый пункт в центральном меню (там где Airdrops, Stats, Referrals) - пункт test
- открыть страницу http://<ip_you_server>/test
- сделать копию страницы test2, изменить название кнопки, обработчик кноки, изменить сообщение на test2
- нужно создать новый пункт в центральном меню (там где Airdrops, Stats, Referrals) - пункт Hello
- cоздать новый item hello с текстом 
```html
<h1>HELLO VANILLA</h1>
```
, чтобы страница открывалась  http://<ip_you_server>/hello


## Результаты
- сделать PullRequest на github
- дать ссыку на любой свой домен или поддомен с результатами выполенненых задач
- или снять видео в формате mp4 длиной не более 2 минут

## Preview
![Preview](https://github.com/airdrop-hunter-site/vacancy_vanity/blob/main/vacancy_preview.png?raw=true)


## Задачи по вакансии
- усовершенстовать страницы сайты
- импортировать новую верстку
- изменять интерактивные страницы
- подключать новые смартконтракты в процессинг через abi и ethereum.js(web3 libs)
