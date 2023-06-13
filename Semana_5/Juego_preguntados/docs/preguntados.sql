-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: maraton
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Materias`
--

DROP TABLE IF EXISTS `Materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Materias` (
  `id_materia` tinyint(4) NOT NULL AUTO_INCREMENT,
  `materia` varchar(20) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Materias`
--

LOCK TABLES `Materias` WRITE;
/*!40000 ALTER TABLE `Materias` DISABLE KEYS */;
INSERT INTO `Materias` VALUES (1,'Matemáticas'),(2,'Física'),(3,'Química'),(4,'Psicología'),(5,'Literatura'),(6,'Computación');
/*!40000 ALTER TABLE `Materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Preguntas`
--

DROP TABLE IF EXISTS `Preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Preguntas` (
  `id_pregunta` tinyint(4) NOT NULL,
  `id_materia` tinyint(4) NOT NULL,
  `kilómetro` tinyint(4) DEFAULT NULL,
  `pregunta` char(255) NOT NULL,
  PRIMARY KEY (`id_pregunta`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `Preguntas_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `Materias` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Preguntas`
--

LOCK TABLES `Preguntas` WRITE;
/*!40000 ALTER TABLE `Preguntas` DISABLE KEYS */;
INSERT INTO `Preguntas` VALUES (1,3,1,'¿Qué es un sistema cerrado?'),(2,3,2,'Es la unidad de una magnitud que mide la cantidad de sustancia.'),(3,3,3,'¿Qué es una disolución?'),(4,3,3,'Es el número de moles de soluto en un litro de solución'),(5,3,2,'¿Cuál es el número de oxidación de un átomo neutro?'),(6,3,1,'Es la función de estado que nos indica el calor liberado o absorbido a presión constante en una reacción'),(7,3,1,'Nombre de las partículas de mayor energía que participan en la formación de enlaces.'),(8,3,2,'Tipo de enlace en donde se forman redes cristalinas con enlaces polidireccionales'),(9,3,3,'Electrodo de la celda voltaica en donde se lleva a cabo la oxidación'),(10,3,3,'Número cuántico que indica qué orientación tiene el orbital en el que se encuentra el electrón'),(11,4,2,'¿Quienes fueron los sujetos experimentales en el experimento de Pavlov?'),(12,4,1,'Lóbulo que se encarga de la visión:'),(13,4,1,'Pensamiento crítico que se basa en recopilación cuidadosa de evidencia, descripción, medición exacta, observación controlada y los resultados.'),(14,4,2,'Condiciones alteradas o modificadas por el experimentador.'),(15,4,3,'Condiciones que un experimentador desea evitar que afecten el resultado de un experimento.'),(16,4,3,'Fenómenos, cualidades, rasgos que toman diferentes valores, magnitudes o intensidades. Se dividen en dependiente, independiente y extraña.'),(17,4,2,'Concentración voluntaria de un estímulo sensorial específico, seleccionando y desviando mensajes sensoriales entrantes.'),(18,4,1,'Factores (internos o externos) que permiten a una persona actuar para realizar una acción determinada y recibir una sensación de satisfacción'),(19,4,1,'Motivación que es independiente a cualquier estímulo externo y salen del interior de cada persona'),(20,4,2,'Motivación que provoca que realices acciones para conseguir una recompensa externa.'),(21,1,3,'El dominio de toda función polinómica son todos los números:'),(22,1,3,'Método gráfico que nos permite saber si una gráfica es función'),(23,1,2,'Expresión que nos permite saber si una función es impar'),(24,1,1,'Conjunto de valores que puede tomar la variable independiente'),(25,1,1,'¿Cuál es el valor de la derivada de una constante?'),(26,1,2,'Puntos en los que la gráfica de la función cambia de concavidad, es decir, pasa de cóncava a convexa o viceversa.'),(27,1,3,'¿Cuál es la derivada de sen(x)?'),(28,1,3,'Límite que representa la pendiente de la recta tangente a la gráfica de la función en un punto'),(29,1,2,'¿Cuál es el valor del límite de una constante?'),(30,1,1,'Valor de la derivada de una variable con exponente 1'),(31,5,1,'¿Cómo se llamó el movimiento literario mexicano surgido en los años noventa?'),(32,5,2,'Género literario, que suele escribirse en prosa en el que se encuentran principalmente acciones.'),(33,5,3,'¿Quién escribió la Ilíada?'),(34,5,3,'¿En qué año ganó Octavio Paz el premio nobel de Literatura?'),(35,5,2,'¿De qué corriente literaria es el libro Azul de Rubén Darío?'),(36,5,1,'¿En qué año se publicó el libro ‘Las batallas en el desierto’ de José Emilio Pacheco?'),(37,5,1,'¿Qué libro publicó Carlos Fuentes en 1962?'),(38,5,2,'¿De qué país era Jorge Luis Borges?'),(39,5,3,'¿Con qué libro Gabriel García Márquez ganó el premio nobel de literatura en 1982?'),(40,5,3,'Corriente literaria mexicana perteneciente a las vanguardias que exalta la modernidad y el desarrollo urbano y tecnológico de las ciudades.'),(41,5,3,'¿Cuál es un ejemplo de liminalidad?'),(42,5,2,'¿Cuál de los siguientes libros no fue escrito por Julio Cortázar?'),(43,5,3,'Es la repetición de una palabra al comienzo de dos o más versos'),(44,5,3,'¿Qué filósofo alemán escribió sobre la teoría del superhombre?'),(45,5,2,'¿Quién fue el primer premio nobel de hispanoamérica?'),(46,5,1,'¿Cuál es el verdadero nombre del poeta vanguardista chileno Pablo Neruda?'),(47,5,1,'¿En qué año se publicó el libro de la metamorfosis de Franz Kafka?'),(48,5,2,'¿Cuál es el escenario principal de la novela Pedro Páramo del mexicano Juan Rulfo?'),(49,5,3,'¿Cómo se llama la obra más importante del autor José Saramago?'),(50,5,1,'¿Cuántos premios nobel en literatura tiene Latinoamerica?'),(51,6,1,'¿Qué significa ‘std’?'),(52,6,3,'¿Quién fue el creador del lenguaje de programación ‘C’?'),(53,6,2,'¿Qué figura tiene el ciclo ‘for’ en los diagramas de flujos?'),(54,6,1,'¿Qué significa ‘cmd’?'),(55,6,3,'¿Cuál es el comando para cambiar de directorio en una terminal?'),(56,6,3,'Es una secuencia de líneas de código que contienen órdenes y que se ejecutarán siguiendo un orden secuencial.'),(57,6,2,'Tipo de dato que comprende un único carácter'),(58,6,1,'¿Cuál de los siguientes lenguajes de programación es fuertemente tipado?'),(59,6,2,'¿Cuál es la extensión para un archivo tipo excel con macros?'),(60,6,1,'¿A Qué paradigma de programación pertenece Java?'),(61,6,2,'¿Cómo se llama la interfaz de línea de comandos nativa de linux?'),(62,6,1,'¿Cómo se llama el usuario con mayor privilegio en linux?'),(63,6,3,'¿Cómo se llama el lenguaje creado por Nicolas Cannasse?'),(64,6,2,'¿Qué significa el acrónimo ‘ENIAC’?'),(65,6,3,'¿Qué sistema numérico utilizan las computadoras?'),(66,6,3,'¿Qué significan las siglas CPU?'),(67,6,2,'¿Cómo se le llama a los elementos físicos en una computadora?'),(68,6,1,'¿Cuál es el diagrama que representa gráficamente un algoritmo o proceso?'),(69,6,3,'¿A cuanto equivale un KiB en Bytes?'),(70,6,3,'¿Cuáles son las 3 principales estructuras de control en la programación?'),(71,3,2,'Elementos base que constituyen la química orgánica'),(72,3,1,'Se presenta en forma de partículas, es tangible, es decir, se puede tocar y presenta transformaciones. También se dice que es la cantidad de materia.'),(73,3,3,'Es la unión física de dos o más sustancias llamadas componentes, los cuales se pueden separar por métodos físicos ordinarios'),(74,3,3,'Es el responsable de que un elemento o sea diferente de las otras, pues le proporciona sus propiedades químicas y es el último electrón que entra en un átomo.'),(75,3,2,'Es considerado el padre de la nanociencia y de la nanotecnología'),(76,3,1,'Se considera a los átomos dé un mismo elemento que tienen igual número de electrones y protones pero diferente número de neutrones'),(77,3,2,'Son aquellos compuestos que tienen la misma fórmula condensada pero diferente estructura en el espacio'),(78,3,3,'Nombre del compuesto que tiene dos centros con dobles enlaces de carbono de acuerdo a los grupos funcionales de la química orgánica'),(79,3,1,'Hidrocarburos que se caracterizan por presentar hibridación sp, es decir, 2 orbitales híbridos'),(80,3,2,'Son compuestos orgánicos cuyas moléculas tienen grupos hidroxilos unidos a un átomo de carbono saturado'),(81,2,1,'¿Cómo se llama la partícula de la luz?'),(82,2,2,'¿Cómo se llama el padre de la relatividad general?'),(83,2,3,'¿Cuál es la fórmula de la ley de gravitación universal?'),(84,2,1,'¿Cómo se llama la rama de la física que estudia los efectos de los cambios de temperatura, presión y volumen de un sistema físico?'),(85,2,2,'¿Cómo se le llama al cambio de dirección de una onda cuando entra en contacto con la superficie que separa dos medios diferentes?'),(86,2,2,'¿Cuál es el valor de la constante universal ‘C’ (velocidad de la luz)?'),(87,2,3,'El ______ es la unidad de intensidad de corriente eléctrica.'),(88,2,1,'¿Cuál es la fórmula de momento lineal?'),(89,2,2,'¿Qué sistema comprende todas las partículas elementales del universo?'),(90,2,3,'Magnitud termodinámica que indica el grado de desorden molecular de un sistema.'),(91,2,3,'Según la Segunda Ley de Newton, ¿a qué es proporcional la fuerza?'),(92,2,1,'¿Qué clase de movimiento tiene un cuerpo que no se somete a ninguna fuerza?'),(93,2,2,'El enunciado: ‘La energía no se crea ni se destruye, en cambio, se conserva’ pertenece a:'),(94,2,2,'¿Cuál es la unidad de temperatura en el sistema internacional de unidades?'),(95,2,3,'¿Qué rama de la mecánica estudia las condiciones para que un cuerpo esté en equilibrio?'),(96,2,1,'¿Cómo interactúan dos cargas de distinto signo?'),(97,2,3,'Según la Tercera Ley de Newton. ¿Qué corresponde a toda acción?'),(98,2,2,'¿Cuál es la unidad de volumen en el sistema internacional de unidades?'),(99,2,1,'¿Cómo se llaman las magnitudes físicas que poseen dirección y sentido?'),(100,2,3,'¿Cuál es la unidad de la fuerza en el sistema internacional de unidades?'),(101,1,2,'Las siguientes son tipos de asíntotas que puede tener una función, excepto:'),(102,1,1,'Es la familia de antiderivadas de una función'),(103,1,3,'¿Cuál es la integral de la diferencial de x?'),(104,1,2,'Método de integración conocido por la frase “Un día vi una vaca vestida de uniforme”'),(105,1,3,'Método de integración también conocido como “Integración por cambio de variable”.'),(106,1,2,'¿Cuál es la integral de 0dx?'),(107,1,1,'¿Cuál es la integral de senx dx?'),(108,1,3,'Las siguientes son operaciones que se pueden realizar entre conjuntos, excepto:'),(109,1,1,'¿A qué propiedad de los números corresponde lo siguiente: (a+b)=(b+a)?'),(110,1,2,'Es el número de elementos que conforman un conjunto'),(111,4,2,'Es la tendencia que tiene el individuo al momento de reaccionar, se caracteriza por ser innata y fisiológica. Se encuentra en el ADN'),(112,4,2,'Conjunto de rasgos, comportamientos, pensamientos y emociones de un individuo.. Está determinado por la forma de percibir y reaccionar ante el mundo.'),(113,4,3,'Conjunto de rasgos de la personalidad que se adquieren del entorno. No son heredados, por lo que se pueden modificar o controlar'),(114,4,2,'Teoría de la psicología sobre la personalidad basado en el estudio de las cualidades del individuo. Se centra en el estudio de las diferencias individuales de los seres humanos, enfocándose en la identificación y en la medición de rasgos.'),(115,4,1,'Son considerados como procesos cognitivos básicos, excepto:'),(116,4,1,'Es el proceso cognitivo a través del cual la persona codifica, almacena y recupera información'),(117,4,3,'Es el proceso cognitivo que permite interpretar, analizar e integrar la información recuperada durante el proceso de sensación'),(118,4,2,'Neurotransmisor que influye en el estado de ánimo, en el ciclo sueño-vigilia, en la digestión, control de la temperatura y deseo sexual'),(119,4,1,'Los siguientes son componentes o sistemas de respuesta ante emociones, excepto:'),(120,4,2,'Motivación relacionada con la supervivencia del ser humano');
/*!40000 ALTER TABLE `Preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Respuestas`
--

DROP TABLE IF EXISTS `Respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Respuestas` (
  `id_respuesta` smallint(6) NOT NULL,
  `id_pregunta` tinyint(4) NOT NULL,
  `respuesta` varchar(150) DEFAULT NULL,
  `boolCorrect` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_respuesta`),
  KEY `id_pregunta` (`id_pregunta`),
  CONSTRAINT `Respuestas_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `Preguntas` (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Respuestas`
--

LOCK TABLES `Respuestas` WRITE;
/*!40000 ALTER TABLE `Respuestas` DISABLE KEYS */;
INSERT INTO `Respuestas` VALUES (1,1,'Aquel sistema donde se intercambia tanto materia como energía.',0),(2,1,'Aquel sistema en donde se puede intercambiar energía pero no materia.',1),(3,1,'Aquel sistema en donde no se puede intercambiar ni materia ni energía.',0),(4,1,'Aquel sistema donde se intercambia materia pero no energía',0),(5,2,'Ampere',0),(6,2,'Candela',0),(7,2,'Mol',1),(8,2,'Volt',0),(9,3,'Mezcla homogénea de dos o más sustancias que no reaccionan químicamente entre sí.',1),(10,3,'Mezcla heterogénea de dos o más sustancias que reaccionan químicamente entre sí.',0),(11,3,'Compuesto de dos o más sustancias que no reaccionan químicamente entre sí.',0),(12,3,'Sustancia química que contiene dos o más elementos químicos diferentes',0),(13,4,'Normalidad',0),(14,4,'Molaridad',1),(15,4,'Molalidad',0),(16,4,'Fracción molar',0),(17,5,'1+',0),(18,5,'1-',0),(19,5,'0',1),(20,5,'2+',0),(21,6,'Fusión',0),(22,6,'Combustión',0),(23,6,'Entropía',0),(24,6,'Entalpía',1),(25,7,'Protones de valencia',0),(26,7,'Protones diferenciales',0),(27,7,'Electrones diferenciales',0),(28,7,'Electrones de valencia',1),(29,8,'Enlace covalente polar',0),(30,8,'Enlace covalente',0),(31,8,'Enlace iónico',1),(32,8,'Enlace metálico',0),(33,9,'Cátodo',0),(34,9,'Ánodo',1),(35,9,'Anión',0),(36,9,'Catión',0),(37,10,'Número cuántico magnético',1),(38,10,'Número cuántico principal',0),(39,10,'Número cuántico de espín',0),(40,10,'Número cuántico secundario',0),(41,11,'Ratones',0),(42,11,'Palomas',0),(43,11,'Perros',1),(44,11,'Personas',0),(45,12,'Lóbulo Parietal',0),(46,12,'Lóbulo Occipital',1),(47,12,'Lóbulo Temporal',0),(48,12,'Lóbulo frontal',0),(49,13,'Pensamiento crítico.',0),(50,13,'Método cientifico.',1),(51,13,'Conductismo.',0),(52,13,'Grupo experimental.',0),(53,14,'Variable dependiente',0),(54,14,'Variable independiente.',1),(55,14,'Variable extraña',0),(56,14,'Ninguna de las anteriores',0),(57,15,'Variable extraña',1),(58,15,'Variable dependiente',0),(59,15,'Entorno',0),(60,15,'Sujeto experimental',0),(61,16,'Grupo',0),(62,16,'Variable',1),(63,16,'Muestra',0),(64,16,'Método',0),(65,17,'Ceguera',0),(66,17,'Atención selectiva.',1),(67,17,'Cuello de botella.',0),(68,17,'Exclusión.',0),(69,18,'Motivación',1),(70,18,'Valencia',0),(71,18,'Perspectiva',0),(72,18,'Comportamiento',0),(73,19,'Motivación Intrínseca',1),(74,19,'Motivación Extrínseca',0),(75,19,'Motivación personal',0),(76,19,'Motivación ambiental',0),(77,20,'Motivación social',0),(78,20,'Motivación extrínseca',1),(79,20,'Motivación intrínseca',0),(80,20,'Motivación externa',0),(81,21,'Reales',1),(82,21,'Naturales',0),(83,21,'Enteros',0),(84,21,'Irracionales',0),(85,22,'Prueba de la línea horizontal',0),(86,22,'Prueba de la línea vertical',1),(87,22,'Prueba de la línea oblicua',0),(88,22,'Prueba de la línea perpendicular',0),(89,23,'f(-x)=f(-x)',0),(90,23,'f(-x)=f(x)',0),(91,23,'f(-x)=-f(x)',1),(92,23,'-f(x)=-f(x)',0),(93,24,'Imagen',0),(94,24,'Codominio',0),(95,24,'Rango',0),(96,24,'Dominio',1),(97,25,'Uno',0),(98,25,'Cero',1),(99,25,'El valor de la misma constante',0),(100,25,'No existe',0),(101,26,'Punto de inflexión',1),(102,26,'Punto máximo relativo',0),(103,26,'Punto mínimo relativo',0),(104,26,'Punto origen',0),(105,27,'tan(x)',0),(106,27,'-sen(x)',0),(107,27,'cos(x)',1),(108,27,'sec(x)',0),(109,28,'Límite al infinito',0),(110,28,'Función racional',0),(111,28,'Antiderivada',0),(112,28,'Derivada',1),(113,29,'Cero',0),(114,29,'El valor de la constante',1),(115,29,'Uno',0),(116,29,'No existe',0),(117,30,'El valor del coeficiente',1),(118,30,'Uno',0),(119,30,'Cero',0),(120,30,'No existe',0),(121,31,'Generación del crack',1),(122,31,'Literatura de la onda',0),(123,31,'Modernismo Mexicano',0),(124,31,'Surrealismo de los 90’s',0),(125,32,'Teatral',0),(126,32,'Lírico',0),(127,32,'Narrativo',0),(128,32,'Dramático',1),(129,33,'Homero',1),(130,33,'Platón',0),(131,33,'Virgilio',0),(132,33,'Aristóteles',0),(133,34,'1987',0),(134,34,'1985',0),(135,34,'1990',1),(136,34,'1993',0),(137,35,'Futurismo',0),(138,35,'Modernismo',1),(139,35,'Realismo',0),(140,35,'Romanticismo',0),(141,36,'1981',1),(142,36,'1982',0),(143,36,'1983',0),(144,36,'1987',0),(145,37,'Terra nostra',0),(146,37,'Gringo Viejo',0),(147,37,'Aura',1),(148,37,'La campaña',0),(149,38,'Colombia.',0),(150,38,'México',0),(151,38,'Chile',0),(152,38,'Argentina',1),(153,39,'Crónica de una muerte anunciada',0),(154,39,'El amor en tiempos del cólera',0),(155,39,'Cien años de soledad',1),(156,39,'La historia interminable',0),(157,40,'Estridentismo',1),(158,40,'Surrealismo',0),(159,40,'Futurismo',0),(160,40,'Modernismo',0),(161,41,'Escultura y música',0),(162,41,'Escultura y pintura',1),(163,41,'Poesía y música',0),(164,41,'Pintura y cine',0),(165,42,'Todos los fuegos el fuego',0),(166,42,'Final del juego',0),(167,42,'Las doradas manzanas del sol',1),(168,42,'Rayuela',0),(169,43,'Anáfora',1),(170,43,'Metáfora',0),(171,43,'Repetición',0),(172,43,'Hipérbola',0),(173,44,'Friedrich Hegel',0),(174,44,'Friedrich Nietzche',1),(175,44,'Martín Lutero',0),(176,44,'Soren Kierkegaard',0),(177,45,'Pablo Neruda',0),(178,45,'Octavio Paz',0),(179,45,'Gabriela Mistral',1),(180,45,'Gabriel García Márquez',0),(181,46,'Vicente Huidobro',0),(182,46,'Nicanor Parra',0),(183,46,'Félix Rubén García Sarmiento',0),(184,46,'Neftalí Reyes Basoalto',1),(185,47,'1915',1),(186,47,'1912',0),(187,47,'1913',0),(188,47,'1914',0),(189,48,'Rumi',0),(190,48,'Comala',1),(191,48,'Killac',0),(192,48,'Calemar',0),(193,49,'Todos los nombres',1),(194,49,'El hombre unidimensional',0),(195,49,'Memoria del convento',0),(196,49,'Ensayo sobre la ceguera',0),(197,50,'7',0),(198,50,'5',0),(199,50,'6',1),(200,50,'8',0),(201,51,'estándar',1),(202,51,'estado',0),(203,51,'estatus',0),(204,51,'salida',0),(205,52,'Yukihiro Matsumoto',0),(206,52,'Bjarne Stroustrup',0),(207,52,'Dennis Ritchie',1),(208,52,'Guido van Rossum',0),(209,53,'Rombo',0),(210,53,'Hexágono',1),(211,53,'Cuadrado',0),(212,53,'Pentágono',0),(213,54,'Command Prompt',1),(214,54,'Consola de windows',0),(215,54,'Terminal de comandos',0),(216,54,'Sistema de comandos',0),(217,55,'mv',0),(218,55,'ls',0),(219,55,'cat',0),(220,55,'cd',1),(221,56,'estructura',0),(222,56,'clase',0),(223,56,'subrutina',1),(224,56,'paquete',0),(225,57,'float',0),(226,57,'char',1),(227,57,'string',0),(228,57,'bool',0),(229,58,'Haskell',1),(230,58,'PHP',0),(231,58,'Pearl',0),(232,58,'JavaScript',0),(233,59,'.xlsb',0),(234,59,'.xltx',0),(235,59,'.xlsx',0),(236,59,'.xlsm',1),(237,60,'Paradigma funcional',0),(238,60,'Paradigma declarativo',0),(239,60,'Paradigma imperativo',0),(240,60,'Programación orientada a objetos',1),(241,61,'powershell',0),(242,61,'cmd',0),(243,61,'zsh',0),(244,61,'bash',1),(245,62,'root',1),(246,62,'admin',0),(247,62,'administrator',0),(248,62,'sudo',0),(249,63,'Java',0),(250,63,'Ruby',0),(251,63,'Haxe',1),(252,63,'C++',0),(253,64,'Electronic Numerical Integrator And Compiler',0),(254,64,'Electronic Numerical Integrator And Computer',1),(255,64,'Electronic Numeric Integrator And Computacional',0),(256,64,'Electronic Numeric Integrator And Compiler',0),(257,65,'Ninguno de los anteriores',0),(258,65,'Decimal',0),(259,65,'Hexadecimal',0),(260,65,'Binario',1),(261,66,'Central Processing Utility',0),(262,66,'Computer Processing Unit',0),(263,66,'Central Processing Unit',1),(264,66,'Personal Computer Unity',0),(265,67,'Sistema',0),(266,67,'Firmware',0),(267,67,'Software',0),(268,67,'Hardware',1),(269,68,'Diagrama de Entidad-Relación',0),(270,68,'Diagrama de flujo',1),(271,68,'Diagrama del Algoritmo',0),(272,68,'Diagrama Vista-Controlador',0),(273,69,'100000 Bytes',0),(274,69,'1000 Bytes',0),(275,69,'102400 Bytes',0),(276,69,'1024 Bytes',1),(277,70,'Salida, entrada y proceso',0),(278,70,'Secuencial, condicional e iterativa',1),(279,70,'Secuencia, iterativa y estructural',0),(280,70,'Dinámica, Secuencial y condicional',0),(281,71,'Hidrógeno y oxígeno',0),(282,71,'Carbono y oxígeno',0),(283,71,'Carbono e hidrógeno',1),(284,71,'Carbono y azufre',0),(285,72,'Masa',1),(286,72,'Energía',0),(287,72,'Volúmen',0),(288,72,'Viscosidad',0),(289,73,'Compuesto',0),(290,73,'Mezcla',1),(291,73,'Elemento',0),(292,73,'Reacción química',0),(293,74,'Protón de valencia',0),(294,74,'Protón diferencial',0),(295,74,'Electrón de valencia',0),(296,74,'Electrón diferencial',1),(297,75,'John Dalton',0),(298,75,'Antoine Lavoisier',0),(299,75,'Richard Feyman',1),(300,75,'Nikola Tesla',0),(301,76,'Isótopos',1),(302,76,'Radiactivos',0),(303,76,'Neutros',0),(304,76,'Gases nobles',0),(305,77,'Isótopos',0),(306,77,'Arborescencia',0),(307,77,'Hibridación',0),(308,77,'Isomería',1),(309,78,'Alqueno',0),(310,78,'Alcano',0),(311,78,'Dieno',1),(312,78,'Alquino',0),(313,79,'Alótropos',0),(314,79,'Alquenos',0),(315,79,'Alcanos',0),(316,79,'Alquinos',1),(317,80,'Alcoholes',1),(318,80,'Halogenuros',0),(319,80,'Alquinos',0),(320,80,'Fenoles',0),(321,81,'Protón',0),(322,81,'Fotón',1),(323,81,'Quark',0),(324,81,'Positrón',0),(325,82,'Robert Oppenheimer',0),(326,82,'Albert Einstein',1),(327,82,'Isaac Newton',0),(328,82,'Stephen Wolfram',0),(329,83,'F = (G*m1*m2)/r^2',1),(330,83,'F = mg',0),(331,83,'F = ma',0),(332,83,'F = (K*q1*q2)/d^2',0),(333,84,'Mecánica',0),(334,84,'Óptica',0),(335,84,'Electromagnetismo',0),(336,84,'Termodinámica',1),(337,85,'refracción',0),(338,85,'difracción',0),(339,85,'reflexión',1),(340,85,'paralelismo',0),(341,86,'299 792 458 m/s',1),(342,86,'300 000 m/s',0),(343,86,'1000 km/h',0),(344,86,'280 km/s',0),(345,87,'Ampere',1),(346,87,'Voltio',0),(347,87,'Vatio',0),(348,87,'ohmio',0),(349,88,'p = ma',0),(350,88,'p = mv',1),(351,88,'p = fa',0),(352,88,'p = fv',0),(353,89,'Tabla de aniones',0),(354,89,'Tabla periódica',0),(355,89,'Modelo estándar',1),(356,89,'Ninguno de los anteriores',0),(357,90,'Energía',0),(358,90,'Entalpía',0),(359,90,'Entropía',1),(360,90,'Temperatura',0),(361,91,'Al momento',0),(362,91,'Al trabajo',0),(363,91,'A la velocidad',0),(364,91,'A la aceleración',1),(365,92,'Movimiento constante',0),(366,92,'Movimiento uniforme',1),(367,92,'Movimiento decreciente',0),(368,92,'Movimiento acelerado',0),(369,93,'La ley cero de la termodinámica',0),(370,93,'La segunda ley de la termodinámica',0),(371,93,'La tercer ley de la termodinámica',0),(372,93,'La primera ley de la termodinámica',1),(373,94,'Kelvin',1),(374,94,'Fahrenheit',0),(375,94,'Rankine',0),(376,94,'Celsis',0),(377,95,'La dinámica',0),(378,95,'La cinética',0),(379,95,'La estática',1),(380,95,'Ninguna de las anteriores',0),(381,96,'Se repelen',0),(382,96,'Se atraen',1),(383,96,'Ninguna de las anteriores',0),(384,96,'Se quedan estáticas',0),(385,97,'Una reacción igual y de sentido contrario.',1),(386,97,'Una reacción distinta y de sentido contrario.',0),(387,97,'Una reacción igual y del mismo sentido.',0),(388,97,'Una reacción distinta y del mismo sentido.',0),(389,98,'El litro',0),(390,98,'El metro cuadrado',0),(391,98,'La onza',0),(392,98,'El metro cúbico',1),(393,99,'Magnitudes escalares',0),(394,99,'Magnitudes vectoriales',1),(395,99,'Magnitudes constantes',0),(396,99,'Magnitudes variables',0),(397,100,'El Metro',0),(398,100,'El Pascal',0),(399,100,'El Jule',0),(400,100,'El Newton',1),(401,101,'Horizontales',0),(402,101,'Verticales',0),(403,101,'Oblicuas',0),(404,101,'Diagonales',1),(405,102,'Límite',0),(406,102,'Integral',1),(407,102,'Diferencial',0),(408,102,'Tangente',0),(409,103,'x',1),(410,103,'1',0),(411,103,'0',0),(412,103,'No existe',0),(413,104,'Integración por sustitución',0),(414,104,'Integración por partes',1),(415,104,'Integración por sustitución trigonométrica',0),(416,104,'Integración por fracciones parciales',0),(417,105,'Integración por partes',0),(418,105,'Integración por sustitución trigonométrica',0),(419,105,'Integración por sustitución',1),(420,105,'Integración por fracciones parciales',0),(421,106,'No existe',0),(422,106,'1',0),(423,106,'0',0),(424,106,'C',1),(425,107,'senx+C',0),(426,107,'cosx+C',0),(427,107,'-cosx+C',1),(428,107,'tanx+C',0),(429,108,'Complemento',0),(430,108,'Suma',1),(431,108,'Intersección',0),(432,108,'Diferencia',0),(433,109,'Propiedad de cerradura',0),(434,109,'Propiedad distributiva',0),(435,109,'Propiedad asociativa',0),(436,109,'Propiedad conmutativa',1),(437,110,'Sumatoria',0),(438,110,'Universo',0),(439,110,'Cardinalidad',1),(440,110,'Ley de idempotencia',0),(441,111,'Introspección',0),(442,111,'Personalidad',0),(443,111,'Temperamento',1),(444,111,'Carácter',0),(445,112,'Personalidad',1),(446,112,'Temperamento',0),(447,112,'Introspección',0),(448,112,'Carácter',0),(449,113,'Introspección',0),(450,113,'Personalidad',0),(451,113,'Carácter',1),(452,113,'Temperamento',0),(453,114,'Teoría de los rasgos',1),(454,114,'Teoría de la psicología individual',0),(455,114,'Teoría psicoanalítica',0),(456,114,'Teoría humanista',0),(457,115,'Sensopercepción',0),(458,115,'Memoria',0),(459,115,'Inteligencia',1),(460,115,'Atención',0),(461,116,'Percepción',0),(462,116,'Memoria',1),(463,116,'Atención',0),(464,116,'Sensación',0),(465,117,'Memoria',0),(466,117,'Atención',0),(467,117,'Percepción',1),(468,117,'Aprendizaje',0),(469,118,'Serotonina',1),(470,118,'Dopamina',0),(471,118,'Norepinefrina',0),(472,118,'Endorfina',0),(473,119,'Conductual-expresivo',0),(474,119,'Fisiológico-adaptativo',0),(475,119,'Cognitivo-motor',1),(476,119,'Cognitivo-subjetivo',0),(477,120,'Fisiológico',1),(478,120,'Cultural',0),(479,120,'Ambiental',0),(480,120,'Secundario',0);
/*!40000 ALTER TABLE `Respuestas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-02 19:32:50