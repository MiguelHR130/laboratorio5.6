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
                   <i class="fa fa-align-justify"></i> Listado de Roles
                   <!-- se agrega la directiva @click en la cual se dirige la funcion abrirmodal
                y de ahi se le agragan los valores tanto modelo:paciente como accion:registrar -->
            
               </div>
               <div class="card-body">
                   <div class="form-group row">
                       <div class="col-md-6">
                           <div class="input-group">
                               <select class="form-control col-md-3" v-model="criterio" >
                                 <option value="nombre">Nombre</option>
                               </select>
                               <input type="text" v-model="buscar" @keyup.enter="listarRol(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                               <button type="submit" @click="listarRol(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                           </div>
                       </div>
                   </div>
                   <table class="table table-bordered table-striped table-sm">
                       <thead>
                           <tr>
                               <th>Nombre</th>
                               <th>Descripción</th>
                               <th>Condición</th>
                           </tr>
                       </thead>
                       <tbody><!-- se crea un for que trae por nombre paciente y en el cual se le pasa el 
                    contenido de arraypacientes con la key paciente -->
                           <tr v-for="rol in arrayRol" :key="rol.id">   
                               <td v-text="rol.nombre"></td>
                               <td v-text="rol.descripcion"></td>
                               <td v-text="rol.condicion"></td>



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
      
   </main>
</template>

<script>


export default {
    data (){
        return{
            nombre:'',
            descripcion:'',
            arrayRol:[],//creamos un array para que reciba los datos de la consulta,
            modal:0,
            tituloModal:'',
            tipoAccion:0,
            id:0,
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
        listarRol(page,buscar,criterio){
            let me=this;//creamos variable me
            var url = '/rol?page='+page+'&buscar='+buscar+'&criterio='+criterio;
            axios.get(url).then(function(response){
                var respuesta  = response.data;
                me.arrayRol = respuesta.roles.data;
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
            me.listarRol(page,buscar,criterio);

        },
        
        
    },
   mounted() {
    //se carga la lista de pacientes para ser mostrada
      this.listarRol(1,this.buscar,this.criterio);
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
