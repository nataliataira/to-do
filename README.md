# ✅ To-Do List em PHP

Este projeto é uma aplicação simples de lista de tarefas (To-Do List) feita com PHP e armazenamento local via arquivo `JSON`. O objetivo é fornecer uma interface minimalista para gerenciar tarefas, sem a necessidade de banco de dados, ideal para estudos e pequenos projetos.

---

## 📁 Estrutura do Projeto

```
to-do/
├── data/
│   └── tasks.json
├── app/
│   ├── create.php
│   ├── delete.php
│   ├── edit.php
│   ├── update.php
│   └── index.php
├── style/
│   └── style.css
└── README.md
```

- **`data/tasks.json`**: Onde as tarefas são armazenadas em formato JSON.
- **`app/*.php`**: Scripts responsáveis pelas funcionalidades do CRUD.
- **`style/style.css`**: Estilização básica da interface.

---

## 🚀 Como Executar

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/nataliataira/to-do.git
   ```

2. **Acesse o diretório:**

   ```bash
   cd to-do
   ```

3. **Inicie o servidor local do PHP:**

   ```bash
   php -S localhost:8000 -t app
   ```

4. **Acesse no navegador:**

   ```
   http://localhost:8000
   ```

---

## 🧪 Funcionalidades

- ✅ Adicionar nova tarefa
- ✏️ Editar tarefa existente
- 🗑️ Excluir tarefa
- 📄 Persistência de dados via JSON

---

## 📌 Observações

- As tarefas são persistidas em `data/tasks.json`.
- Certifique-se de que o servidor tem permissão de leitura e escrita nesse arquivo.
- O projeto é ideal para fins educacionais e prototipagem rápida.

---

## 📜 Licença

Distribuído sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

---

> Projeto desenvolvido por [Natalia Taira](https://github.com/nataliataira).
