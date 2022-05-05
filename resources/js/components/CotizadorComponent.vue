<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
                 <div>
                                  
                    <div v-if="this.errores" class="alert alert-danger text-center">{{this.errormense}}</div>
              
                    <form   @submit.prevent="calcular" >
                    <div class="container">
                        <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="">Tipo de Crédito</label>
                                    <select v-model="tipoLinea" id="tiposLineas" name="tipoLinea_id" class="form-control rounded-pill shadow" required >                
                                        <option v-for="(tipoLinea, id) in tipoLineas" :key="id" v-bind:value="id" >
                                            {{tipoLinea.descripcion}} 
                                        </option>
                                    </select>
                                </div>
                  
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label>Monto a Financiar</label>
                                    <input id="number" min="0" type="number" step="any" v-model="monto" name="monto" class=" form-control rounded-pill shadow" required>
                                </div>

                                 <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label class="mt-3">Modelo de Vehículo</label>
                                    <select v-model="modelo" id="modelos" name="modelo_id" class="form-control rounded-pill shadow " required  >
                                        <option v-for="(modelo, index) in modelos" :key="index" v-bind:value="index"  v-bind:data-codigo="modelo.id"> 
                                            {{modelo}}
                                        </option>
                                    </select>                                      
                                 </div>


                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="" class="mt-3">Plazo</label>
                                    <select v-model="plazo" id="plazos" name="plazo_id" class="form-control rounded-pill shadow  " required >
                                        <option v-for="(plazo, index) in plazos" :key="index" v-bind:value="index" v-bind:data-codigo="plazo.id"> 
                                            {{plazo}}
                                        </option>
                                    </select> 
                                </div>

                               

                                <button id="calcular" class="btn mt-4 mb-4 col-4 m-auto" >Calcular</button>
                        </div> 
                     </div>
                     </form>
                     <hr>
                     <div class="container">
                        <div class="row">
                            <div class="col-10">Cuota Mínima:</div>
                            <div class="col-2 d-flex justify-content-end">${{this.cuota_min}}</div>
                        </div>
                     </div>
                     <hr>
                     <div class="container mb-3">
                        <div class="row">
                            <div class="col-10 text-left">Cuota Máxima:</div>
                            <div class="col-2 d-flex justify-content-end">${{this.cuota_max}}</div>
                        </div>
                     </div>
                 </div>
        </div>
    </div>
</template>



<script>
    export default {
        data(){
            return{
                errores: false,
                errormense:'',
                tipoLinea:[],
                linea_seleccionada: '',
                tipoLineas: [],
                modelos:[],
                modelo:[],
                plazos:[],
                plazo:[],
                monto:0.00,
                cuota_min:0.00,
                cuota_max:0.00,
                cantidad_cuotas:0,
                detalle_linea:{coeficienteDesde:0.00, coeficienteHasta:0.00},
            }
        },
        mounted() {
               axios.get('/cotizador')
              .then(res=>{
               this.tipoLineas = res.data
               let años = [];
                 for(var i=1990;i<=2050;i++){
                        años.push(i) 
                 }
                
               this.modelos=años 
               let p = [];
                 for(var i=6;i<=60;i=i+6){
                     p.push(i) 
                 } 
                
                 this.plazos=p 
               }).catch((err) => {
                         this.errores=true
                         this.errormense='No hay lineas de credito cargadas'
               });
        },
        methods:{
             calcular(){
                 let tipo_linea_id=this.tipoLineas[this.tipoLinea].id
                 let num_modelo = this.modelos[this.modelo]
                 let cuotas= this.plazos[this.plazo]
                 this.cantidad_cuotas=this.plazos[this.plazo]
                 axios.post(`/cotizador/${tipo_linea_id}/${num_modelo}/${cuotas}`)
                  .then((result) => {
                     this.monto=Number(this.monto) 
                     this.detalle_linea.coeficienteDesde = result.data[0].coeficienteDesde
                     this.detalle_linea.coeficienteHasta = result.data[0].coeficienteHasta
                   
                     this.cuota_min= (this.monto * this.detalle_linea.coeficienteDesde) / 100
                     this.cuota_min= (this.monto + this.cuota_min) / cuotas
             
                     this.cuota_max= (this.monto * this.detalle_linea.coeficienteHasta) / 100
                     this.cuota_max= (this.cuota_max + this.monto) / cuotas

                     this.cuota_min= Number.parseFloat(this.cuota_min).toFixed(2);
                     this.cuota_min=new Intl.NumberFormat('es-MX').format(this.cuota_min)
                     
                     this.cuota_max= Number.parseFloat(this.cuota_max).toFixed(2);
                     this.cuota_max=new Intl.NumberFormat('es-MX').format(this.cuota_max)

                  }).catch((err) => {
                          this.errores=true
                          this.errormense='No se encuentra Linea de credito dentro de esos paremtros '
                  });

             },
/*                formatear(e){ ///////////// sirve para poner separadores de miles pero en algo dinamico no funciona aun
                  let numero = Number.parseFloat(e.target.value).toFixed(2);
                  console.log(numero)
                  this.monto = new Intl.NumberFormat('es-MX').format(numero)
                  
              } */
          },
    
        }

      ///// primero importamos jquery npm install jquery
      //// colocamos el siguiente codigo
        const $ = require('jquery')

         window.$ = $
         ////////////////////////////



</script>



