/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('cotizador', require('./components/CotizadorComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


let botonExiste=document.getElementById('button-up')
  console.log("es null",botonExiste)
if(botonExiste){
    
    document.getElementById('button-up').addEventListener("click",scrollUp);
//scoll para subir
function scrollUp(){

    var currentScroll = document.documentElement.scrollTop;

    if (currentScroll > 0){
     
        window.scrollTo(0, 0);
    }
}

buttonUp = document.getElementById('button-up')

window.onscroll = function(){
   var scroll = document.documentElement.scrollTop;

   if (scroll > 350){
      buttonUp.style.transform = "scale(1)";
   }else{
      buttonUp.style.transform = "scale(0)";
   }
}


}
 

