<div>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mt-3"> Gestão de Movimentações</h2>
            <div class="d-flex gap-2">
                <a class="btn btn-secondary" href="{{ route('movimentacao.create') }}"> Estoque</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body mt-1">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Quantidade</th>
                            <th>Tipo</th>
                            <th>Produto ID</th>
                            <th>User ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movimentacaos as $m)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($m->data_movimentacao)->format('d/m/Y') }}
                                </td>
                                <td>{{ $m->quantidade }}</td>
                                <td>
                                    @if ($m->tipo == 'entrada')
                                        <span class="badge bg-primary">Entrada</span>
                                    @else
                                        <span class="badge bg-danger">Saída</span>
                                    @endif
                                </td>
                                <td>{{ $m->produto->nome }}</td>
                                <td>{{ $m->user->name }}</td>
                                <td>
                                    <button wire:click='delete({{ $m->id }})'
                                        class="btn btn-sm btn-danger">Excluir</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
