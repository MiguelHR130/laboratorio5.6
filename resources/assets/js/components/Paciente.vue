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
                   <div class="form-group row">
                       <div class="col-md-6">
                           <div class="input-group">
                               <select class="form-control col-md-3" v-model="criterio" >
                                 <option value="nombre">Nombre</option>
                                 <option value="apPaterno">Apellido Paterno</option>
                               </select>
                               <input type="text" v-model="buscar" @keyup.enter="listarPacientes(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                               <button type="submit" @click="listarPacientes(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                           </div>
                       </div>
                   </div>

                   <table class="table table-bordered table-striped table-responsive-sm ">
                       <thead>
                           <tr>
                               <th>Opciones</th>
                               <th>Nombre</th>
                               <th>Edad</th>
                               <th>Sexo</th>
                           </tr>
                       </thead>
                       <tbody><!-- se crea un for que trae por nombre paciente y en el cual se le pasa el 
                    contenido de arraypacientes con la key paciente -->
                           <tr v-for="paciente in arrayPacientes" :key="paciente.id">   
                               <td><!-- se agrega la directiva @click en el boton y el valor de objeto no lleva comillas -->
                                   <button type="button" @click="abrirModal('paciente','actualizar',paciente)" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="clic para actualizar paciente">
                                     <i class="icon-user"></i>&nbsp;Actualizar
                                   </button>      
                                                       
                               </td>
                               <td v-text="paciente.nombreConcatenado||paciente.nombre"></td>
                               <td v-text="paciente.edad"></td>
                               <td v-text="paciente.sexo"></td>
                           </tr>
                       </tbody>
                   </table>

                   <nav>
                       <ul class="pagination">
                           <li class="page-item" v-if="pagination.current_page>1">
                               <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page-1,buscar,criterio)">Ant</a>
                           </li>
                           <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                               <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar),criterio" v-text="page"></a>
                           </li>
                           <li class="page-item" v-if="pagination.current_page<pagination.last_page">
                               <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page+1,buscar,criterio)">Sig</a>
                           </li>
                       </ul>
                   </nav>
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
                               <label class="col-md-3 form-control-label" for="text-input">Edad</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="edad" class="form-control" placeholder="(*) Ingrese edad del paciente">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese la edad del paciente</span>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-5 form-control-label" for="text-input">Sexo</label>
                               <div class="col-sm">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" v-model="radio" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="H">
                                        <label class="form-check-label" for="inlineRadio1">H</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" v-model="radio" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="M">
                                        <label class="form-check-label" for="inlineRadio2">M</label>
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


export default {
    data (){
        return{
            nombre:'',
            apPaterno:'',
            apMaterno:'',
            edad:'',
            arrayPacientes:[],//creamos un array para que reciba los datos de la consulta,
            modal:0,
            tituloModal:'',
            tipoAccion:0,
            id:0,
            errorCajatexto : 0,
            errorMostrarmsj:[],
            radio:'',
            pagination:{
                'total':0,
                'current_page':0,
                'per_page':0,
                'last_page':0,
                'from':0,
                'to':0,
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
        listarPacientes(page,buscar,criterio){
            let me=this;//creamos variable me
            var url = '/pacientes?page='+page+'&buscar='+buscar+'&criterio='+criterio;
            axios.get(url).then(function(response){
                var respuesta  = response.data;
                me.arrayPacientes = respuesta.paciente.data;
                me.pagination=respuesta.pagination;
               //me.arrayPacientes = response.data;//aqui se reciben los datos que se pasan al array
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
                'edad':this.edad,
                'sexo':this.radio
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
                'edad':this.edad,
                'sexo':this.radio,
                'id':this.id

            }).then(function (response){
                me.cerrarModal();
                me.listarPacientes(1,'','nombre');
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
            if(!this.edad)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(!this.radio)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(this.errorMostrarmsj.length) this.errorCajatexto = 1;
            return this.errorCajatexto;


        },
        cerrarModal(){
            this.modal=0;
            this.tituloModal='';
            this.nombre='';
            this.apPaterno='';
            this.apMaterno='';
            this.edad='';
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
                                this.edad='';
                                this.radio='';
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
                                this.edad=data['edad'];
                                this.radio=data['sexo'];
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
