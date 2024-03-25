<div class="bg-orange-500 flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2 p-2">
    @forelse ($courses as $course)
        @component('_components.card-course')
            @slot('courseId', $course->uuid)
            @slot('title', $course->course_name)
            @slot('modality', $course->modality)
            @slot('courseStartDate', $course->course_start_date)
        @endcomponent
        @empty
            <p>No hay Nigun Curso</p>
        @endforelse
    </div>
