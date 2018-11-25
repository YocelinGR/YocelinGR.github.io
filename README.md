# Portafolio YocelinGR

## Documentación y desarrollo
________________________________________
1. Getting started

Explicar y comentar los procesos, comandos y procedimientos para poner el proyecto en marcha, compilar, gestionar dependencias, etc.

•	Como usuario: Acceder a la URL del portafolio con la URL: (https://yocelingr.github.io/) desde una PC, tableo o celular. 

•	Como desarrollador: Acceder a la liga del repositorio (https://github.com/YocelinGR/YocelinGR.github.io), forkear y clonar el repositorio, abrir el repositorio local haciendo uso de un editor (VisualStudioCode, Atom, etc.). En una terminal de línea de comandos ejecuta los comandos: “npm init” y  se adapta el archivo package.json a tu proyecto, además es necesario ejecutar el comando “yarn install/ npm install” para instalar las dependencias necesarias. 

Realizar las modificaciones necesarias en los archivos tomando como base la explicación sobre ficheros, archivos y funciones especificados antes, guardar los cambios y visualizarlos desde el buscador de internet (u oprimiendo “Go Live” desde VSC). Para contribuir al proyecto, haz un pull request a la liga de GitHub del repositorio original y esperar a que el dueño del repositorio master apruebe o rechace el commit.

2. Definición de objetivos y estrategia

En esta sección se definirán los resultados que busca el cliente, se propondrán las diferentes opciones que podrían ayudar a conseguir los objetivos y se buscará llegar a un acuerdo con el cliente, para ello es importante definir estrategias que definirán si se desarrollará una Landing page, un sitio web, PWA, etc.

El objetivo principal de este proyecto es desarrollar un sitio web por medio del cual se pueda dar a conocer la identidad de una Developer, presentar sus proyectos, habilidades y una forma de contacto de forma sencilla e intuitiva.

•	Objetivos del cliente:

o	Es una Landing page.

o	Maneja una barra de navegación que se convierte en menú hamburguesa en su versión mobile. 

o	Presenta scroll para navegar entre secciones.

o	Contiene Sección de: Inicio, Conóceme, Mis habilidades, Lo que he hecho, CV y Contáctame. 

•	Objetivos técnicos:

o	Uso de vanilla JS para la realización del proyecto.

o	Manejo de efectos en CSS.

o	Uso de Media Querys para mejor adaptación del proyecto en cualquier dispositivo. 

o	Testing con Mocha y Chai.

3.  Desarrollo de contenidos

El apartado debe definir el contenido del sitio, listar las páginas que es relevante tener, detallando información sobre su contenido, además es necesario redactar los textos para mostrarse.

•	NavBar: Muestra los enlaces para el Scroll del contenido:

    - YocelinGR: Enlace al punto más alto de la Landing Page, redirige a la sección con animación que indica la especialización del Developer. Texto: Front –end Developer e Ingeniera en Comunicaciones y electrónica.

    - Conóceme: Sección de presentación de la Developer, incluye un párrafo introductorio, una fotografía y un colapsible con más información. Texto: 

        * ¿Quién soy?: Hola, mi nombre es Yocelin y soy una Front-End Developer e Ingeniera en Comunicaciones y Electrónica, que busca poder impactar, con la ayuda de Laboratoria y la programación, de una manera más evidente y humana.

        * Y ahora, ¿qué sigue?: Seguir aprendiendo. El mundo no se detiene, yo tampoco.

        * Mis intereses: Me gustan los retos y aprendo rápido, disfruto trabajar en equipo y también sola. Busco impactar de manera positiva a nuestra sociedad por medio del código.

        * Yocelin en un futuro…: Busco desarrollarme como Full Stack Developer y JavaScript Engineer, aprender Inteligencia Artificial, Machine Learning y Redes Neuronales.

    - Mis habilidades: Sección donde se expone las principales herramientas y habilidades por medio de iconos y letreros de cada habilidad. Se divide en dos secciones: HardSkills (Firebase, NodeJS, ReactJS, Heroku, MatLab) y SoftSkills (Metodologías ágiles, Inglés, Ruso). 

    - Lo que he hecho: Esta sección expone tres proyectos como Front – end Developer, muestra una imagen de cada uno, contiene un efecto hover que muestra una descripción del proyecto y exponer dos botones: “Repositorio” y “Demo” que enlaza a la documentación y archivos de cada proyecto y al live de cada uno. Textos:

        * Data Dashboard: Data Dashboard es una plataforma que permite la visualización del desempeño de las alumnas de Laboratoria mostrado en métricas.

        * Whack a Mole Tap!: Whack a Mole Tap! es un juego nativo para Android construido en React Native.

        * DiabeTips: Diabetips es una red social para mujeres diabéticas que busca crear una red de apoyo en la cual sea posible compartir sentimientos y consejos en torno a la diabetes.

    - Curriculum: Contiene un botón que lleva al CV en su versión PDF y habilita la opción a descarga. Texto del botón: “Ver ahora”.
    - Contáctame: Contiene un texto de agradecimiento por ver, además incluye botones con enlaces de contacto: email, teléfono, GitHub y LinkedIn. Texto: 
        * Agradecimiento: “Gracias por llegar hasta aquí”, “Estaré encantada de saber de ti.”.
        * Botón mail: garcia_romero.y@hotmail.com.
        * Teléfono: 5527258173.
        * GitHub: YocelinGR.
        * LinkedIn: Yocelin Garcia Romero.

4. Propuesta de diseño

Es necesario presentar bocetos de la estructura de cada plantilla del sitio, realizar el diseño de mediana y alta fidelidad y finalmente presentar el diseño de la plataforma. Es propio presentar y testear las páginas, se sugiere el uso de invision para dar tour por cada pantalla en futuros proyectos.

•	Diseño de baja fidelidad: 

! [Wireframe vista 1: Vista Mobile](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/6.jpeg?raw=true)

! [Wireframe vista 1: vista Mobile](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/2.jpeg?raw=true)

! [Wireframe vista 1: vista Mobile](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/1.jpeg?raw=true)

! [Wireframe vista 2: Vista Tablet](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/4.jpeg?raw=true)

! [Wireframe vista 2: Vista Tablet](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/5.jpeg?raw=true)

! [Wireframe vista 3: Vista PC](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/8.jpeg?raw=true)

! [Wireframe vista 3: Vista PC](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/11.jpeg?raw=true)

! [Wireframe vista 3: Vista PC](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/12.jpeg?raw=true)

! [Wireframe vista 3: Vista responsive](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/10.jpeg?raw=true)

! [Wireframe vista 3: Vista responsive](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/9.jpeg?raw=true)

! [Wireframe vista 3: Vista responsive](https://github.com/YocelinGR/YocelinGR.github.io/blob/v1.5.0/assets/7.jpeg?raw=true)

 5. Desarrollo y maquetación

El desarrollo y maquetación del proyecto se realizó utilizando los elementos de “bootstrap” y “CSS puro”, además de usaron elementos de imágenes para complementar el diseño, estos archivos se pueden encontrar en la carpeta assets del proyecto. Se eligen colores azules y grises para mantener la formalidad y la identidad. 

6. Dar revisión y capacitación

Se da una asesoría al cliente sobre el uso y administración del sitio.

Se da explicación de uso de la página y donde se explican los detalles más importantes de la implementación. Se otorga un periodo de un mes al cliente para encontrar posibles fallas o dudas sobre el sistema, después de este periodo se podría requerir alguna gratificación por asesorías.

7. Publicación en el servidor o URL definitiva

Se entrega una liga en GitHub Pages y la liga de la Landing Page: 

See [Repositorio] (https://github.com/YocelinGR/YocelinGR.github.io)

See [Landing Page] (https://yocelingr.github.io/)

8. Documentación

•	Tecnologías

Descripción de tecnologías, Frameworks, compiladores, gestores de tareas, librerías, su versión y cómo se usa.

•	Bootstrap: es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web. Contiene plantillas de diseño con tipografía, formularios, botones, cuadros, menús de navegación y otros elementos de diseño basado en HTML y CSS, así como extensiones de JavaScript adicionales. A diferencia de muchos frameworks web, solo se ocupa del desarrollo front-end. 

•	Unit Test con Chai y Mocha: Herramienta para elaborar test unitarios en JavaScript, que destaca por su sencillez de uso, por su flexibilidad y por ser adaptable a nuevas librerías que incrementan su poder, es parte de npm. En el proyecto se usan los test unitarios como medio de comprobar que la calidad de ejecución de las funciones es buena, que cumple con los mínimos requerimientos y que devuelven solo la información necesaria. 

•	Organización

Boilerplate - Estructura de los ficheros.

1.	/.
2.	├── .nyc_output
3.	├── assets
4.	├── css
5.	│ └──main.css
6.	│ └──swiper.css
7.	├── html
8.	├──js
9.	│ └──main.js
10.	│ └──swiper.min.js
11.	├──node_modules
12.	├──respaldo
13.	│ └──index.html
14.	│ └──main.css
15.	├──test
16.	│ └──headless.js
17.	│ └──index.html
18.	│ └──main.spect.js
19.	├──.eslintrc.js
20.	├── .gitignore
21.	├──index.html
22.	├──package-lock.json
23.	├── package.json
24.	├── README.md


9. Organización y distribución de tareas:

Issues:

*	

10. Equipo y contacto:

•	Yocelin García

Habilidad para programar en CSS, HTML, JavaScript, React JS y React Native. Hace uso de GitHub colaborativo y presenta buena lógica de extracción de datos de API´s.

Contacto:

•	Slack: YOCELIN GARCIA ROMERO

•	see [GitHub] (https://github.com/YocelinGR)

•	FaceBook: @Yocelin Garcia Romero

•	Correo: garcia_romero.y@hotmail.com

