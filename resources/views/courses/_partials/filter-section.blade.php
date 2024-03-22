<div class="bg-yellow-500 h-full w-0 md:min-w-72 md:p-2">
    <div class="bg-gray-300 w-full h-full border-2 border-blue-800 rounded-sm p-3">
        <h3 class="font-medium text-blue-800">Filtrar Por</h3>
        <p class="mt-4 font-medium text-blue-800 uppercase">Modalidades</p>
        @component('_components.filter-type')
            @slot('filters', ['Asincrono', 'Online', 'Presencial', 'Sincrono'])
        @endcomponent

        <p class="mt-8 font-medium text-blue-800 uppercase">Mostrar Por</p>
        @component('_components.filter-type')
            @slot('filters', ['Curso capacitacion', 'Curso taller', 'Ultimas vacantes'])
        @endcomponent

        <p class="mt-8 font-medium text-blue-800 uppercase">Dirigido A</p>
        @component('_components.filter-type')
            @slot('filters', ['Disenadores', 'Docentes', 'Emprendedores', 'Escolares', 'Profesionales', 'Profesores',
                'Publico en general', 'Universitarios'])
            @endcomponent

            <p class="mt-8 font-medium text-blue-800 uppercase">Categorias</p>
            @component('_components.filter-type')
                @slot('filters', ['Diseno', 'Educacion', 'Finanzas', 'Gestion', 'Investigacion', 'Marketing', 'Ofimatica',
                    'Programacion', 'Proyectos', 'Tecnologias'])
                @endcomponent
            </div>
        </div>
