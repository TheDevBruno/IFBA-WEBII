# Sistema de Carrinho de Compras

Este projeto é um sistema de carrinho de compras desenvolvido em PHP, que permite aos usuários adicionar, visualizar e remover produtos do carrinho, além de salvar preferências do usuário utilizando cookies.

## Estrutura do Projeto

O projeto é organizado da seguinte forma:

```
carrinho-compras
├── adicionar_carrinho.php        # Página para adicionar produtos ao carrinho
├── ver_carrinho.php              # Página para visualizar os itens no carrinho
├── remover_item.php               # Lógica para remover itens do carrinho
├── limpar_carrinho.php           # Página para limpar o carrinho
├── preferencias_usuario.php       # Página para salvar preferências do usuário
├── src
│   ├── produtos.php              # Array com produtos disponíveis para compra
│   └── helpers.php               # Funções auxiliares para manipulação de sessões e cookies
├── assets
│   ├── style.css                 # Estilos CSS para o layout do site
│   └── scripts.js                # Scripts JavaScript para interatividade
└── README.md                     # Documentação do projeto
```

## Funcionalidades

1. **Adicionar Produtos ao Carrinho**: Os produtos podem ser adicionados ao carrinho, que é armazenado em uma variável de sessão.
2. **Visualizar Carrinho**: O usuário pode visualizar todos os itens no carrinho, incluindo nome do produto, quantidade, preço, subtotal e total geral.
3. **Remover Itens do Carrinho**: É possível remover itens específicos do carrinho.
4. **Salvar Preferências do Usuário**: O sistema salva o nome do usuário e o tema de cores escolhido em cookies.
5. **Limpar Carrinho**: O usuário pode limpar todos os itens do carrinho de uma vez.

## Instruções de Uso

1. Clone o repositório em sua máquina local.
2. Certifique-se de que o servidor PHP esteja em execução.
3. Acesse `adicionar_carrinho.php` para começar a adicionar produtos ao carrinho.
4. Utilize `ver_carrinho.php` para visualizar e gerenciar os itens no carrinho.
5. Acesse `preferencias_usuario.php` para definir suas preferências de tema e nome.

## Requisitos

- PHP 7.0 ou superior
- Um servidor web (Apache, Nginx, etc.)
- Navegador para acessar as páginas

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.