<template>
    <main class="main">
       <!-- Breadcrumb -->
       <ol class="breadcrumb">
           <li class="breadcrumb-item">Home</li>
           <li class="breadcrumb-item"><a href="#">Admin</a></li>
           <li class="breadcrumb-item active">Dashboard</li>
       </ol>
       <div class="container-fluid">
           <!-- Ejemplo de tabla Listado -->
           <div class="card">
               <div class="card-header">
                   <i class="fa fa-align-justify"></i> Listado de Subcategorias
                   <!-- se agrega la directiva @click en la cual se dirige la funcion abrirmodal
                y de ahi se le agragan los valores tanto modelo:paciente como accion:registrar -->
                   <button type="button" @click="abrirModal('subcategoria','registrar')" class="btn btn-secondary float-sm-right" data-toggle="tooltip" data-placement="right" title="Agregar nueva subcategoria">
                       <i class="icon-user-follow"></i>&nbsp;Nuevo
                   </button>
               </div>
               <div class="card-body">
                   <div class="form-group row">
                       <div class="col-md-6">
                           <div class="input-group">
                               <select class="form-control col-md-3" v-model="criterio" >
                                 <option value="nombreSubcategoria">Nombre</option>
                               </select>
                               <input type="text" v-model="buscar" @keyup.enter="listarSubcategorias(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                               <button type="submit" @click="listarSubcategorias(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                           </div>
                       </div>
                   </div>
                   <table class="table table-bordered table-striped table-sm">
                       <thead>
                           <tr>
                               <th>Opciones</th>
                               <th>Nombre de Subcategoría</th>
                               <th>Valor mínimo</th>
                               <th>Valor máximo</th>
                               <th>Unidad de medida</th>
                               <th>Categoría perteneciente</th>
                           </tr>
                       </thead>
                       <tbody><!-- se crea un for que trae por nombre paciente y en el cual se le pasa el 
                    contenido de arraypacientes con la key paciente -->
                           <tr v-for="subcategoria in arraysubCategorias" :key="subcategoria.id">   
                               <td><!-- se agrega la directiva @click en el boton y el valor de objeto no lleva comillas -->
                                   <button type="button" @click="abrirModal('subcategoria','actualizar',subcategoria)" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="Click para actualizar subcategoria">
                                     <i class="icon-user"></i>&nbsp;Actualizar
                                   </button> &nbsp;
                                   <button type="button" @click="eliminarSubcategoria(subcategoria.id)" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="clic para actualizar paciente">
                                            <i class="icon-user"></i>&nbsp;Eliminar
                                    </button>   
                                 <!--   <button type="button" @click="abrirModal('categoria','actualizar',categoria)" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="right" title="Asignar solicitud de laboratorio">
                                     <i class="icon-notebook"></i>&nbsp;Agregar Solicitud
                                   </button> &nbsp; -->
                                  <!--  <button type="button" class="btn btn-danger btn-sm">
                                     <i class="icon-trash"></i>
                                   </button> -->
                               </td>
                               <td v-text="subcategoria.nombreSubcategoria"></td>
                               <td v-text="subcategoria.vminH"></td>
                               <td v-text="subcategoria.vmaxH"></td>
                               <td v-text="subcategoria.unidadMedida"></td>
                               <td v-text="subcategoria.nombres"></td>

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
                                   <input type="text" v-model="nombreSubcategoria" class="form-control" placeholder="(*) Ingrese el nombre de subcategoria">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese el nombre de la subcategoria</span>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Valor de referencia mínimo</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="vminH" class="form-control" placeholder="(*) Ingrese el valor de referencia">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese el valor de referencia</span>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Valor de referencia máximo</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="vmaxH" class="form-control" placeholder="(*) Ingrese el valor de referencia">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese el valor de referencia</span>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Unidad de medida</label>
                               <div class="col-md-9">
                                   <input type="text" v-model="unidadMedida" class="form-control" placeholder="(*) Ingrese la unidad de medida">
                               </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese la unidad de medida</span>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-3 form-control-label" for="text-input">Agregar categoria</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="idCategorias"  name="idCategorias"  v-model="idCategorias" data-vv-as="categoria">
                                            <option value="0">---Nivel---</option>
                                            <option v-for="item in arrayCategoria" :value="item.id" :key="item.id">{{ item.nombres }}</option>
                                        </select>
                                        </div>
                           </div>
                           <div v-show="errorCajatexto" class="form-group row text-error">
                                <span class="help-block">(*) Ingrese la categoria</span>
                           </div>

                       </form>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                       <button type="button"  v-if="tipoAccion==1" class="btn btn-primary" @click="registrarsubCategorias()">Guardar</button>
                       <button type="button"  v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarsubCategorias()">Actualizar</button>
                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>
       <!--Fin del modal-->
   </main>
</template>

<script>


export default {
    data (){
        return{
            nombreSubcategoria:'',
            vminH:'',
            vmaxH:'',
            unidadMedida:'',
            idCategorias:0,
            nombres:'',
            arraysubCategorias:[],//creamos un array para que reciba los datos de la consulta,
            arrayCategoria:[],
            modal:0,
            tituloModal:'',
            tipoAccion:0,
            id:0,
            errorCajatexto : 0,
            errorMostrarmsj:[],
            pagination:{
                'total':0,
                'current_page':0,
                'per_page':0,
                'last_page':0,
                'from':0,
                'to':0,
            },
            offset:3,
            criterio:'nombreSubcategoria',
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
        listarSubcategorias(page,buscar,criterio){
            let me=this;//creamos variable me
            var url = '/subcategorias?page='+page+'&buscar='+buscar+'&criterio='+criterio;
            axios.get(url).then(function(response){
                var respuesta  = response.data;
                me.arraysubCategorias = respuesta.subcategoria.data; 
                me.pagination=respuesta.pagination;
               //me.arrayPacientes = response.data;//aqui se reciben los datos que se pasan al array
            })
            .catch(function(error){
                console.log(error);
            });
        },
        listadodeCat(){
            let me= this;
            axios.get('/listadodeCategoria').then(response=>{
                me.arrayCategoria=response.data;
            })
            .catch(function(error){
                console.log(error);
            })
        },
        cambiarPagina(page,buscar,criterio){
            let me = this;
            //actualiza la pagina
            me.pagination.current_page=page;
            //envia la peticion 
            me.listarSubcategorias(page,buscar,criterio);

        },
        registrarsubCategorias(){
            if (this.validarRegistro()){
                return;
            }

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'El nombre de Subcategoría ha sido almacenado',
                showConfirmButton: false,
                timer: 1500
                })
            let me = this;
            //se envian 2 parametros, ruta y valores        
            axios.post('/subcategorias/registrar',{
                'nombreSubcategoria':this.nombreSubcategoria,
                'vminH':this.vminH,
                'vmaxH':this.vmaxH,
                'unidadMedida':this.unidadMedida,
                'idCategorias':this.idCategorias
            }).then(function (response){
                me.cerrarModal();
                me.listarSubcategorias(1,'','nombreSubcategoria');
            }).catch(function(error){
                console.log(error);
                Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'El nombre de Subcategoría no ha sido almacenado',
                showConfirmButton: false,
                timer: 1500
                })
            });
        },
        actualizarsubCategorias(){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'La subCategoría se ha actualizado',
                showConfirmButton: false,
                timer: 1500
                })
           let me = this;
            //se envian 2 parametros, ruta y valores        
            axios.put('/subcategoria/actualizar',{
                'id':this.id,
                'nombreSubcategoria':this.nombreSubcategoria,
                'vminH':this.vminH,
                'vmaxH':this.vmaxH,
                'unidadMedida':this.unidadMedida,
                'idCategorias':this.idCategorias
            }).then(function (response){
                me.cerrarModal();
                me.listarSubcategorias(1,'','nombreSubcategoria');
            }).catch(function(error){
                console.log(error);
            }); 
        },
        eliminarSubcategoria(data){
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'La subcategoria ha sido eliminada',
                showConfirmButton: false,
                timer: 1500
                })
            let me = this;
            //se envian 2 parametros, ruta y valores        
            axios.post('/subcategoria/eliminar',{
                'id':data
            }).then(function (response){
                me.listarSubcategorias(1,'','nombreSubcategoria');
            }).catch(function(error){
                console.log(error);
            });

        },
        validarRegistro(){
            this.errorCajatexto=0;//se inicializa en 0
            this.errorMostrarmsj=[];//se inicializa array vacio
            //si la condicion esta vacia se inserta con push que el nombre no puede estar vacio
            if(!this.nombreSubcategoria)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(!this.unidadMedida)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(!this.idCategorias)this.errorMostrarmsj.push("el nombre no puede estar vacio");
            if(this.errorMostrarmsj.length) this.errorCajatexto = 1;
            return this.errorCajatexto;


        },
        cerrarModal(){
            this.modal=0;
            this.tituloModal='';
            this.nombres='';
          
        },
        //modelo=nombre
        //accion:registrar o actualizar
        //data:objeto de la fila de la tabla paciente
        abrirModal(modelo,accion,data=[]){
            switch(modelo){
                case "subcategoria":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal=1;
                                this.tituloModal = 'Registrar Subcategoría';
                                this.nombreSubcategoria='';
                                this.vminH='';
                                this.vmaxH='';
                                this.unidadMedida='';
                                this.idCategorias='';
                                this.tipoAccion=1;
                                break;
                            }
                            case 'actualizar':
                            {   //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar subcategoría';
                                this.tipoAccion=2;
                                this.id=data['id'];
                                this.nombreSubcategoria=data['nombreSubcategoria'];
                                this.vminH=data['vminH'];
                                this.vmaxH=data['vmaxH'];
                                this.unidadMedida=data['unidadMedida'];
                                this.idCategorias=data['idCategorias'];
                                break; 
                            }
                        }
                    }
            }
        }
    },
   mounted() {
    //se carga la lista de pacientes para ser mostrada
      this.listarSubcategorias(1,this.buscar,this.criterio);
      this.listadodeCat();
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
