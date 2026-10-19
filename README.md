# Diário do PHP 🐘

Bem vindos ao README V1 no qual incluirei o guia de instalação do ambiente para rodarmos o PHP!
Esse repositório é dedicado aos meus estudos da linguagem PHP, documentando conceitos, exemplos práticos e aprendizados ao longo da minha evolução como desenvolvedor nessa stack que vejo com bons olhos (apesar de odiada kkkkk).

## 🛠️ Ambiente de desenvolvimento

Para executar os exemplos deste repositório localmente, utilizaremos o **XAMPP**, um pacote que inclui o servidor Apache, PHP e MariaDB, além de ferramentas complementares.
Ele é necessário para criarmos um servidor local capaz de rodar a linguagem, escolhi o XAMPP pois ele é o mais simples e direto ao ponto

### 1. Instalação do XAMPP

1. Acesse o site oficial do Apache Friends: https://www.apachefriends.org/
2. Clique em **XAMPP for Windows** para baixar o instalador.
3. Execute o arquivo baixado.
4. Caso apareça um aviso do Windows ou do Controle de Conta de Usuário, confira a origem do instalador antes de prosseguir.
5. Siga as etapas do assistente de instalação. Mantenha pelo menos os componentes **Apache** e **PHP** selecionados.
6. Escolha o diretório de instalação. O padrão recomendado é:

   ```text
   C:\xampp
   ```

7. Conclua a instalação e abra o **XAMPP Control Panel**.

### 2. Iniciando o servidor local

No painel de controle do XAMPP:

1. Localize o módulo **Apache**.
2. Clique em **Start**.
3. Aguarde até que o serviço indique que está em execução.

Para verificar se o servidor está funcionando, acesse no navegador:

[http://localhost/](http://localhost/)

Se a página local do XAMPP for exibida, o servidor Apache está funcionando.

### 3. Configurando o projeto

Os arquivos PHP precisam ficar dentro do diretório `htdocs`, que é a pasta pública padrão do Apache no XAMPP.

Caminho padrão:

```text
C:\xampp\htdocs
```

Crie uma pasta para o projeto dentro desse diretório. Por exemplo:

```text
C:\xampp\htdocs\diario-php
```

Coloque os arquivos `.php` nessa pasta.

**Importante:** para executar PHP, acesse o arquivo pelo navegador usando o servidor local. Não basta abrir o arquivo diretamente pelo sistema de arquivos.

Por exemplo, se existir o arquivo `index.php` dentro da pasta `diario-php`, acesse:

[http://localhost/diario-php/](http://localhost/diario-php/)

### 4. Testando a instalação

Crie um arquivo chamado `index.php` dentro da pasta do projeto, com o seguinte conteúdo:

```php
<?php

echo "Olá, mundo! Meu ambiente PHP está funcionando.";
```

Com o Apache iniciado, acesse:

[http://localhost/diario-php/](http://localhost/diario-php/)

Se a mensagem aparecer no navegador, o ambiente está pronto para executar os exemplos do diário.

### 5. Problemas comuns

- **Apache não inicia:** verifique se outro programa está utilizando as portas HTTP/HTTPS, normalmente 80 e 443.
- **Página não encontrada:** confira se o arquivo está dentro de `C:\xampp\htdocs` e se a URL corresponde ao caminho da pasta.
- **Código PHP não é executado:** confirme se você está acessando pelo endereço `http://localhost/` e se o Apache está iniciado.

## 📚 Referências

- [Site oficial do XAMPP](https://www.apachefriends.org/)
- [Documentação oficial do PHP](https://www.php.net/manual/pt_BR/)
- [Documentação do Apache HTTP Server](https://httpd.apache.org/docs/)

---

*Este documento faz parte do meu processo de aprendizado e será atualizado conforme novos conceitos e ferramentas forem incorporados ao meu ambiente de desenvolvimento.*
