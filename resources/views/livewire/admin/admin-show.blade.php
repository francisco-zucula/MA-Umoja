<div>
    @extends('layouts.app', ['title' => 'Usuário'])

    @section('content')
    @include('users.partials.header', [
    'title' => 'Categorias',
    'description' => '',
    'bgColor' => 'primary-gradient-color',
    'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class=" card bg-secondary shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">Inserir Categorias</h3>
                        </div>
                    </div>

                    <div class="card-body">
                        @livewire('categotry.category-create')
                    </div>

                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>

    @endsection

</div>