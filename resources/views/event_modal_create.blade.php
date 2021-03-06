<div class="modal fade" id="event-modal-create" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Novo agendamento</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="form-modal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" id="title" placeholder="Titulo" required>
                        <label for="collaborator">Médico</label>
                        <select class="form-control" id="collaborator" name="collaborator" disabled>
                            <option value="0">Selecione um médico</option>
                                @foreach($collaborators as $collaborator)
                                    <option value="{{$collaborator->id}}">{{$collaborator->name}}</option>
                                @endforeach
                        </select>
                        <label for="client">Paciente</label>
                        <select class="form-control" id="client-id" name="client" required>
                            <option value="0">Selecione um paciente</option>
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                        </select>
                        <label for="note">Observação</label>
                            <textarea id="note-text" name="note" class="form-control" required></textarea>
                    </div>
                    <input type="hidden" id="start" value="">
                    <input type="hidden" id="end" value="">
                    <input type="hidden" id="event" value="">
                    <button id="submit-modal" class="btn btn-success btn-block">Agendar</button>
                </form>
            </div>
        </div>
    </div>
</div>