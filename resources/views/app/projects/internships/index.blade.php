@extends('layout.app.base')

@section('title', 'Stage')

@section('content')

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow">
                        <img class="img-fluid" src="{{ asset('images/stage/home/Tunnel-EOIP.png') }}" alt="ITIC Paris" />
                        <div class="card-body">
                            <h4 class="card-title">Tunnel EoIP avec IPsec</h4>
                            <p class="card-text">
                                Interconnection de deux sous réseaux différents avec DHCP distant sans utiliser de relais DHCP.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                    <a class="btn btn-primary"
                                       href="{{ route('projects.apprenticeships') }}">Lire
                                    </a>
                                </div>
                                <small class="text-body-secondary">MikroTik</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img class="img-fluid" src="{{ asset('images/stage/home/Tunnel-IPsec.png') }}" alt="ITIC Paris" />
                        <div class="card-body">
                            <h4 class="card-title">VPN IPsec entre deux sites</h4>
                            <p class="card-text">
                                Un routeur firewall puissant et simple d'utilisation pour tous vos besoins en administration réseau.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                    <a class="btn btn-primary"
                                       href="{{ route('projects.apprenticeships') }}">Lire
                                    </a>
                                </div>
                                <small class="text-body-secondary">Pfsense</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img class="img-fluid" src="{{ asset('images/stage/home/OCS.png') }}" alt="ITIC Paris" />
                        <div class="card-body h-100">
                            <h4 class="card-title">OCS Inventory NG sous Debian 11 </h4>
                            <p class="card-text">
                                Outils d'inventoring libre OpenSource que vous pouvez utiliser pour gérer votre parc informatique.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                    <a class="btn btn-primary"
                                       href="{{ route('projects.apprenticeships') }}">Lire
                                    </a>
                                </div>
                                <small class="text-body-secondary">Monitoring</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow">
                        <img class="img-fluid" src="{{ asset('images/stage/home/PXE.png') }}" alt="ITIC Paris" />
                        <div class="card-body">
                            <h4 class="card-title">PXE sur MikroTik CHR</h4>
                            <p class="card-text">
                                Découvrez un autre moyen simple et efficace d'installer les OS parle réseau.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                                    <a class="btn btn-primary"
                                       href="{{ route('projects.apprenticeships') }}">Lire
                                    </a>
                                </div>
                                <small class="text-body-secondary">MikroTik</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection