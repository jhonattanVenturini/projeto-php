# 🚀 Plataforma de Freelances – Projeto Pessoal PHP  

Este é um projeto pessoal para desenvolvimento de uma **plataforma web** voltada para conectar freelancers à sua **primeira oportunidade profissional**.  

O sistema inclui funcionalidades de **cadastro, login, painel de controle, páginas de serviços e sobre**, oferecendo uma experiência completa de front-end e back-end com PHP, MySQL, HTML, CSS e JavaScript.  

---

## 🎯 Objetivo  

- Criar uma plataforma funcional para **conectar freelancers e clientes iniciantes**  
- Desenvolver habilidades em **PHP e MySQL**  
- Implementar **login, autenticação e painel de controle**  
- Praticar **desenvolvimento web full-stack**, com páginas responsivas e interativas  

---

## 🧪 Tecnologias Utilizadas  

- 🌐 **HTML5** — Estrutura de páginas web  
- 🎨 **CSS3** — Estilização e layouts responsivos  
- ⚡ **JavaScript** — Interatividade no front-end  
- 🖥️ **PHP** — Backend e controle de autenticação  
- 🗄️ **MySQL/MariaDB** — Banco de dados para usuários e informações da plataforma  

---

## ⚙️ Pré-requisitos  

Antes de rodar o projeto localmente, você precisa:  

1. Ter um **servidor local PHP** (XAMPP, WAMP ou similar)  
2. Ter **MySQL/MariaDB** instalado  
3. Criar o banco de dados e tabela de usuários conforme instruções abaixo  

---

## 🗄️ Banco de Dados  

Você pode usar o seguinte **SQL Dump** para criar o banco e a tabela:  

```sql
-- Banco de dados: login

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) DEFAULT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserção de usuário de teste
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'TESTE', 'teste@teste.com.br', 'teste123');

-- Definindo chave primária
ALTER TABLE `usuarios`
ADD PRIMARY KEY (`id`);

> **Lembre-se:** Atualize o arquivo `PHP/conexao.php` com suas credenciais do MySQL antes de rodar o projeto.

---

## ▶️ Como Executar Localmente

1. **Baixe o projeto:** clone o repositório ou faça download do ZIP  
2. **Coloque os arquivos** na pasta `www` (XAMPP) ou `htdocs` (WAMP)  
3. **Configure o banco de dados MySQL/MariaDB** com o script fornecido  
4. Abra o navegador e acesse:  
http://localhost/nome-do-projeto/index.php


5. Para teste, utilize o usuário:

- **Email:** teste@teste.com.br  
- **Senha:** teste123  

---

## 🔮 Melhorias Futuras

- 📱 Tornar o site totalmente responsivo para dispositivos móveis  
- 🎨 Criar um **design system** para padronizar estilos  
- ⚡ Implementar exemplos com frameworks modernos (**React, Angular**)  
- 🔊 Adicionar recursos de acessibilidade (WAI-ARIA, leitores de tela)  
- 🗄️ Melhorar a estrutura do banco de dados e adicionar consultas avançadas  
- 🔐 Segurança: hashing de senhas e validações completas de formulários  
- 💬 Sistema de mensagens interno entre freelancers e clientes  
---



