<div class="bg-blue-500 flex-1 h-full rounded-sm text-white">
    <a href="{{ route('courses.show', $courseId) }}">
        <img src="https://infopucp.pucp.edu.pe/wp-content/uploads/2021/12/Miniatura-Web-INFOPUCP-Excel-B%C3%A1sico-1.png"
            alt="Imagen referencial" class="h-min w-full rounded-tl-sm rounded-tr-sm">
        <div class="p-4 flex flex-col flex-wrap justify-between min-h-56">
            <h3 class="text-2xl">{{ $title }} - {{ $modality }}</h3>
            <p class="text-sm italic">{{ $courseStartDate }}</p>
        </div>
    </a>
</div>
