<div><translate><h2> Gerenciador de Clientes</h2><p> <strong>Projeto:</strong></p><p> Este projeto tem como objetivo cadastrar e gerenciar clientes no sistema.</p><p> <strong>Requisitos:</strong></p><ol >
<li >
<p> <strong>Baixar o banco de dados MySQL:</strong></p>
<ul >
<li >Acesse o link: <a target="_blank" href="https://www.apachefriends.org/index.html">https://www.apachefriends.org/download.html </a></li>
<li>Escolha a versão do MySQL compatível com seu sistema operacional.</li>
<li >Execute o instalador baixado e siga as instruções na tela para concluir a instalação.</li>
</ul>
</li>
<li >
<p><strong>Obter o código do projeto:</strong></p>
<ul >
<li>No GitHub, acesse o repositório do projeto.</li>
<li>Clique em <strong>&lt;&gt; Code</strong> e depois em <strong>Download ZIP</strong>.</li>
<li>Extraia o arquivo ZIP baixado na pasta "Downloads".</li>
<li >Abra a pasta extraída e deixe-a aberta.</li>
</ul>
</li>
</ol><p><strong>Instalação:</strong></p><ol >
<li >
<p><strong>Iniciar o XAMPP:</strong></p>
<ul >
<li>Localize o ícone do XAMPP na área de trabalho ou pesquise por ele no menu Iniciar.</li>
<li >Após ter aberto, clique nos botões "START" para iniciar o Apache e o MySQL.</li>
</ul>
</li>
<li >
<p><strong>Acessar o phpMyAdmin:</strong></p>
<ul >
<li>No XAMPP, clique em "Admin" na linha do MySQL.</li>
<li >O phpMyAdmin será aberto em uma nova guia do navegador.</li>
</ul>
</li>
<li >
<p><strong>Criar o banco de dados:</strong></p>
<ul >
<li>Na coluna esquerda do phpMyAdmin, clique em "Novo".</li>
<li >Na aba "Base de Dados", digite <strong>cliente</strong> (com letras minúsculas) no campo "Nome da base de dados".</li>
<li >Clique em "Criar".</li>
</ul>
</li>
<li >
<p><strong>Importar os dados:</strong></p>
<ul >
<li>Na barra superior do phpMyAdmin, clique em "Importar" (confira se a importação esta sendo feita no banco de dados, cliente).</li>
<li >Clique em "Escolher ficheiro" e selecione o arquivo <strong>usuario.sql</strong> na pasta <strong>gerenciador-cliente-main</strong> dentro da pasta extraída do ZIP.</li>
<li >Role para baixo e clique em "Importar".</li>
</ul>
</li>
<li >
<p><strong>Criar a pasta para os arquivos do projeto:</strong></p>
<ul >
<li>Abra o Meu Computador (atalho: Windows + E ou menu Iniciar).</li>
<li>Acesse Disco Local (C:) &gt; Xampp &gt; htdocs.</li>
<li >Crie uma nova pasta chamada <strong>Xampp2</strong> (se já existir, utilize-a).</li>
</ul>
</li>
<li >
<p><strong>Copiar os arquivos do projeto:</strong></p>
<ul >
<li>Na pasta extraída do ZIP, acesse <strong>gerenciador-cliente-main</strong>.</li>
<li >Copie todos os arquivos dentro dessa pasta para a pasta <strong>Xampp2</strong> criada anteriormente.</li>
</ul>
</li>
<li >
<p><strong>Acessar o sistema:</strong></p>
<ul >
<li >Abra um navegador web e digite o seguinte endereço na barra de URL:
<code-block>http://localhost/xampp2/
</code></pre><!----><!----><!----></div><!----></div><!----></code-block>
</li>
<li >Clique no arquivo <strong>login.php</strong>.</li>
</ul>
</li>
</ol><p><strong>Navegação:</strong></p><ol >
<li >
<p><strong>Tela de login:</strong></p>
<ul >
<li>Digite o usuário principal:
<ul>
<li>EMAIL: admin</li>
<li>SENHA: admin123</li>
</ul>
</li>
<li >Clique em "Entrar".</li>
</ul>
</li>
<li >
<p><strong>Tela de consulta:</strong></p>
<ul >
<li>A tela principal exibe a lista de clientes cadastrados.</li>
<li >Ao lado do campo de pesquisa, clique no botão verde com "+" para cadastrar um novo cliente.</li>
</ul>
</li>
<li >
<p><strong>Cadastro de cliente:</strong></p>
<ul >
<li>Preencha os campos com as informações do cliente.</li>
<li >Clique em "Voltar" para concluir o cadastro ou continue cadastrando novos clientes.</li>
</ul>
</li>
<li >
<p><strong>Consulta de clientes:</strong></p>
<ul >
<li>No campo de pesquisa, digite o ID, nome ou email do cliente desejado.</li>
<li>Clique na lupa para realizar a consulta.</li>
<li >Para exibir todos os cadastros, deixe o campo de pesquisa vazio e clique na lupa.</li>
</ul>
</li>
<li >
<p><strong>Visualização dos clientes:</strong></p>
<ul >
<li >Uma tabela com os dados dos clientes cadastrados será exibida.</li>
</ul>
</li>
<li >
<p><strong>Edição de clientes:</strong></p>
<ul >
<li>Na coluna "AÇÕES", clique no botão azul com um pincel ao lado do cliente que deseja editar.</li>
<li>Altere as informações do cliente nos campos disponíveis.</li>
<li >Clique em "Atualizar" para salvar as alterações ou em "Voltar" para cancelar a edição.</li>
</ul>
</li>
<li >
<p><strong>Exclusão de clientes:</strong></p>
<ul >
<li >Na coluna "AÇÕES", clique no botão vermelho com uma lixeira ao lado do cliente que deseja excluir.</li>
</ul>
</li>
<li >
<p><strong>Sair do sistema:</strong></p>
<ul >
<li >Clique no botão vermelho "Sair" no canto superior direito da tela.</li>
</ul>
</li>
</ol><p><strong>Observações:</strong></p><ul>
<li>O nome da base de dados deve ser <strong>cliente</strong> (com letras minúsculas) exatamente como indicado.</li>
<li>Certifique-se de que o Apache e o MySQL estejam em execução antes de continuar.</li>
</ul></translate></div>
