# Boilerplate Front-End Wp #

It is a ready structure with preconfigured automation, using already defined processing resources.

The interface has a Wordpress theme structured with Bootstrap 4, aiming to standardize the institutional production modes.

You need to download wordpress from https://br.wordpress.org/download/. Then clone this project in the "wordpress/wp-content/themes"

### Global Dependencies

* NodeJS - (https://nodejs.org/en/)
* gulp - (https://gulpjs.com/)
* Sass install - (https://sass-lang.com/guide)


### Install Dependencies
```
npm install
```
### Compile and activate watch
```
gulp
```

# Resolvendo problemas de permissão do Wordpress no localhost/

Edite o arquivo wp-config.php: vim wp-config.php

Insira a constante:
```
define('FS_METHOD', 'direct');
```

## Execute na pasta raíz do seu Wordpress:
```
chown -R www-data:www-data

# permissões em arquivos
find . -type f -exec chmod 644 {} \;

# permissoes em diretórios
find . -type d -exec chmod 755 {} \;
``` 
A primeira linha dará permissão de dono para usuário e grupo www-data. A segunda linha vai dar permissão 755 para todas as pastas, e a terceira dará permissão 644 para todos os arquivos.

Jamais, em hipótese alguma dê permissão 777



*Developed by Allan Cruz - (https://github.com/allanncruz)*
