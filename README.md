# testepratico


# Questões Teóricas:💻
## 1. PHP
### Oque é PHP e para que ele é usado?
É uma linguagem de programação muito utilizada para comunicação do lado do servido, utilizada por desenvolvedores para criar páginas dinâmicas e facilmente integrado ao arquivo html.


### Explique a diferença entre ‘include’ e ‘require’ em PHP.
A diferença está na forma como um erro e tratado.  
**`require`** produz um erro **E_COMPILE_ERRO** que encerra a execução do script.  
**`include`** apenas emite um aviso **(E_WARNING)** que permite com que o script continue.

### Como você̂ pode conectar um banco de dados MySQL usando PHP?
Utilizando a biblioteca do PDO aonde irei informar os dados de conexão  com o banco, sendo eles:  
$servidor = "localhost";  
$usuario = "root";  
$senha = "";  
$db = "banco_de_dados";  



## 2.	MySQL

### O que é uma chave primária e por que ela é importante?
A chave primaria é utilizada para manter a organização, integridade e o desempenho do banco de dados relacional.  Ela garante que que os registros sejam únicos e de fácil identificação.   Não e permitidos números repetidos na mesma tabela e nem campos nulos, por exemplo o CPF, ele é o único valor que não será repetido em nenhuma lista, uma vez cada pessoa possui um único número de CPF.  
Sua importância está em possibilitar a identificação e o relacionamento com as demais tabelas.

### Qual é a diferença entre os comandos SELECT, INSERT, UPDATE e DELETE?
São comandos de manipulação de dados fazem parte do DML, cada um tem uma função específica.  
Permitindo que você crie, leia, atualize e delete informações. 
  
**Select:** Uma sub-consulta (consultar/recuperar)  
**Insert:** Inserir dados  
**Update:** Atualizar (modificar) registros  
**Delete:**  Remove dados  

### O que é uma JOIN em SQL e quais são os tipos mais comuns?
Join e a junção, e utilizada para realizar a combinação de uma ou mais tabelas.
No banco de dados, existe diversas tabelas diferentes onde os dados são armazenados e quando se faz necessário juntar os dados para se obter alguma informação muito importante se usa o `JOIN`.
  
_Os mais comuns são:_    
**INNER JOIN** = Retorna apenas os registros que têm correspondências em ambas tabelas.   
**LEFT JOIN** = Retorna os dados da tabela à esquerda e os registros correspondentes da tabela à direita. Se não houver, os resultados à direita serão nulos.  
**RICHT JOIN** = Retorna todos os registors da tabela à diretia e os registros correspondentes da tabela à esquerda. Se não houver, os resultados ta tabela à esquerda sera nulo.  
**FULL JOIN** = Retorna todos os registros uqnado há uma correspondência em uma das tabelas. Registros sem correspondência em ambas as tabelas, terá retorno com valores nulos aonde não houver correspondência.  
**CROSS JOIN** = Retorna todas as combinações possiveis de registros entre as tabelas.  


## 3.	Testes de Qualidade

### O que é um teste de unidade (unit test)?
É o teste  com foco na menor parte testável de um código, uma prática essencial no desenvolvimento de software que ajuda a garantir a qualidade e confiança do código. Proporcionado a detecção precoce de erros.

### Explique o que é um teste funcional.
E o teste executado para confirmar ser o objetivo de cada função esta sendo alcançado, se quando for utilizado ira retornar o esperado. 


### Quais são algumas práticas recomendadas para testar uma API?
Definir requisitos claros (documentação clara e completa da API.  
Utilizar testes unitários, teste de integração, teste e2e.  
Gerenciar dados de testes ( Ambiente de teste, Dados Realistas).  
Verificar códigos de respostas HTTP  
Testar métodos HTTP (GET, POST, PUT,DELETE).  
Autenticação e autorização.  Versionamento da API.  Documentos e logs.  Testar conformidade.  

### Teste Prático 

**Descreva como você testaria a funcionalidade de login de um site.**

![imagem1](https://raw.githubusercontent.com/Acmqueiroz/testepratico/master/teste/Casodeteste.png) 

### Escreva um caso de teste para uma API que retorna a lista de produtos em formato JSON. O caso de teste deve verificar se a resposta tem um código de status 200 e se os dados retornados estão no formato correto.

+ Escolhar um método de consumo (inicialize uma solicitação cURL para a URL da API).  
+ Executar a solicitação e captura a resposta e o código de status HTTP.  
+ Conferir se o código de status HTTP é 200.  
$this->assertEquals(200, $httpCode, 'Status code is not 200');  
+ Conferir se a resposta é um **JSON** válido.  
$this->assertNotNull($data, 'Response is not a valid JSON');    
+ Conferir se a resposta **JSON** é um array.  
$this->assertIsArray($data, 'Response data is not an array');  
+ Conferir se cada item do array de produtos tem as chaves esperadas (id, nome, preco).  
foreach ($data as $product) {  
     $this->assertArrayHasKey('id', $product);  
     $this->assertArrayHasKey('nome', $product);  
     $this->assertArrayHasKey('preco', $product);


   
