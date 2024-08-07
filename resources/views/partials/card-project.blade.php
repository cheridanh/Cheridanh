<div class="card h-100 shadow rounded-4">
    @if($projects->getCoverPath())
        <img class="img-fluid p-2 w-100" src="{{ $projects->getCoverUrl() }}" alt="{{ $projects->title }}"/>
    @else
        <img class="img-fluid p-2 w-100" src="{{ asset('assets/img/project.png') }}" alt="Projet"/>
    @endif
    <div class="card-body text">
        <h4 class="card-title">{{ $projects->title }}</h4>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                <a class="btn btn-primary" href="{{ route('projects.show', ['period' => $period, 'category' => $projects->category, 'project' => $projects]) }}" target="_blank">Voir</a>
            </div>
            <small class="text-body-secondary">{{ $projects->category->name }}</small>
        </div>
    </div>
</div>
