drop table funcionarios;

CREATE DATABASE empreiteira;
USE empreiteira;


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(120) UNIQUE,
    senha VARCHAR(255)
);

insert into usuarios (nome,email, senha)
values
('adm','emailteste@gmail.com','123');

select * from usuarios;

CREATE TABLE funcionarios (
    idFuncionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    dataNascimento DATE NOT NULL,
    sexo ENUM('Masculino', 'Feminino', 'Outro'),
    naturalidade VARCHAR(100),
    tipoLogradouro VARCHAR(15) NOT NULL,
    nomeLogradouro VARCHAR(100) NOT NULL,
    numero VARCHAR(6) NOT NULL,
    complemento VARCHAR(30),    
    cidade VARCHAR(100),
    cep VARCHAR(10),
	email VARCHAR(150) NOT NULL,
    cargoFuncao VARCHAR(100),
    tipoContrato ENUM('CLT', 'TERCERIZADA', 'FREE LANCE') NOT NULL,
    status ENUM('ativo', 'inativo') NOT NULL DEFAULT 'ativo',
    observacoes TEXT
);


CREATE TABLE contatoFuncionario (
    idContato INT AUTO_INCREMENT PRIMARY KEY,
    idFuncionario INT NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    tipo ENUM('Celular', 'Residencial', 'Comercial', 'WhatsApp'),

    CONSTRAINT fk_contatoFuncionario
        FOREIGN KEY (idFuncionario)
        REFERENCES funcionarios (idFuncionario)
        ON DELETE CASCADE
);



CREATE TABLE Obra (
    idObra INT AUTO_INCREMENT PRIMARY KEY NOT NULL ,
    dataInicio DATETIME NOT NULL,
    dataFim DATETIME,
    status ENUM('Em andamento', 'Concluída', 'Cancelada') NOT NULL,
    estado CHAR(2) NOT NULL,
    cidade VARCHAR(45) NOT NULL,
    cep CHAR(8) NOT NULL,
    logradouro VARCHAR(80) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    numero CHAR(4) NOT NULL,
    complemento VARCHAR(45),
    contrato VARCHAR(45)
);

DROP TABLE obra
DROP TABLE obrafuncionario;
DROP TABLE financeiroobra;
DROP TABLE obracliente;



CREATE TABLE Cliente (
    idCliente INT AUTO_INCREMENT PRIMARY KEY,
    nomeCliente VARCHAR(45) NOT NULL,
    cpf CHAR(11) UNIQUE,
    cnpj CHAR(14) UNIQUE
);

CREATE TABLE Automovel (
    idAutomovel INT AUTO_INCREMENT PRIMARY KEY,
    idFuncionario INT NOT NULL,
    nomeAutomovel VARCHAR(45) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    ano CHAR(4) NOT NULL,
    placa CHAR(7) NOT NULL UNIQUE,
    renavam CHAR(11) NOT NULL UNIQUE,
    CONSTRAINT fk_automovelfuncionario FOREIGN KEY (idFuncionario) REFERENCES Funcionario(idFuncionario)
);

CREATE TABLE ObraFuncionario (
    idObraFuncionario INT AUTO_INCREMENT PRIMARY KEY,
    idFuncionario INT NOT NULL,
    idObra INT NOT NULL,
    CONSTRAINT fk_funcionario_funcionario FOREIGN KEY (idFuncionario) REFERENCES Funcionario(idFuncionario),
    CONSTRAINT fk_funcionario_obra FOREIGN KEY (idObra) REFERENCES Obra(idObra),
    CONSTRAINT uq_obra_funcionario UNIQUE (idFuncionario, idObra)
);

CREATE TABLE FinanceiroFuncionario (
idFinanceiroFuncionario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
idFuncionario INT NOT NULL,
salario DECIMAL(2) NOT null,
ferias DECIMAL(2)NOT null,
inss DECIMAL(2)NOT NULL,
13° DECIMAL(2),
CONSTRAINT fk_financeirofuncionario FOREIGN KEY (idFuncionario) REFERENCES funcionario(idFuncionario)
);

CREATE TABLE financeiroObra(
idFinanceiroObra INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
idObra INT NOT NULL,
descricao VARCHAR(100) NOT NULL,
categoria VARCHAR(50),
valor DECIMAL(10,2) NOT NULL,
dataGasto DATE not NULL,
formaPagamento VARCHAR(30),
observacao VARCHAR(200),
CONSTRAINT fk_FinanceiroObra FOREIGN KEY (idObra) REFERENCES obra(idObra) 
);



CREATE TABLE ObraCliente(
idObraCliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
idObra INT NOT NULL,
idCliente INT NOT NULL,
CONSTRAINT fk_Obra FOREIGN KEY (idObra) REFERENCES obra(idObra),
CONSTRAINT fk_Cliente FOREIGN KEY (idCliente) REFERENCES cliente(idCliente)
);

CREATE TABLE contatoCliente(
idContatoCliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
idCliente INT NOT  NULL,
celular CHAR(11),
CONSTRAINT fk_ClienteContato FOREIGN KEY (idCliente) REFERENCES cliente(idCliente)
);

CREATE TABLE FinanceiroAutomovel(
idFinanceiroAutomovel INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
idAutomovel INT NOT NULL,
combustivel DECIMAL(2),
Manutencao DECIMAL(2),
IPVA DECIMAL(2),
CONSTRAINT fk_FinanceiroAutomovel FOREIGN KEY (idAutomovel) REFERENCES automovel(idAutomovel)

);

CREATE TABLE automovelFuncionario(
idAutomovelFuncionario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
idAutomovel INT NOT NULL,
idFuncionario INT NOT NULL,
dataRetirada DATETIME NOT NULL,
dataDevolucao DATETIME,
CONSTRAINT fk_FuncionarioAutomovel FOREIGN KEY (idAutomovel) REFERENCES automovel(idAutomovel)
);


CREATE TABLE usuario (
idUsuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL ,
login VARCHAR (100) NOT NULL UNIQUE,
senha VARCHAR (250) NOT NULL

)

DROP DATABASE bdAtualizadoPI;