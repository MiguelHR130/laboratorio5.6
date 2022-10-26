<template>
    <main class="main">
       <!-- Breadcrumb -->
      <div class="container-fluid"><br>
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Listado de solicitudes <br>  
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
                                <button type="button" @click="detalle = true; dataDetalle = props.row.categorias;" class="btn btn-warning">Asignar resultado</button>&nbsp;
                                <button type="button" @click="descargarSobre(props.row)" class="btn btn-success">Descargar sobre</button>
                            </div>
                        
                                                    
                        </template>
                        <template slot="paciente" slot-scope="props">
                            <div v-for="pac in props.row" :key="pac.props">
                                    <span class="help-block">{{pac.nombreConcatenado}}</span><br>
                            </div>
                        </template>
                        <template slot="fecha" slot-scope="props">
                            <div v-for="fec in props.row" :key="fec.props">
                                    <span class="help-block">{{fec.fecha}}</span><br>
                            </div>
                        </template>
                        <template slot="categorias" slot-scope="props">
                            <div v-for="cat in props.row.categorias" :key="cat.props">
                                    <span class="help-block">{{cat.categoria.nombreCategoria}}</span><br>
                            </div>
                        </template>
                    </v-client-table>

                    <div v-show="detalle">
                        <template v-for="itemPaciente,index in dataDetalle">    
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th v-if="index === 0">
                                            <h4>Resultados de laboratorio de: {{itemPaciente.categoria.nombreConcatenado}} </h4> 
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </template>

                        <template v-for="item in dataDetalle" >
                            <h5>{{item.categoria.nombreCategoria}}</h5>
                             <div class="table-responsive">
                                      <table class="table">
                                             <tr>
                                                 <th width="10%">Examen</th>
                                                 <th width="10%">Resultado</th>
                                                 <th width="10%">U.M.</th>
                                                 <th width="10%">Valores de Referencia</th>
                                             </tr>
                                             <tr v-for="itemChild in item.partidas">
                                                 <td>{{itemChild.nombreSubcategoria}}</td>
                                                 <td>
                                                     <input type="text" :value="itemChild.descripcionResultado" class="form-control" 
                                                     @keydown.tab="guardarResultado(item.categoria.registroSolicitud, $event, itemChild.id )">
                                                 </td>
                                                 <td>{{itemChild.unidadMedida}}</td>
                                                 <td>{{itemChild.vminH}} - {{itemChild.vmaxH}}</td>
                                             </tr>
                                            <tr>
                                                <td colspan="2">
                                                    
                                                    <label for="exampleFormControlTextarea1">Observaciones:</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" :value="item.categoria.observaciones" 
                                                    @keyup.enter="guardarObservaciones(item.categoria.registroSolicitud, $event, item.categoria.id )"></textarea>
                                                 
                                                </td>
                                            </tr>   
                                             <tr>    
                                                <td>
                                                    <button type="button" @click="descargar(item.categoria.registroSolicitud)" class="btn btn-info">Descargar resultado de laboratorio</button>
                                                   
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


                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Exámen(es) a realizar</label>
                                <div class="col-md-9">
                                    <multiselect v-model="categoriaArray" :options="arrayCategoria"  :multiple="true"  :close-on-select="false" :clear-on-select="false"
                                     placeholder="Elegir exámen" label="nombres" track-by="nombres" :preselect-first="true" data-vv-as="categoria"></multiselect>
                                </div>
                            </div>
                            <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Elige exámen(es)</span>
                           </div>



                       </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                       <button type="button"  v-if="tipoAccion==1" class="btn btn-primary" @click="registrarPacientes()">Guardar</button>
                       <button type="button"  v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarPaciente()">Actualizar</button>
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
            dataDetalle : null,
            detalle : false,
            fecha:'',
            paciente:'',
            id:0,
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
            columns: ['id', 'paciente','fecha','categorias'],
            tableData:[],
            options: {
                    headings: {
                        fecha: 'Fecha de solicitud',
                        categorias: 'Análisis asignado(s)',
                        paciente: 'Paciente',
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
                    sortable: ['paciente','fecha'],
                    filterable: ['paciente','fecha'],
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
            var url = '/listadosolicitud';
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
            axios.post('/solicitud/registrar',{
                'fecha':this.fecha,
                'paciente':this.paciente,
                'categoriaArray':this.categoriaArray,
            }).then(function (response){
                me.cerrarModal();
                me.listarSolicitudes();
            }).catch(function(error){
                console.log(error);
            });
        },
        actualizarPaciente(){
            console.log();
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
            if(this.categoriaArray==0)this.errorMostrarmsj.push("categoria no puede estar vacio");
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
            
            window.open('solicitudpdf/'+data, '_blank');
        },
        descargarSobre(data){
           
            window.open('sobrepdf/'+data.registro.paciente_id, '_blank');
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
                                this.categoriaArray='';
                                this.tipoAccion=1;
                                break;
                            }
                            case 'actualizar':
                            {
                                console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Solicitud';
                                this.tipoAccion=2;
                                this.id=data.registro.id;
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

        guardarObservaciones(idRegistro, data, idCategoria ){
            
            axios.post('solicitud/guardarobservaciones',{
            
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
            }
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
