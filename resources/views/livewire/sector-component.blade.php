<div>
    @extends('adminlte::page')

    @section('title_postfix', 'Sectors')

    @section('content_header')
        <h1></h1>
    @stop

    @section('content')
        <div class="row">
            <div class="col-md-12">
                <x-adminlte-card theme="secondary" theme-mode="outline">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Sectors
                        </h2>
                        <x-adminlte-button class="bg-gradient-lightblue" type="submit" theme="success" icon="fas fa-plus"
                            label="Nuevo" data-toggle="modal" data-target="#create-sector" />
                        <x-adminlte-modal id="create-sector" title="Create Sector" theme="lightblue" icon="fas fa-bolt">
                            This is a lightblue theme modal without animations.
                        </x-adminlte-modal>
                    </div>
                    <br>
                    <x-adminlte-card theme="lightblue" theme-mode="full">
                        <x-adminlte-input name="search" placeholder="search" class="mb-0">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-white">
                                    <i class="fas fa-search"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </x-adminlte-card>
                    <div class="card-deck">
                        @forelse ($sectors as $sector)
                            <div class="card" style="width: 18rem;">
                                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><strong>{{ $sector->name }}</strong></h5>
                                    <p class="card-text">{{ $sector->description }}</p>
                                    <p class="text-muted float-right">{{ $sector->created_at->diffForHumans() }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                        <x-adminlte-button class="btn-sm bg-gradient-warning" type="submit" theme="warning"
                                            icon="fas fa-edit" />
                                        <x-adminlte-button class="btn-sm bg-gradient-info" type="submit" theme="info"
                                            icon="fas fa-eye" />
                                        <x-adminlte-button class="btn-sm bg-gradient-danger" type="submit" theme="danger"
                                            icon="fas fa-trash" />
                                    </div>
                                </div>
                            </div>
                        @empty
                            <span>Sin registros para mostrar</span>
                        @endforelse
                    </div>
                </x-adminlte-card>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
</div>
