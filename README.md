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
    * API token: **String**


## Funcionalidades

- [ ] Dashboard
    - [ ] Proximas despesa
    - [ ] Despesas de Hoje
    - [ ] Despesas em atraso
    - [ ] Total to mes por categoria

- [ ] Autenticação de usuários
    - [ ] Cadastrar-se
    - [ ] Login
    - [ ] Recuperar senha
    - [ ] Deslogar

- [ ] Controle de Contas
    - [ ] Adicionar nova conta
    - [ ] Editar conta existente
    - [ ] Excluir conta
    - [ ] Pagar conta
    - [ ] Listar contas por categoria
    - [ ] Total por categoria

- [ ] Cadastro de Categorias
    - [ ] Adicionar
    - [ ] Editar
    - [ ] Excluir
    - [ ] Listar todas/uma

- [ ] Controle de Saldo

- [ ] Relatórios


## Fases de Desenvolvimento

1. Planejamento
    1.1 Escopo
    1.2 Requisitos
    1.3 Prototipo basico

2. Desenvolvimento da API

3. Desenvolvimeto do Front/App


## Pacotes para instalar e configurar

- [ ] Laravel mongodb
- [ ] Laravel JWT