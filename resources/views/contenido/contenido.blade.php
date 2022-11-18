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
            <solicitud></solicitud>
            </template>

            <template v-if="menu==3">
            <resultado></resultado>
            </template>

            <template v-if="menu==4">
            <resultado></resultado>
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
                <otros></otros>
            </template>

            <template v-if="menu==11">
                <copro></copro>
            </template>

            <template v-if="menu==12">
                <h1>cont menu 12</h1>
            </template>
               
            @elseif(Auth::user()->idrol==2)
            <template v-if="menu==0">
            <paciente></paciente>
            </template>

            <template v-if="menu==1">
            <paciente></paciente>
            </template>

            <template v-if="menu==2">
            <solicitud></solicitud>
            </template>

            <template v-if="menu==5">
            <categoria></categoria>
            </template>

            <template v-if="menu==6">
            <subcategoria></subcategoria>
            </template>
            
            <template v-if="menu==9">
                <otros></otros>
            </template>
            
            <template v-if="menu==11">
                <copro></copro>
            </template>
               
            @elseif(Auth::user()->idrol==3)
            <template v-if="menu==3">
            <resultado></resultado>
            </template>
                
            @else    
            @endif
        @endif
              
        @endsection