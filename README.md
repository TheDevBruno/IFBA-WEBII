# IFBA-WEBII

# Projeto Loja Online de Peças de Informática

Este projeto é uma aplicação web simples feita em PHP, que simula uma loja online de peças de informática, como mouse, teclado, monitor, SSD e placa de vídeo. O objetivo foi aprender a trabalhar com PHP e banco de dados MySQL, aplicando conceitos importantes da disciplina.

---

## Estrutura do Projeto

/projeto_loja
│
├── conexao.php # Arquivo para conexão com o banco de dados via PDO
├── criar_banco.php # Script para criar banco, tabelas e inserir dados iniciais
├── index.php # Página principal que lista os produtos disponíveis em estoque
├── login.php # Tela de login com autenticação no banco de dados
├── logout.php # Finaliza a sessão do usuário
├── produtos_saida.php # Página que lista os produtos que saíram (vendas/retiradas)
├── assets/
│ ├── style.css # Arquivo de estilos CSS para layout claro/escuro e design básico
│ └── scripts.js # JavaScript para interatividade (ex: confirmação de remoção)
├── model/
│ ├── Usuario.php # Classe modelo para usuários (opcional para organização)
│ └── Produto.php # Classe modelo para produtos (opcional para organização)
└── sql/
└── criar_banco.sql # Script SQL para criar banco e tabelas (alternativa ao PHP)


---

## Relatório de Desenvolvimento

Durante o desenvolvimento deste projeto, enfrentei algumas dificuldades, mas também consegui avançar em pontos importantes. Abaixo, descrevo o que encontrei e aprendi.

### Dificuldades

- **Conexão com o banco de dados**  
  Inicialmente tive bastante dificuldade para conectar o PHP ao MySQL usando PDO. Não sabia como configurar o host, nome do banco, usuário e senha corretamente, nem como tratar erros. Essa etapa foi desafiadora e tomei um tempo para entender que a conexão deveria ficar centralizada em um arquivo para facilitar o uso em várias páginas. Após pesquisar e testar, consegui estabelecer a conexão e realizar consultas básicas com sucesso.

- **Cache do navegador**  
  Muitas vezes ao alterar arquivos CSS e JavaScript, as mudanças não apareciam ao atualizar a página. Descobri que isso era por causa do cache do navegador, que mantinha versões antigas dos arquivos. Para resolver, precisei limpar o cache manualmente e também aprendi a usar técnicas para forçar a atualização dos arquivos, garantindo que minhas modificações fossem exibidas corretamente.

### Acertos e Aprendizados

- Desenvolvi uma **tela de login funcional** que autentica os usuários com dados armazenados no banco, utilizando senhas protegidas com hash.
- Criei páginas para listar os **produtos disponíveis em estoque** e os **produtos com saída** (vendas/retiradas), buscando os dados diretamente no banco.
- Apliquei um **layout simples e organizado** com HTML e CSS, contemplando temas claro e escuro para melhorar a experiência visual.
- Entendi a importância de usar **sessões** para controlar o acesso ao sistema.
- Ganhei prática na manipulação de dados com **PDO**, que melhora a segurança e facilita o tratamento dos dados.

### Próximos Passos

Pretendo continuar aprimorando o projeto, adicionando funcionalidades como:

- Controle de estoque em tempo real durante as compras.
- Implementação de carrinho de compras e finalização de pedidos.
- Melhoria na organização do código utilizando padrões como MVC.
- Estudo de segurança para proteger melhor a aplicação contra ataques comuns.

---

## Como rodar o projeto

1. Configure seu servidor local (ex: XAMPP, WAMP) com PHP e MySQL.
2. Coloque os arquivos do projeto na pasta pública do servidor.
3. Acesse `criar_banco.php` pelo navegador para criar o banco e tabelas iniciais.
4. Acesse `login.php` para entrar no sistema usando o usuário:
   - **Usuário:** admin  
   - **Senha:** 123456
5. Navegue pelas páginas para visualizar produtos e saídas.

---

**Pedi para o ChatGPT me auxiliar com o desenvolvimento do codigo, espero que nao seja um impecilio em meu aprendizado e na consideração do projeto, de qualquer forma agradeço pela atenção e estou aberto a sugestões para melhorar o projeto!**

---

