window.sr = ScrollReveal();
// Animations for the boxes into about me section
sr.reveal('.about-me-left', {
    duration: 2000,
    origin: 'left',
    distance: '300px'
});
sr.reveal('.about-me-center', {
    duration: 2000,
    origin: 'bottom',
    distance: '300px'
});
sr.reveal('.about-me-right', {
    duration: 2000,
    origin: 'right',
    distance: '300px'
});
/*Smooth scrolling effects */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

const experiencia = document.getElementById('experiencia');
experiencia.addEventListener('click', (event) =>{
        swal({
            title: "C5 CDMX",
            text: "Participé en la mejora de acceso a Internet por medio de Servidores Proxy y asistí el monitoreo de Red fija y móvil",
            button: "Siguiente",
        })
            .then((value) => {
        swal({
            title: "CReI Azcapotzalco",
            text: "Desarrollé proyectos enfocados a resultados en los que adquirí la habilidad del trabajo en equipo, gestión de proyectos y liderazgo.",
            button: "Gracias por ver",
        });
        });
});

const participaciones = document.getElementById('participaciones');
participaciones.addEventListener('click', (event) =>{
        swal({
            title: "Citi Banamex Hack",
            text: "Agosto 2018. Proyecto: EasyBoard.",
            button: "Siguiente",
        })
            .then((value) => {
        swal({
            title: "BBVA Hackathon",
            text: "Septiembre 2018. Proyecto: BPay, Pago con QR.",
            button: "Gracias por ver",
        });
        });
});

const estudios = document.getElementById('estudios');
estudios.addEventListener('click', (event) =>{
        swal({
            title: "Front End Developer",
            text: "Mayo - Diciembre 2018 - Laboratoria",
            button: "Siguiente",
        })
            .then((value) => {
        swal({
            title: "Licenciatura en Ingeniería en Comunicaciones y Electrónica",
            text: "Agosto 2013 a Diciembre 2017 - ESIME Zacatenco, Instituto Politécnico Nacional",
            button: "Gracias por ver",
        });
        });
});

/*
/// Sending email

const nodemailer = require('nodemailer');
const xoauth2 = require('xoauth2');

let transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        xoauth2: xoauth2.createXOAuth2Generator ({
            user: 'gr.yocelin@gmail.com',
            clientId: '902575927029-g11flidh5a7avkpeuf2kmr2th0ofekdb.apps.googleusercontent.com',
            clientSecret: 's4qocHTPEhcuOADLd-Q9pGsM',
            refreshToken: '1/sRPcgqN8GxBPaqnLnYZmhc-ww56rzWCUVG3CuoehqMU'
        })
    }
});

let mailOptions = {
    from: 'Yocelin <garciaromero.yocelin@gmail.com>',
    to: 'garcia_romero.y@hotmail.com',
    subject:'Nodemailer test',
    text: 'Hello world'
}
transporter.sendMail(mailOptions, (err,res) => {
    if(err) {
        console.log('Error');
    } else {
        console.log('Success');
    }
})*/