        @extends('principal')
        @section('contenido')

        @if(Auth::check())
            @if(Auth::user()->idrol==1)
       <template v-if="menu==0">
       <paciente></paciente>
       </template>

       <template v-if="menu==1">
       <paciente></paciente>
       </template>

       <template v-if="menu==2">
        <h1>cont menu 2</h1>
       </template>

       <template v-if="menu==3">
        <h1>cont menu 3</h1>
       </template>

       <template v-if="menu==4">
        <h1>cont menu 4</h1>
       </template>

       <template v-if="menu==5">
       <categoria></categoria>
       </template>

       <template v-if="menu==6">
       <subcategoria></subcategoria>
       </template>

       <template v-if="menu==7">
        <user></user>
       </template>

       <template v-if="menu==8">
        <rol></rol>
       </template>

       <template v-if="menu==9">
        <h1>cont menu 9</h1>
       </template>

       <template v-if="menu==10">
        <h1>cont menu 10</h1>
       </template>

       <template v-if="menu==11">
        <h1>cont menu 11</h1>
       </template>

       <template v-if="menu==12">
        <h1>cont menu 12</h1>
       </template>
            @endif
        @endif
              
        @endsection