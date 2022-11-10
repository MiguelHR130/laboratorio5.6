<template>
    <main class="main">
       <!-- Breadcrumb -->
      
       <div class="container-fluid">
           <!-- Ejemplo de tabla Listado -->
           <div class="card">
               <div class="card-header">
                   <i class="fa fa-align-justify"></i> Listado de pacientes
                   <!-- se agrega la directiva @click en la cual se dirige la funcion abrirmodal
                y de ahi se le agragan los valores tanto modelo:paciente como accion:registrar -->
                   <button type="button" @click="abrirModal('paciente','registrar')" class="btn btn-secondary float-sm-right" data-toggle="tooltip" data-placement="right" title="Agregar nuevo paciente">
                       <i class="icon-user-follow"></i>&nbsp;Nuevo
                   </button>
               </div>
               <div class="card-body">
                <v-client-table :columns="columns" :data="tableData" :options="options" ref="myTable">
                    <template slot="id" slot-scope="props">
                        <button type="button" @click="abrirModal('paciente','actualizar',props.row)" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="clic para actualizar paciente">
                            <i class="icon-user"></i>&nbsp;Actualizar
                        </button>   
                        <button type="button" @click="eliminarPaciente(props.row)" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="clic para actualizar paciente">
                            <i class="icon-user"></i>&nbsp;Eliminar
                        </button>   
                    </template>
                </v-client-table>
               </div>
           </div>
           <!-- Fin ejemplo de tabla Listado -->
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
                               <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="nombre" class="form-control" placeholder="(*) Ingrese el nombre del paciente">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese el nombre del paciente</span>
                           </div>
                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Apellido Paterno</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="apPaterno" class="form-control" placeholder="(*) Ingrese apellido paterno">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese el apellido paterno</span>
                           </div>
                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Apellido Materno</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="apMaterno" class="form-control" placeholder="(*) Ingrese apellido materno">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese el apellido materno</span>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Ingrese fecha de nacimiento</label>
                               <div class="col-md-9">
                                   <input type="date" v-model="fecha" class="form-control" placeholder="(*) Ingrese el nombre del paciente" data-vv-as="fecha">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese fecha </span>
                           </div>


                           <div class="form-group row">
                               <label class="col-md-5 form-control-label" for="text-input">Sexo</label>
                               <div class="col-sm">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" v-model="radio" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="M">
                                        <label class="form-check-label" for="inlineRadio1">M</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" v-model="radio" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="F">
                                        <label class="form-check-label" for="inlineRadio2">F</label>
                                    </div>
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Seleccione sexo del paciente</span>
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
       <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
           <div class="modal-dialog modal-danger" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title">Eliminar Categoría</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <p>Estas seguro de eliminar la categoría?</p>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                       <button type="button" class="btn btn-danger">Eliminar</button>
                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>
       <!-- Fin del modal Eliminar -->
   </main>
</template>

<script>
var config = require('../components/Herramientas/config-vuetables-client').call(this);

