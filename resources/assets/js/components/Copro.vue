<template>
    <main class="main">
       <!-- Breadcrumb -->
      <div class="container-fluid"><br>
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Listado Análisis Coprológico <br>  
                    <button class="btn btn-secondary float-sm-right" @click="detalle = false; listarSolicitudes();" v-show="detalle" data-toggle="tooltip" data-placement="right" title="Regresa a listado de solicitudes"> Regresar </button>
                    <button type="button" @click="abrirModal('solicitud','registrar')" class="btn btn-secondary float-sm-right" data-toggle="tooltip" data-placement="right" title="Agregar solicitud" v-show="!detalle">
                        <i class="icon-user-follow"></i>&nbsp;Nuevo
                    </button>
                    
            </div>
                <div class="card-body">

                    <v-client-table :columns="columns" :data="tableData" :options="options" ref="myTable" v-show="!detalle">
                        <template slot="id" slot-scope="props">

                            <!-- <button type="button" @click="abrirModal('solicitud','actualizar',props.row)" class="btn btn-warning">Actualizar solicitud</button> -->
                            
                            <div class="btn-group btn-group-sm" role="group" aria-label="group">
                                <button type="button" @click="detalle = true; dataDetalle = props.row;" class="btn btn-warning">Asignar resultado</button>&nbsp;
                                <button type="button" @click="descargarSobre(props.row)" class="btn btn-success">Descargar sobre</button>
                            </div>
                        
                                                    
                        </template>
                        <template slot="paciente" slot-scope="props">
                            <div>
                                <span class="help-block">{{props.row.nombreConcatenado}}</span><br>
                            </div>
                        </template>
                        <template slot="fecha" slot-scope="props">
                            <div >
                                    <span class="help-block">{{props.row.fecha}}</span><br>
                            </div>
                        </template>
                    </v-client-table>

                    <div v-show="detalle">
                        
                        <template>    
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th colspan="4">
                                            <h4>Resultados de laboratorio de: {{dataDetalle.nombreConcatenado}} </h4> 
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                                 <th width="10%">Parámetro</th>
                                                 <th width="30%">Resultado</th>
                                                 <th>Valores de Referencia</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" align="center">EXAMEN FISICO</th>
                                    </tr>
                                    <tr>
                                        <td>COLOR</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.color" class="form-control" 
                                                @keydown.tab="guardarColor(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>AMARILLO-CAFE</td>
                                    </tr>
                                    <tr>
                                        <td>OLOR</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.olor" class="form-control" 
                                                @keydown.tab="guardarOlor(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>CARACTERÍSTICO</td>
                                    </tr>
                                    <tr>
                                        <td>RESTOS ALIMENTICIOS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.restos_alimenticios" class="form-control" 
                                                @keydown.tab="guardarRestos(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>ESCASOS</td>
                                    </tr>
                                    <tr>
                                        <td>CONSISTENCIA</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.consistencia" class="form-control" 
                                                @keydown.tab="guardarConsistencia(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>PASTOSA</td>
                                    </tr>
                                    <tr>
                                        <td>ELEMENTOS MACROSCÓPICOS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.elementos_macroscopicos" class="form-control" 
                                                @keydown.tab="guardarElementos(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>MOCO FECAL</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.moco_fecal" class="form-control" 
                                                @keydown.tab="guardarMoco(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" align="center">EXAMEN QUÍMICO</th>
                                    </tr>
                                    <tr>
                                        <td>PH</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.ph" class="form-control" 
                                                @keydown.tab="guardarPehache(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>ALCALINO</td>
                                    </tr>
                                    <tr>
                                        <td>SANGRE OCULTA</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.sangre_oculta" class="form-control" 
                                                @keydown.tab="guardarSangre(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>PIGMENTOS BILIARES</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.pig_biliares" class="form-control" 
                                                @keydown.tab="guardarPigmentos(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>AZUCARES REDUCTORES</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.azucares_reductores" class="form-control" 
                                                @keydown.tab="guardarAzucares(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>OTROS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.otros" class="form-control" 
                                                @keydown.tab="guardarOtros(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" align="center">EXAMEN MICROSCÓPICO</th>
                                    </tr>
                                    <tr>
                                        <td>FIBRAS DIGERIDAS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.fibras_digeridas" class="form-control" 
                                                @keydown.tab="guardarFibra(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>ESCASAS</td>
                                    </tr>
                                    <tr>
                                        <td>FIBRAS NO DIGERIDAS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.fibras_nodigeridas" class="form-control" 
                                                @keydown.tab="guardarFibrano(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>FIBRAS VEGETALES</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.fibras_vegetales" class="form-control" 
                                                @keydown.tab="guardarFibraveg(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>ESCASAS</td>
                                    </tr>
                                    <tr>
                                        <td>GRASAS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.grasas" class="form-control" 
                                                @keydown.tab="guardarGrasa(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>ESCASOS</td>
                                    </tr>
                                    <tr>
                                        <td>ALMIDONES</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.almidones" class="form-control" 
                                                @keydown.tab="guardarAlmidon(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>ESCASOS</td>
                                    </tr>
                                    <tr>
                                        <td>LEUCOCITOS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.leucocitos" class="form-control" 
                                                @keydown.tab="guardarLeuco(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>5-7 X CAMPO</td>
                                    </tr>
                                    <tr>
                                        <td>ERITROCITOS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.eritrocitos" class="form-control" 
                                                @keydown.tab="guardarEri(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>3-5 X CAMPO</td>
                                    </tr>
                                    <tr>
                                        <td>LEVADURAS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.levaduras" class="form-control" 
                                                @keydown.tab="guardarLevadura(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>CRISTALES</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.cristales" class="form-control" 
                                                @keydown.tab="guardarCristal(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td>PARÁSITOS</td>
                                        <td>
                                            <input type="text" :value="dataDetalle.parasitos" class="form-control" 
                                                @keydown.tab="guardarParasito(dataDetalle.idPaciente, $event)">
                                        </td>
                                        <td>NEGATIVO</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label for="exampleFormControlTextarea1">Observaciones:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" :value="dataDetalle.observaciones" 
                                            @keyup.enter="guardarObservacion(dataDetalle.idPaciente, $event)"></textarea>
                                        </td>
                                      
                                    </tr>

                                  
                                    <tr>    
                                        <td>
                                            <button type="button" @click="descargar(dataDetalle.idPaciente)" class="btn btn-info">Descargar resultado de laboratorio</button>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </template>

                        <template>
                            <h5></h5>
                             <div class="table-responsive">
                                      <table class="table">
                                            <tr>
                                                <td colspan="2">
                                                    
                                                    <!-- <label for="exampleFormControlTextarea1">Observaciones:</label>
                                                    <input type="text" :value="item.categoria.observaciones" class="form-control" 
                                                     @keyup.enter="guardarObservaciones(item.categoria.registroSolicitud, $event, item.categoria.id )"> -->
                                                  
                                                </td>
                                            </tr>   
                                             <tr>    
                                                <td>
                                                    <!-- <button type="button" @click="descargar(item.categoria.registroSolicitud)" class="btn btn-info">Descargar resultado de laboratorio</button> -->
                                                   
                                                </td>
                                             </tr>
                                            
                                      </table>
                             </div>                         
                       </template>

                    </div>
                </div>
            </div>
        </div>


       <!--Inicio del modal agregar/actualizar-->
       <div class="modal fade"  tabindex="-1" :class="{'mostrar':modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
           <div class="modal-dialog modal-primary modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title" v-text="tituloModal"></h4>
                       <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                         <span aria-hidden="true">×</span>
                       </button>
                   </div>
                   
                   <div class="modal-body">
                       <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Seleccione fecha de análisis.</label>
                               <div class="col-md-9">
                                   <input type="date" v-model="fecha" class="form-control" placeholder="(*) Ingrese el nombre del paciente" data-vv-as="fecha">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese fecha </span>
                           </div>



                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Agregar paciente </label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="id"  name="id"  v-model="paciente" data-vv-as="paciente">
                                            <option value="0">---Nombre---</option>
                                            <option v-for="item in arrayPacientes" :value="item.id" :key="item.id">{{ item.nombreConcatenado }}</option>
                                        </select>
                                        </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Seleccione paciente</span>
                           </div>
                       </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                       <button type="button"  v-if="tipoAccion==1" class="btn btn-primary" @click="registrarPacientes()">Guardar</button>
                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>
       <!--Fin del modal-->

       <!-- Inicio del modal Eliminar -->
      
       <!-- Fin del modal Eliminar -->
   </main>
