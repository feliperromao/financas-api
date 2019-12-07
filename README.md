# App de Controle de Finanças

## Recursos

- [ ] Pagamentos
    * Titulo: **String**
    * Categoria: **String**
    * Data programado: **Date**
    * Repetir: **Boolean**
    * Frequencia: **Enum [diario, semanal, mensal, anual, 2 anos, 3 anos, 5 anos]**
    * Pagar em: **String** *indica quando será feito o pagamento no caso de pagamentos repetitivos*
    * Valor: **Float**

- [ ] Despesas
    * Titulo: **String**
    * Categoria: **String**
    * Data pagamento: **String**
    * Pagamento: **Pagamentos ObjectId**
    * Valores: **Array**
        * Descrição: **String**
        * Data: **Date**
        * Valor: **Float**

- [ ] Categorias
    * Descrição: **String**
    * Custo planejado: **Float**
    * Custo real: **Float**

- [ ] Usuário
    * Nome: **String**
    * E-mail: **String**
    * Password: **Hash**
    * User type: **Enum [common, vip, admin]**
    * Ativo: **Boolean**
    * API token: **String**


## Funcionalidades

- [ ] Dashboard
    - [ ] Proximas despesa
    - [ ] Despesas de Hoje
    - [ ] Despesas em atraso
    - [ ] Total to mes por categoria

- [ ] Autenticação de usuários
    - [X] Login
    - [X] Deslogar
    - [X] Refresh token
    - [X] User data
    - [ ] Cadastrar-se
    - [ ] Recuperar senha

- [ ] Controle de Contas
    - [X] Adicionar nova conta
    - [X] Editar conta existente
    - [X] Excluir conta
    - [ ] Pagar conta
    - [ ] Listar contas por categoria
    - [ ] Total por categoria

- [X] Cadastro de Categorias
    - [X] Adicionar
    - [X] Editar
    - [X] Excluir
    - [X] Listar todas/uma

- [ ] Controle de Saldo

- [ ] Relatórios


## Pacotes para instalar e configurar

- [X] Laravel mongodb
- [ ] Laravel JWT