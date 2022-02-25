<div>
    <div class="mx-2">
        <div class="row form-group">
            <input wire:model='search' type="text" placeholder="Buscar" class="form-control col-3 mb-2 mr-4">
            <button class="btn btn-primary form-control mb-2 col-2"><i class="fas fa-fw fa-file-excel mr-1"></i>Exportar a Excel</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2">Apellidos</th>
                    <th>Folio</th>
                    <th>Estatus de pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                <tr>
                    <td>{{ $candidate->id }}</td>
                    <td>{{ $candidate->name }}</td>
                    <td colspan="2">{{ $candidate->last_name }}</td>
                    <td>{{ $candidate->folio_number }}</td>
                    <td class="font-bold" {{ $candidate->token_payment == 1 ? "bg-success" : "bg-danger" }}>{{ $candidate->token_payment == 1 ?  'PAGADO'  : 'PENDIENTE' }}</td>
                    <td colspan="2">
                        <a class="mr-4">
                            <i title="Validar pago" class="fas fa-money-bill"></i>
                        </a>
                        <a class="mr-4 success">
                            <i title="Editar registro" class="fas fa-edit"></i>
                        </a>
                        <a class="mr-4">
                            <i title="Eliminar registro" class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $candidates->links('vendor.pagination.bootstrap-5') }}
</div>