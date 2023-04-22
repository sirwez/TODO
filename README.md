<h1>API RESTful de TODOlist</h1>
<p>Este projeto é uma API RESTful de uma TODOlist, desenvolvida em Laravel 9 seguindo o padrão RESTful. Utiliza banco de dados MySQL e tem um CRUD de tarefas.</p>
<h2>Instalação</h2>
<ol>
  <li>Clone o repositório:</li>
  <code>git clone https://github.com/sirwez/TODO</code>
  <li>Instale as dependências:</li>
  <code>composer install</code>
  <li>Configure o banco de dados:</li>
  <p>Crie um arquivo <code>.env</code> com as informações do banco de dados e execute o comando <code>php artisan migrate</code> para criar as tabelas necessárias.</p>
  <li>Execute o servidor local:</li>
  <code>php artisan serve</code>
</ol>
<h2>Utilização</h2>
<p>A API permite cadastrar, visualizar, editar e excluir tarefas. Segue abaixo a documentação das rotas disponíveis:</p>
<h3>GET /tarefas</h3>
<p>Retorna todas as tarefas cadastradas.</p>
<h4>Exemplo de resposta:</h4>
<pre>
<code>[
  {
    "id": 1,
    "descricao": "Comprar leite",
    "concluida": false,
    "created_at": "2023-04-22T12:00:00.000000Z",
    "updated_at": "2023-04-22T12:00:00.000000Z"
  },
  {
    "id": 2,
    "descricao": "Pagar conta de luz",
    "concluida": true,
    "created_at": "2023-04-22T13:00:00.000000Z",
    "updated_at": "2023-04-22T13:00:00.000000Z"
  }
]</code>
</pre>
<h3>GET /tarefas/{id}</h3>
<p>Retorna uma tarefa específica.</p>
<h4>Parâmetros</h4>
<ul>
  <li><code>id</code> - ID da tarefa a ser recuperada</li>
</ul>
<h4>Exemplo de resposta:</h4>
<pre>
<code>{
  "id": 1,
  "descricao": "Comprar leite",
  "concluida": false,
  "created_at": "2023-04-22T12:00:00.000000Z",
  "updated_at": "2023-04-22T12:00:00.000000Z"
}</code>
</pre>
<h3>POST /tarefas</h3>
<p>Cria uma nova tarefa.</p>
<h4>Parâmetros</h4>
<ul>
  <li><code>descricao</code> - Descrição da tarefa (obrigatório)</li>
  <li><code>concluida</code> - Indica se a tarefa foi concluída (opcional, padrão: <code>false</code>)</li>
</ul>
<h4>Exemplo de corpo da requisição:</h4>
<pre>
<code>{
  "descricao": "Comprar pão",
  "concluida": false
}</code>
</pre>
<h4>Exemplo de resposta:</h4>
<pre>
<code>{
  "id": 3,
  "descricao": "Comprar pão",
  "concluida": false,
  "created_at": "2023-04-22T14:00:00.000000Z",
  "updated_at": "2023-04-22T14:00:00.000000Z"
}</code>
</pre>
<h3>PUT /tarefas/{id}</h3>
<p>Atualiza uma tarefa existente.</p>
<h4>Parâmetros</h4>
<ul>
  <li><code>id</code> - ID da tarefa a ser atualizada (obrigatório)</li>
  <li><code>descricao</code> - Nova descrição da tarefa (opcional)</li>
  <li><code>concluida</code> - Indica se a tarefa foi concluída (opcional)</li>
</ul>
<h4>Exemplo de corpo da requisição:</h4>
<pre>
<code>{
  "descricao": "Comprar pão e leite",
  "concluida": true
}</code>
</pre>
<h4>Exemplo de resposta:</h4>
<pre>
<code>{
  "id": 3,
  "descricao": "Comprar pão e leite",
  "concluida": true,
  "created_at": "2023-04-22T14:00:00.000000Z",
  "updated_at": "2023-04-22T15:00:00.000000Z"
}</code>
</pre>
<h3>DELETE /tarefas/{id}</h3>
<p>Exclui uma tarefa existente.</p>
<h4>Parâmetros</h4>
<ul>
  <li><code>id</code> - ID da tarefa a ser excluída</li>
</ul>
<h4>Exemplo de resposta:</h4>
<pre>
<code>{
  "mensagem": "Tarefa excluída com sucesso."
}</code>
</pre>
<h2>Considerações finais</h2>
<p>Este projeto é uma API básica de uma TODOlist e pode ser utilizado como ponto de partida para o desenvolvimento de outras APIs em Laravel seguindo o padrão RESTful.</p>
