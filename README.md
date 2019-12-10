# App de Controle de Finanças

## Recursos

- [ ] Pagamentos (*Payment*)
    * Titulo: **String**
    * Categoria: **String**
    * Data programado: **Date**
    * Repetir: **Boolean**
    * Frequencia: **Enum [diario, semanal, mensal, anual, 2 anos, 3 anos, 5 anos]**
    * Pagar em: **String** *indica quando será feito o pagamento no caso de pagamentos repetitivos*
    * Valor: **Float**

- [ ] Despesas (*Bill*)
    * Titulo: **String**
    * Categoria: **String**
    * Data pagamento: **String**
    * Pagamento: **Pagamentos ObjectId**
    * Valores: **Array**
        * Descrição: **String**
        * Data: **Date**
        * Valor: **Float**

- [ ] Categorias (*Category*)
    * Descrição: **String**
    * Custo planejado: **Float**
    * Custo real: **Float**

- [ ] Usuário (*User*)
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

- [ ] Controle de Pagamentos
    - [X] Adiciona
    - [X] Editar
    - [X] Excluir
    - [X] Listar todas/uma
    - [ ] Pagar conta
    - [ ] Listar pagamentos por categoria
    - [ ] Total por categoria

- [ ] Controle de Despesas
    - [X] Adiciona
    - [X] Editar
    - [ ] Excluir
    - [ ] Listar todas/uma

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
- [ ] Habilitar soft delete
- [ ] Controle de login de usuaruis por status **ativo**
- [ ] Criar rotas para gereciamento de usuarios
    - [ ] Editar usuarios
    - [ ] Desativar
    - [ ] Criar novo