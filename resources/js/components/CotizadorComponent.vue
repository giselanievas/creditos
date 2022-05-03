<template>
    <div class="container">
        <div class="row justify-content-center">
                 <div>
                    <h1>prueba 2 </h1>
                    <select v-model="tipoLinea" id="tiposLineas" name="tipoLinea_id" class="form-control"  @change="cargarModelos($event)" ref="seleccionado" >
                        <option value="0">Seleccione un Tipo de Linea</option>
                        <option v-for="(tipoLinea, id) in tipoLineas" :key="id" v-bind:value="id"  v-bind:data-codigo="tipoLinea.id">
                             {{tipoLinea.descripcion}} 
                        </option>
                    </select>
                    <select v-model="modelo" id="modelos" name="modelo_id" class="form-control mt-3" >
                        <option value="0">Seleccione un  modelo </option>
                        <option v-for="(modelo, index) in modelos" :key="index" v-bind:value="index">
                              {{modelo.descripcion}}  
                        </option>
                    </select> 
                 </div>
        </div>
    </div>
</template>



<script>
    export default {
        data(){
            return{
                tipoLinea:{id:'',descripcion:''},
                linea_seleccionada: '',
                tipoLineas: [],
                modelos:[],
                modelo:{id:'',descripcion:'',modeloDesde:'',modeloHasta:''}
            }
        },
        mounted() {
               axios.get('/cotizador')
              .then(res=>{
               this.tipoLineas = res.data
              
           })
        },
        methods:{
            cargarModelos: function(e){
     
                axios.get(`/cotizador/modelos/${e.target.options.selectedIndex}`)
                .then(res=>{
                 
                    this.modelos = res.data 
            })
          }  
        }
    }
</script>