</template>

<script>

import Utilerias from '../components/Herramientas/utilerias.js';
var config = require('../components/Herramientas/config-vuetables-client').call(this);

import Multiselect from 'vue-multiselect'
// register globally
Vue.component('multiselect', Multiselect)

export default {
    data (){
        return{
            dataDetalle : '',
            detalle : false,
            fecha:'',
            paciente:'',
            id:null,
            registrosolicitud:'',
            arraySolicitud:[],
            arrayPacientes:[],//creamos un array para que reciba los datos de la consulta,
            arrayCategoria:[],
            categoriaArray:[],
            pacientesArray:[],
            nombreCategoria:'',
            modal:0,
            tituloModal:'',
            tipoAccion:0,
            errorCajatexto : 0,
            errorMostrarmsj:[],
            columns: ['id', 'nombreConcatenado','fecha'],
            tableData:[],
            options: {
                    headings: {
                        fecha: 'Fecha de solicitud',
                        nombreConcatenado: 'Paciente',
                        id: 'Acción',
                    },
            pagination:{
                'total':0,
                'current_page':0,
                'per_page':0,
                'last_page':0,
                'from':0,
                'to':0,
            },
            perPage: 10,
                    perPageValues: [],
                    skin: config.skin,
                    sortIcon: config.sortIcon,
                    sortable: ['nombreConcatenado','fecha'],
                    filterable: ['nombreConcatenado','fecha'],
                    filterByColumn: true,
                    texts:config.texts
                },
           
        }
    },
    computed:{
       

    },
    methods :{
        //se listan los pacientes desde la base de datos
        listarSolicitudes(){
            let me=this;//creamos variable me
            var url = '/listadoCopro';
            axios.get(url).then(response=>{
                me.tableData = response.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },
        listadodePacientes(){
            let me= this;
            axios.get('/listadoPaciente').then(response=>{
                me.arrayPacientes=response.data;
            })
            .catch(function(error){
                console.log(error);
            })
        },

        listarCategoria(){
            let me= this;
            axios.get('/listadodeCategoria').then(response=>{
                me.arrayCategoria=response.data;
            })
            .catch(function(error){
                console.log(error);
            })
        },

        registrarPacientes(){
            if (this.validarRegistro()){
                return;
            } 
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Los datos de la solicitud han sido almacenados',
                showConfirmButton: false,
                timer: 1500
                })
            let me = this;
            //se envian 2 parametros, ruta y valores
            axios.post('/copro/registrar',{
                'fecha':this.fecha,
                'paciente':this.paciente,
                
            }).then(function (response){
                me.cerrarModal();
                me.listarSolicitudes();
            }).catch(function(error){
                console.log(error);
            });
        },
        actualizarPaciente(){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Los datos de la solicitud se han actualizado',
                showConfirmButton: false,
                timer: 1500
                })
           let me = this;
            //se envian 2 parametros, ruta y valores
            axios.put('/solicitud/actualizar',{
                'fecha':this.fecha,
                'paciente':this.paciente,
                'categoriaArray':this.categoriaArray,
                'id':this.id

            }).then(function (response){
                me.cerrarModal();
                me.listarSolicitudes();
            }).catch(function(error){
                console.log(error);
            });
        },
        validarRegistro(){
            this.errorCajatexto=0;//se inicializa en 0
            this.errorMostrarmsj=[];//se inicializa array vacio
            //si la condicion esta vacia se inserta con push que el nombre no puede estar vacio
            if(!this.paciente)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(!this.fecha)this.errorMostrarmsj.push("fecha  no puede estar vacio");
            if(this.errorMostrarmsj.length) this.errorCajatexto = 1;
            return this.errorCajatexto;
            


        },
        cerrarModal(){
            this.modal=0;
            this.tituloModal='';
            this.fecha='';
            this.paciente='';
            this.categoriaArray='';
           },
        descargar(data){
            
            window.open('copropdf/'+data, '_blank');
        },
        descargarSobre(data){
           
           window.open('sobrepdf/'+data.idPaciente, '_blank');
       },
       

        //modelo=nombre
        //accion:registrar o actualizar
        //data:objeto de la fila de la tabla paciente
        abrirModal(modelo,accion,data=[]){
            switch(modelo){
                case "solicitud":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal=1;
                                this.tituloModal = 'Registrar Solicitud';
                                this.fecha='';
                                this.paciente='';                                
                                this.tipoAccion=1;
                                break;
                            }
                            case 'actualizar':
                            {
                                
                                this.modal=1;
                                this.tituloModal='Actualizar Solicitud';
                                this.tipoAccion=2;
                                this.id=data['id'];
                                this.fecha=data.registro.fecha;
                                this.paciente=data.registro.paciente_id;
                           
                                data.categorias.forEach((item, i) => {
                                  this.categoriaArray.push({id : item.categoria.id, nombres: item.categoria.nombreCategoria});
                                  
                                  
                                });
                                break;
                            }
                        }
                    }
            }
        },

        guardarResultado(idRegistro, data, idCategoria ){

          axios.post('solicitud/guardaresultados',{
          'idRegistro':idRegistro,
          'data':data.target.value,
          'idCategoria':idCategoria
          }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                  })
          }).catch(e => {
            console.log(e);
          });
        },

        guardarColor(idPaciente, data ){
            
            axios.post('copro/guardarColor',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarOlor(idPaciente, data ){
            
            axios.post('copro/guardarOlor',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarRestos(idPaciente, data ){
            
            axios.post('copro/guardarRestos',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarConsistencia(idPaciente, data ){
            
            axios.post('copro/guardarConsistencia',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarElementos(idPaciente, data ){
            
            axios.post('copro/guardarElementos',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarMoco(idPaciente, data ){
            
            axios.post('copro/guardarMoco',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarPehache(idPaciente, data ){
            
            axios.post('copro/guardarPehache',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarSangre(idPaciente, data ){
            
            axios.post('copro/guardarSangre',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarPigmentos(idPaciente, data ){
            
            axios.post('copro/guardarPigmentos',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarAzucares(idPaciente, data ){
            
            axios.post('copro/guardarAzucares',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarOtros(idPaciente, data ){
            
            axios.post('copro/guardarOtros',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarFibra(idPaciente, data ){
            
            axios.post('copro/guardarFibra',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarFibrano(idPaciente, data ){
            
            axios.post('copro/guardarFibrano',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarFibraveg(idPaciente, data ){
            
            axios.post('copro/guardarFibraveg',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarGrasa(idPaciente, data ){
            
            axios.post('copro/guardarGrasa',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarAlmidon(idPaciente, data ){
            
            axios.post('copro/guardarAlmidon',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarLeuco(idPaciente, data ){
            
            axios.post('copro/guardarLeuco',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarEri(idPaciente, data ){
            
            axios.post('copro/guardarEri',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarLevadura(idPaciente, data ){
            
            axios.post('copro/guardarLevadura',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarCristal(idPaciente, data ){
            
            axios.post('copro/guardarCristal',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

            guardarParasito(idPaciente, data ){
            
            axios.post('copro/guardarParasito',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },


            guardarObservacion(idPaciente, data ){
            
            axios.post('copro/guardarObservacion',{
            
            'idPaciente':idPaciente,
            'data':data.target.value,

            }).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1000,
                    })
            }).catch(e => {
            console.log(e);
            });
            },

           
    },
   mounted() {
    //se carga la lista de pacientes para ser mostrada
      this.listarCategoria();
      this.listadodePacientes();
      this.listarSolicitudes();
   }
}
</script>
<style>
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display:flex;
        justify-content: center;
    }
    .text-error{
        justify-content: center;
        color: red !important;
        font-weight: bold;
    }
</style>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
