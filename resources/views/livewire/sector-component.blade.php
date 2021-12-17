<div>
    @extends('adminlte::page')

    @section('title_postfix', 'Sectors')

    @section('content_header')
        <h1>Sectors</h1>
    @stop

    @section('content')
        <div class="row">
            <div class="col-md-8">
                <x-adminlte-card theme="danger" theme-mode="outline">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">CreatedAt</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sectors as $sector)
                                <tr>
                                    <th scope="row">{{ $sector->id }}</th>
                                    <td>{{ $sector->name }}</td>
                                    <td>{{ $sector->created_at->diffForHumans() }}</td>
                                    <td>
                                        <form action="#" method="post">
                                            <a href="#" class="btn btn-warning btn-sm bg-gradient-warning">edit</a>
                                            <a href="#" class="btn btn-info btn-sm bg-gradient-info">show</a>
                                            <x-adminlte-button class="btn-sm bg-gradient-danger" type="submit" label="delete"
                                                theme="danger"/>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="4">Sin registros para mostrar</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </x-adminlte-card>
            </div>
            <div class="col-md-4">
                <x-adminlte-card theme="danger" theme-mode="outline">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </x-adminlte-card>
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
