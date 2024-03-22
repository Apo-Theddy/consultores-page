<div class="bg-orange-500 flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 p-2">
    @forelse ($courses as $course)
        @component('_components.card-course')
            @slot('title', 'course 1')
            @slot('courseStartDate', 'lorem ipsum at itmet')
        @endcomponent
        @empty
            <p>No hay Nigun Curso</p>
        @endforelse
    </div>
