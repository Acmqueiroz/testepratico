# testepratico


# Questões Teóricas:
## 1.	PHP
### Oque é PHP e para que ele é usado?
É uma linguagem de programação muito utilizada para comunicação do lado do servido, utilizada por desenvolvedores para criar páginas dinâmicas e facilmente integrado ao arquivo html.


### Explique a diferença entre ‘include’ e ‘require’ em PHP.
A diferença está na forma como um erro e tratado. Require produz um erro E_COMPILE_ERRO que encerra a execução do script. O include apenas emite um aviso (E_WARNING) que permite com que o script continue.

### Como você̂ pode conectar um banco de dados MySQL usando PHP?
Utilizando a biblioteca do PDO aonde irei informar os dados de conexao com o banco, sendo eles o servido o usuario a senha e o nome do banco de dados.



## 2.	MySQL
###	 O que é uma chave primária e por que ela é importante?
A chave primaria e um valor ou um conjunto de valores que não pode conter números repetidos na mesma tabela e nem campos nulos, por exemplo o CPF, pois, ele é o único valor que não será repetido em nenhuma lista, uma vez cada pessoa possui um único número de CPF.
Sua importância está em possibilitar a identificação e o relacionamento com as demais tabelas.

### Qual é a diferença entre os comandos SELECT, INSERT, UPDATE e DELETE?
São comandos de manipulação de dados fazem parte do DML
Select: Uma sub-consulta
Insert: Inserir dados
Update: Atualiza registros
Delete:  Remove dados

### O que é uma JOIN em SQL e quais são os tipos mais comuns?
Join e a junção, e utilizada para realizar a combinação de uma ou mais tabelas.
No banco de dados, existe diversas tabelas diferentes onde os dados são armazenados e quando se faz necessário juntar os dados para se obter alguma informação muito importante se usa o JOIN. 
Os mais comuns são:
Inner Join – Left Join – Right Join – Full Join e Cross Join
## 3.	Testes de Qualidade

### O que é um teste de unidade (unit test)?
É o teste da menor parte testável de um programa, parece algo desnecessário mais a longo prazo na medida que o projeto cresce os códigos aumentam e fica justificado o quanto valeu a pena cada código de unidade. 

### Explique o que é um teste funcional.
E o teste executado para confirmar ser o objetivo de cada função esta sendo alcançado, se quando for utilizado ira retornar o esperado. 


### Quais são algumas práticas recomendadas para testar uma API?
Utilizando testes unitários, teste de integração, teste e2e


Validar o status retornado;
Validar o header de retorno;
Validar o body do response;
Validar como sua API se comporta quando o serviço está fora;
Validar o comportamento da API quando enviado um JSON/XML com uma estrutura incorreta;


