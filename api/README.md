# Instalar Servidor Web (wamp, xamp, mamp, ...). Preferiblemente que incluya php 7.4 y php 8 para poder probar en ambos. (El host de kocmoc usa el 7.4)

# Instalar Composer

https://getcomposer.org/download/

# Instalar Symfony

https://symfony.com/download

# Comandos utiles

- symfony check:requirements (verifica requisitos del sistema)
- symfony new nombre_proyecto (crea nuevo proyecto symfony)
  symfony server:start --port=8001(levanta el servidor, http://localhost:8001/)
- composer require nombre_del_bundle (instala un bundle)
- composer require symfony/orm-pack (instala paquete orm para bd)
- composer require --dev symfony/maker-bundle (instala paquete maker para bd)
- php bin/console doctrine:database:create (crea una base de datos)
- php bin/console make:entity (crea entidad, seguir instrucciones)
- php bin/console doctrine:schema:update --force (actualiza bd)
- php bin/console cache:clear --no-warmup --env=dev (refresca cache)
- php bin/console cache:warmup --env=dev (refresca cache)