export default {
    data (){
        return{
            nombre:'',
            apPaterno:'',
            apMaterno:'',
            fecha:'',
            arrayPacientes:[],//creamos un array para que reciba los datos de la consulta,
            modal:0,
            tituloModal:'',
            tipoAccion:0,
            id:0,
            errorCajatexto : 0,
            errorMostrarmsj:[],
            radio:'',
            columns: ['id', 'nombreConcatenado','edad','sexo','fecnac'],
            tableData:[],
            options: {
                    headings: {
                        nombreConcatenado: 'Paciente',
                        edad: 'Edad',
                        sexo: 'Sexo',
                        fecnac: 'Fecha de nacimiento',
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
                    sortable: ['nombreConcatenado'],
                    filterable: ['nombreConcatenado'],
                    filterByColumn: true,
                    texts:config.texts
                },
            offset:3,
            criterio:'nombre',
            buscar:''
        }
    },
    computed:{
        isActived:function(){
            return this.pagination.current_page;
        },
        //calcula elementos de la paginacion
        pagesNumber: function(){
            if(!this.pagination.to){
                return [];
            }
            
            var from = this.pagination.current_page - this.offset;
            if(from<1){
                from = 1;
            }

            var to = from + (this.offset * 2);
            if(to>=this.pagination.last_page){
                to=this.pagination.last_page;
            }

            var pagesArray = [];
            while(from <= to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;

        }

    },
    methods :{
        //se listan los pacientes desde la base de datos
        listarPacientes(){
           /*  let me=this;//creamos variable me
            var url = '/pacientes?page='+page+'&buscar='+buscar+'&criterio='+criterio;
            axios.get(url).then(function(response){
                var respuesta  = response.data;
                me.arrayPacientes = respuesta.paciente.data;
                me.pagination=respuesta.pagination;
               //me.arrayPacientes = response.data;//aqui se reciben los datos que se pasan al array
            })
            .catch(function(error){
                console.log(error);
            }); */
            let me=this;//creamos variable me
            var url = '/pacientes';
            axios.get(url).then(response=>{
                me.tableData = response.data;
                
            })
            .catch(function(error){
                console.log(error);
            });
        },
        cambiarPagina(page,buscar,criterio){
            let me = this;
            //actualiza la pagina
            me.pagination.current_page=page;
            //envia la peticion 
            me.listarPacientes(page,buscar,criterio);

        },
        registrarPacientes(){
            if (this.validarRegistro()){
                return;
            }
            console.log(this.radio);
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Los datos del paciente han sido almacenados',
                showConfirmButton: false,
                timer: 1500
                })
            let me = this;
            //se envian 2 parametros, ruta y valores        
            axios.post('/paciente/registrar',{
                'nombre':this.nombre,
                'apPaterno':this.apPaterno,
                'apMaterno':this.apMaterno,
                'sexo':this.radio,
                'fecha':this.fecha
            }).then(function (response){
                me.cerrarModal();
                me.listarPacientes(1,'','nombre');
            }).catch(function(error){
                console.log(error);
            });
        },
        actualizarPaciente(){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Los datos del paciente se han actualizado',
                showConfirmButton: false,
                timer: 1500
                })
           let me = this;
            //se envian 2 parametros, ruta y valores        
            axios.put('/paciente/actualizar',{
                'nombre':this.nombre,
                'apPaterno':this.apPaterno,
                'apMaterno':this.apMaterno,
                'sexo':this.radio,
                'fecha':this.fecha,
                'id':this.id

            }).then(function (response){
                me.cerrarModal();
                me.listarPacientes(1,'','nombre');
            }).catch(function(error){
                console.log(error);
            }); 
        },
        eliminarPaciente(data){
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Los datos del paciente han sido eliminados',
                showConfirmButton: false,
                timer: 1500
                })
            let me = this;
            //se envian 2 parametros, ruta y valores        
            axios.post('/paciente/eliminar',{
                'id':data.id
            }).then(function (response){
                me.cerrarModal();
                me.listarPacientes();
            }).catch(function(error){
                console.log(error);
            });

        },
        validarRegistro(){
            this.errorCajatexto=0;//se inicializa en 0
            this.errorMostrarmsj=[];//se inicializa array vacio
            //si la condicion esta vacia se inserta con push que el nombre no puede estar vacio
            if(!this.nombre)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(!this.apPaterno)this.errorMostrarmsj.push("el apellido no puede estar vacio");
            if(!this.apMaterno)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(!this.radio)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(this.errorMostrarmsj.length) this.errorCajatexto = 1;
            if(this.errorMostrarmsj.length) this.errorCajatexto = 1;
            return this.errorCajatexto;


        },
        cerrarModal(){
            this.modal=0;
            this.tituloModal='';
            this.nombre='';
            this.apPaterno='';
            this.apMaterno='';
            this.radio='';
            this.fecha='';
        },
      
        //modelo=nombre
        //accion:registrar o actualizar
        //data:objeto de la fila de la tabla paciente
        abrirModal(modelo,accion,data=[]){
            switch(modelo){
                case "paciente":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal=1;
                                this.tituloModal = 'Registrar Paciente';
                                this.nombre='';
                                this.apPaterno='';
                                this.apMaterno='';
                                this.radio='';
                                this.fecha='';
                                this.tipoAccion=1;
                                break;
                            }
                            case 'actualizar':
                            {   //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Paciente';
                                this.tipoAccion=2;
                                this.id=data['id'];
                                this.nombre=data['nombre'];
                                this.apPaterno=data['apPaterno'];
                                this.apMaterno=data['apMaterno'];
                                this.radio=data['sexo'];
                                this.fecha=data['fecnac'];
                                break; 

                            }
                        }
                    }
            }
        }
    },
   mounted() {
    //se carga la lista de pacientes para ser mostrada
      this.listarPacientes(1,this.buscar,this.criterio);
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
