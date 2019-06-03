#TEST HOLA

A continuación de explica cómo ejecutar la prueba de código y cuáles son los usuarios generados.

## Ejecución

Para ejecutar la prueba se ha de utilizar el siguiente comando desde la raíz del proyecto:

`composer install`
`php bin/console server:run 127.0.0.1:1234`

A partir de ese momento se puede ejecutar desde esa dirección.

## Contenidos

En esa dirección se encuentra el listado de recursos disponibles.

Desde /users se pueden gestionar los usuarios. Para ello es necesario autenticarse con el usuario Admin.

Las direcciones /page_1, /page_2 y /page_3 son solo accesibles con el usuario Admin o con el correspondiente
según lo indicado en el enunciado.

## Usuarios generados

Hay cuatro usuarios generados:

| username | password | role     |    
|----------|----------|----------|       
| User1    | User1    | ROLE_PAGE_1 |    
| User2    | User2    | ROLE_PAGE_2 |  
| User3    | User3    | ROLE_PAGE_3 |  
| Admin    | Admin    | ROLE_ADMIN  |  

## Herramientas empleadas

Se ha utilizado:

- API Platform
- Symfony 4.2
- PHP 7.3