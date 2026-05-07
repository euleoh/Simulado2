<div class="card-body mt-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Quantidade</th>
                                <th>Data da Movimentação</th>
                                <th>Tipo</th>
                                <th>Produto ID</th>
                                <th>User ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movimentacaos as $m)
                                <tr>
                                    <td>{{ $m->quantidade }}</td>
                                    <td>{{ $m->data_movimentacao }}</td>
                                    <td>{{$m->tipo}}</td>
                                    <td>{{ $m->produto_id }}</td>
                                    <td>{{ $m->user_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>