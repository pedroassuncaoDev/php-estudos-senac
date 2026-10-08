# Exercício PHP — Método GET

## 📚 Sobre o projeto

Este projeto foi desenvolvido como um exercício de estudo de **PHP**, com o objetivo de entender na prática como funciona o método **GET** e como os dados enviados por um formulário podem ser recebidos pelo PHP através da variável superglobal `$_GET`.

O exercício possui dois arquivos principais:

- `index.php` — contém o formulário onde o usuário informa os dados do produto.
- `produto.php` — recebe e processa os dados enviados pelo formulário.

## 🎯 Objetivos

Durante o desenvolvimento deste exercício, o objetivo foi aprender:

- Como utilizar um formulário HTML com o método `GET`;
- Como enviar informações de uma página para outra;
- Como utilizar `$_GET` para receber os dados no PHP;
- Como verificar se os dados foram informados utilizando `isset()`;
- Como utilizar estruturas condicionais `if`, `elseif` e `else`;
- Como visualizar os dados enviados diretamente pela URL.

## 🔎 Como funciona o GET?

O método `GET` é utilizado para enviar dados de uma página para outra através da URL.

Quando um formulário utiliza:

```html
<form action="produto.php" method="GET">