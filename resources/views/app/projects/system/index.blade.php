@extends('layouts.app.base')

@section('title', 'Epreuve E5 : Projet Système')

@section('content')
    <div class="container px-4 my-5">
        <!-- Titre  -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Epreuve E5<br>Projet Système</span></h1>
        </div>
        <!-- Projet Système -->
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Titre -->
                <section>
                    <div class="text-center mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Inventoring et Supervision d'un parc informatique</h2>
                    </div>
                    <!-- Contexte -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            @include('partials.icon', ['class' => 'bi-file-text'])
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Contexte</span></h3>
                                    </div>
                                    <p class="text-justify">
                                        Dans le cadre d'un projet visant à améliorer la gestion et la surveillance du parc informatique de la Maison des
                                        Ligues (M2L), il a été demandé aux administrateurs d'installer un système d’inventoring et de supervision
                                        adéquat. Cette solution devrait permettre aux administrateurs de surveiller l'état, les performances et la disponibilité
                                        des équipements informatiques au sein de la M2L.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topologie -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5">
                                <div class="col">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                            @include('partials.icon', ['class' => 'bi-diagram-3'])
                                        </div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Topologie</span></h3>
                                    </div>
                                    <img class="img-fluid p-2" src="{{ asset('assets/img/projects/topologie-systeme.png') }}" alt="topologie"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ressources -->
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
                            <!-- Listes des ressources -->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        @include('partials.icon', ['class' => 'bi-pin'])
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Ressources</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center justify-content-between bg-light rounded-4 p-3 h-100">
                                            Fiche projet système
                                            <a class="btn" href="{{ route('projects.system.sheet') }}" target="_blank">
                                                @include('partials.icon', ['class' => 'bi-box-arrow-up-right'])
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center justify-content-between bg-light rounded-4 p-3 h-100">
                                            Partie A : SAMBA AD
                                            <a class="btn" href="{{ route('projects.system.samba') }}" target="_blank">
                                                @include('partials.icon', ['class' => 'bi-box-arrow-up-right'])
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-between bg-light rounded-4 p-3 h-100">
                                            Partie B : GLPI
                                            <a class="btn" href="{{ route('projects.system.glpi') }}" target="_blank">
                                                @include('partials.icon', ['class' => 'bi-box-arrow-up-right'])
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center justify-content-between bg-light rounded-4 p-3 h-100">
                                            Partie C : ZABBIX
                                            <a class="btn" href="{{ route('projects.system.zabbix') }}" target="_blank">
                                                @include('partials.icon', ['class' => 'bi-box-arrow-up-right'])
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center justify-content-between bg-light rounded-4 p-3 h-100">
                                            Partie D : Agent GLPI
                                            <a class="btn" href="{{ route('projects.system.glpi-agent') }}" target="_blank">
                                                @include('partials.icon', ['class' => 'bi-box-arrow-up-right'])
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-between bg-light rounded-4 p-3 h-100">
                                            Partie C : Agent ZABBIX
                                            <a class="btn" href="{{ route('projects.system.zabbix-agent') }}" target="_blank">
                                                @include('partials.icon', ['class' => 'bi-box-arrow-up-right'])
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Fin Projet Système -->
            </div>
        </div>
        <!-- Fin -->
    </div>
@endsection
