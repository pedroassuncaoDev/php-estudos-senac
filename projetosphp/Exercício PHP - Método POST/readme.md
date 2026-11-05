# 🎓 Calculadora de Média de Alunos (PHP & HTML)

Este é um projeto simples desenvolvido para praticar a manipulação de requisições **HTTP POST** utilizando formulários HTML e processamento dinâmico de dados com PHP.

## 🚀 Funcionalidades

* **Formulário de Entrada:** Coleta o nome do aluno e três notas numéricas (com suporte a decimais).

* **Cálculo da Média:** Processa e calcula a média aritmética simples das três notas enviadas via `$_POST`.

* **Verificação de Situação:** Determina automaticamente se o aluno está:

  * **Aprovado:** Média igual ou superior a `6.0`.

  * **Reprovado:** Média inferior a `6.0`.

* **Exibição Dinâmica:** Formata o resultado para apresentação amigável com tratamento básico de segurança (`htmlspecialchars`).

## 📁 Estrutura do Projeto

```
calculadora de média de alunos/
├── index.html        # Página contendo o formulário HTML
├── consultar.php     # Script PHP responsável pelo cálculo e exibição do resultado
└── README.md         # Documentação do projeto

```

## ⚙️ Pré-requisitos

Para executar este projeto localmente, você precisará ter instalado:

* **PHP** (versão 7.4 ou superior recomendada).

* Um navegador web atualizado.

## 🛠️ Como Executar o Projeto

1. Clone ou baixe estes arquivos em um diretório no seu computador.

2. Abra o terminal (ou prompt de comando) na pasta raiz do projeto.

3. Inicie o servidor embutido do PHP com o seguinte comando:

   ```
   php -S localhost:8000
   
   ```

4. Abra seu navegador e acesse:

   ```
   http://localhost:8000/index.html
   
   ```

## 💡 Como Usar

1. Preencha o campo **Nome** com o nome do aluno.

2. Insira as **três notas** nos campos correspondentes (ex: `7.5`, `8.0`, `5.0`).

3. Clique em **Enviar**.

4. O formulário irá redirecionar para a página `consultar.php`, onde a média e a situação do aluno serão calculadas e exibidas na tela.