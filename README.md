# 📝 To-Do List com PHP e PostgreSQL

Uma aplicação web moderna de lista de tarefas desenvolvida com PHP no backend e PostgreSQL como banco de dados. Este projeto demonstra conceitos fundamentais de desenvolvimento web full-stack, incluindo operações CRUD, design responsivo e boas práticas de desenvolvimento.

## ✨ Funcionalidades

- ✅ **Adicionar tarefas** - Crie novas tarefas rapidamente
- 📝 **Editar tarefas** - Modifique tarefas existentes inline
- 🗑️ **Remover tarefas** - Delete tarefas que não são mais necessárias
- 📱 **Design responsivo** - Interface otimizada para desktop e mobile
- 🎨 **Interface moderna** - UI limpa e intuitiva com gradientes e animações suaves

## 🛠️ Tecnologias Utilizadas

### Backend
- **PHP 7.4+** - Linguagem de programação server-side
- **PostgreSQL** - Sistema de gerenciamento de banco de dados relacional

### Frontend
- **HTML5** - Estrutura semântica da aplicação
- **CSS3** - Estilização moderna com gradientes e transições
- **JavaScript** - Interatividade básica (ES6+)

### Ferramentas de Desenvolvimento
- **Git** - Controle de versão
- **VS Code** - Ambiente de desenvolvimento

## 📋 Pré-requisitos

Antes de executar este projeto, certifique-se de ter instalado:

- **PHP 7.4 ou superior**
- **PostgreSQL 12 ou superior**
- **Servidor web** (Apache/Nginx) ou PHP built-in server
- **Git** (opcional, para clonar o repositório)

## 🚀 Instalação e Execução

### 1. Clone o repositório
```bash
git clone https://github.com/seu-usuario/To-Do-List-com-PHP-e-PostgreSQL.git
cd To-Do-List-com-PHP-e-PostgreSQL
```

### 2. Configure o banco de dados

Crie um banco de dados PostgreSQL chamado `todolist`:

```sql
CREATE DATABASE todolist;
```

### 3. Configure a conexão

Edite o arquivo `scripts/conexao.php` e atualize as credenciais do banco:

```php
$host = 'localhost';          // Endereço do servidor PostgreSQL
$port = '5432';               // Porta do PostgreSQL
$dbname = 'todolist';         // Nome do banco de dados
$user = 'postgres';           // Seu usuário PostgreSQL
$password = 'SUA_SENHA';      // Sua senha PostgreSQL
```

### 4. Crie a tabela

Execute o seguinte comando SQL no seu banco de dados:

```sql
CREATE TABLE notas (
    id SERIAL PRIMARY KEY,
    nota TEXT NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 5. Execute a aplicação

#### Opção 1: Usando PHP built-in server
```bash
php -S localhost:8000
```

#### Opção 2: Usando Apache/Nginx
Coloque os arquivos na pasta raiz do seu servidor web e acesse via navegador.

### 6. Acesse a aplicação
Abra seu navegador e acesse: `http://localhost:8000` (ou a porta configurada)

## 📁 Estrutura do Projeto

```
To-Do-List-com-PHP-e-PostgreSQL/
├── index.php              # Página principal da aplicação
├── scripts/
│   ├── conexao.php        # Configuração da conexão com PostgreSQL
│   ├── adicionar_nota.php # Script para adicionar tarefas
│   ├── editar_nota.php    # Script para editar tarefas
│   └── deletar_nota.php   # Script para remover tarefas
├── styles/
│   └── style.css          # Estilos CSS da aplicação
├── LICENSE                # Licença do projeto
└── README.md             # Este arquivo
```

## 🎯 Como Usar

1. **Adicionando uma tarefa**: Digite sua tarefa no campo de entrada e clique em "Adicionar"
2. **Editando uma tarefa**: Clique no botão "Editar" ao lado da tarefa desejada, modifique o texto e clique em "Editar" novamente
3. **Removendo uma tarefa**: Clique no botão "Deletar" vermelho ao lado da tarefa

## 🤝 Como Contribuir

Contribuições são sempre bem-vindas! Para contribuir:

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

### Diretrizes para contribuição:
- Mantenha o código limpo e bem comentado
- Siga as convenções de nomenclatura PHP
- Teste suas alterações antes de submeter
- Atualize a documentação se necessário

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Autor

**Seu Nome**
- LinkedIn: [Seu LinkedIn](https://linkedin.com/in/seu-perfil)
- GitHub: [@seu-usuario](https://github.com/seu-usuario)
- Email: seu.email@exemplo.com

---

⭐ **Se este projeto foi útil para você, considere dar uma estrela no GitHub!**

Feito com ❤️ e PHP
