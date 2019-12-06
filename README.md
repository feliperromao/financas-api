# App de Controle de Finanças

## Recursos

- [ ] Pagamentos
    * Titulo: **String**
    * Categoria: **String**
    * Data programado: **Date**
    * Repetir: **Boolean**
    * Frequencia: **Enum [diario, semanal, mensal, anual, 2 anos, 3 anos, 5 anos]**
    * Valor: **Float**

- [ ] Despesas
    * Titulo: **String**
    * Categoria: **String**
    * Data pagamento: **String**
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